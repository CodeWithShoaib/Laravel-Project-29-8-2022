<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function create(Request $request){
        $data=$request->all();
        $Message=new Message;
        $result=$Message->create($data);
        if($result){
            return redirect()->back()->with("success","Thankyou For Sending Your Message!");
        }


        // dd($data);



    }
}
