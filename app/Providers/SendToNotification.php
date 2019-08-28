<?php

namespace App\Providers;

use App\Providers\MessageWasReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class SendToNotification implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MessageWasReceived  $event
     * @return void
     */
    public function handle(MessageWasReceived $event)
    {
        $message = $event->message;

        Mail::send('emails.contact', ['msg' => $message], function($m) use ($message)
        {
            $m->from($message->email, $message->name)
                ->to('eddyjaair@gmail.com', 'Eddy')
                ->subject('Hemos recibido tu mensaje admin.');
        });
    }
}
