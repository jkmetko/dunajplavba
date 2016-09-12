<?php

namespace App\Http\Controllers;

use App\Event;
use App\Files;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Response;
use Request;
use Validator;
use Illuminate\Support\Facades\File;

use App\Http\Requests;

class DropzoneController extends Controller
{
    public function uploadFiles(Request $request) {
        $input = Input::all();
        $eventID = $input['eventID'];
        $file = Request::file('file');

        if(Storage::disk('gallery')->put($eventID.'-'.$file->getClientOriginalName(),  File::get($file))){
            $entry = new Files();
            $entry->mime = $file->getClientMimeType();
            $entry->original_name = $eventID.'-'.$file->getClientOriginalName();
            $entry->name = $file->getFilename();
            $entry->event_id = $eventID;

            if($entry->save()){
                Log::error('UPLOAD SUCCESS: '.$eventID);
                return Response::json('success', 200);
            }else{
                Log::error('UPLOAD ERROR: '.$eventID);
                return Response::json('error', 400);
            }
        }else{
            Log::error('FILES DB WRITE: '.$eventID);
            return Response::json('error', 400);
        }
    }
    public function uploadCover(Request $request, $eventID) {
        $input = Input::all();
        $file = Request::file('file');

        if(Storage::disk('gallery')->put($eventID.'-'.$file->getClientOriginalName(),  File::get($file))){
            $entry = new Files();
            $entry->mime = $file->getClientMimeType();
            $entry->original_name = $eventID.'-'.$file->getClientOriginalName();
            $entry->name = $file->getFilename();
            $entry->event_id = $eventID;
            $entry->cover = true;

            if($entry->save()){
                Log::error('UPLOAD SUCCESS: '.$eventID);
                $url = asset('gallery/'.$entry->original_name);

                return Response::json(['result' => 'success', 'image_url' => $url], 200);
            }else{
                Log::error('UPLOAD ERROR: '.$eventID);
                return Response::json(['result' => 'error'], 400);
            }
        }else{
            Log::error('FILES DB WRITE: '.$eventID);
            return Response::json(['result' => 'error'], 400);
        }
    }
}
