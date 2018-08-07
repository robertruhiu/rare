@extends('candidate.layout.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3  fley">
        <div class="navbar fixed-top fine border-bottom">

        <h5>Home</h5>

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
    <div class="jumbotron jumbotron-fluid" style="background: 0/30% no-repeat,linear-gradient(61deg,#6e1a52,#76c5d6 42%);">
        <div class="container">

        </div>
    </div>

    <div class="row" >
        <div class="col-lg-4">
            <div class="card " style="width: 18rem;border-radius: 0;">
                <a href="pendingproject">
                    <div class="card-body">
                        <p class="card-text">Current projects</p>

                    </div>
                </a>
            </div>


        </div>
        <div class="col-lg-4">
            <div class="card " style="width: 18rem;border-radius: 0;">
                <a href="calltoapply">
                    <div class="card-body">
                        <p class="card-text">Invites</p>

                    </div>
                </a>
            </div>


        </div>
        <div class="col-lg-4">
            <div class="card " style="width: 18rem;border-radius: 0;">
                <a href="myresume">
                <div class="card-body">
                    <p class="card-text">Polish your resume</p>

                </div>
                </a>
            </div>


        </div>
    </div>

@endsection
