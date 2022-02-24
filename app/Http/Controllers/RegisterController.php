<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserProfile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class RegisterController extends Controller
{
    public function index()
    {
        return view('layouts.register');
    }
    public function store(Request $request)
    {

        $profile=new UserProfile;
         $profile->name=$request->name;
         $profile->gender=$request->gender;
         $profile->date_of_birth=$request->date_of_birth ;
          $profile->phone_number=$request->phone_number;
         $profile->height=$request->height;
          $profile->weight=$request->weight;
         $profile->disablity=$request->disablity;
          $profile->height=$request->height;
          $profile->cast=$request->cast;
         $profile->religion=$request->religion;
        $profile->adress=$request->adress;
        $profile->house_owner=$request->house_owner;
         $profile->qualification=$request->qualification;
          $profile->university_college=$request->university_college;
        $profile->house_owner=$request->house_owner;
         $profile->designation=$request->designation;
            $profile->job_type=$request->job_type;
        $profile->bussiness_owner=$request->bussiness_owner;
         $profile->father_occupation=$request->father_occupation;
           $profile->mother_ccupation=$request->mother_ccupation;
         $profile->social_status=$request->social_status;
          $profile->siblings=$request->siblings;
         $profile->more_details=$request->more_details;
    if($request->hasfile('image'))
    {
        $file=$request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename=  time().'.'. $extension;
        $file->move('public/wedding-page-images/', $filename);
        $profile->image=$filename;

    }
       $profile->save();
       return redirect('create')->with('message', 'You have successfully Created!');


    }
}