<?php

namespace App\Http\Controllers\Web\Backend;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AppartmentType;

class AppartmentTypeController extends Controller
{

    public function index()
    {
        return view('backend.layout.appartment-type.create-appartment-type');
    }


    public function save(Request $request)
         {

            $request->validate(
                [

                   'name'=>'required'
                ],
                ['required'=>'You must fill the field with a proper information']
                );






            $data=new AppartmentType();

            $data->name=$request->name;

            $data->save();
            return redirect('/show-appartment-type')->with('status','Form is submitted successfully' );
         }



public function get(){
    $data=AppartmentType::all();
    return view('backend.layout.appartment-type.show-appartment-type',['infos'=>$data]);
  }


  public function delete($id)
  {
     $data=AppartmentType::find($id);

     $data->delete();
     return redirect()->back();
  }


  public function edit($id)
  {
     $data=AppartmentType::find($id);
     return view('backend.layout.appartment-type.update-appartment-type',['datas'=>$data]);
  }


  public function update(Request $request)
         {


            $request->validate(
                [

                   'name'=>'required'
                ],
                ['required'=>'You must fill the field with a proper information']
                );


            $data=AppartmentType::find($request->id);
            $data->id=$request->id;

            $data->name=$request->name;

            $data->save();
            return redirect('/show-appartment-type')->with('status','Form is updated successfully' );
         }



        }
