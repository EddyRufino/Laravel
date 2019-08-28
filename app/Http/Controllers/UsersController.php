<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuariosRequest;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
        $this->middleware('roles:admin', ['except' => ['edit', 'update', 'show']]);
    }

    public function index()
    {
        return view('usuarios.index', [
            'users' => User::with(['roles', 'note', 'tags'])->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function create()
    {
        return view('usuarios.create', [
            'roles' => Role::pluck('display_name', 'id'),
            'user' => new User
        ]);
    }

    public function store(UsuariosRequest $request)
    {

        $user = User::create($request->validated());

        $user->roles()->attach($request->roles);

        return redirect()->route('usuarios.index');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('usuarios.show', compact('user'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        $this->authorize($user);

        $roles = Role::pluck('display_name', 'id');

        return view('usuarios.edit', compact('user', 'roles'));
    }

    public function update(UsuariosRequest $request, $id)
    {
        $user = User::findOrFail($id);

        $this->authorize($user);

        $user->update($request->only('name', 'email'));

        $user->roles()->sync($request->roles);

        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $this->authorize('destroy', $user);

        $user->delete();

        return back();
    }
}
