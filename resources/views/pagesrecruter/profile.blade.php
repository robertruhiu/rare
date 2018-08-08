@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>Candidate Profile</h5>
            <nav>
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li style="list-style-type: none;float: right;">
                        <img src="/storage/avatars/{{ Auth::user()->avatar }}" width="30" height="30" alt="">
                    </li>
                    <li class="nav-item dropdown" style="list-style-type: none;float: right;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->last_name }} {{ Auth::user()->name }} <span class="caret"></span>
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
                    @endguest
                    </ul>

            </nav>
        </div>
    </div>
    <!-- page content -->
    <div class="row">
    <div class=" card contact2" style="width: 100%;padding:2%;margin-bottom:2%">
        <div class="row" style="margin-left: 0;margin-right: 0">
            <div class="col-lg-4">
                <img style="width:80%" src="{{ $project->avatar }}"
                     alt="Card image cap"><br>
                <p></p>
                <p class="card-text"><strong>Name:</strong> {{ $project->name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $project->email }}</p>
                <p class="card-text"><strong>Github username:</strong> {{ $project->github }}</p>
                <p class="card-text"><strong>Linkedin account:</strong> {{ $project->linkedin }}</p>


            </div>
            <div class="col-lg-8">


                <h5>Bio</h5>
                <hr>
                <p>{{ $project->biography}}</p>
                <h5>Skills</h5>
                <hr>
                @foreach($project->skills as $skill)
                    <span class="badge  badge-primary"><h6>{{$skill->name}}</h6></span>


                @endforeach
                <p></p>
                <h5>Availability</h5>
                <hr>
                @foreach($project->typecontracts as $typecontract)
                    <span class="badge  badge-info"><h6>{{$typecontract->name}}</h6></span>

                @endforeach
                <p></p>

                <h5>Projects done</h5>

                <div class="card" style="width: 100%;margin-bottom: 2%">
                    <div class="card-body">
                        <h5 class="card-title">Codeln</h5>
                        <h6 class="card-subtitle mb-2 text-muted">2017-Present</h6>
                        <p class="card-text">A project-based assessment that helps companies vet the coding skills of programmers and
                            provides them with a comprehensive report.</p>
                        <a href="http://www.codeln.com/" target="_blank" class="card-link">See project</a>

                    </div>
                </div>
                <div class="card" style="width: 100%;margin-bottom: 2%">
                    <div class="card-body">
                        <h5 class="card-title">Africa ziara</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Feb 2018 – Mar 2018</h6>
                        <p class="card-text">descriptionAn aggregation application with the aim of enabling tourist to get connected to tour operators in Ghana that can handle their whole trip.
                            It serves to market the agencies by ensuring that their packages are well marketed in optimized way.
                        </p>
                        <a href="https://ziarafrica.herokuapp.com/" target="_blank" class="card-link">See project</a>

                    </div>
                </div>
                <div class="card" style="width: 100%;margin-bottom: 2%">
                    <div class="card-body">
                        <h5 class="card-title">Crytoprize</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Jan 2018 – Jan 2018</h6>
                        <p class="card-text">Enables real time access to the ever changing prices.A companion of a cryptocurrency enthusiast.</p>
                        <a href="https://cryptoprize.herokuapp.com/" target="_blank" class="card-link">See project</a>

                    </div>
                </div>


            </div>
        </div>
    </div>
    </div>


@stop