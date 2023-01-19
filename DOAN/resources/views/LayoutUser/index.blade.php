<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DiDauAnGi</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="/layoutUser/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="/layoutUser/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/ticker-style.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/flaticon.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/slicknav.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/animate.min.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/slick.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/nice-select.css">
    <link rel="stylesheet" href="/layoutUser/assets/css/style.css">
    @yield('css')
</head>

<body>

    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="/layoutUser/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->

    @include('/layoutUser.header')

  
    @yield('content')

    @include('/layoutUser.footer')
    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="/layoutUser/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="/layoutUser/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/layoutUser/assets/js/popper.min.js"></script>
    <script src="/layoutUser/assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="/layoutUser/assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="/layoutUser/assets/js/owl.carousel.min.js"></script>
    <script src="/layoutUser/assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="/layoutUser/assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="/layoutUser/assets/js/wow.min.js"></script>
    <script src="/layoutUser/assets/js/animated.headline.js"></script>
    <script src="/layoutUser/assets/js/jquery.magnific-popup.js"></script>

    <!-- Breaking New Pluging -->
    <script src="/layoutUser/assets/js/jquery.ticker.js"></script>
    <script src="/layoutUser/assets/js/site.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="/layoutUser/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/layoutUser/assets/js/jquery.nice-select.min.js"></script>
    <script src="/layoutUser/assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="/layoutUser/assets/js/contact.js"></script>
    <script src="/layoutUser/assets/js/jquery.form.js"></script>
    <script src="/layoutUser/assets/js/jquery.validate.min.js"></script>
    <script src="/layoutUser/assets/js/mail-script.js"></script>
    <script src="/layoutUser/assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="/layoutUser/assets/js/plugins.js"></script>
    <script src="/layoutUser/assets/js/main.js"></script>

</body>

</html>
