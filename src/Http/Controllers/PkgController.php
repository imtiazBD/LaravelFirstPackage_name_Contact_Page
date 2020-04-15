<?php

namespace Imtiaz\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Imtiaz\Contact\Mail\PkgMailable;
use Imtiaz\Contact\Models\Pkg;


class PkgController extends Controller
{
   
   public function index(){

   	 return view('contact::contact');
   }

   public function send(Request $request){


     
     Pkg::create($request->all());
     
     $name  = $request->name;
     $email = $request->email;
     $text  = $request->message;

     Mail::to('info@softthreat.com')->send(new PkgMailable($name,$email,$text));
     return back();

   }
   
}
