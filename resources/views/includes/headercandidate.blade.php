<div class="container-fluid">
    <div class="row" style="height: 70vmax">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar" >
            <div class="row" style="width: 100%">
                <div class="col-lg-12">
                    <div>
                        <a class="brandhome codelnlogo" style="text-decoration: none" href="{{ route('candidate.home') }}">CODELN</a>
                    </div>

                </div>
            </div>

            <div class="sidebar-sticky">
                <ul class="nav ">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('candidate.home') }}">
                            <span data-feather="home"></span>
                            Home <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('candidate.calltoapply') }}">
                            <span data-feather="file"></span>
                            Call to Apply
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('candidate.pendingproject') }}">
                            <span data-feather="users"></span>
                            Pending projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../candidate/myresume">

                            My resume
                            <span class="badge badge-primary">20% complete</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">



