<?php

namespace App\Listeners;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginListener
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
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $event->user->update([
            'last_login_time' => now(),
            'last_login_ip' => request()->getClientIp(),
            'active' => true,
        ]);
    }
}

