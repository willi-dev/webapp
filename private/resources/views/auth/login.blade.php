@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6 push-m3">
                <div class="card-panel ">
                    <div class="card-content">
                        <span class="card-title">Login</span>
                        <form class="" role="form" method="POST" action="{{ url('/login') }}">
                            <div class="row">
                            {{ csrf_field() }}
                            <div class="input-field col s12">
                                <label for="email" class="">E-Mail Address</label>
                                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" placeholder="Email Address">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="input-field col s12">
                                <label for="password" class="">Password</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="input-field col s12">
                                <input type="checkbox" name="remember" class="filled-in" id="filled-in-box">
                                <label for="filled-in-box"> Remember Me</label>
                            </div>
                            
                            <div class="input-field col s12">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>
                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>

                            </div>
                         </form>
                    </div>
                </div>
           </div>
        </div>
    </div>
@endsection