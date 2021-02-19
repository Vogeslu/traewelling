<head>
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
</head>


<div class="sidenav flex-center full-height">
                <div class="videoContainer">
                    <div class="overlay"></div>
                    <video loop muted autoplay class="fullscreen-bg__video">
                        <source src="{{ asset('img/vid1.mp4') }}" type="video/mp4">
                    </video>
                </div>
    <div class="login-main-text content">
        <h2>Application<br> Login Page</h2>
        <p>Login or register from here to access.</p>
        <div class="container text-left">
            <ul class="text-white">
                <li>
                    <span class="font-weight-bold">1768 Mio</span>
                    <span>kilometer</span></li>
                <li>
                    <span class="font-weight-bold">17 Tage, 23 Stunden</span>
                    <span>unterwegs</span></li>
                <li>
                    <span class="font-weight-bold">120 km/h</span>
                    <span class="text-light">durchschnittlich</span></li>
            </ul></div>
    </div>
</div>
<div class="main">
    <div class="col-md-6 col-sm-12">
        <div class="login-form">
{{--            <form>--}}
{{--                <div class="form-group">--}}
{{--                    <label>User Name</label>--}}
{{--                    <input type="text" class="form-control" placeholder="User Name">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label>Password</label>--}}
{{--                    <input type="password" class="form-control" placeholder="Password">--}}
{{--                </div>--}}
{{--                <button type="submit" class="btn btn-black">Login</button>--}}
{{--                <button type="submit" class="btn btn-secondary">Register</button>--}}
{{--            </form>--}}
            <form class="p-5">
                <p class="h1 mb-4">Träwelling</p>


                <input type="email" id="defaultLoginFormEmail" class="form-control mb-3" placeholder="E-mail">

                <input type="password" id="defaultLoginFormPassword" class="form-control mb-3" placeholder="Password">

                <div class="d-flex justify-content-between">
                    <div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                            <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
                        </div>
                    </div>
                    <div>
                        <a href="">Forgot password?</a>
                    </div>
                </div>

                <button class="btn btn-info my-3 waves-effect waves-light" type="submit">Sign in</button>
                <button type="submit" class="btn btn-light my-3 px-3 waves-effect waves-light float-right">Register</button>

                <div class="text-center">


                    <p class="mb-1">or sign in with:</p>

                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-google"></i>
                    </a>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-apple"></i>
                    </a>
                    <a type="button" class="light-blue-text mx-2">
                        <i class="fab fa-mastodon"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--        <meta name="mobile-web-app-capable" content="yes">--}}
{{--        <meta name="theme-color" content="#c72730">--}}
{{--        <meta name="name" content="{{ config('app.name') }}">--}}
{{--        <link rel="author" href="/humans.txt">--}}
{{--        <meta name="copyright" content="Träwelling Team">--}}
{{--        <meta name="description" content="{{__('about.block1')}}">--}}
{{--        <meta name="keywords" content="Träwelling, Twitter, Deutsche, Bahn, Travel, Check-In, Zug, Bus, Tram, Mastodon">--}}
{{--        <meta name="audience" content="Travellers">--}}
{{--        <meta name="robots" content="index, nofollow">--}}
{{--        <meta name="DC.Rights" content="Träwelling Team">--}}
{{--        <meta name="DC.Description" content="{{__('about.block1')}}">--}}
{{--        <meta name="DC.Language" content="de">--}}

{{--        <link rel="shortcutt favicon" rel="{{ asset('images/icons/favicon.ico') }}">--}}
{{--        <link rel="shortcut icon" sizes="512x512" href="{{ asset('images/icons/logo512.png') }}">--}}
{{--        <link rel="shortcut icon" sizes="128x128" href="{{ asset('images/icons/logo128.png') }}">--}}

{{--        <link href="{{ asset('fonts/Nunito/Nunito.css') }}" rel="stylesheet">--}}
{{--        <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">--}}

{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            <div class="videoContainer">--}}
{{--                <div class="overlay"></div>--}}
{{--                <video loop muted autoplay class="fullscreen-bg__video">--}}
{{--                    <source src="{{ asset('img/vid1.mp4') }}" type="video/mp4">--}}
{{--                </video>--}}
{{--            </div>--}}
{{--            <div class="top-right links">--}}
{{--                @auth--}}
{{--                    <a href="{{ url('/dashboard') }}">{{__('menu.dashboard')}}</a>--}}
{{--                @else--}}
{{--                    <a href="{{ route('login') }}">{{__('menu.login')}}</a>--}}

{{--                    @if (Route::has('register'))--}}
{{--                        <a href="{{ route('register') }}">{{__('menu.register')}}</a>--}}
{{--                    @endif--}}
{{--                @endauth--}}
{{--            </div>--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="{{ url('/auth/redirect/twitter') }}">Twitter</a>--}}
{{--                    <a href="{{ url('/login') }}">Mastodon</a>--}}
{{--                </div>--}}
{{--                <div class="links">--}}
{{--                    <a href="{{ url('/leaderboard') }}">{{__('menu.leaderboard')}}</a>--}}
{{--                    <a href="{{ route('static.about') }}">{{ __('menu.about')}}</a>--}}
{{--                    <a href="{{ url('/statuses/active') }}">{{__('menu.active')}}</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="bottom-center links" style="">--}}
{{--                <a href="{{ route('static.privacy') }}">{{ __('menu.privacy') }}</a>--}}

{{--                <a href="{{ route('static.imprint') }}">{{ __('menu.imprint') }}</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}
