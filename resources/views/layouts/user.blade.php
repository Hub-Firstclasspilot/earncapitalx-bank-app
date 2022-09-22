<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Earncapitalx User Screen - {{ $title ?? "" }}</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon.png') }}">
    <!-- Pignose Calender -->
    <link href="{{ asset('assets/back/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/back/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets/back/css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/front/css/theme-styles.min.css') }}">
	<link href="https://unpkg.com/micromodal/dist/micromodal.min.js" rel="stylesheet">
    @livewireStyles
    @stack('styles')
    <style>
        .btn {
            -webkit-border-radius: 5px;
            border-radius: 5px;
            height: 40px;
            line-height: 40px;
            color: #fff;
            -webkit-transition: background-color .4s, color .4s, -webkit-box-shadow .4s;
            transition: background-color .4s, color .4s, -webkit-box-shadow .4s;
            -o-transition: background-color .4s, color .4s, box-shadow .4s;
            transition: background-color .4s, color .4s, box-shadow .4s;
            transition: background-color .4s, color .4s, box-shadow .4s, -webkit-box-shadow .4s;
            font-size: 16px;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            border: none;
            font-family: fontello;
            font-weight: 600;
            letter-spacing: .8px;
            width: 70%;
        }

        .btn--height {
            height:45px;
        }

        .btn--medium {
            padding: 0 40px;
            width: 40%;
        }

        .btn--big {
            padding: 0 60px;
        }

        .btn--small {
            padding: 0 30px;
        }

        .btn--uppercase {
            text-transform: uppercase;
            font-size: 14px;
        }

        .btn--lowercase {
            text-transform: lowercase;
            font-size: 14px;
        }

        .btn--capitalize {
            text-transform: capitalize;
            font-size: 14px;
        }


        .btn--mb-2 {
            margin-bottom: 10px;
        }

        .btn-padding {
            padding-top: 0.5rem;
            padding-bottom:0.5rem;
        }

        .btn--yellow {
            background-color: transparent;
            border:2px solid #FFBA00;
            color: #FFBA00;
        }

        .input--yellow, .input--yellow:focus{
            background: transparent;
            color: #FFBA00;
            outline: #FFBA00;
            border:1px solid #FFBA00;
            border-radius:5px;
        }

        .btn--yellow:hover {
            background-color: #FFBA00;
            border: none;
            color: #fff;
        }

        .dark--bg {
            -webkit-text-size-adjust: 100%;
            box-sizing: border-box;
            font-size: 16px;
            position: relative;
            height:100%;
            background-image: url(assets/front/img/body-bg.png);
            background-color: #16181d;
            color: #a1abbd;
            font-family: Gilroy-Light, Arial, "Helvetica Neue", Helvetica, serif, sans-serif;
            font-weight: 400;
            line-height: 1.63;
            letter-spacing: -.001em;
            margin: 0;
        }

        .card-regular {
            -webkit-text-size-adjust: 100%;
            font-size: 16px;
            color: #a1abbd;
            font-family: Gilroy-Light, Arial, "Helvetica Neue", Helvetica, serif, sans-serif;
            font-weight: 400;
            line-height: 1.63;
            letter-spacing: -.001em;
            box-sizing: border-box;
            background-image: url(assets/front/img/countdown-bg1.png);
            padding: 80px;
            border-radius: 20px;
            background-color: #141519;
            box-shadow: 0 80px 110px 0 rgba(0,0,0,.3);
            background-repeat: no-repeat;
            background-position: 50% 50%;
            text-align: center;
        }

        .img-container {
            width: 20%;
            height: 12.5vh;
            background: transparent;
            border:1px solid #FFBA00;
            border-radius: 5px;
            text-align: center;
            color: #FFBA00;
            padding: .5% 0;
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .reset{
            border: none;
            padding: none;
        }

        .card-gradient {
            background: rgba(0,0,0,.5);
            color: #fff;
        }
    </style>
</head>

<body class="dark--bg">
    @php
        $user = auth()->user();
    @endphp
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header d-none d-md-block d-lg-block d-xl-block" style="background: #141519; color: #fff; margin-bottom: 2rem;">
            <div class="brand-logo">
                <a href="{{ route('user.dashboard') }}">
                    <img src="{{ asset('favicon.png') }}" alt="Earncapitalx" style="height:40px; width:40px;">
					<span>Earncapitalx</span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header" style="margin-right: 1rem;">
            <div class="clearfix header-content">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-right mr-2">
                    <ul class="clearfix">
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>{{ auth()->user()->name }}</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                       <li>
                                            <a href="{{ route('user.profile') }}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>

                                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                <i class="icon-key"></i> <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="{{ asset(auth()->user()->avatar) }}" height="40" width="40">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="{{ route('user.profile') }}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>

                                        <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon-key"></i> <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--********************************** -->
        <x-dash-sidebar />
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" style="min-height: 600px;">
            @yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    @include('sweetalert::alert')
    @stack('js')
    <script src="{{ asset('assets/back/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('assets/back/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/back/js/settings.js') }}"></script>
    <script src="{{ asset('assets/back/js/gleek.js') }}"></script>
    <script src="{{ asset('assets/back/js/styleSwitcher.js') }}"></script>
    <!-- Chartjs -->
    <script src="{{ asset('assets/back/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('assets/back/plugins/circle-progress/circle-progress.min.js') }}"></script>
    <!-- Datamap -->
    <script src="{{ asset('assets/back/plugins/d3v3/index.js') }}"></script>
    <script src="{{ asset('assets/back//plugins/topojson/topojson.min.js') }}"></script>
    <script src="{{ asset('assets/back/plugins/datamaps/datamaps.world.min.js') }}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('assets/back/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/back/plugins/morris/morris.min.js') }}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('assets/back/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/back/plugins/pg-calendar/js/pignose.calendar.min.js') }}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('assets/back/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/back/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/back/js/dashboard/dashboard-1.js') }}"></script>
    @livewireScripts
    @stack('scripts')
    <script src="//code.tidio.co/lbjhyo4cve59urv8bdl9fk37wv0msn5n.js" async></script>
</body>
</html>
