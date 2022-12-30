<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Fanimic Global Resources" />
    <meta name="description" content="Fanimic Global Resources" />
    <meta name="Fanimic Global Resources" content="Fanimic Global Resources" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title')</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/favicon1.png') }}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css') }}"/>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css') }}"/>

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/owl.carousel.css') }}">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.css') }}"/>

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/themify-icons.css') }}"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/flaticon.css') }}"/>


    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/layers.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/revolution/css/settings.css') }}">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/prettyPhoto.css') }}">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/shortcodes.css') }}"/>

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/main.css') }}"/>

    <!--Color Switcher Mockup-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/color-switcher.css') }}" >

    <!--Color Themes-->
    <link id="switcher-color" href="{{ asset('frontend/css/colors/default-color.css') }}" rel="stylesheet">

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css') }}"/>


</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        @include("frontend.body.header")
        <!--header end-->

        @yield("home_frontend")



        <!--footer start-->
        @include("frontend.body.footer")
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

        <!-- Color Palate / Color Switcher -->
        <div class="color-switcher">
            <div class="color-trigger">
                <i class="fa fa-gear"></i>
            </div>
            <div class="color-switcher-header">
                <h6>Switcher Colors</h6>
            </div>
            <div class="various-color clearfix">
                <div class="colors-list">
                    <span class="theme-color default-color active" data-file="css/colors/default-color.css"></span>
                    <span class="theme-color theme-color1" data-file="css/colors/theme-color1.css"></span>
                    <span class="theme-color theme-color2" data-file="css/colors/theme-color2.css"></span>
                    <span class="theme-color theme-color3" data-file="css/colors/theme-color3.css"></span>
                    <span class="theme-color theme-color4" data-file="css/colors/theme-color4.css"></span>
                    <span class="theme-color theme-color5" data-file="css/colors/theme-color5.css"></span>
                </div>
            </div>
        </div>

    </div><!-- page end -->


    <!-- Javascript -->


    <script src="{{ asset('frontend/js/jquery.min.js') }} "></script>
    <script src="{{ asset('frontend/js/tether.min.js') }} "></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('frontend/js/color-switcher.js') }} "></script>
    <script src="{{ asset('frontend/js/jquery.easing.js') }} "></script>
    <script src="{{ asset('frontend/js/jquery-waypoints.js') }} "></script>
    <script src="{{ asset('frontend/js/jquery-validate.js') }} "></script>
    <script src="{{ asset('frontend/js/owl.carousel.js') }} "></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }} "></script>
    <script src="{{ asset('frontend/js/numinate.min6959.js?ver=4.9.3') }} "></script>
    <script src="{{ asset('frontend/js/main.js') }} "></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('frontend/revolution/js/jquery.themepunch.tools.min.js') }} "></script>
    <script src="{{ asset('frontend/revolution/js/jquery.themepunch.revolution.min.js') }} "></script>
    <script src="{{ asset('frontend/revolution/js/slider.js') }} "></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.actions.min.js') }} "></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.carousel.min.js') }} "></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.kenburn.min.js') }} "></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.layeranimation.min.js') }} "></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.migration.min.js') }} "></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.navigation.min.js') }} "></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.parallax.min.js') }} "></script>
    <script src="{{ asset('frontend/revolution/js/extensions/revolution.extension.slideanims.min.js') }} "></script>

    <!-- Javascript end-->

</body>

</html>
