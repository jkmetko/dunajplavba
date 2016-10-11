<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    public function index(){
        $events = Event::where('active', 1)->paginate(8);

        $newsAdults = Event::where('active', 1)->whereHas('attendants', function($q){
            $q->where('category', 'adult');
        })->take(4)->get();

        $newsYouth = Event::where('active', 1)->whereHas('attendants', function($q){
            $q->where('category', 'youth');
        })->take(4)->get();

        return view('welcome', [
            'events'    => $events,
            'newsAdults'      => $newsAdults,
            'newsYouth'      => $newsYouth
        ]);
    }
}
