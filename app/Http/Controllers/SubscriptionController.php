<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Newsletter;
use Response;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request){
        $data = $request->all();

        $email = $data['email'];
        $action = Newsletter::subscribe($email);

        if($action){
            return Response::json(['result' => 'success'], 200);
        }else{
            $error = Newsletter::getLastError();
            return Response::json(['result' => 'fail', 'message' => $error], 200);
        }

    }
}
