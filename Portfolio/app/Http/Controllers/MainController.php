<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Alert;
use App\Mail\ContactFormMail;

class MainController extends Controller
{
   function profile(){
       return view('profile');
   }

   function store(){
       $contact_form_data = request()->all();
       Mail::to('saikatofficials299@gmail.com')->send(new ContactFormMail($contact_form_data));
      
       return redirect('/profile')->with('status','Your message has been sent.');
   }
}
