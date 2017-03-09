@extends('layouts.app')

@section('content')
<div id="login-page">
    <div class="container">
            <form class="form-login" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                <h2 class="form-login-heading">sign in now</h2>
                    <div class="login-wrap">

                        <div class="login-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input placeholder="E-Mail" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="login-wrap{{ $errors->has('password') ? ' has-error' : '' }}">

                                <input placeholder="Password" id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                                <button type="submit" class="btn btn-theme btn-block"><i class="fa fa-lock"></i>
                                    Login
                                </button>
                                <span class="pull-right">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                                </span>
    <div class="row centered">
    <div class="col-md-6 col-sm-6 col-xs-6">
        <a href="{{ url('redirect/google') }}" class="btn btn-danger"><i class="fa fa-google"></i> Google+</a>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <a href="{{ url('redirect/twitter') }}" class="btn btn-info"><i class="fa fa-twitter"></i> Twitter</a>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6" style="padding-top: 10px">
        <a href="{{ url('redirect/facebook') }}" class="btn btn-primary"><i class="fa fa-facebook"></i> Facebook</a>
    </div>
    </div>
    </div>
                    </div>
            </form>       
    </div>
</div>
<br/>
@endsection
