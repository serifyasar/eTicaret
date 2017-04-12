@extends('layouts.pagelayout')

@section('content')

@php(

$cats=\App\Category::all()
)

    <section class="header_text sub">
        <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
        <h4><span>Login or Regsiter</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span5">
                <h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
                <form  role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="next" value="/">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label">Username</label>
                            <div class="controls">


                                <input id="email" type="email" placeholder="Enter your email" class="input-xlarge" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Password</label>
                            <div class="controls">

                                <input id="password"  placeholder="Enter your password" type="password" class="input-xlarge" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>          <div class="control-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="control-group">
                            <input tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
                            <hr>
                            <p class="reset">Recover your <a tabindex="4" href="{{ route('password.request') }}" title="Recover your username or password">username or password</a></p>
                        </div>



                    </fieldset>
                </form>
            </div>
            <div class="span7">
                <h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
                <form class="form-stacked" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}


                    <div class="control-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">Username</label>
                        <div class="controls">
                            <input id="name" type="text" class="input-xlarge" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>




                    <div class="control-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Surname</label>

                        <div class="col-md-6">
                            <input id="surname" type="text"  class="input-xlarge" name="surname" value="{{ old('surname') }}" required autofocus>

                            @if ($errors->has('surname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="control-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="input-xlarge" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="control-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="input-xlarge" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="input-xlarge" name="password_confirmation" required>
                        </div>
                    </div>






                        <hr>
                        <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
                    </fieldset>
                </form>
            </div>
        </div>
    </section>


@endsection