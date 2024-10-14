<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('create-post');
    }


    public function save(Request $request)
         {

            $request->validate(
                [

                   'user_id'=>'required',
                   'title'=>'required',
                   'description'=>'required'
                ],
                ['required'=>'fill the field with an accurate vakue']
                );






            $data=new Post();
            $data->user_id=$request->user_id;
            $data->title=$request->title;
            $data->description=$request->description;
            $data->save();



            //return response()->json(['success' => 'Post created successfully.']);
            return redirect()->back();
         }



public function get(){
    $data=Post::all();
    return view('show-post',['data'=>$data]);
  }


  public function delete($id)
  {
     $data=Post::find($id);
     $data->delete();
     return redirect()->back();
  }


  public function edit($id)
  {
     $data=Post::find($id);
     return view('update-post',['data'=>$data]);
  }


  public function update(Request $request)
         {


            $request->validate(
                [

                   'user_id'=>'required',
                   'title'=>'required',
                   'description'=>'required'
                ],
                ['required'=>'fill the field with an accurate vakue']
                );

            $data=Post::find($request->id);
            $data->id=$request->id;
            $data->user_id=$request->user_id;
            $data->title=$request->title;
            $data->description=$request->description;
            $data->save();
            return redirect()->back()->with('status','Form updated successfully');
         }




}
