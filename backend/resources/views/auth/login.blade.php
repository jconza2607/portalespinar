@extends('layouts.default', [
    'paceTop' => true,
    'appSidebarHide' => true,
    'appHeaderHide' => true,
    'appContentClass' => 'p-0'
])

@section('title', 'Login Page')

@section('content')
<!-- BEGIN login -->
<div class="login login-with-news-feed">
    <!-- BEGIN news-feed -->
    <div class="news-feed">
        <div class="news-image" style="background-image: url(/assets/img/login-bg/login-bg-11.jpg)"></div>
        <div class="news-caption">
            <h4 class="caption-title"><b>Color</b> Admin App</h4>
            <p>
                Download the Color Admin app for iPhone®, iPad®, and Android™. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </p>
        </div>
    </div>
    <!-- END news-feed -->
    
    <!-- BEGIN login-container -->
    <div class="login-container">
        <!-- BEGIN login-header -->
        <div class="login-header mb-30px">
            <div class="brand">
                <div class="d-flex align-items-center">
                    <span class="logo"></span>
                    <b>Color</b> Admin
                </div>
                <small>Bootstrap 5 Responsive Admin Template</small>
            </div>
            <div class="icon">
                <i class="fa fa-sign-in-alt"></i>
            </div>
        </div>
        <!-- END login-header -->
        
        <!-- BEGIN login-content -->
        <div class="login-content">
            <form method="POST" action="{{ route('login') }}" class="fs-13px">
                @csrf

                <!-- Email -->
                <div class="form-floating mb-15px">
                    <input id="email" class="form-control h-45px fs-13px" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" />
                    <label for="email" class="d-flex align-items-center fs-13px text-gray-600">{{ __('Email Address') }}</label>
                </div>

                <!-- Password -->
                <div class="form-floating mb-15px">
                    <input id="password" class="form-control h-45px fs-13px" type="password" name="password" required autocomplete="current-password" />
                    <label for="password" class="d-flex align-items-center fs-13px text-gray-600">{{ __('Password') }}</label>
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-30px">
                    <input class="form-check-input" type="checkbox" id="rememberMe" name="remember" />
                    <label class="form-check-label" for="rememberMe">
                        {{ __('Remember Me') }}
                    </label>
                </div>

                <!-- Submit Button -->
                <div class="mb-15px">
                    <button type="submit" class="btn btn-theme d-block h-45px w-100 btn-lg fs-14px">
                        {{ __('Sign me in') }}
                    </button>
                </div>

                <!-- Register Link -->
                <div class="mb-40px pb-40px text-dark">
                    Not a member yet? Click <a href="{{ route('register') }}" class="text-primary">here</a> to register.
                </div>

                <!-- Footer -->
                <hr class="bg-gray-600 opacity-2" />
                <div class="text-gray-600 text-center text-gray-500-darker mb-0">
                    &copy; Color Admin All Right Reserved 2023
                </div>
            </form>
        </div>
        <!-- END login-content -->
    </div>
    <!-- END login-container -->
</div>
<!-- END login -->
@endsection
