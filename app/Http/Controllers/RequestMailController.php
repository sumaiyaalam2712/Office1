<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\RequestMail;
use Illuminate\Http\Request;


class RequestMailController extends Controller
{
  public function index(Request $request)

   {


        $mailData = [
            'title' => 'Mail from Sumaiya Alam',

             'body' => 'This is for testing email using smtp.'

        ];


    $data=Mail::to('sumaiya.xora@gmail.com')->send(new RequestMail($mailData));
}




}
