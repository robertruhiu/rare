@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>DETAILS PROJECT</h5>
            <nav>
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li style="list-style-type: none;float: right;">
                        <img src="/storage/avatars/{{ Auth::user()->avatar }}" width="30" height="30" alt="">
                    </li>
                    <li class="nav-item dropdown" style="list-style-type: none;float: right;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->last_name }} {{ Auth::user()->name }}  <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <li style="list-style-type: none;float: right;">
                        <img src="{{ Auth::user()->avatar }}" width="30" height="30" alt="">
                    </li>
                    @endguest
                    </ul>

            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h4>Make sure internet is working and stable</h4>
            <img style="padding-left: 100px" class="img-responsive text-center" src="{{asset('images2/house.png')}}" height="100px" alt="send" />

        </div>
        <div class="col-md-4">
            <h4>Make sure your webcam is working</h4>
            <img style="padding-left: 100px" class="img-responsive text-center" src="{{asset('images2/webcam.png')}}" height="100" alt="send" />

        </div>
        <div class="col-md-4">
            <h4>Don't use any VPN (virtual Private Network)</h4>
            <img style="padding-left: 100px" class="img-responsive text-center" src="{{asset('images2/shield.png')}}" height="100" alt="send" />

        </div>
    </div>

    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Requirement</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-horizontal form-label-left" action="requirement.php">

                        <div class="form-group">
                            <label class="control-label col-md-5 col-sm-5" for="first-name">HTML VERSION <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" id="first-name2" required="required" value="{{$myproject->framehtml}}" class="btn btn-danger col-md-7 col-xs-12" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-5 col-sm-5" for="last-name">CSS FRAMEWORK  <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" id="last-name2" name="last-name" required="required" value="{{$myproject->framecss}}" class="btn btn-primary col-md-7 col-xs-12" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-5 col-sm-5">PROGRAMMING LANGUAGE</label>
                            <div class="col-md-12 col-sm-12">
                                <input id="middle-name2" class="btn btn-success col-md-7 col-xs-12" type="text" value="{{$myproject->proglanguage}}" name="middle-name" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-5 col-sm-5">LANGUAGE FRAMEWORK</label>
                            <div class="col-md-12 col-sm-12">
                                <input id="middle-name2" class="btn btn-dark col-md-7 col-xs-12" type="text" value="{{$myproject->framelanguage}}" name="middle-name" readonly>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Date Assessment</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"> Assessment Date <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" id="assessmentdate" required="required" value="{{$myproject->dateassessment}}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Time in minute <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" id="assessmentdate" required="required" value="{{$myproject->timeassessment}}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">My test </label>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" id="mytimeassessment" required="required" value="{{$myproject->mytimeassessment}}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Access FTP </h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-horizontal form-label-left" action="requirement.php">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="first-name">Host FTP <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" id="last-name2" name="last-name" required="required" value="{{$myproject->hostftp}}" class="form-control col-md-7 col-xs-12">
                            </div>

                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3" for="last-name">Login FTP <span class="required">*</span>
                            </label>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" id="last-name2" name="last-name" required="required" value="{{$myproject->loginftp}}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3">Password FTP</label>
                            <div class="col-md-12 col-sm-12">
                                <input type="text" id="last-name2" name="last-name" required="required" value="{{$myproject->passftp}}" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("August 03, 2018 15:37:25").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";

            // If the count down is over, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>

@stop