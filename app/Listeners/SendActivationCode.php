<?php

namespace App\Listeners;

use App\Events\SomeEvent;
use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class SendActivationCode
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
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        \Log::info('activation', ['user', $event->user]);
    }
}
