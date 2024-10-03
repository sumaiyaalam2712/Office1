<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ProfileController extends Controller
{
    public function index()
    {
        // Find the authenticated user
        $data = auth()->user();



        return view('frontend.layout.edit-profile', ['data'=>$data]);
    }

    public function saveSocial(Request $request)
         {





            $data=User::find(auth ()->user()->id);

            $data->facebook=$request->facebook;
            $data->tiktok=$request->tiktok;
            $data->instagram=$request->instagram;
            $data->twitter=$request->twitter;
            $data->youtube=$request->youtube;

            $data->save();
            return redirect('/edit-profile')->with('status','Form is updated successfully' );
         }



         public function saveInfo(Request $request)
         {





            $data=User::find(auth ()->user()->id);

            $data->first_name=$request->first_name;
            $data->last_name=$request->last_name;
            $data->email=$request->email;
            $data->phone=$request->phone;
            $data->bio=$request->bio;


            $data->save();
            return redirect('/edit-profile')->with('status','Form is updated successfully' );
         }



         public function savePhoto(Request $request)
         {

            $data=User::find(auth ()->user()->id);
            $imageName = time().'.'.$request->profile_picture->extension();
            $request->profile_picture->move(public_path('backend/img'), $imageName);
            $data->profile_picture=$imageName;


            $data->save();
            return redirect('/edit-profile')->with('status','Form is updated successfully' );
         }

         public function delete($id)
         {
            $data=User::find(auth ()->user()->id);
            if ($data) {
               // Define the path to the file in the public folder
               $filePath = public_path('backend/img/' . $data->profile_picture); // Adjust the path as needed

               // Check if the file exists and delete it
               if (File::exists($filePath)) {
                   File::delete($filePath);
               }}
              $data->profile_picture=null;
            $data->save();
            return redirect()->back();
         }

}
