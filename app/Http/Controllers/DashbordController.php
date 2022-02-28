<?php

namespace App\Http\Controllers;
use App\models\UserProfile;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        return view('Dashboard.dashboard');
    }
    public function fetechcustomer()
    {
        $customer=UserProfile::all();
        return view('Dashboard.customerList',compact('customer'));
    }

    public function showProfile($id)
    {
        $customerProfile=UserProfile::where('id',$id)->first();
        return view('Dashboard.customerProfile',compact('customerProfile'));
    }
    public function changeSatatus(Request $request)
    {
      $userprofile=UserProfile::find($request->id);
       $userprofile->satatus=$request->satatus;
       $userprofile->save();
       return response()->json([
           'success'=>'status change Successfully',
       ]);

    }



}
