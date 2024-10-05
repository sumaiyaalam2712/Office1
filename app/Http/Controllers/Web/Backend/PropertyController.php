<?php

namespace App\Http\Controllers\Web\Backend;
use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{



    public function save(Request $request)
    {

        $request->validate(
            [

               'property_title'=>'required',
               'appartment_type_id'=>'required',

               'apartment_category_id'=>'required',
               'price'=>'required|numeric',
               'service_type_id'=>'required',
               'phone'=>'required|regex:/^[0-9\-\(\) ]+$/',
                'email'=>'required|email',
               'city_id'=>'required',
               'address'=>'required',
               'images'=>'required|image|mimes:jpeg,png,jpg,gif,bmp,tiff,webp,svg,heic,raw,ico',
               'area'=>'required|integer',
               'bedroom'=>'required|integer',
               'bathroom'=>'required|integer',
               'parking'=>'required',
               'accommodation'=>'required',
               'website'=>'required',
               'details'=>'required',
               'amenities'=>'required',
               'brochure'=>'required',
               'keywords'=>'required'
            ],
            ['required'=>'You must fill the field with a proper information',
            'integer'=>'The value has to be in digits',
            'image'=>'A valid image has to be uploaded',
            'email' => 'This has to be a valid email address',
            'regex' => 'The phone number format is invalid']
            );




        $data=new Property();
        $data->user_id=$request->user_id;
        $data->property_title=$request->property_title;
        $data->appartment_type_id=$request->appartment_type_id;
        $data->apartment_category_id=$request->apartment_category_id;

        $data->price=$request->price;
        $data->service_type_id=$request->service_type_id;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->city_id=$request->city_id;
        $data->address=$request->address;
       $imageName = time().'.'.$request->images->extension();
        $request->images->move(public_path('backend/img'), $imageName);
        $data->images=$imageName;

        //if ($request->hasFile('images')) {
            //foreach ($request->file('images') as $image) {
                // Store the image in the 'public/images' directory
                //$imagePath = $image->store('images', 'public');

                // Save the path in the database or do something else with it
                // Example: Image::create(['path' => $imagePath]);
           // }
        //}


        $data->area=$request->area;
        $data->bedroom=$request->bedroom;
        $data->bathroom=$request->bathroom;
        $data->parking=$request->parking;
        $data->accommodation=$request->accommodation;

        $data->website=$request->website;
        $data->details=$request->details;
        $data->amenities=implode(',',$request->amenities);
        $fileName = time().'.'.$request->brochure->extension();
        $request->brochure->move(public_path('backend/file'), $fileName);
        $data->brochure=$fileName;

        $data->keywords=$request->keywords;
        $data->save();
        return redirect('/add-listing')->with('status','Property is posted successfully' );

    }



}
