@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3  fley">
        <div class="navbar fixed-top fine border-bottom">

        <h5>Customize test</h5>

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


        </nav>
        </div>




    </div>
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="card" style="width: 100%;">
                <img class="card-img-top" src="{{$assessment->image1}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$assessment->name}}</h5>
                    <span class="badge badge-primary">Level : {{$assessment->level}}</span>
                    <span class="badge badge-primary">Type Assessment : {{$assessment->type}}</span>
                    <span class="badge badge-primary">Time : {{$assessment->timeassessment}} minutes</span>
                    <p>Project brief</p>
                    <p class="card-text">{{$assessment->description}}</p>
                    <p class="card-text">Requirements</p>
                    <ul>
                        <li>{{$assessment->requirement1}}</li>
                        <li>{{$assessment->requirement2}}</li>
                        <li>{{$assessment->requirement3}}</li>
                        <li>{{$assessment->requirement4}}</li>
                        <li>{{$assessment->requirement5}}</li>
                        <li>{{$assessment->requirement6}}</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <h5>Choose tech</h5>

            <form class="form-horizontal form-label-left "method="post" action="{{ route('chooseframelang.form') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="category_id">Front end client</label>
                    <select class="form-control" name="framecss">
                        <option value="" disabled selected>Select your option</option>
                        @foreach($skills->where('tag', 'frontend') as $skill)
                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_id">Backend framework</label>
                    <select class="form-control" name="proglanguage">
                        <option value="" disabled selected>Select your option</option>
                        @foreach($skills->where('tag', 'backend') as $skill)
                            <option value="{{$skill->name}}">{{$skill->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label " for="dateassessment"> Assessment start date <span class="required">*</span>
                    </label>
                    <div >
                        <input type="date" id="DateAssessment" name="dateassessment" class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label " for="EndAssessment"> Assessment end date <span class="required">*</span>
                    </label>
                    <div >
                        <input type="date" id="EndAssessment" name="endassessment" class="form-control ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label" for="numberapplicant"> Number of Candidates <span class="required">*</span>
                    </label>
                    <div >
                        <input type="number" class="form-control" id="numberapplicant" name="numberapplicant" value="" >
                    </div>
                </div>

                <!--hidden form inputs needed for submission-->

                <div class="form-group">
                    <input type="hidden" class="form-control" id="assessment_id" name="user_id"
                           value="{{ Auth::user()->id }}" readonly>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="timeassessment" name="timeassessment"
                           value="{{$assessment->timeassessment}}" readonly>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="assessment_id" name="assessment_id"
                           value="{{$assessment->id}}" readonly>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="description" name="description"
                           value="{{$assessment->description}}" readonly>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="image1" name="image1"
                           value="{{$assessment->image1}}" readonly>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="requirement1" name="requirement1"
                           value="{{$assessment->requirement1}}" readonly>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="requirement2" name="requirement2"
                           value="{{$assessment->requirement2}}" readonly>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="requirement3" name="requirement3"
                           value="{{$assessment->requirement3}}" readonly>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="requirement4" name="requirement4"
                           value="{{$assessment->requirement4}}" readonly>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="requirement5" name="requirement5"
                           value="{{$assessment->requirement5}}" readonly>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="requirement6" name="requirement6"
                           value="{{$assessment->requirement6}}" readonly>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="level" name="level"
                           value="{{$assessment->level}}" readonly>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="name" name="name"
                           value="{{$assessment->name}}" readonly>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="name" name="price"
                           value="{{$assessment->price}}" readonly>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="company" name="company"
                           value="{{ Auth::user()->company }}" readonly>
                </div>

                <div class="form-group">
                    <input type="hidden" class="form-control" id="type" name="type"
                           value="{{$assessment->type}}" readonly>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success">Save & Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>






@stop