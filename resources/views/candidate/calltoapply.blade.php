@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3  fley">
        <div class="navbar fixed-top fine border-bottom">
        <h5>Calls to apply</h5>

        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav ">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <span data-feather="user"></span> {{ Auth::user()->name }}   <span class="caret"></span>
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
                    <li style="list-style-type: none;float: right;">
                        <img src="{{ Auth::user()->avatar }}" width="30" height="30" alt="">
                    </li>
                @endguest
            </ul>

        </nav>
        </div>
    </div>


        <div class="row">


            @foreach($calltoapplys as $calltoapply)

                    <div class="col-lg-4">
                    <div class="card" style="width: 18rem;height: 100%">
                        <img class="card-img-top" src="{{$calltoapply->image1}}" style="height: 150px" alt="Card image cap">
                        <div class="card-body">
                            <h5>Project name: {{$calltoapply->name}}</h5>
                            <p class="card-text">Project type : {{$calltoapply->type}}</p>
                            <p class="card-text">Company name : {{$calltoapply->company}}</p>

                        </div>
                        <div class="card-footer">
                            <a href="pendingproject_detail/{{ $calltoapply->id }}">
                                <button type="button" class="btn btn-success btn-xs">See more</button>
                            </a>
                        </div>
                    </div>
                    </div>

            @endforeach

        </div>


@stop