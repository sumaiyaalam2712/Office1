<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index()
    {
         return view('frontend.layout.edit-profile');
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

}
