<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class CourseController extends Controller
{






        public function index()
    {
        return view('create-course');
    }


    public function save(Request $request)
         {

            $request->validate(
                [


                   'title'=>'required',
                   'credit'=>'required'
                ],
                ['required'=>'fill the field with an accurate value']
                );






            $data=new Course();

            $data->title=$request->title;
            $data->credit=$request->credit;
            $data->save();



            //return response()->json(['success' => 'Post created successfully.']);
            return redirect()->back();
         }
}