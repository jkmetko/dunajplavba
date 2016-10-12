<?php

namespace App\Http\Controllers;

use App\AttendeeType;
use App\Event;
use App\Files;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Response;
use Carbon\Carbon;

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
        $attendeeTypes = AttendeeType::all();
        
        return view('events.create', [
            'event'         => $event,
            'attendeeTypes' => $attendeeTypes
        ]);
    }

    public function edit($id){
        $event = Event::find($id);
        $files = $event->files()->where('cover', 0)->paginate(16);

        return view('events.edit', [
            'event'     => $event,
            'files'    => $files
        ]);
    }

    public function update(Request $request){
        $data = $request->all();
        $event = Event::find($data['eventID']);

        unset($data['eventID']);
        unset($data['_token']);

        $event->update($data);
        $event->active = 1;

        if($event->save()){
            return redirect('admin/podujatia')->with([
                "message" => 'Akcia bola úspešne vytvorená.'
            ])->withInput();
        }
    }

    public function delete($id){
        $event = Event::find($id);

        if($event->delete()){
            return redirect('admin/podujatia')->with([
                "message" => 'Akcia bola úspešne odstránená.'
            ])->withInput();
        }
    }

    public function deletePhoto(Request $request){
        $data = $request->all();

        $fileID = $data['fileID'];
        $file = Files::find($fileID);

        if($file->delete()){
            if(Storage::disk('gallery')->delete($file->original_name)) {
                return Response::json(['result' => 'success', 'fileID' => $fileID], 200);
            }else{
                return Response::json(['result' => 'fail', 'fileID' => $fileID], 500);
            }
        }else {
            return Response::json(['result' => 'fail', 'fileID' => $fileID], 500);
        }
    }

    public function show($id){
        $event = Event::find($id);
        $files = $event->files()->where('cover', 0)->paginate(16);

        return view('events.show', [
            'event' => $event,
            'files' => $files
        ]);
    }

    public function ourEvents(){
        $ourEvents = Event::where('active', 1)->where('our_event', 1)->paginate(8);

        return view('events.ourEvents', [
            'ourEvents' => $ourEvents
        ]);
    }

    public function ourPlan(){
        $ourPlan = Event::where('active', 1)->where('date', '>=', Carbon::now())->paginate(8);

        return view('events.ourPlan', [
            'ourPlan' => $ourPlan
        ]);
    }
}
