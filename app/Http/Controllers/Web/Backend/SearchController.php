<?php

namespace App\Http\Controllers\Web\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AllCity;
use App\Models\Property;

class SearchController extends Controller
{
   public function search(Request $request)
   {
        $search= $request->input("search");
        $data=Property::where('name', 'like','%'.$search.'%')
            ->where('sub_title',  'like','%'.$search.'%')
            ->where('description', 'like','%'.$search.'%')
            ->where('button', 'like','%'.$search.'%')
            ->latest()
            ->paginate('7');
            return view('backend.layout.search_banner',['info'=>$data,'search'=>$search]);
          }
   }

