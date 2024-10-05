<?php

namespace App\Http\Controllers\Web\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;

class ListingController extends Controller
{
    public function index()
    {     $data=Property::orderBy("created_at","desc")->paginate(10);
         return view('frontend.layout.listing-search',['data'=>$data]);
    }
}
