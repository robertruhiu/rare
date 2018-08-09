@extends('layouts.recruter')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 fley" >
        <div class="navbar fixed-top fine border-bottom" >

            <nav style="margin-bottom: -9px;">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Criteria for Grading</a>

                </div>
            </nav>

            <nav style="margin-bottom: -9px;">
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

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="content" style="margin-top: 1%">
                        <div class="container-fluid">
                            <!---intro--->
                            <div class='row' style="padding-top: 25px">
                                <div class="col-lg-3">
                                    <img style="width: 200px;height: 200px" src="https://pbs.twimg.com/profile_images/961897996509237248/PGcmxUkD_400x400.jpg">
                                </div>

                                <div class="col-lg-5">
                                    <div>

                                        <strong>Name:</strong> Kweku mensah<br>
                                        <strong>Project Name:</strong> Modern cave<br>
                                        <strong>Position Applied For:</strong> Junior Engineer<br>
                                        <strong>Date:</strong> 12th May, 2018
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <div>
                                        <p><strong>Recruiter's Vote:</strong></p>

                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!---marks--->
                            <div class="row" style="margin-top: 40px">
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p><strong>Time Spent (Minutes)</strong></p>
                                            <!-- <p id='smallp'>(Total Number of Tests Passed)</p>   -->
                                            <p><strong>45</strong></p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p><strong>Overall Score</strong></p>
                                            <!-- <p id='smallp'>(Total Number of Tests Failed)</p>   -->
                                            <p><strong>78%</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p><strong>Competency</strong></p>
                                            <!-- <p id='smallp'>High</p>   -->
                                            <p><strong>High</strong></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <div class="criteriaspaces text-center">
                                            <p><strong>Defect Level</strong></p>
                                            <!-- <p id='smallp'>/p>   -->
                                            <p><strong>Low</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!---proffieciency--->
                            <div class="reportspace">
                                <div class="col-lg-12 ">
                                    <h4 class="text-center">Candidate profficiency</h4>
                                    <hr>
                                    <div class="row">


                                        <div class="col-lg-3  profficiencycard">
                                            <a href="project.php">
                                                <div class="profficiencycardtitle"> core javascript</div>
                                                <div class="profficiencycardtext"> 60 points</div>
                                            </a>

                                        </div>
                                        <div class="col-lg-3  profficiencycard">
                                            <a href="project.php">
                                                <div class="profficiencycardtitle">Angular</div>

                                                <div class="profficiencycardtext"> 70 points</div>
                                            </a>

                                        </div>
                                        <div class="col-lg-3  profficiencycard">
                                            <a href="project.php">
                                                <div class="profficiencycardtitle">version control</div>

                                                <div class="profficiencycardtext"> 58 points</div>
                                            </a>

                                        </div>
                                        <div class="col-lg-3  profficiencycard">
                                            <a href="project.php">
                                                <div class="profficiencycardtitle">problem decomposition</div>

                                                <div class="profficiencycardtext"> 50 points</div>
                                            </a>

                                        </div>


                                    </div>

                                </div>

                            </div>
                            <!---deliverables--->
                            <div class="reportspace">
                                <div class="col-lg-12 report4">
                                    <div class="text-center">
                                        <h4 class="text-center">Project deliverables</h4>


                                    </div>
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>

                                            <th scope="col">Deliverable</th>

                                            <th scope="col">status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>

                                            <td>Improved UI/UX</td>

                                            <td><span class="badge badge-success">Success</span></td>
                                        </tr>
                                        <tr>

                                            <td>Sign up for users at your Client's company</td>

                                            <td><span class="badge badge-success">Success</span></td>
                                        </tr>
                                        <tr>

                                            <td>Login (you are free to use a package such as Passport for Authentication)
                                            </td>
                                            <td><span class="badge badge-success">Success</span></td>
                                        </tr>
                                        <tr>

                                            <td>Integration with at least 3 exchanges</td>
                                            <td><span class="badge badge-warning">2/3 complete</span></td>
                                        </tr>
                                        <tr>

                                            <td>Persist the market data in a PostgreSQL database</td>
                                            <td><span class="badge badge-danger">Incomplete</span></td>
                                        </tr>
                                        <tr>

                                            <td>Allow users to set up alerts for a certain price point</td>
                                            <td><span class="badge badge-danger">Incomplete</span></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                            <!---code quality--->
                            <div class="reportspace">
                                <div class="col-lg-12">
                                    <h4 class="text-center">Code quality</h4>
                                    <hr>

                                    <div id="chart" style="height: 300px; width: 100%;"></div>


                                </div>

                            </div>
                            <!---social--->
                            <div class="reportspace">
                                <div class="col-lg-12 ">
                                    <h4 class="text-center">social contributions</h4>
                                    <hr>
                                    <div class="row">

                                        <div class="col-lg-12 ">
                                            <div class="text-center" style="margin-top: 37px">
                                                Go to candidate's profile<br>
                                                <a href="https://stackoverflow.com/users/9630078/dennis-ruhiu"><img
                                                            src="images2/cons/icons8-stack-overflow-50.png"></a>
                                                <a style="margin-left: 308px;" href="https://github.com/robertruhiu"><img
                                                            src="images2/cons/icons8-github-64.png"></a>
                                            </div>

                                            <div class="row">

                                                <div class="col-lg-6 ">
                                                    <div class="text-center">
                                                        stack overflow
                                                    </div>

                                                    <div class="text-center">badges</div>
                                                    <div class="card-group">
                                                        <div class="card" style="height: 50px">
                                                            <img class="card-img-top"
                                                                 style="height: 48px;width: 48px;margin-left: 54px;"
                                                                 src="images2/cons/icons8-gold-medal-48.png"
                                                                 alt="gold">
                                                            <div class="card-body">
                                                                <h5 class="card-title" style="margin-left: 53px;">1</h5>
                                                            </div>
                                                        </div>
                                                        <div class="card" style="height: 50px">
                                                            <img class="card-img-top"
                                                                 style="height: 48px;width: 48px;margin-left: 54px;"
                                                                 src="images2/cons/icons8-silver-medal-48.png"
                                                                 alt="silver">
                                                            <div class="card-body">
                                                                <h5 class="card-title" style="margin-left: 53px;">4</h5>


                                                            </div>
                                                        </div>
                                                        <div class="card" style="height: 50px">
                                                            <img class="card-img-top"
                                                                 style="height: 48px;width: 48px;margin-left: 54px;"
                                                                 src="images2/cons/icons8-bronze-medal-48.png"
                                                                 alt="bronze">
                                                            <div class="card-body">
                                                                <h5 class="card-title" style="margin-left: 53px;">12</h5>

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="col-lg-6">
                                                    <div style="margin-left: 43px;">
                                                        Github
                                                    </div>
                                                    <ul>
                                                        <li>Number of repos : 38</li>
                                                        <li>Followers : 10</li>
                                                        <li>languages used: javascript,python</li>

                                                    </ul>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-12">


                                            <div class="text-center" style="width:100%">


                                                <canvas style="width: 100%" id="canvas"></canvas>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="content" style="margin-top: 1%">
                        <div class="container-fluid">
                            <div class="row">

                                <div class="col-md-12">
                                    <!-- <div class="card"> -->

                                    <!-- Post Metrics Card -->
                                    <div class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Tests Passed</strong></p>
                                                            <p id='smallp'>(Number of Unit Tests Passed)</p>
                                                            <p id='biggestp' style="color:rgb(0, 128, 28);">
                                                                <strong>4</strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Tests Failed</strong></p>
                                                            <p id='smallp'>(Number of Unit Tests Failed)</p>
                                                            <p id='biggestp'><strong>1</strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Violations</strong></p>
                                                            <p id='smallp'>(Total Number of violations)</p>
                                                            <p id='biggestp' style="color:rgb(241, 7, 7);">
                                                                <strong>10</strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Bugs</strong></p>
                                                            <p id='smallp'>(Total Number of Bugs)</p>
                                                            <p id='biggestp'><strong>2</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Vulnerability</strong></p>
                                                            <p id='smallp'>(Security Issues)</p>
                                                            <p id='biggestp' style="color:rgb(241, 7, 7);">
                                                                <strong>5</strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Code Smells</strong></p>
                                                            <p id='smallp'>(Bad Symptom)</p>
                                                            <p id='biggestp'><strong>20</strong></p>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Code Coverage</strong></p>
                                                            <p id='smallp'>(Test coverage)</p>
                                                            <p id='biggestp'><strong>20%</strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Total Complexity</strong></p>
                                                            <p id='smallp'>(Control flow splits)</p>
                                                            <p id='biggestp'><strong>9</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Lines of Code</strong></p>
                                                            <p id='smallp'>(Number of code lines)</p>
                                                            <p id='biggestp'><strong>200</strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Duplications</strong></p>
                                                            <p id='smallp'>(Density of Duplication)</p>
                                                            <p id='biggestp'><strong>5%</strong></p>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Number of Classes</strong></p>
                                                            <p id='smallp'>(Total Number of Classes)</p>
                                                            <p id='biggestp'><strong>7</strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Comments</strong></p>
                                                            <p id='smallp'>(Comment Line Density)</p>
                                                            <p id='biggestp'><strong>10%</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Dependencies</strong></p>
                                                            <p id='smallp'>(Dependencies to cut)</p>
                                                            <p id='biggestp'><strong>6</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Run time</strong></p>
                                                            <p id='smallp'>(In seconds)</p>
                                                            <p id='biggestp'><strong>120</strong></p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Technical Debt Ratio</strong></p>
                                                            <p id='smallp'>(Cost to fix maintainability Issues)</p>
                                                            <p id='biggestp'><strong>3.9%</strong></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="card">
                                                        <div class="criteriaspaces text-center">
                                                            <p id='bigp'><strong>Quality Gates</strong></p>
                                                            <p id='smallp'>(Rate of code quality)</p>
                                                            <p id='biggestp' style="color:green;"><strong>OK</strong></p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>






@stop