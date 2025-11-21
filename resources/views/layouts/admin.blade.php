<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="GeniusOcean">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dealer</title>
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/icofont.min.css') }}">
    <link href="{{ asset('assets/admin/css/plugin.css') }}" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-colorpicker@3.4.0/dist/css/bootstrap-colorpicker.min.css">

    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/admin/css/responsive.css') }}" rel="stylesheet" />

    @yield('styles')
</head>
<body>
    <div class="page">
        <div class="page-main">
            <!-- Header Menu Area Start -->
            <div class="header">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="menu-toggle-button mt-3">
                            <a class="" href="/admin" id="sidebarCollapse">
                                <img src="{{asset('assets/images/logo.png')}}" alt="MoniSa Enterprise"></a>
                        </div>
                        <div class="right-eliment">
                            <ul class="list">
                                <li class="bell-area">
                                    <a id="notf_conv" class="dropdown-toggle-1" href="javascript:;">
                                        <i class="far fa-envelope"></i>
                                        <span id="conv-notf-count">0</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdownmenu-wrapper" id="conv-notf-show">
                                        </div>
                                    </div>
                                </li>
                                <li class="login-profile-area">
                                    <a class="dropdown-toggle-1" href="javascript:;">
                                        <div class="user-img">
                                            <img src="{{ Auth::guard('admin')->user()->photo ? asset('assets/images/admins/' . Auth::guard('admin')->user()->photo) : asset('assets/images/noimage.png') }}"
                                                alt="">
                                        </div>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdownmenu-wrapper">
                                            <ul>
                                                <h5>{{ __('Welcome!') }}</h5>
                                                <li>
                                                    <a href="{{ route('admin.logout') }}"><i
                                                            class="fas fa-power-off"></i> {{ __('Logout') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <nav id="sidebar" class="nav-sidebar">
                    <ul class="list-unstyled components" id="accordion">
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="wave-effect active"><i
                                    class="fa fa-home mr-2"></i>{{ __('Dashboard') }}</a>
                        </li>
                        @include('includes.admin.roles.super')
                    </ul>
                </nav>
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Dashboard Core -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-colorpicker@3.4.0/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="{{ asset('assets/admin/js/jqueryui.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/plugin.js') }}"></script>
    <script src="{{ asset('assets/admin/js/load.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/myscript.js') }}"></script>
    <script src="{{ asset('assets/admin/js/nicEdit.js') }}"></script>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    @yield('scripts')

</body>

</html>