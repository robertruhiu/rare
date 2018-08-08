@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 fley">
        <div class="navbar fixed-top fine border-bottom">
            <h5>Project: {{$calltoapply->name}}  </h5>

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
                <div class="col-lg-8" style="text-align: left">


                    <div class="card5" style="text-align: left">
                        <div class="card-body">

                            <h5 class="card-subtitle mb-2 ">Project brief</h5>
                            <hr>
                            <p class="card-text ">
                                <span class="badge badge-primary">Level : {{$calltoapply->level}}</span>
                            <p>
                                {{$calltoapply->description}}
                            </p>

                            </p>


                            <h5 class="card-subtitle mb-2 ">Enviroment variables</h5>
                            <hr>
                            <p class="card-text ">
                            <ul>
                                <li>Base language : {{$calltoapply->framelanguage}}</li>
                                <li>Frontend client : {{$calltoapply->framecss}}</li>
                                <li>Time : {{$calltoapply->timeassessment}} minutes</li>
                            </ul>

                            </p>

                        </div>
                    </div>


                </div>
                <div class="col-lg-4 " style="text-align: left">
                    <div class="card5" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-subtitle mb-2 text-muted">Assessment Dates</h5>
                            <form method="post" action="{{ route('pendingproject_detail.form') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Date Assessment</label>
                                    <input type="text" id="dateassessment" required="required" name="dateassessment" value="{{$calltoapply->dateassessment}}" class="form-control ">
                                </div>

                                <div class="form-group">
                                    <label for="name">End Assessment</label>
                                    <input type="text" id="endassessment" required="required" name="endassessment" value="{{$calltoapply->endassessment}}" class="form-control ">
                                </div>

                                <div class="form-group">
                                    <label for="mytimeassessment">Choose your date of Assessment</label>
                                    <input type="date" id="mytimeassessment" required="required" name="mytimeassessment" value="" class="form-control ">
                                </div>

                                <!---data to be collected-->
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="candidate_id" name="candidate_id" value="{{ Auth::user()->id }}">

                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="candidate_name" name="candidate_name" value="{{ Auth::user()->name }}">

                                </div>


                                <div class="form-group">

                                    <input type="hidden" class="form-control" id="store_id" name="store_id" value="{{ $calltoapply->id }}">
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ $calltoapply->user_id }}">
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" id="level" name="level" value="{{$calltoapply->level}}">
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" id="type" name="type" value="{{$calltoapply->type}}">
                                </div>
                                <div class="form-group">

                                    <input type="hidden" class="form-control" id="numberapplicant" name="numberapplicant" value="{{$calltoapply->numberapplicant}}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="level" name="framelanguage" value="{{$calltoapply->framelanguage}}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="description" name="description" value="{{$calltoapply->description}}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="timeassessment" name="timeassessment" value="{{$calltoapply->timeassessment}}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="image1" name="image1" value="{{$calltoapply->image1}}">
                                </div>
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="proglanguage" name="proglanguage" value="{{$calltoapply->proglanguage}}">
                                </div>
                                <div class="form-group">
                                    <div >
                                        <input type="hidden" id="requirement1" required="required" name="requirement1"  value="{{$calltoapply->requirement1}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div >
                                        <input type="hidden" id="requirement2" required="required" name="requirement2"  value="{{$calltoapply->requirement2}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div >
                                        <input type="hidden" id="requirement3" required="required" name="requirement3"  value="{{$calltoapply->requirement3}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div >
                                        <input type="hidden" id="requirement4" required="required" name="requirement4"  value="{{$calltoapply->requirement4}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <input type="hidden" id="requirement5" required="required" name="requirement5"  value="{{$calltoapply->requirement5}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div >
                                        <input type="hidden" id="requirement6" required="required" name="requirement6"  value="{{$calltoapply->requirement6}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div >
                                        <input type="hidden" id="framecss" required="required" name="framecss" value="{{$calltoapply->framecss}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div >
                                        <input type="hidden" id="framehtml" required="required" name="framehtml" value="{{$calltoapply->framehtml}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div >
                                        <input type="hidden" id="assessment_id" required="required" name="assessment_id" value="{{$calltoapply->assessment_id}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div >
                                        <input type="hidden" id="name" required="required" name="name" value="{{$calltoapply->name}}" class="form-control ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div >
                                        <input type="hidden" id="validate" required="required" name="validate" value="1" class="form-control ">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Accept the offer</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@stop