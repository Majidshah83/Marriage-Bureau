@extends('layouts.master')
@section('content')
<section class="section">
    <div class="main">

        <div class="main-title">
            Create Profile
        </div>
        <br>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">
                        Full Name
                    </span>
                    <input type="text" class="input">
                </div>
                <div class="input-box">
                    <span class="details">
                        Gender
                    </span>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Male</label>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Female</label>
                </div>
                <div class="input-box">
                    <span class="details">
                        Date of birth
                    </span>
                    <input type="date" class="input">
                </div>
                <div class="input-box">
                    <span class="details">
                        Phone No
                    </span>
                    <input type="number" class="input">
                </div>
                <div class="input-box">
                    <span class="details">
                        Height
                    </span>
                    <input type="text" class="input">
                </div>
                <div class="input-box">
                    <span class="details">
                        Weight
                    </span>
                    <input type="text" class="input">
                </div>
                <div class="input-box">
                    <span class="details">
                        Disablity
                    </span>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Yes</label>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">No</label>
                </div>

                <div class="input-box">
                    <span class="details">
                        Cast
                    </span>
                    <input type="text" class="input">
                </div>

                <div class="input-box">
                    <span class="details">
                        Religion
                    </span>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Muslim</label>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Non-Muslim</label>
                </div>

                <div class="input-box">
                    <span class="details">
                        Adress
                    </span>
                    <textarea name="" id="" cols="30" rows="10" class="textarea"></textarea>
                </div>

                <div class="input-box">
                    <span class="details">
                        House Owner
                    </span>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Yes</label>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">No</label>
                </div>
                <div class="input-box">
                    <span class="details">
                        Picture
                    </span>
                    <input type="file" class="input">
                </div>
            </div>

        </form>
        <br>
        <br>
        <br>
        <div class="title">
            Education:
        </div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">
                        Qualification
                    </span>
                    <input type="text" class="input">
                </div>
                <div class="input-box">
                    <span class="details">
                        College/University
                    </span>
                    <input type="text" class="input">
                </div>
            </div>
        </form>
        <br>

        <div class="title">
            Applicant Profession:
        </div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">
                        Designation:
                    </span>
                    <input type="text" class="input">
                </div>
                <div class="input-box">
                    <span class="details">
                        Job type
                    </span>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Government</label>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Private</label>
                </div>

                <div class="input-box">
                    <span class="details">
                        Bussiness Owner
                    </span>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Yes</label>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">No</label>
                </div>
            </div>
        </form>

        <br>
        <div class="title">
            Family Detail:
        </div>
        <form action="#">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">
                        Father Occupation
                    </span>
                    <input type="text" class="input">
                </div>
                <div class="input-box">
                    <span class="details">
                        Mother Occupation
                    </span>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">House Wife</label>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Job</label>
                </div>
                <div class="input-box">
                    <span class="details">
                        Social Status
                    </span>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Middle Class</label>
                    <input type="checkbox" name="gender" id="gender">
                    <label for="gender">Elite Class</label>
                </div>
                <div class="input-box">
                    <span class="details">
                        Siblings
                    </span>
                    <input type="number" class="input">
                </div>
                
                <div class="input-box">
                    <span class="details">
                        More details
                    </span>
                    <textarea name="" id="" cols="30" rows="10" class="textarea-2" style="width: 640px;"></textarea>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="btndiv">
                <a href="" class="btn">Submit</a>
            </div>
        </form>

    </div>



</section>

<br>
<br>
@stop
