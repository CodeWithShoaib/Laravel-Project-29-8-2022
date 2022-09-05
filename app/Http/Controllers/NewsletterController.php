<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function create(Request $request){
        $data=$request->all();
        $newsL=new Newsletter;
        $result=$newsL->create($data);
        if($result){
            return redirect()->back()->with("success","Thank You For Subscription!");
        }


    }



    public function index(){
        $Newsletter=Newsletter::all();
        return view('admin.subscription.index')->with('newsletter',$Newsletter);
    }
    public function delete($id){
        $data=Newsletter::find($id)->delete();
        return redirect()->back()->with("success","You Delete message successfully");

    }


}
