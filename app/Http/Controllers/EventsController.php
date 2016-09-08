<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EventsController extends Controller
{
    public function create(){
        return view('events.create');
    }
}
