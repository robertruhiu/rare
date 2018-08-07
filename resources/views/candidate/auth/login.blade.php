@extends('candidate.layout.auth')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cardno great gr">
                    <div class="card-body">

                        <img class="beer" src="https://cdn.dribbble.com/users/77598/screenshots/4308169/dribbble1.png">
                        <div class="h4">Showcase your skills.</div>


                    </div>
                </div>


            </div>
            <div class="col-lg-4" style="margin-top: 6%">
                <h5>Developer login</h5>
                <form method="POST" action="{{ url('/candidate/login') }}">
                    @csrf

                    <div >
                        <label for="email" >{{ __('E-Mail Address') }}</label>

                        <div >
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div >
                        <label for="password" >{{ __('Password') }}</label>

                        <div >
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div >
                        <div >
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div >
                        <div >
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            <a class="btn btn-link" href="{{ route('candidate.register') }}">
                                {{ __('I don t have a account') }}
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>


@endsection
