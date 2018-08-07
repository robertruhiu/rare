@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 fley">
        <div class="navbar fixed-top fine border-bottom">
        <h5>Which skill are you looking for?</h5>

                    <nav>
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else

                            <li class="nav-item dropdown" style="list-style-type: none;float: right;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span data-feather="user"></span> {{ Auth::user()->name }}  <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="profile">

                                        My profile
                                    </a>
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
    <div class="row">
        <div class="col-lg-4 " style="margin-bottom: 2%">
            <a href="frontend" style="text-decoration: none">
                <div class="card1 cardio leo frontend" >
                    <div class="card-body">
                        <h5 class="card-title cardtitle1 text-center" style="color: white"> Frontend developer</h5>

                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 "style="margin-bottom: 2%">
            <a href="backend" style="text-decoration: none">
                <div class=" card1 cardio leo backend">
                    <div class="card-body">
                        <h5 class="card-title cardtitle1 text-center" style="color: white"> Backend developer</h5>

                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 "style="margin-bottom: 2%">
            <a href="fullstack " style="text-decoration: none">
                <div class="card1 cardio leo fullstack">
                    <div class="card-body">
                        <h5 class="card-title cardtitle1 text-center" style="color: white"> Full stack developer</h5>

                    </div>
                </div>
            </a>
        </div>


        <div class="col-lg-4 "style="margin-bottom: 2%">
            <a href="library" style="text-decoration: none">
                <div class="card1 cardi1 leo" >
                    <div class="card-body">
                        <h5 class="card-title cardtitle2 text-center" style="color: white"> Not sure <br>Explore our project library</h5>

                    </div>
                </div>
            </a>
        </div>


    </div>





@stop