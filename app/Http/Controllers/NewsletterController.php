<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function create(Request $request){
        $data=$request->all();
        // dd($data);
        $newsL=new Newsletter;
        $result=$newsL->create($data);
        if($result){
            return redirect()->back()->with("success","Thank You For Sunscription!");
        }


    }
}
