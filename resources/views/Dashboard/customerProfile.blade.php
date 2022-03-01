@extends('Dashboard.layout.master')
@section('content')
<div class="main-div">

    <div class="box-container">
        <div class="img-div">
            <img src="{{ asset('public/wedding-page-images/' . $customerProfile->image) }}">
        </div>

        <div class="info">
            <h3 class="basic-info">Basic Info </h3>

            <table>
                <tr>
                    <td class="q">Name</td>
                    <td>:{{$customerProfile->name}}</td>
                    <td class="q">Gender</td>
                    <td>:{{$customerProfile->gender}}</td>
                </tr>
                <tr>
                    <td class="q">Height</td>
                    <td>:{{$customerProfile->height}}</td>
                    <td class="q">Date of Birth</td>
                    <td>:{{$customerProfile->date_of_birth}}</td>
                </tr>
                <tr>
                    <td class="q">Weight</td>
                    <td>:{{$customerProfile->weight}}</td>
                    <td class="q">Religion</td>
                    <td>:{{$customerProfile->religion}}</td>

                </tr>
                <tr>
                    <td class="q">Cast</td>
                    <td>:{{$customerProfile->cast}} </td>
                    <td class="q">Adress</td>
                    <td>: {{$customerProfile->adress}}</td>
                </tr>
                <tr>
                    <td class="q">Phone Number</td>
                    <td>:{{$customerProfile->phone_number}}</td>
                    <td class="q">Disablity</td>
                    <td>:{{$customerProfile->disablity}}</td>
                </tr>

                <tr>
                    <td class="q">House Owner</td>
                    <td>:{{$customerProfile->house_owner}}</td>
                    <td class="q">Qualification</td>
                    <td>:{{$customerProfile->qualification}}</td>
                </tr>
                <tr>
                    <td class="q">University/College</td>
                    <td>:{{$customerProfile->university_college}}</td>
                    <td class="q">Designation</td>
                    <td>:{{$customerProfile->designation}}</td>
                </tr>
                <tr>
                    <td class="q">Job Type</td>
                    <td>:{{$customerProfile->job_type}}</td>
                    <td class="q">Bussiness Owner</td>
                    <td>:{{$customerProfile->bussiness_owner}}</td>
                </tr>
                <tr>
                    <td class="q">Father Occupation</td>
                    <td>:{{$customerProfile->father_occupation}}</td>
                    <td class="q">Mother Occupation</td>
                    <td>:{{$customerProfile->mother_ccupation}}</td>
                </tr>
                <tr>
                    <td class="q">Social Status</td>
                    <td>:{{$customerProfile->social_status}}</td>
                    <td class="q">Siblings</td>
                    <td>:{{$customerProfile->siblings}}</td>
                </tr>
                <tr>
                    <td class="q">More Deatils</td>
                    <td>:{{$customerProfile->more_details}}</td>
                    <td class="q">Marital Status</td>
                    <td>:{{$customerProfile->marital_status}}</td>

                </tr>


            </table>
            <div class="info">
                <h3 class="basic-info">Looking For </h3>
                <table>
                    <tr>
                        <td class="q">Date of Birth</td>
                        <td>:{{$customerProfile->date_of_birth}}</td>
                        <td class="q">Marital Status</td>
                        <td>:{{$customerProfile->marital_status}}</td>

                    </tr>
                    <tr>
                        <td class="q">Adress</td>
                        <td>: {{$customerProfile->adress}}</td>
                        <td class="q">Height</td>
                        <td>:{{$customerProfile->height}}</td>

                    </tr>
                    <tr>
                        <td class="q">Designation</td>
                        <td>:{{$customerProfile->designation}}</td>
                        <td class="q">Social Status</td>
                        <td>:{{$customerProfile->social_status}}</td>

                    </tr>
                </table>
            </div>
            <!-- <img src="images/divider.png" alt=""> -->
        </div>

    </div>
</div>
@stop
