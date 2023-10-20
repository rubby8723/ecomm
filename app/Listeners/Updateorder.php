<?php

namespace App\Listeners;

use App\Events\Order;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;


class Updateorder
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
                                                         
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Order  $event
     * @return void
     */
    public function handle(Order $event)
    { 
    
      //dd(User::Updateorder("fgdgd"));
       dd("order is placed");
    }
}
