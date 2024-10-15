<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Comit;
use App\Models\Vidio;



use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function gett()
    {
        $data=Blog::find('1')->comments;
        return response()->json($data);
    }
}
