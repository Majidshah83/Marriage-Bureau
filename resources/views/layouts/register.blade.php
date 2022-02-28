@extends('layouts.master')
@section('content')
<section class="section">
    <div class="main">

        <div class="main-title">
            Create Profile
        </div>
        <br>
        @if(session('message'))
        <div class="alert alert-success">
            <strong style="color:red;font-size: 26px;margin-left: 33%;">{{session('message')}}</strong>
        </div>
        @endif
        <form action="{{ url('user-profile-insert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class=" user-details">
                <div class="input-box">
                    <span class="details">
                        Full Name
                    </span>
                    <input type="text" class="input" name="name" required>
                </div>
                <div class=" input-box">
                    <span class="details">
                        Gender
                    </span>
                    <input type="radio" name="gender" id="gender" value="male" required>
                    <label for="gender">Male</label>
                    <input type="radio" name="gender" id="gender" value="female">
                    <label for="gender">Female</label>
                </div>

                <div class="input-box">
                    <span class="details">
                        Date of birth
                    </span>
                    <input type="date" class="input" name="date_of_birth" required>
                </div>
                <div class=" input-box">
                    <span class="details">
                        Phone No
                    </span>
                    <input type="text" class="input" name="phone_number" required>
                </div>
                <div class=" input-box">
                    <span class="details">
                        Height
                    </span>
                    <input type="text" class="input" name="height" required>
                </div>
                <div class=" input-box">
                    <span class="details">
                        Weight
                    </span>
                    <input type="text" class="input" name="weight" required>
                </div>
                <div class=" input-box">
                    <span class="details">
                        Disablity
                    </span>
                    <input type="radio" name="disablity" id="dgender" value="yes">
                    <label for="gender">Yes</label>
                    <input type="radio" name="disablity" id="dgender" value="no">
                    <label for=" gender">No</label>
                </div>

                <div class="input-box">
                    <span class="details">
                        Cast
                    </span>
                    <input type="text" class="input" name="cast">
                </div>

                <div class=" input-box">
                    <span class="details">
                        Religion
                    </span>
                    <input type="radio" name="religion" id="rgender" value="muslim">
                    <label for="gender">Muslim</label>
                    <input type="radio" name="religion" id="render" value="non-muslim">
                    <label for="gender">Non-Muslim</label>
                </div>

                <div class="input-box">
                    <span class="details">
                        Adress
                    </span>
                    <textarea name="adress" id="" cols="30" rows="10" class="textarea"></textarea>
                </div>

                <div class="input-box">
                    <span class="details">
                        House Owner
                    </span>
                    <input type="radio" name="house_owner" id="hgender" value="yes">
                    <label for="gender">Yes</label>
                    <input type="radio" name="house_owner" id="hgender" value="no">
                    <label for="gender">No</label>
                </div>
                <div class="input-box">
                    <span class="details">
                        Picture
                    </span>
                    <input type="file" class="input" name="image">
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class=" title">
                Education:
            </div>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">
                        Qualification
                    </span>
                    <input type="text" class="input" name="qualification" required>
                </div>
                <div class=" input-box">
                    <span class="details">
                        College/University
                    </span>
                    <input type="text" class="input" name="university_college" required>
                </div>
                <div class=" input-box">
                    <span class="details">
                        Marital Status
                    </span>
                    <input type="radio" name="marital_status" id="status" value="Single" required>
                    <label for="status">Single</label>
                    <input type="radio" name="marital_status" id="status" value="Married">
                    <label for="status">Married</label>
                </div>

            </div>

            <br>

            <div class=" title">
                Applicant Profession:
            </div>

            <div class="user-details">
                <div class="input-box">
                    <span class="details">
                        Designation:
                    </span>
                    <input type="text" class="input" name="designation" required>

                </div>
                <div class=" input-box">
                    <span class="details">
                        Job type
                    </span>
                    <input type="radio" name="job_type" id="jgender" value="government">
                    <label for="gender">Government</label>
                    <input type="radio" name="job_type" id="jgender" value="Private">
                    <label for="gender">Private</label>
                </div>

                <div class="input-box">
                    <span class="details">
                        Bussiness Owner
                    </span>
                    <input type="radio" name="bussiness_owner" id="bgender" value="yes">
                    <label for="gender">Yes</label>
                    <input type="radio" name="bussiness_owner" id="bgender" value="no">
                    <label for="gender">No</label>
                </div>
            </div>


            <br>
            <div class="title">
                Family Detail:
            </div>
            <div class="user-details">
                <div class="input-box">
                    <span class="details">
                        Father Occupation
                    </span>
                    <input type="text" class="input" name="father_occupation" required>

                </div>
                <div class=" input-box">
                    <span class="details">
                        Mother Occupation
                    </span>
                    <input type="radio" name="mother_ccupation" id="Mgender" value="house wife">
                    <label for="gender">House Wife</label>
                    <input type="radio" name="mother_ccupation" id="Mgender" value="job">
                    <label for="gender">Job</label>
                </div>
                <div class="input-box">
                    <span class="details">
                        Social Status
                    </span>
                    <input type="radio" name="social_status" id="Sgender" value="middle class">
                    <label for="gender">Middle Class</label>
                    <input type="radio" name="social_status" id="Sgender" value="elite class">
                    <label for="gender">Elite Class</label>
                </div>
                <div class="input-box">
                    <span class="details">
                        Siblings
                    </span>
                    <input type="number" class="input" name="siblings" required>
                </div>

                <div class="input-box">
                    <span class="details">
                        More details
                    </span>
                    <textarea name="more_details" cols="30" rows="10" class="textarea-2" style="width: 640px;"
                        required></textarea>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="btndiv">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>

    </div>



</section>

<br>
<br>
@stop