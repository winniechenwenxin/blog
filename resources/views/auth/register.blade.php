@extends('layouts.app')

@section('content')
    <div class="page animsition vertical-align text-center" data-animsition-in="fade-in"
         data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="panel">
                <div class="panel-body">
                    <div class="brand">
                        <img class="brand-img" src="{{url('/vendors/remark/base/assets/images/logo-blue.png')}}" alt="...">
                        <h2 class="brand-text font-size-18">Remark</h2>
                    </div>
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group form-material floating">
                            <input type="text" class="form-control" name="name" />
                            <label class="floating-label">Name</label>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>


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


                        <div class="form-group form-material floating">
                            <input type="password" class="form-control" name="password_confirmation" />
                            <label class="floating-label">Confirm Password</label>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                        </div>


                        <button type="submit" class="btn btn-primary btn-block btn-lg margin-top-40">Register</button>
                    </form>
                    <p>Have account already? Please go to <a href="{{url('/login')}}">Sign In</a></p>
                </div>
            </div>
            <footer class="page-copyright page-copyright-inverse">
                <p>WEBSITE BY amazingSurge</p>
                <p>© 2015. All RIGHT RESERVED.</p>
                <div class="social">
                    <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                        <i class="icon bd-twitter" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                        <i class="icon bd-facebook" aria-hidden="true"></i>
                    </a>
                    <a class="btn btn-icon btn-pure" href="javascript:void(0)">
                        <i class="icon bd-google-plus" aria-hidden="true"></i>
                    </a>
                </div>
            </footer>
        </div>
    </div>
@endsection