    <nav id="mynav" class="navbar sticky-top  nav-colored">
        <a class="brandhome codelnlogo" href="">CODELN</a>



        <ul class="nav justify-content-end orient">

            <li class="nav-item">
                <a class="nav-link colorlink" href="/pricing">Pricing</a>
            </li>

            @if (Route::has('login'))

                    @auth

                        <a href="{{ url('/createprojet') }} " class="js-target-scroll nav-link colorlink">My Account</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="js-target-scroll nav-link colorlink">Recruiter</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('candidate.login') }}" class="js-target-scroll nav-link colorlink">Candidate</a>
                    </li>
                    @endauth

            @endif


        </ul>
    </nav>
