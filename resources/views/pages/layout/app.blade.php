
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Astro Option</title>

{{--    <meta name="designer" href="https://uniquehyips.com/">--}}

    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/Xwin-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/owl.transitions.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootsnav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/loader.css') }}">

    <link rel="icon" href="images/favicon.png">

    <link rel="stylesheet" href="{{ asset('front/css2/style.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .sk-cube-grid {
            width: 40px;
            height: 40px;
            margin: 100px auto;
        }

        .sk-cube-grid .sk-cube {
            width: 33%;
            height: 33%;
            background-color: #333;
            float: left;
            -webkit-animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
            animation: sk-cubeGridScaleDelay 1.3s infinite ease-in-out;
        }

        .sk-cube-grid .sk-cube1 {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }

        .sk-cube-grid .sk-cube2 {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }

        .sk-cube-grid .sk-cube3 {
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
        }

        .sk-cube-grid .sk-cube4 {
            -webkit-animation-delay: 0.1s;
            animation-delay: 0.1s;
        }

        .sk-cube-grid .sk-cube5 {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }

        .sk-cube-grid .sk-cube6 {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
        }

        .sk-cube-grid .sk-cube7 {
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
        }

        .sk-cube-grid .sk-cube8 {
            -webkit-animation-delay: 0.1s;
            animation-delay: 0.1s;
        }

        .sk-cube-grid .sk-cube9 {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
        }

        @-webkit-keyframes sk-cubeGridScaleDelay {

            0%,
            70%,
            100% {
                -webkit-transform: scale3D(1, 1, 1);
                transform: scale3D(1, 1, 1);
            }

            35% {
                -webkit-transform: scale3D(0, 0, 1);
                transform: scale3D(0, 0, 1);
            }
        }

        @keyframes sk-cubeGridScaleDelay {

            0%,
            70%,
            100% {
                -webkit-transform: scale3D(1, 1, 1);
                transform: scale3D(1, 1, 1);
            }

            35% {
                -webkit-transform: scale3D(0, 0, 1);
                transform: scale3D(0, 0, 1);
            }
        }

        .asog {
            color: #fff;
            text-align: center;
            background-image: url(images/typesource/mountains.html);
            background-size: cover;
            background-color: #f0ae93;
            font-family: PT Sans, sans-serif;
            line-height: 3em;
            padding-top: 9em;
            padding-bottom: 10em;
        }

        .asog-r1 {
            text-transform: uppercase;
            font-size: 11em;
            font-weight: 700;
            line-height: 1.1em;
        }

        .asog-r2 {
            font-family: Lora, serif;
            font-style: italic;
            font-weight: 400;
            font-size: 2.7em;
            display: inline-block;
            position: relative;
            mix-blend-mode: overlay;
        }

        .asog-r2:before,
        .asog-r2:after {
            background: url(images/typesource/leaves.html) no-repeat center center/2.5em 0.7em;
            content: "";
            left: -3em;
            top: -0.3em;
            position: absolute;
            width: 2.5em;
            height: 1.5em;
        }

        .asog-r2:after {
            left: auto;
            right: -3em;
            -webkit-transform: scaleX(-1);
            transform: scaleX(-1);
        }

    </style>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400italic' rel='stylesheet' type='text/css'>

    <style>
        @media only screen and (max-width: 600px) {
           .text-logo {
               color: black;
               font-size: 35px;
           }
        }

        h2.text-logo {
            color: #b0b5b1;
            font-size: 35px;
        }
    </style>
</head>

<body>

<header>
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav pushy">
        <div class="container">
            <div id="menu_bars" class="right">
                <span class="t1"></span>
                <span class="t2"></span>
                <span class="t3"></span>
            </div>
            <div style=" padding-top:0px; margin-top:0px" class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a style=" padding-top:0px; margin-top:0px" class="navbar-brand" href="{{ route('homepage') }}">
                    <h2 class="text-logo" >AstroOption</h2>
{{--                    <img src="{{ asset('front/images/mlogo.png') }}" alt="logo" class="logo logo-display">--}}
{{--                    <img src="{{ asset('front/images/mlogo.png') }}" class="logo logo-scrolled" alt="">--}}
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOut">
                    <li><a href="{{ route('homepage') }}">Trading</a></li>
                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                    <li><a href="{{ route('why_us') }}">WHY US</a></li>
                    <li><a href="{{ route('market') }}">MARKET</a></li>
                    <li><a href="{{ route('about') }}">ABOUT US</a></li>
                    <li><a href="{{ route('contact.create') }}">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar_menu">
            <nav class="pushmenu pushmenu-right">
                <a class="push-logo" href="{{ route('homepage') }}"><img src="images/mlogo.png" alt="logo"></a>
                <ul class="push_nav centered">

                    <li><a href="{{ route('homepage') }}">Trading</a></li>
                    <li><a href="{{ route('register') }}">REGISTER</a></li>
                    <li><a href="{{ route('login') }}">LOGIN</a></li>
                    <li><a href="{{ route('why_us') }}">WHY US</a></li>
                    <li><a href="{{ route('market') }}">MARKET</a></li>
                    <li><a href="{{ route('about') }}">ABOUT US</a></li>
                    <li><a href="{{ route('contact.create') }}">CONTACT US</a></li>
                </ul>
                <div class="clearfix"></div>
        </div>

        <div id="google_translate_element"></div>

        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
            }
        </script>

        <script type="text/javascript" src="translate.google.com/translate_a/elementa0d8a0d8.html?cb=googleTranslateElementInit"></script>
    </nav>
    </div>
    </nav>
</header>

@yield('content')

<title>about</title>
<footer class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 footer_panel bottom25">
                <h3 class="heading bottom25">About Us<span class="divider-left"></span></h3>
                <a href="{{ route('homepage') }}" class="footer_logo bottom25"><img src="images/mlogo.png" alt="Xwin"></a>
                <p>We are one of the world's most popular online investment platforms. Seize your chance to invest in a wide variety of assets using top-notch instruments and analysis tools. Join now!</p>
                <ul class="social_icon top25">
                    <li><a href="http://www.facebook.com/" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="http://www.twitter.com/" class="twitter"><i class="icon-twitter4"></i></a></li>
                    <li><a href="#" class="dribble"><i class="icon-dribbble5"></i></a></li>
                    <li><a href="http://www.instagram.com/" class="instagram"><i class="icon-instagram"></i></a></li>
                    <li><a href="#" class="vimo"><i class="icon-vimeo4"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 footer_panel bottom25">
                <h3 class="heading bottom25">Quick Links<span class="divider-left"></span></h3>
                <ul class="links">
                    <li><a href="{{ route('homepage') }}"><i class="icon-chevron-small-right"></i>Home</a></li>
                    <li><a href="{{ route('about') }}"><i class="icon-chevron-small-right"></i>Company</a></li>
                    <li><a href="index7b957b95.html?a=us"><i class="icon-chevron-small-right"></i>Services</a></li>
                    <li><a href="index38cd38cd.html?a=faq"><i class="icon-chevron-small-right"></i>Faqs</a></li>
                    <li><a href="{{ route('about') }}"><i class="icon-chevron-small-right"></i>Company History</a></li>
                    <li><a href="app/indexc30b.html?a=login"><i class="icon-chevron-small-right"></i>Dashboard</a></li>
                    <li><a href="images/299881.pdf"><i class="icon-chevron-small-right"></i>Certification</a></li>
                    <li><a href="#."><i class="icon-chevron-small-right"></i>Shop</a></li>
                    <li><a href="terms.html"><i class="icon-chevron-small-right"></i>Terms of use</a></li>
                    <li><a href="contact.html"><i class="icon-chevron-small-right"></i>Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-4 footer_panel bottom25">
                <h3 class="heading bottom25">Keep in Touch <span class="divider-left"></span></h3>
                <p class=" address">Registration number<strong><a style="text-decoration:underline" href="images/299881.pdf"> 299881</a></strong></p>
                <p class=" address"><i class="icon-map-pin"></i>32108 16414 SAN PEDRO, SUITE 930, SAN ANTONIO, TX 78232</p>
                <p class=" address"><i class="icon-phone"></i>+35795522426</p>
                <p class=" address"><i class="icon-envelope"></i><a href="mailto:support@coinforexbtc.com">admin@astroption.com</a></p>
                <img src="{{ asset('front/images/footer-map.png') }}" alt="we are here" class="img-responsive">
            </div>
        </div>
    </div>
</footer>


<!--Footer ends-->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('front/js2/jquery-3.4.1.min.js') }}"></script>
<!--Bootstrap Core-->
<script src="{{ asset('front/js2/propper.min.js') }}"></script>
<script src="{{ asset('front/js2/bootstrap.min.js') }}"></script>
<!--to view items on reach-->
<script src="{{ asset('front/js2/jquery.appear.js') }}"></script>
<!--Owl Slider-->
<script src="{{ asset('front/js2/owl.carousel.min.js') }}"></script>
<!--number counters-->
<script src="{{ asset('front/js2/jquery-countTo.js') }}"></script>
<!--Parallax Background-->
<script src="{{ asset('front/js2/parallaxie.js') }}"></script>
<!--Cubefolio Gallery-->
<script src="{{ asset('front/js2/jquery.cubeportfolio.min.js') }}"></script>
<!--Fancybox js-->
<script src="{{ asset('front/js2/jquery.fancybox.min.js') }}"></script>
<!--tooltip js-->
<script src="{{ asset('front/js2/tooltipster.min.js') }}"></script>
<!--wow js-->
<script src="{{ asset('front/js2/wow.js') }}"></script>
<!--Revolution SLider-->
<script src="{{ asset('front/js2/revolution/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/js2/revolution/jquery.themepunch.revolution.min.js') }}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('front/js2/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('front/js2/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('front/js2/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('front/js2/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/js2/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('front/js2/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/js2/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('front/js2/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('front/js2/revolution/extensions/revolution.extension.video.min.js') }}"></script>
<!--custom functions and script-->
<script src="{{ asset('front/js2/functions.js') }}"></script>
<!--custom functions and script-->


<script src="{{ asset('front/js/jquery-2.2.3.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/bootsnav.js') }}"></script>
<script src="{{ asset('front/js/jquery.appear.js') }}"></script>
<script src="{{ asset('front/js/jquery-countTo.js') }}"></script>
<script src="{{ asset('front/js/jquery.parallax-1.1.3.js') }}"></script>
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('front/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('front/js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('front/js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('front/js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('front/js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('front/js/revolution.extension.video.min.js') }}"></script>
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/js/functions.js') }}"></script>

</body>
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+14708487828", // WhatsApp number
            call_to_action: "WhatsApp", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
</html>
