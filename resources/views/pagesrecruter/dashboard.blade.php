@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3  fley">
        <div class="navbar fixed-top fine border-bottom">
        <h5>My projects</h5>

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
    <div class="jumbotron jumbotron-fluid" style="background:  0/30% no-repeat,linear-gradient(61deg,#6e1a52,#76c5d6 42%);">
        <div class="container">

        </div>
    </div>
    <div class="row">
        @foreach($dashboards as $dashboard)
            @if(  $dashboard->user_id == Auth::user()->id)

                <div class="col-lg-3">
                    <a href="project/{{$dashboard->store_id}}">
                    <div class="card ml ">
                        <div class="card-body">
                            <h5 class="card-title">{{$dashboard->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Project type: {{$dashboard->type}}</h6>
                            <p class="card-text">Candidates:{{$dashboard->numberapplicant}} </p>
                        </div>
                    </div>
                    </a>
                </div>

            @else
                {{--<p class="text-center text-primary">No Posts created Yet!</p>--}}
            @endif
        @endforeach




        <div class="col-lg-3">
                    <a href="createproject">
                    <div class="card ml " style="height: 100%">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-top: 17%;margin-left: 17%">Add a Project</h5>

                        </div>
                    </div>
                    </a>
                </div>

    </div>


@stop