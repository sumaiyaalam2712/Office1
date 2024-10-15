<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    public function manyToMany(){

       $student = Student::find(1);
        $student->courses()->attach([1, 2]);
        $data=Student::with('courses')->find(1);


       //return view('many-to-many-relation',['data'=>$data]);
       return response()->json($data);

        }










        public function index()
    {
        return view('create-student');
    }


    public function save(Request $request)
         {

            $request->validate(
                [


                   'name'=>'required'
                ],
                ['required'=>'fill the field with an accurate vakue']
                );






            $data=new Student();

            $data->name=$request->name;
            $data->save();



            //return response()->json(['success' => 'Post created successfully.']);
            return redirect()->back();
         }
}