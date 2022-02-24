<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Libre+Baskerville:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    @include('layouts.style')

    <title>Shadi.com</title>
</head>

<body style=" background-image:linear-gradient( to bottom, rgba(0, 0, 0, 0.12), rgba(10, 5, 9, 0.73)
    ),url('{{ asset('/public/images/home-bg.jpg')}}');background-attachment: fixed;background-size:
    cover;background-image: fixed;">

    <!-- Header Starts -->
    @include('layouts.header')
    <!-- Header Ends -->

    <!-- HERO SECTION-->
    @yield('content')


    <!-- Footer Starts -->
    @include('layouts.footer')
    <!-- footer ends -->

    <script>
    let menu = document.querySelector('#menu-bar');
    let navbar = document.querySelector('.navbar');

    menu.addEventListener('click', () => {
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('nav-toggle');
    });

    window.onscroll = () => {
        menu.classList.remove('fa-times');
        navbar.classList.remove('nav-toggle');
    }
    </script>

</body>

</html>