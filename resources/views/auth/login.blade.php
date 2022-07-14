<html lang="en">

<head>
<title>Masuk - CV-Online</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<link rel="icon" href="{{asset('cv/logo.png')}}" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/animate-css/vivify.min.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('assets/css/site.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/animation.css')}}">

</head>

<body class="theme-cyan font-montserrat light_version">

<!-- Page Loader -->
@extends('layouts._loader')
                @if(session()->has('message'))
                
            <p class="alert alert-info text-center">
                {{ session()->get('message') }}
            </p>
        @endif
<div class="auth-main2 particles_js">
    <div class="auth_div vivify fadeInTop">
        <div class="card">
            <div class="body justify-content-around">
            <div class="login-img">
                    @include('auth.svg.login-svg')
                </div>

                <form class="form-auth-small my-auto" action="{{route('login')}}" method="post">
                    <img src="{{asset('cv/cv3.png')}}" alt="Smart School Logo" class="img-fluid">
                    {{ csrf_field() }}

                    <p class="text-center" style="font-size: 12px;">Silahkan masukan E-mail & password anda.</p>

                    <div class="form-group">
                        <label for="email" class="control-label sr-only">E-mail</label>
                        <input type="email" name="email" class="form-control" required autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
                    </div>
                    <div class="form-group">
                        <label for="signin-password" class="control-label sr-only">Password</label>
                        <input type="password" name="password" class="form-control" required placeholder="{{ trans('global.login_password') }}">
                @if($errors->has('password'))
                    <p class="help-block">
                        {{ $errors->first('password') }}
                    </p>
                @endif
                    </div>
                    <div class="form-group clearfix">
                        <label class="fancy-checkbox element-left">
                            <input type="checkbox" name="remember">
                            <span>Ingat saya</span>
                            <a href="{{ route('register') }}">
            Daftar
        </a>
                        </label>
                    </div>
                    <button type="submit" class="btn bg-blue-2 text-white btn-round btn-block">MASUK</button>
                </form>
                <div class="pattern">                   
                    <span class="blue"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->

<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>