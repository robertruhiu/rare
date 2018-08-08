@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 fley">
        <div class="navbar fixed-top border-bottom fine">

            <h5>Project in progress</h5>

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
        <div class="col-sm-3">

            <div class="card8 ">
                <div class="card-body">
                    <h6 class="card-title">Applicants</h6>
                    <p class="card-text"></p>

                </div>
            </div>

        </div>

        <div class="col-sm-3">

            <div class="card8  ">
                <div class="card-body">
                    <h6 class="card-title">Projects in progress</h6>
                    <p class="card-text"></p>

                </div>
            </div>

        </div>
        <div class="col-sm-3">

            <div class="card8 ">
                <div class="card-body">
                    <h6 class="card-title">Projects pending</h6>
                    <p class="card-text"></p>
                </div>
            </div>

        </div>
    </div>

    <div class="row"  style="margin-top: 5%">

        <table class="table table-striped projects">
            <thead>
            <tr>
                <th>Rank</th>
                <th>Name</th>
                <th>Score</th>
                <th>Profficiency</th>
                <th>Demo</th>
                <th>Full report</th>

            </tr>
            </thead>
            <tbody>
            @foreach($candidates as $candidate)
                <tr>
                    <td>1</td>

                    <td>
                        <a href="" target="_blank"> {{$candidate->candidate_name}}</a>
                    </td>

                    <td>
                        60%
                    </td>

                    <td>
                        moderate
                    </td>

                    <td>
                        <a href="http://167.99.220.153:32932/" target="_blank">
                            <button class="btn btn-primary btn-sm">Live Demo</button>
                        </a>
                    </td>
                    <td>
                        <!-- <a href="https://codeln.herokuapp.com/fullreport" target="_blank">-->
                        <a href="https://codeln.herokuapp.com/fullreport" target="_blank">
                            <button class="btn btn-success btn-sm">Full report</button>
                        </a>
                    </td>

                </tr>
            @endforeach


            </tbody>
        </table>

    </div>

@stop