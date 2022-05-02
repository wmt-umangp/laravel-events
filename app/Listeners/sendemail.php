<?php

namespace App\Listeners;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\emailevent;
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
     * @param  \App\Events\emailevent  $event
     * @return void
     */
    public function handle(emailevent $event)
    {
        // print_r($event->email);
        // event(new mails('abc@gmail.com'));
        $user=$event->email;
       echo "Hii from Listeners:".$user;
    }
}
