<?php

namespace App\Policies;

use App\Message;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessagePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // public function before($user, $message, $ability)
    // {
    //     if ($user->hasRoles(['admin']))
    //     {
    //         return true;
    //     }
    // }

    // public function index(User $user, Message $message)
    // {
    //     return $user->id === $message->user_id;
    // }
}
