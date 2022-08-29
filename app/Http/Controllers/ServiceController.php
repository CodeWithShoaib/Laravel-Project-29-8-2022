<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $service=Service::find(1);
        return view('admin.service.index',['service'=>$service]);
    }

    public function update(Request $request)
    {
        $service=Service::find(1);
        $data=$request->all();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/service/',$filename);
            $data['image']=$filename;
        }


        $result=$service->fill($data)->save();
        if($result){
            return redirect()->back()->with("success","you update data successfully");

        }else{
            return redirect()->back()->with("success","Data is not updated");
        }
    }

}
