<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.Item.index');
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
        $item=new Items;
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/item/',$filename);
            $data['image']=$filename;
        }

        $result=$item->create($data)->save();
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
        $items=Items::all();
        return view('admin.Item.list',["Customer_data"=>$items]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item=Items::find($id);
        return view('admin.Item.edit',["item"=>$item]);
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
        $item=Items::find($id);
        $data=$request->all();

        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('upload/item/',$filename);
            $data['image']=$filename;
        }




        $result=$item->fill($data)->save();
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
        $Items=Items::find($id);
        $result=$Items->delete();
        if($result){
            return redirect()->back()->with('success',"Data is Deleted");

        }else{
            return redirect()->back()->with('Error',"Error Occured  data is not Deleted!");

        }


    }
}
