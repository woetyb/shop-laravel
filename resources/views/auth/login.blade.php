
<!doctype html>
<html lang="en">

<head>
    <title>:: Mplify :: Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Mplify Bootstrap 4.1.1 Admin Template">
    <meta name="author" content="ThemeMakker, design by: ThemeMakker.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('st-admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('st-admin/assets/vendor/animate-css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('st-admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('st-admin/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('st-admin/assets/css/color_skins.css')}}">
</head>

<body class="theme-blue">
<!-- WRAPPER -->
<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle auth-main">
            <div class="auth-box">
                <div class="mobile-logo"><a href="index.html"><img src="{{asset('st-admin/assets/images/logo-icon.svg')}}" alt="Mplify"></a></div>
                <div class="auth-left">
                    <div class="left-top">
                        <a href="index.html">
                            <img src="{{asset('st-admin/assets/images/logo-icon.svg')}}" alt="Mplify">
                            <span>Mplify</span>
                        </a>
                    </div>
                    <div class="left-slider">
                        <img src="{{asset('st-admin/assets/images/login/1.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="auth-right">
                    <div class="right-top">
                        <ul class="list-unstyled clearfix d-flex">
                            <li><a href="index.html"><i class="fa fa-home"></i></a></li>
                            <li><a href="javascript:void(0);">Help</a></li>
                            <li><a href="javascript:void(0);">Contact</a></li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Log in</p>
                        </div>
                        <div class="body">
                            <form method="POST" class="form-auth-small" action="{{ route('login') }}">
                                    @csrf
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"  name="email" value="{{ old('email') }}" required autofocus  placeholder="User Name">

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  placeholder="Password" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox">
                                        <span>Remember me</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{route('password.request')}}">Forgot password?</a></span>
                                    <span>Don't have an account? <a href="{{route('register')}}">Register</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END WRAPPER -->
</body>
</html>
