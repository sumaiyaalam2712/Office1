<?php

namespace App\Http\Controllers\Web\Backend;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllCity;

class AllCityController extends Controller
{

    public function index()
    {
        return view('backend.layout.city.create-city');
    }


    public function save(Request $request)
         {

            $request->validate(
                [

                   'name'=>'required'
                ],
                ['required'=>'You must fill the field with a proper information']
                );






            $data=new AllCity();

            $data->name=$request->name;

            $data->save();
            return redirect('/show-city')->with('status','Form is submitted successfully' );
         }



public function get(){
    $data=AllCity::all();
    return view('backend.layout.city.show-city',['infos'=>$data]);
  }


  public function delete($id)
  {
     $data=AllCity::find($id);

     $data->delete();
     return redirect()->back();
  }


  public function edit($id)
  {
     $data=AllCity::find($id);
     return view('backend.layout.city.update-city',['datas'=>$data]);
  }


  public function update(Request $request)
         {


            $request->validate(
                [

                   'name'=>'required'
                ],
                ['required'=>'You must fill the field with a proper information']
                );


            $data=AllCity::find($request->id);
            $data->id=$request->id;

            $data->name=$request->name;

            $data->save();
            return redirect('/show-city')->with('status','Form is updated successfully' );
         }



        }
