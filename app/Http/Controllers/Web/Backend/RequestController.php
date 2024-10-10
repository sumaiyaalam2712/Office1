<?php

namespace App\Http\Controllers\Web\Backend;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Send_request;


class RequestController extends Controller
{
    public function save(Request $request)
    {

       $request->validate(
           [

              'phone'=>'required',
              'name'=>'required',

              'request_date'=>'required',
              'request_time'=>'required'
           ],
           ['required'=>'You must fill the field with a proper information']
           );






       $data=new Send_request();
       $data->user_id=$request->user_id;
       $data->property_id=$request->property_id;
       $data->property_name=$request->property_name;
       $data->address=$request->address;

       $data->phone=$request->phone;
       $data->name=$request->name;
       $data->request_date=$request->request_date;
       $data->request_time=$request->request_time;
       $data->save();
       return redirect()->back();
    }


    public function get(){

        $count=Send_request::where('user_id',Auth::user()->id)->count('id');
        $data=Send_request::all();
        return view('backend.layout.request.show_request',['infos'=>$data,'count'=>$count]);
      }



      public function ssearch(Request $request){
        $search=$request->search;
        $data=Send_request::where('name', 'like','%'.$search.'%')
        ->orWhere('phone',  'like','%'.$search.'%')
        ->orWhere('request_date', 'like','%'.$search.'%')
        ->orWhere('request_time', 'like','%'.$search.'%')
        ->latest()
        ->paginate('7');
        return view('backend.layout.request.search_request',['info'=>$data,'search'=>$search]);
      }
}