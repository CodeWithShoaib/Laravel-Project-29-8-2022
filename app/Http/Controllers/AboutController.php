<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $About=About::find(1);
        return view('admin.About.index',['About'=>$About]);
    }

    public function update(Request $request)
    {
        $About=About::find(1);
        $data=$request->all();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/About/',$filename);
            $data['image']=$filename;
        }
        if($request->hasFile('bg_one')){

            $file=$request->file('bg_one');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/About/',$filename);
            $data['bg_one']=$filename;
        }
        if($request->hasFile('bg_two')){
            $file=$request->file('bg_two');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/About/',$filename);
            $data['bg_two']=$filename;
        }


        $result=$About->fill($data)->save();
        if($result){
            return redirect()->back()->with("success","you update data successfully");

        }else{
            return redirect()->back()->with("success","Data is not updated");
        }
    }

}
