<?php

namespace App\Http\Controllers;

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

        if(Storage::disk('claimer-documents')->put($claimID.'-'.$file->getClientOriginalName(),  File::get($file))){
            $entry = new Files();
            $entry->mime = $file->getClientMimeType();
            $entry->original_name = $claimID.'-'.$file->getClientOriginalName();
            $entry->name = $file->getFilename();
            $entry->event()->associate($event);

            if(array_key_exists('claimer', $input) AND $input['claimer'] == 1){
                $entry->user_id = $claim->claimer->id;
            }else{
                $entry->user_id = Auth::user()->id;
            }

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
