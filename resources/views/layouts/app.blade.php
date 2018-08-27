<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/home.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/stay.css')}}" type="text/css">


    <title>Codeln</title>


</head>
<body>
<nav id="mynav" class="navbar sticky-top  nav-colored">
    <a class="brandhome codelnlogo" href="/">CODELN</a>



    <ul class="nav justify-content-end orient">

        <li class="nav-item">
            <a class="nav-link colorlink" href="/pricing">Pricing</a>
        </li>

        @if (Route::has('login'))

            @auth

                <a href="{{ url('/createprojet') }} " class="js-target-scroll nav-link colorlink">My Account</a>

            @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="js-target-scroll nav-link colorlink">Recruiter</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('candidate.login') }}" class="js-target-scroll nav-link colorlink">Candidate</a>
                </li>
            @endauth

        @endif


    </ul>
</nav>

    @yield('content')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
            integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
            crossorigin="anonymous"></script>
</body>
</html>
