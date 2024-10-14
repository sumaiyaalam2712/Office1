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
        return Blog::find('1')->comments();
    }
}