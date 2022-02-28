@extends('layouts.master')
@section('content')
<!-- home section starts -->

<section class="home" id="home">
    <div class="content">
        <span>Marriage Bureau</span>
        <h3>We find best match for you!</h3>
    </div>
</section>

<!-- home section ends -->



<!-- Services section Starts -->

<div class="heading" id="main-services">
    <h1>Main Services</h1>
    <img src="{{asset('public/images/header-img.png')}}" alt="">
</div>



<section class="services">




    <div class="box-container">
        <div class="box">
            <img src="{{asset('public/images/wedding-services.jpg')}}" alt="">
            <div class="info">
                <h3>Wedding</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, hic.</p>
                <a href="external-wedding" target="_blank" class="btn">Learn More</a>
            </div>
        </div>

</section>




<section class="services" id="services">

    <div class="heading">
        <h1>Our Extra Services</h1>
        <img src="{{asset('public/images/header-img.png')}}" alt="">
    </div>

    <div class="box-container">
        <div class="box">
            <img src="{{asset('public/images/dressing.jpg')}}" alt="">
            <div class="info">
                <h3>Dressing</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, hic.</p>
                <!-- <a href="" class="btn">Learn More</a> -->
            </div>
        </div>



        <div class="box">
            <img src="{{asset('public/images//floriat.jpg')}}" alt="">
            <div class="info">
                <h3>Florist</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, hic.</p>
                <!-- <a href="" class="btn">Learn More</a> -->
            </div>
        </div>



        <div class="box">
            <img src="{{asset('public/images//img3.jpg')}}" alt="">
            <div class="info">
                <h3>Wedding Cake</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, hic.</p>
                <!-- <a href="" class="btn">Learn More</a> -->
            </div>
        </div>



        <div class="box">
            <img src="{{asset('public/images/img4.jpg')}}" alt="">
            <div class="info">
                <h3>Venue and Hall</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, hic.</p>
                <!-- <a href="" class="btn">Learn More</a> -->
            </div>
        </div>



        <div class="box">
            <img src="{{asset('public/images/music.jpg')}}" alt="">
            <div class="info">
                <h3>Music</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, hic.</p>

            </div>
        </div>



        <div class="box">
            <img src="{{asset('public/images/img6.jpg')}}" alt="">
            <div class="info">
                <h3>Photography</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab, hic.</p>

            </div>
        </div>
    </div>
    <br>
    <div class="btn-div"> <a href="extra-serveice" target="_blank"> <button> View More <i
                    class="fa-solid fa-arrow-right"></i></button> </a> </div>

</section>

<!-- Services section Ends -->





<!-- clients section starts -->


<section class="clients" id="clients">

    <div class="heading">
        <h1>Our Clients</h1>
        <img src="{{asset('public/images/header-img.png')}}" alt="">
    </div>

    <div class="row">

        <div class="box-container">
            <div class="box">
                <img src="{{asset('public/images/sania and sohaib.jpg')}}" alt="">
                <div class="info">
                    <h3>Shoaib & Sania</h3>
                    <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
                        quasi
                        veritatis eaque molestias dolores velit fugiat a pariatur. Corporis natus mollitia consectetur
                        sequi sint
                        itaque dolore ipsam reiciendis! Temporibus, quisquam?<i class="fas fa-quote-right"></i></p>
                </div>
            </div>

            <div class="box">
                <img src="{{asset('public/images/hamzaliabbasi.jpg')}}">
                <div class="info">
                    <h3>Hamza & Naimal</h3>
                    <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
                        quasi
                        veritatis eaque molestias dolores velit fugiat a pariatur. Corporis natus mollitia consectetur
                        sequi sint
                        itaque dolore ipsam reiciendis! Temporibus, quisquam?<i class="fas fa-quote-right"></i></p>
                </div>
            </div>

        </div>

        <!--   <img src="{{asset('public/images/divider.png')}}" alt="" class="divider"> -->

        <div class="box-container">
            <div class="box">

                <div class="info">
                    <h3>Ahad & Sejal</h3>
                    <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
                        quasi
                        veritatis eaque molestias dolores velit fugiat a pariatur. Corporis natus mollitia consectetur
                        sequi sint
                        itaque dolore ipsam reiciendis! Temporibus, quisquam?<i class="fas fa-quote-right"></i></p>
                </div>
                <img src="{{asset('public/images/sejal and ahadmir.jpg')}}" alt="">
            </div>

            <div class="box">

                <div class="info">
                    <h3>Furqan & Sanam </h3>
                    <p><i class="fas fa-quote-left"></i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
                        quasi
                        veritatis eaque molestias dolores velit fugiat a pariatur. Corporis natus mollitia consectetur
                        sequi sint
                        itaque dolore ipsam reiciendis! Temporibus, quisquam?<i class="fas fa-quote-right"></i></p>
                </div>
                <img src="{{asset('public/images/Sanam-Chaudry-atFurqan-Qureshi-Birthday-Pictures.jpg')}}" alt="">
            </div>



        </div>
    </div>

</section>




<!-- clients section ends -->


<!-- Team Section Starts -->


<section class="team" id="team">

    <div class="heading">
        <h1>Our Team</h1>
        <img src="{{asset('public/images/header-img.png')}}" alt="">
    </div>


    <div class="box-container">



        <div class="box">
            <img src="{{asset('public/images/team-2.png')}}" alt="">
            <h3>Haider Ali</h3>
            <span>Wedding Planner</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perferendis hic sit accusamus repellendus.
                Consequuntur in quas odit autem cum.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('public/images/team-1.png')}}" alt="">
            <h3>Muqadas Rubab</h3>
            <span>Wedding Planner</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perferendis hic sit accusamus repellendus.
                Consequuntur in quas odit autem cum.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('public/images/team-3.png')}}" alt="">
            <h3>Umer Farooq</h3>
            <span>Wedding Planner</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perferendis hic sit accusamus repellendus.
                Consequuntur in quas odit autem cum.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('public/images/team4.png')}}" alt="">
            <h3>Malaika Rubab</h3>
            <span>Wedding Planner</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum perferendis hic sit accusamus repellendus.
                Consequuntur in quas odit autem cum.</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

    </div>

</section>



<!-- Team Section Ends -->

<!-- contact section started -->


<section class="contact" id="contact">


    <div class="heading">
        <h1>Contact</h1>
        <img src="{{asset('public/images/header-img.png')}}" alt="">
    </div>
    @if(count($errors)>0)
    @foreach ($errors->all() as $errors)
    <p class="alert" style=" background-color: red; color: white; margin-right: 73%; font-size: 20px; ">
        {{$errors}}</p>
    @endforeach
    @endif
    @if(session()->has('message'))
    <div class="alert" style="background-color: red;color: white;font-size: 20px;margin-right: 56%;">
        {{ session()->get('message') }}
    </div>
    @endif
    <form action="{{url('addcontact')}}" method="post">
        @csrf
        <div class="inputBox">
            <input type="text" placeholder="Your Name" name="name" required>
            <input type="email" placeholder="Your Email" name="email" required>
        </div>
        <div class="inputBox">
            <input type="number" placeholder="Your Number" name="phone_number" required>
            <input type="text" placeholder="Your Adress" name="adress" required>
        </div>
        <textarea placeholder="Say Something" name="deatil" cols="30" rows="10" required></textarea>
        <button type="submit" class="btn btn-primary">Send massage</button>

    </form>

</section>
<!-- contact section ends -->
@stop