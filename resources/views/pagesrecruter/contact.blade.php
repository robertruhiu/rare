@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>CANDIDATE LIST</h5>
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
    <div class="row" style="margin-left: 0;margin-right: 0">
        @if( $projects )
            @foreach($projects as $project)
                <div class="col-lg-6">
                    <div class=" card contact" style="width: 100%;padding:5%;margin-bottom:2%">
                        <div class="row" style="margin-left: 0;margin-right: 0">
                            <div class="col-lg-4">
                                <img style="border-radius:57%;width:80%" src="{{ $project->avatar }}"
                                     alt="Card image cap"><br>
                                <a href="/contact/{{ $project->id }}">
                                    <button type="button" class="btn btn-primary btn-sm" style="margin-top:10%;margin-left:2%">
                                        View Profile
                                    </button>
                                </a>
                            </div>
                            <div class="col-lg-8">

                                <p class="card-text">Name: {{ $project->name }}</p>

                                <p class="text-muted">{{ $project->biography}}</p>

                                @foreach($project->skills as $skill)
                                    <span class="badge  badge-primary">{{$skill->name}}</span>


                                @endforeach

                                @foreach($project->typecontracts as $typecontract)
                                    <span class="badge  badge-info">{{$typecontract->name}}</span>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>


                    @endforeach
                    @else
                        <p class="text-center text-primary">No candiates yet Yet!</p>
                    @endif
                </div>

@stop
