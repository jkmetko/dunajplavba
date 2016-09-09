<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class EventsController extends Controller
{
    public function create(){
        $event = new Event;
        $event->user_id = Auth::user()->id;
        $event->save();
        
        return view('events.create', [
            'event' => $event
        ]);
    }
}
