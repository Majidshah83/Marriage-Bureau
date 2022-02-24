@extends('layouts.master')
@section('content')
<div class="main-div">

    <div class="box-container">

        <div class="img-div">
            <img src="{{asset('public/wedding-page-images/img1.jfif')}}" alt="">
        </div>

        

        <div class="info">
         
           
            <h3 class="basic-info">Basic Info </h3>

            <table>
                <tr>
                    <td class="q">Name</td>
                    <td>: Haider Ali</td>
                    <td class="q">Gender</td>
                    <td>: Male</td>
                </tr>
                <tr>
                    <td class="q">Marital Status</td>
                    <td>: Single</td>
                    <td class="q">Age</td>
                    <td>: 28 years</td>
                </tr>
                <tr>
                    <td class="q">Height</td>
                    <td>: 5 feet & 4 inches</td>
                    <td class="q">Physique</td>
                    <td>: Average</td>
                </tr>
                <tr>
                    <td class="q">Complexion</td>
                    <td>: Fair</td>
                    <td class="q">Religion</td>
                    <td>: Muslim (Sunni)</td>
                </tr>
                <tr>
                    <td class="q">Mother tongue</td>
                    <td>: Punjabi</td>
                    <td class="q">City</td>
                    <td>: Islamabad</td>
                </tr>
                <tr>
                    <td class="q">Other nationality</td>
                    <td>: None</td>
                    <td class="q">Profession</td>
                    <td>: Government Employee</td>
                </tr>

            </table>
            <div class="info">
                <h3 class="basic-info">Looking For </h3>
                <table>
                    <tr>
                        <td class="q">Age</td>
                        <td>: 25-30</td>
                        <td class="q">Marital Status</td>
                        <td>: Single</td>

                    </tr>
                    <tr>
                        <td class="q">City</td>
                        <td>: No preference</td>
                        <td class="q">Height</td>
                        <td>: 5 Feet 0 inches</td>

                    </tr>
                    <tr>
                        <td class="q">Profession</td>
                        <td>: No preference</td>
                        <td class="q">Native Preference</td>
                        <td>: No preference</td>

                    </tr>
                    <tr>
                        <td class="q">Life Standard</td>
                        <td>: Mid Level</td>
                    </tr>
                </table>
            </div>
            <!-- <img src="images/divider.png" alt=""> -->
        </div>

    </div>
</div>
@stop
