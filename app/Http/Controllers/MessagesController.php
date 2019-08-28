<?php

namespace App\Http\Controllers;

use App\Message;
use App\Providers\MessageWasReceived;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Mail;

class MessagesController extends Controller
{
    public function index()
    {
        $key = "message.page." . request('page', 1);

        $messages = Cache::tags('messages')->rememberForever($key, function(){
            return Message::with(['user', 'note', 'tags'])->latest()->paginate(10);
        });

        return view('messages.index', compact('messages'));

        // return view('messages.index', [
        //     'user' => User::all(),
        //     'messages' => Message::with(['user', 'note', 'tags'])->latest()->paginate(10)
        // ]);
    }

    public function create()
    {
        $user = new User();

        return view('contact', compact('user'));
    }

    public function store(Request $request)
    {
        // $validate = auth()->check() ? '' : 'required';

        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ],
        [
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'email.email' => 'Incorrecto',
            'subject.required' => 'El campo asunto es obligatorio',
            'content.required' => 'El campo mensaje es obligatorio'
        ]);

        $message = Message::create($data);

        if (auth()->check())
        {
            auth()->user()->messages()->save($message);
        }

        Cache::tags('messages')->flush(); // Se pone esto para que cuando crees un mensaje parasca en la lista

        event(new MessageWasReceived($message));

        // auth()->user()->messages()->create($data);

        // return $message;

        return back()->with('status', 'Hemos recibido tu mensaje!');
    }

    public function show($id)
    {
        $message = Cache::tags('messages')->rememberForever("messages.{$id}", function() use ($id){
            return Message::findOrFail($id);
        });

        return view('messages.show', compact('message'));

        // return view('messages.show', [
        //     'message' => Message::findOrFail($id)
        // ]);
    }

    public function edit($id)
    {
        // $message = Cache::remember("messages.{$id}", 300, function() use ($id){
        //     return Message::findOrFail($id);
        // });

        // return view('messages.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        // aqui va el Cache::flush();
    }

    public function destroy($id)
    {
        $message = Message::findOrFail($id);

        // $this->authorize('destroy', $message);

        $message->destroy($id);

        Cache::tags('messages')->flush();

        return redirect()->route('messages.index');
    }
}
