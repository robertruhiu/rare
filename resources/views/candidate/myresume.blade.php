@extends('layouts.candidate')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom fley">
        <div class="navbar fixed-top fine">
            <h5>MY RESUME</h5>
            <nav>
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li style="list-style-type: none;float: right;">
                        <img src="{{ Auth::user()->avatar }}" width="30" height="30" alt="">
                    </li>
                    <li class="nav-item dropdown" style="list-style-type: none;float: right;">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->last_name }} {{ Auth::user()->name }}  <span class="caret"></span>
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

            <div class="row">

                <div class="col-lg-4">                
                        <h5>My details</h5>
                            
                        
                        <form action="{{ route('candidate.update_myresume') }}"  method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Name</label>
                                <div >
                                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }} ">
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Email / Contact Phone* </label>
                                <div >
                                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Describe yourself</label>
                                <div >
                                    
                                    <textarea class="form-control" name="biography" value="{{ Auth::user()->biography }}" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Github</label>
                                <div >
                                    <input type="text" class="form-control" name="github" value="{{ Auth::user()->github }}">
                                    <span class="fa fa-github form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Linkedin</label>
                                <div >
                                    <input type="text" class="form-control" name="linkedin" value="{{ Auth::user()->linkedin }}">
                                    <span class="fa fa-linkedin form-control-feedback right" aria-hidden="true"></span>
                                </div>
                            </div>
                            

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>



                    </div>


                <div class="col-lg-4">
                    
                            <h5>My profile Picture</h5>

                            

                                <form action="{{ route('candidate.update_photocandidate') }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <img style="width:100%" src="{{ Auth::user()->avatar }}" />

                                        <input type="file" class="form-control-file" name="avatar" id="avatarFile" aria-describedby="fileHelp" value="">
                                        <button id="send" type="submit" class="btn btn-primary">Upload</button>
                                    </div>                                        
                                </form> 
                </div>
                <div class="col-lg-4">
                <h5>My Skills </h5>
                
                
            
                @if(Auth::user())

                    @foreach(Auth::user()->skills as $skill)
                            <button type="button"  style="absolute" class="btn btn-round btn-default">{{$skill->name}}</button>
                    @endforeach
                @else
                    <p>No Posts created Yet!</p>
                @endif
            
            
                <a href="candidateskillform">
                    <img src="/images2/plus-circle.svg">
                
                    
                </a>

                <h5>Job types available for</h5>
                
            
                @foreach(Auth::user()->typecontracts as $typecontract)

                    <button type="button" class="btn btn-round btn-warning">{{$typecontract->name}}</button>
                @endforeach

            
                <a href="candidatescontractform">
                    <img src="/images2/plus-circle.svg">
                </a>
                
                </div>



            </div>

                
            
        
    
                
            
        

    

@stop