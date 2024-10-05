<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class SinglePropertyController extends Controller
{
    public function index($id)
    {     $data=Property::find($id);
         return view('frontend.layout.listing-single',['data'=>$data]);
    }
}
