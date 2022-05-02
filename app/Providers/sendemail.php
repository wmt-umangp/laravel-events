<?php

namespace App\Providers;

use App\Providers\emailevent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class sendemail
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
     * @param  \App\Providers\emailevent  $event
     * @return void
     */
    public function handle(emailevent $event)
    {
        //
    }
}
