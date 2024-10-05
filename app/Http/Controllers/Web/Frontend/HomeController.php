<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {       $data=Property::all();

         return view('frontend.layout.home',['data'=>$data]);
    }
}
