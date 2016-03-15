@extends('layouts.app')

@section('content')
    <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
         data-animsition-out="fade-out">>
        <div class="page-content vertical-align-middle">
            <div class="panel">
                <div class="panel-body">
                    <div class="brand">
                        <img class="brand-img" src="{{url('vendors/remark/base/assets/images/logo-blue.png')}}" alt="...">
                        <h2 class="brand-text font-size-18">Remark</h2>
                    </div>
                    <form class="form-horizontal" role="form"  method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group form-material floating">
                            <input type="email" class="form-control" name="email" />
                            <label class="floating-label">Email</label>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group form-material floating">
                            <input type="password" class="form-control" name="password" />
                            <label class="floating-label">Password</label>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group clearfix">
                            <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg pull-left">
                                <input type="checkbox" id="inputCheckbox" name="remember">
                                <label for="inputCheckbox">Remember me</label>
                            </div>
                            <a class="pull-right" href="forgot-password.html">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg margin-top-40">Sign in</button>
                    </form>
                    <p>Still no account? Please go to <a href={{ url('/register') }}>Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection