<?php

namespace App\Http\Controllers;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Input;
use Validator;
use Request;
use Response;
use Illuminate\Support\Facades\File;

use App\Http\Requests;

class DropzoneController extends Controller
{
    public function uploadFiles(Request $request) {
        $input = Input::all();
        $file = Request::file('file');

        if(Storage::disk('gallery')->put($eventID.'-'.$file->getClientOriginalName(),  File::get($file))){
            $entry = new Files();
            $entry->mime = $file->getClientMimeType();
            $entry->original_name = $eventID.'-'.$file->getClientOriginalName();
            $entry->name = $file->getFilename();
            $entry->event()->associate(Event::find($eventID));

            if($entry->save()){
                Log::error('UPLOAD SUCCESS: '.$claimID);
                return Response::json('success', 200);
            }else{
                Log::error('UPLOAD ERROR: '.$claimID);
                return Response::json('error', 400);
            }
        }else{
            Log::error('FILES DB WRITE: '.$claimID);
            return Response::json('error', 400);
        }
    }
}
