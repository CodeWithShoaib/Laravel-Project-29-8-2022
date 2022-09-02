<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function edit()
    {
        $conatct= Contact::find(1);
        return view('admin.contact.index',["contact"=>$conatct]);
    }


    public function update(Request $request)
    {
    $contact= Contact::find(1);
    $data=$request->all();


    if($request->hasFile('image')){
    $file=$request->file('image');

    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('upload/image/contact/',$filename);
    $data['image']=$filename;



    }

    $result=$contact->fill($data)->save();
    if($result){
        return  redirect()->back()->with("success","You Update Data Successfully!");
    }else{
        return  redirect()->back()->with("Error","Error Occured Data is not Updated!");
    }


}
}
