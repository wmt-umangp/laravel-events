<?php

namespace App\Providers;

use App\Providers\loginevent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class log
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
     * @param  \App\Providers\loginevent  $event
     * @return void
     */
    public function handle(loginevent $event)
    {
        //
    }
}
