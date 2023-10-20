<?php

namespace App\Listeners;

use App\Events\UserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;



class UserNotificationListener
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
     * @param  \App\Events\UserNotification  $event
     * @return void
     */
    public function handle(UserNotification $event)
    {
        Log::info($event);
    }
}
