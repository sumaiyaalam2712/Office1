<?php

namespace App\Http\Controllers\Web\Backend;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApartmentCategory;

class ApartmentCategoryController extends Controller
{

    public function index()
    {
        return view('backend.layout.category.create-apartment-category');
    }


    public function save(Request $request)
         {

            $request->validate(
                [

                   'name'=>'required'
                ],
                ['required'=>'You must fill the field with a proper information']
                );






            $data=new ApartmentCategory();

            $data->name=$request->name;

            $data->save();
            return redirect('/show-apartment-category')->with('status','Form is submitted successfully' );
         }



public function get(){
    $data=ApartmentCategory::all();
    return view('backend.layout.category.show-apartment-category',['infos'=>$data]);
  }


  public function delete($id)
  {
     $data=ApartmentCategory::find($id);

     $data->delete();
     return redirect()->back();
  }


  public function edit($id)
  {
     $data=ApartmentCategory::find($id);
     return view('backend.layout.update_apartment_category',['datas'=>$data]);
  }


  public function update(Request $request)
         {


            $request->validate(
                [

                   'name'=>'required'
                ],
                ['required'=>'You must fill the field with a proper information']
                );


            $data=ApartmentCategory::find($request->id);
            $data->id=$request->id;

            $data->name=$request->name;

            $data->save();
            return redirect('/show-apartment-category')->with('status','Form is updated successfully' );
         }



        }
