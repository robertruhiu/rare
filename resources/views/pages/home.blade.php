@extends('layouts.default')
@section('content')
    <section class="jumbotron jumbo">

        <div class="row rowalign">
            <div class="col-lg-6 intro">
                <div class="text-center">
                    <div>
                        <h1>Are you Hiring Tech Talent?</h1>
                        <h3>We validate the Programming Skills of your Potential Employees.</h3>
                        <div class=''>
                            <br>
                            <a class="btn btn-warning" href="/signup">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <img class="beer1" src="images2/home/1.png">

            </div>
        </div>


    </section>
    <!--how it works-->
    <section class="jumbotron jumbo1">
        <div class="row" style="margin-left: 0;margin-right: 0">
            <div class="col-lg-12 text-center h2">
                How it works

            </div>

        </div>



        <nav>
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-center">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="border-bottom: 0px;margin-bottom: 1%">
                            <a class="btn btn-primary" id="nav-home-tab" data-toggle="tab" href="#nav-home" aria-controls="nav-home" >For recruiters</a>
                            <a class="btn btn-success" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" aria-controls="nav-profile">For Developers</a>
                        </div>
                    </div>
                </div>
            </div>

        </nav>
        <div class="tab-content" id="nav-tabContent" style="margin-top: 3%">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row ">
                    <div class="col-lg-3 d-flex justify-content-center how">
                        <div class="card howcard">
                            <img class="card-img-top cad1" src="images2/home/app.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center">Select project</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center how">
                        <div class="card howcard">
                            <img class="card-img-top cad1" src="images2/home/variable.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center">Pick tech stack</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 d-flex justify-content-center how">
                        <div class="card howcard">
                            <img class="card-img-top" src="images2/home/send.png" alt="Card image cap" style="width: 54%;margin-left: 20%">
                            <div class="card-body">
                                <p class="card-text text-center">Send out invites</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center how">
                        <div class="card howcard">
                            <img class="card-img-top cad1" src="images2/home/report.png" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center">Receive report</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="row " style="margin-top: 2%">
                    <div class="col-sm-2 d-flex justify-content-center how">
                        <div class="card howcard">
                            <img class="card-img-top cad" src="images2/home/mail.png" alt="Card image cap" >
                            <div class="card-body">
                                <p class="card-text text-center">Receives invite</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 d-flex justify-content-center how">
                        <div class="card howcard">
                            <img class="card-img-top cad" src="images2/home/coding.png" alt="Card image cap" >
                            <div class="card-body">
                                <p class="card-text text-center">Gets access to Codeln IDE</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 d-flex justify-content-center how">
                        <div class="card howcard">
                            <img class="card-img-top cad" src="images2/home/list.png" alt="Card image cap" >
                            <div class="card-body">
                                <p class="card-text text-center">Works on deliverables </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 d-flex justify-content-center how">
                        <div class="card howcard">
                            <img class="card-img-top cad" src="images2/home/planning.png" alt="Card image cap" >
                            <div class="card-body">
                                <p class="card-text text-center">Code gets analyzed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 d-flex justify-content-center how">
                        <div class="card howcard">
                            <img class="card-img-top cad" src="images2/home/code.png" alt="Card image cap" >
                            <div class="card-body">
                                <p class="card-text text-center">Report is generated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--features-->
    <section  class="jumbotron jumbo1">
        <div class="row" style="margin-left: 0;margin-right: 0">
            <div class="col-lg-12 text-center h2">
                Features
                <br> <br>
            </div>

            <div class='row' style="margin-left: 0;margin-right: 0">
                <div class='col-md-3'>
                    <div class='little-box'>
                        <h5 class="text-center"> <strong>Project Library </strong></h5>
                        <p> We offer  Workplace Sample Coding Tests which from research has proven to be a trusted indicator of a Programmer’s prowess. </p>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class='little-box'>
                        <h5 class="text-center"> <strong>IDE & Proctoring</strong></h5>
                        <p>We offer a user-friendly IDE with required tech stack pre-installed for the Candidate. We also offer cheat protection using AI monitoring</p>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class='little-box'>
                        <h5 class="text-center"> <strong>Analysis & Evaluation</strong></h5>
                        <p>We analyze the code of the Project, benchmark them against key metrics and provide a comprehensive report</p>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class='little-box'>
                        <h5 class="text-center"> <strong>Holistic Automation</strong></h5>
                        <p>Seamless Integration with your preferred Applicant Tracking System</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--benefits-->
    <section class="jumbotron jumbo1">
        <div class="row" style="margin-left: 0;margin-right: 0">
            <div class="col-lg-12 text-center h2">
                Benefits
            </div>
        </div>
        <div class="row" style="margin-left: 0;margin-right: 0">
            <div class="col-lg-5 ">
                <div class="card noed">
                    <img class="card-img-top yum" src="images2/home/benefit.png" alt="Card image benefits">

                </div>
            </div>
            <div class="col-lg-7">
                <div class="row how2 ">
                    <div class="col-lg-6">
                        <div class="card noed" style="width: 18rem;">
                            <div class="card-body">
                                <div>
                                    <img class="card-img-top benefit  " src="images2/home/bank.svg" alt="Card image cost">
                                </div>
                                <h6 class="card-subtitle mb-2 ">Reduce Recruitment Cost</h6>
                                <p class="card-text text-muted">
                                    Save money, reduce overall recruitment cost
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card noed" style="width: 18rem;">
                            <div class="card-body">
                                <div>
                                    <img class="card-img-top benefit" src="images2/home/time.svg" alt="Card image time">
                                </div>
                                <h6 class="card-subtitle mb-2 ">Reduce Recruitment time </h6>
                                <p class="card-text text-muted">Save time, reduce overall hiring time</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row how2">
                    <div class="col-lg-6">
                        <div class="card noed" style="width: 18rem;">
                            <div class="card-body">
                                <div>
                                    <img class="card-img-top benefit" src="images2/home/screen.svg" alt="Card image skills">
                                </div>
                                <h6 class="card-subtitle mb-2 ">Validate Candidate’s Skills</h6>
                                <p class="card-text text-muted">Verify a Candidate’s ability to build real-world projects</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card noed" style="width: 18rem;">
                            <div class="card-body">
                                <div>
                                    <img class="card-img-top benefit" src="images2/home/workplace.svg"
                                         alt="Card image quality">
                                </div>
                                <h6 class="card-subtitle mb-2 ">Improve the quality of hire</h6>
                                <p class="card-text text-muted">
                                    Hiring a skills-fit reduces Employee turnover rate.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!--get started-->
    <section class="jumbotron jumbo2">
        <div class="row" style="margin-left: 0;margin-right: 0">
            <div class="col-md-6 text-center">
                <p class="h3">Get started</p>
            </div>
            <div class="col-md-6 text-center">
                <a class="btn btn-primary" href="/signup">Recruiter</a> &nbsp;
                <a class="btn forbtn" href="/dev">Invited for test?</a>


            </div>
        </div>
    </section>

    <!--devs section-->
    <section class="jumbotron jumbo7">
        <div class="row">
            <div class="col-lg-12 text-center h2">
                Developer benefits
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 ">
                <div class="card noed">
                    <img class="card-img-top yum" src="https://cdn.dribbble.com/users/77598/screenshots/4308169/dribbble1.png" alt="Card image cap">

                </div>
            </div>
            <div class="col-lg-7">
                <div class="row how2 ">
                    <div class="col-lg-6">
                        <div class="card noed" style="width: 18rem;">
                            <div class="card-body">
                                <div>
                                    <img class="card-img-top benefit  " src="images2/home/students.svg" alt="Card image cap">
                                </div>
                                <h6 class="card-subtitle mb-2 ">Codeln score</h6>
                                <p class="card-text text-muted">
                                    Project completion is your grind to achieve the highest score.The score is a mean performance across the various roles.A higher score merits priority  in all recruitment drives being carried out.
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card noed" style="width: 18rem;">
                            <div class="card-body">
                                <div>
                                    <img class="card-img-top benefit" src="images2/home/user.svg" alt="Card image cap">
                                </div>
                                <h6 class="card-subtitle mb-2 ">Skill improvement </h6>
                                <p class="card-text text-muted">
                                    Codeln project library creation embraces programming concepts as its base to create  project scenarios.The projects will be challenging and a great learning experience.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row how2">
                    <div class="col-lg-6">
                        <div class="card noed" style="width: 18rem;">
                            <div class="card-body">
                                <div>
                                    <img class="card-img-top benefit" src="images2/home/port.svg" alt="Card image cap">
                                </div>
                                <h6 class="card-subtitle mb-2 ">Portfolio</h6>
                                <p class="card-text text-muted">Codeln will serve as showroom for all your past projects.Deploy them send us a link,we will grade them and serve them up as part of your competencies.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </section>

    <!--our friends-->
    <section class="jumbotron jumbo5">
        <div class="row" style="margin-left: 0;margin-right: 0">
            <div class="col-lg-12 text-center ">
                <h2>Our Friends</h2>

            </div>

        </div>

        <div class="row" style="margin-top: 5%;margin-left: 0;margin-right: 0">
            <div class="col-lg-3 mel d-flex justify-content-center">

                <div class="card lang ">
                    <img class="card-img-top " src="images2/home/meltwater.png" alt="Card image meltwater">
                </div>

            </div>


            <div class="col-lg-3 mel d-flex justify-content-center">


                <div class="card lang ">
                    <img class="card-img-top " src="images2/home/enpact1.png" alt="Card image enpact">
                </div>
            </div>

            <div class="col-lg-3 mel d-flex justify-content-center">
                <div class="card lang ">
                    <img class="card-img-top " src="images2/home/fbk.png" alt="Card image facebook">
                </div>


            </div>


            <div class="col-lg-3 mel d-flex justify-content-center">
                <div class="card lang ">
                    <img class="card-img-top " src="images2/home/mest.png" alt="Card image mest">
                </div>


            </div>




        </div>





    </section>



    <!--footer-->
    <footer class="jumbotron jumbofoot">
        <div class="container">
            <div class="row">
                <div class="directory col-xs-6 col-sm-3">
                    <h3 class="directory-title">Products</h3>
                    <ul class="directory-items list-unstyled">
                        <li><a class="colorlink" href="/pair">Pair programming</a></li>
                        <li><a class="colorlink" href="/video">Video proctor</a></li>

                    </ul>
                </div>
                <div class="directory col-xs-6 col-sm-3">
                    <h3 class="directory-title">Company</h3>
                    <ul class="directory-items list-unstyled">
                        <li><a class="colorlink" href="/about">About us</a></li>
                        <li><a class="colorlink" href="/careers">Careers</a></li>
                        <li><a class="colorlink" href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="directory col-xs-6 col-sm-3">
                    <h3 class="directory-title">Resources</h3>
                    <ul class="directory-items list-unstyled">
                        <li><a class="colorlink" href="#">Contact us</a></li>
                        <li><a class="colorlink" href="#">Help center</a></li>

                    </ul>
                </div>
                <div class="directory col-xs-6 col-sm-3">
                    <h3 class="directory-title">Follow</h3>
                    <ul class="directory-items list-unstyled">
                        <li>
                            <a href="https://twitter.com/Codeln_spaces" target="_blank">
                                <i><span data-feather="twitter"></span></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/codeln/" target="_blank">
                                <i><span data-feather="linkedin"></span></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



@stop