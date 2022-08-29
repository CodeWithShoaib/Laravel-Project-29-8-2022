<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CFeedback;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Feedback.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedback=new CFeedback;
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/Customer_Feedback/',$filename);
            $data['image']=$filename;
        }

        $result=$feedback->create($data)->save();
        if($result){
            return redirect()->back()->with("success","you add data successfully");
        }else{
            return redirect()->back()->with('Error',"Error Occured data is not add!");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }
    public function showList(Request $request){
        $feedback=CFeedback::all();
        return view('admin.FeedBack.list',["Customer_data"=>$feedback]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $feedback=CFeedback::find($id);
        return view('admin.FeedBack.edit',["feedback"=>$feedback]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $feedback=CFeedback::find($id);
        $data=$request->all();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/Customer_Feedback/',$filename);
            $data['image']=$filename;
        }




        $result=$feedback->fill($data)->save();
        if($result){
            return redirect()->back()->with('success',"your data is updated");
        }else{
            return redirect()->back()->with('Error',"Error Occured your data is not updated!");
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
        $feedback=CFeedback::find($id);
        $result=$feedback->delete();
        if($result){
            return redirect()->back()->with('success',"Data is Deleted");

        }else{
            return redirect()->back()->with('Error',"Error Occured  data is not Deleted!");

        }


    }
}
