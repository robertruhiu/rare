@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 fley" >
        <div class="navbar fixed-top fine border-bottom" >
            <h5>Project prerequisites</h5>

            <nav>
                <div class="nav toggle">
                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <ul class="nav">
                    <!-- Authentication Links -->
                    @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span data-feather="user"></span> {{ Auth::user()->name }}  <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="">

                                    My profile
                                </a>
                                <a class="dropdown-item" href="{{ route('candidate.logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('candidate.logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>

            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">

            <div class="row">
                <div class="col-sm-4  text-center">
                    <h6>Internet is working and stable</h6>
                    <img src="https://codeln.herokuapp.com/images/building.png" height="80" alt="..."> <br><br>
                    <div class="btn-group" role="group" aria-label="Basic example" style="float:center;">
                        <button type="button" class="btn btn-danger">Test it</button>
                    </div>
                </div>
                <div class="col-sm-4  text-center">
                    <h6>Webcam is unobstructed during test time</h6>
                    <img src="https://codeln.herokuapp.com/images/webcam.png" height="80" alt="..."> <br><br>
                    <div class="btn-group" role="group" aria-label="Basic example" style="float:center">
                        <button type="button" class="btn btn-danger">Test it</button>
                    </div>
                </div>
                <div class="col-sm-4  text-center">
                    <h6>Don't use any VPN (virtual Private Network)</h6>
                    <img src="https://codeln.herokuapp.com/images/vpn.png" height="80" alt="...">
                </div>
            </div>

            <div class="row" style="margin-top: 30px">
                <div class="col-lg-8" style="text-align: left">


                    <div class="card5" style="text-align: left">
                        <div class="card-body">

                            <h5 class="card-subtitle mb-2 ">Project details</h5>
                            <hr>
                            <h6>{{$myproject->name}}</h6>
                            <p class="card-text ">
                                {{$myproject->description}}

                            </p>


                            <h5 class="card-subtitle mb-2 ">Deliverables</h5>
                            <hr>
                            <p class="card-text ">
                            <ul>
                                <li>{{$myproject->requirement1}}</li>
                                <li>{{$myproject->requirement2}}</li>
                                <li>{{$myproject->requirement3}}</li>
                                <li>{{$myproject->requirement4}}</li>
                                <li>{{$myproject->requirement5}}</li>
                                <li>{{$myproject->requirement6}}</li>
                            </ul>

                            </p>



                            <h5 class="card-subtitle mb-2 ">Enviroment variables</h5>
                            <hr>
                            <p class="card-text ">
                            <ul>

                                <li>Frontend client : {{$myproject->framecss}}</li>
                                <li>Backend client : {{$myproject->proglanguage}}</li>
                                <li>Time : {{$myproject->timeassessment /60}} hrs</li>
                            </ul>

                            </p>
                        </div>
                    </div>


                </div>
                <div class="col-lg-4 " style="text-align: left">
                    <div class="card5" style="width: 100%;">
                        <div class="card-body">

                            <h5 class="card-subtitle mb-2 text-muted">IDE Login access</h5>
                            <hr>
                            <p class="card-text">

                                Username: kweku@gmail.com<br>
                                password: ****************<br>
                                <a href="http://ide.codeln.com:8080/dashboard/#/ide/che/wksp-ecmf" target="_blank" class="btn btn-primary">Start
                                    project</a>

                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop