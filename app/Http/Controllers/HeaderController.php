<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{

    public function edit()
    {
        $header= header::find(1);
        return view('admin.header.index',["header"=>$header]);
    }


    public function update(Request $request)
    {
    $header= header::find(1);
    $data=$request->all();

    if($request->hasFile('logo')){
    $file=$request->file('logo');
    $extension=$file->getClientOriginalExtension();
    $filename=time().'.'.$extension;
    $file->move('upload/logo/',$filename);
    $data['logo']=$filename;



    }

    $result=$header->fill($data)->save();
    if($result){
        return  redirect()->back()->with("success","you update data successfully!");
    }else{
        return  redirect()->back()->with("Error","Error Occured Data is not updated!");
    }


}


}
