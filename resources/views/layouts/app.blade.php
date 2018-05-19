<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="crt crt-side-box-on crt-nav-on crt-nav-type2 crt-main-nav-on crt-sidebar-on crt-layers-1">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Lina_Curriculum_Vitae') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css"></script>

    <title>Mon CV </title>
    <meta name="description" content="">

    <link rel="apple-touch-icon" href="{{URL::asset('assets/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{URL::asset('assets/favicon.ico')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,700" rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="{{ URL::asset('assets/fonts/icomoon/style.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{URL::asset('assets/css/plugins.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/style.min.css')}}" rel="stylesheet">
    <style>
        a:link {
            text-decoration: none;
        }
    </style>
    <!-- Modernizer -->
    <script type="text/javascript" src="{{URL::asset('assets/js/vendor/modernizr-3.3.1.min.js')}}"></script>



</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('', 'Curriculum Vitae') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                            <li><a href="/">Mon CV</a></li>
                            <li><a href="/projets">Mes projets</a></li>
                            <li><a href="/messages">Mes messages</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <!-- .crt-wrapper -->

    <!-- Scripts -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.12.4.min.js"><\/script>')</script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiwY_5J2Bkv2UgSeJa4NOKl6WUezSS9XA"></script>

    <script type="text/javascript" src="assets/js/plugins.min.js"></script>
    <script type="text/javascript" src="assets/js/theme.min.js"></script>

</body>
</html>
