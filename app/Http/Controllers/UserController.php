<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function oneToMany(){
    $data=User::find(1)->posts;
    return view('relation',['data'=>$data]);
    }

}