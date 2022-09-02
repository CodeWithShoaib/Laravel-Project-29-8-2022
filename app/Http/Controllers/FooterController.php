<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function edit()
    {
        $footer= Footer::find(1);
        return view('admin.footer.index',["footer"=>$footer]);
    }





    public function update(Request $request)
    {
    $Footer= Footer::find(1);
    $data=$request->all();

    if($request->hasFile('logo')){
        $file=$request->file('logo');
        $extension=$file->getClientOriginalExtension();
        $filename=time().'.'.$extension;
        // dd($data);
    $file->move('upload/logo/footer',$filename);
    $data['logo']=$filename;



    }

    $result=$Footer->fill($data)->save();
    if($result){
        return  redirect()->back()->with("success","you update data successfully!");
    }else{
        return  redirect()->back()->with("Error","Error Occured Data is not updated!");
    }


}
}
