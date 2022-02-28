<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    //

    public function store(Request $request)
    {
    $request->validate([
        'name' => 'required', //name validation
        'email' => 'required|email|unique:users,email', //email validation
        'adress'=>'required',
        'deatil'=>'required',

]);
       $contact=new Contact;
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->phone_number=$request->phone_number;
       $contact->adress=$request->adress;
       $contact->deatil=$request->deatil;
      $contact->save();
      return redirect()->back()->with('message', 'Message Send Successfully');





    }
}