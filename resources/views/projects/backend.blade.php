@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3  fley">
        <div class="navbar fixed-top border-bottom fine">
            <h5>Backend Projects</h5>
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


        @if($projects)
            <div class="row text-center">
                @foreach($projects as $project)
                    <div class="col-lg-4">

                        <div class="card" style="width: 18rem;height: 100%">
                            <img class="card-img-top" src="{{ $project->image1 }}" alt="Card image cap">

                            <div class="card-body">

                                <p class="card-text">{{ $project->name }} <span class="badge badge-primary">Level : {{$project->level}}</span></p>

                                <a href="chooseframelangback/{{ $project->id }}" class="btn btn-primary " style="width: 100%;"> View </a>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        @else
            <div class="row ">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <div class="alert alert-primary" role="alert" >
                            Project library empty
                        </div>
                    </div>

                </div>

            </div>
    @endif



@stop