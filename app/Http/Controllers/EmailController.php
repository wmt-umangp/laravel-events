<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\emailevent;
use Illuminate\Contracts\Event\Dispatcher;
class EmailController extends Controller
{
    public function eventfunction(){
        return event(new emailevent('abc@gmail.com'));
    }
}
