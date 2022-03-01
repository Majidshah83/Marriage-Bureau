<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\Mail\AdminMail;
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
$data = array(
            'email'      =>  $request->email,

        );


       $contact=new Contact;
       $contact->name=$request->name;
       $contact->email=$request->email;
       $contact->phone_number=$request->phone_number;
       $contact->adress=$request->adress;
       $contact->deatil=$request->deatil;
      $contact->save();
       Mail::to('majidcodify@gmail.com')->send(new SendMail($data));
        // $admindata=array(
        //     'email'=>'alishah143083@gmail.com',
        // );
        // Mail::to($request->email)->send(new AdminMail($admindata));
      return redirect()->back()->with('message', 'Message Send Successfully');





    }
}