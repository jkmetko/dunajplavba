<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

class EventsController extends Controller
{
    public function index(){
        return view('events.index');
    }

    public function create(){
        $event = new Event;
        $event->user_id = Auth::user()->id;
        $event->save();
        
        return view('events.create', [
            'event' => $event
        ]);
    }

    public function edit($id){
        $event = Event::find($id);

        return view('events.edit', [
            'event' => $event
        ]);
    }

    public function update(Request $request){
        $data = $request->all();
        $event = Event::find($data['eventID']);

        $event->update($data);
        $event->active = 1;

        if($event->save()){
            return redirect('admin/podujatia')->with([
                "message" => 'Akcia bola úspešne vytvorená.'
            ])->withInput();
        }
    }
}
