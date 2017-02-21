@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12 m6 push-m3">
                <div class="card-panel hoverable ">
                    <div class="card-content">
                        <span class="card-title">Register</span>
                        <form class="" role="form" method="POST" action="{{ url('/register') }}">
                            <div class="row">
                                {{ csrf_field() }}
                                
                                <div class="input-field col s12{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="">Name</label>
                                    <input id="name" type="text" class="" name="name" value="{{ old('name') }}" placeholder="Type your name here...">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-field col s12{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Type your email here...">

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="input-field col s12{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="">Password</label>
                                    <input id="password" type="password" class="" name="password" placeholder="Type your password here...">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="input-field col s12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    <label for="password-confirm" class="">Confirm Password</label>
                                    <input id="password-confirm" type="password" class="" name="password_confirmation" placeholder="Please re-type your password here...">

                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                <div class="input-field col s12">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i> Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
