<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
class ExternalWeddingController extends Controller
{
    public function index()
    {
         $userProfile=UserProfile::where('satatus',1)->paginate(9);
        return view('layouts.externalwedding',compact('userProfile'));
    }
    public function showProfile($id)
    {
        $customerProfile=UserProfile::where('id',$id)->first();
        return view('layouts.profile',compact('customerProfile'));
    }

}