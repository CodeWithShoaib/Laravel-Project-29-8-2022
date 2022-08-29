<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Index;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index=Index::find(1);
        // dd($index);
        return view('admin.Home.index',['home'=>$index]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update(Request $request)
    {
        $index=Index::find(1);
        $data=$request->all();

        if($request->hasFile('bg_one')){
            $file=$request->file('bg_one');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['bg_one']=$filename;
        }


        if($request->hasFile('bg_two')){
            $file=$request->file('bg_two');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['bg_two']=$filename;
        }




        if($request->hasFile('bg_three')){
            $file=$request->file('bg_three');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['bg_three']=$filename;
        }


        if($request->hasFile('bg_four')){
            $file=$request->file('bg_four');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['bg_four']=$filename;
        }





        if($request->hasFile('bg_five')){
            $file=$request->file('bg_five');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['bg_five']=$filename;
        }


        if($request->hasFile('bg_six')){
            $file=$request->file('bg_six');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['bg_six']=$filename;
        }



        if($request->hasFile('imageone')){
            $file=$request->file('imageone');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['imageone']=$filename;
        }


        if($request->hasFile('imagetwo')){
            $file=$request->file('imagetwo');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['imagetwo']=$filename;
        }

        if($request->hasFile('imagethree')){
            $file=$request->file('imagethree');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['imagethree']=$filename;
        }
        if($request->hasFile('imagefour')){
            $file=$request->file('imagefour');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/background/',$filename);
            $data['imagefour']=$filename;
        }







        $result=$index->fill($data)->save();
        if($result){
            return redirect()->back()->with("success","you update data successfully");

        }else{
            return redirect()->back()->with("success","Data is not updated");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
