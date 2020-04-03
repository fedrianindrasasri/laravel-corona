<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('asset/user/img/riau.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('asset/user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('asset/user/css/responsive.css')}}"> -->



    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.2.1/css/ol.css" type="text/css">
    <style>
        .map {
            height: 500px;
            width: 100%;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.2.1/build/ol.js"></script>



    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="{{asset('asset/user/owl/assets/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/user/owl/assets/owlcarousel/assets/owl.theme.default.min.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet'
        type='text/css'>
    <!-- <link rel="stylesheet" href="{{asset('asset/user/owl/assets/css/docs.theme.min.css')}}"> -->

    <!-- javascript Owl -->
    <script src="{{asset('asset/user/owl/assets/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('asset/user/owl/assets/owlcarousel/owl.carousel.js')}}"></script>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <!-- id="sticky-header" -->
            <div class="main-header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header_wrap d-flex justify-content-between align-items-center">
                                <div class="header_left">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{asset('asset/user/img/logo2.png')}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="header_right d-flex align-items-center">
                                    <div class="main-menu  d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="{{route('index')}}">Beranda</a></li>
                                                <li><a href="{{route('berita')}}">Berita</a></li>
                                                <li><a href="{{route('faq')}}">FAQ</a></li>
                                                <li><a href="{{route('kontak')}} ">Kontak</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->



    @yield('content')


    <!-- footer start -->
    <footer class="footer">
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8">
                        <p class="copy_right text-center">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Hak Cipta &copy; <script>
                                    document.write(new Date().getFullYear());
                                </script> Pekanbaru | Seluruh Hak Cipta Dilindungi Undang-Undang</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </p>

                    </div>
                    <div class="col-xl-4">
                        <div class="socail_links float-right">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->


    <!-- JS here -->
    <script src="{{asset('asset/user/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('asset/user/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('asset/user/js/popper.min.js')}}"></script>
    <script src="{{asset('asset/user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('asset/user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('asset/user/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('asset/user/js/ajax-form.js')}}"></script>
    <script src="{{asset('asset/user/js/waypoints.min.js')}}"></script>
    <script src="{{asset('asset/user/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('asset/user/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('asset/user/js/scrollIt.js')}}"></script>
    <script src="{{asset('asset/user/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('asset/user/js/wow.min.js')}}"></script>
    <script src="{{asset('asset/user/js/nice-select.min.js')}}"></script>
    <script src="{{asset('asset/user/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('asset/user/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('asset/user/js/plugins.js')}}"></script>
    <script src="{{asset('asset/user/js/gijgo.min.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('asset/user/js/contact.js')}}"></script>
    <script src="{{asset('asset/user/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('asset/user/js/jquery.form.js')}}"></script>
    <script src="{{asset('asset/user/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('asset/user/js/mail-script.js')}}"></script>

    <script src="{{asset('asset/user/js/main.js')}}"></script>


    <script type="text/javascript">
        var map = new ol.Map({
            target: 'map',
            layers: [
                new ol.layer.Tile({
                source: new ol.source.OSM()
                })
            ],
            view: new ol.View({
                center: ol.proj.fromLonLat([101.437790, 0.506566]),
                zoom: 8
            })
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                items: 1,
                nav: false
                },
                600: {
                items: 3,
                nav: true
                },
                1000: {
                items: 4,
                nav: false,
                loop: false,
                margin: 30
                }
            }
            })
        });
    </script>

    <!-- vendors -->
    <script src="{{asset('asset/user/owl/assets/vendors/highlight.js')}}"></script>
    <script src="{{asset('asset/user/owl/assets/js/app.js')}}"></script>


</body>

</html>
