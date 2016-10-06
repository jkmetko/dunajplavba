<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index(){
        $events = Event::where('active', 1)->paginate(8);

        return view('welcome', [
            'events'    => $events
        ]);
    }
}
