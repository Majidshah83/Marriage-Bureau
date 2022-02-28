 @extends('layouts.master')
 @section('content')
 <section class="proposals">

     <div class="heading">
         <h1>Available For Marriage</h1>
     </div>

     <div class="box-container">

         @foreach($userProfile as $userProfiles)
         <div class="box">
             <img src="{{ asset('public/wedding-page-images/' . $userProfiles->image) }}" alt="">
             <a href="{{ URL('/customer-profile-userside/'.$userProfiles->id )}}" target="_blank" class="btn">View
                 Detail</a>
         </div>
         @endforeach


     </div>
     {{$userProfile->links()}}

 </section>


 <!-- Footer Starts -->



 @stop
