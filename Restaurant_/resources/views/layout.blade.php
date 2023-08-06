<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/short.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <title>Midway Dine - Your Favourite Foods</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/css-library.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}">

    <script src="{{ asset('assets/js/angular.min.js') }}"></script>
    <script src="{{ asset('assets/js/bKash-checkout.js') }}"></script>
    <script src="{{ asset('assets/js/bKash-checkout-sandbox.js') }}"></script>
    <style>
        .alert {
            padding: 20px;
            background-color: #f44336;
            color: white;
        }

        .success {
            padding: 20px;
            background-color: #4BB543;
            color: white;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #FB685A;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            color: black;
            /* Add this line to set the text color */
        }



        /* Close button for the modal */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

</head>

<body ng-app="">

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area" style="z-index:1000">
        <div class="container">
            <nav class="main-nav">
                <!-- ***** Logo Start ***** -->
                <a href="/" class="logo">
                    <img width="100px" src="{{ asset('assets/images/logo.png') }}">
                </a>
                <!-- ***** Logo End ***** -->
                <!-- ***** Menu Start ***** -->
                <ul class="nav">
                    <li class="scroll-to-section"><a href="/">Home</a></li>
                    <li class="scroll-to-section"><a href="/#about">About</a></li>
                    <li class="scroll-to-section"><a href="/#menu">Menu</a></li>
                    <li class="scroll-to-section"><a href="/#chefs">Chefs</a></li>
                    <li class="scroll-to-section"><a href="/#reservation">Contact Us</a></li>
                    <style>
                        .badge {
                            padding-left: 9px;
                            padding-right: 9px;
                            padding-top: 10px;
                            -webkit-border-radius: 9px;
                            -moz-border-radius: 9px;
                            border-radius: 9px;
                            height: 16px;
                            text-align: center;
                        }

                        .label-warning[href],
                        .badge-warning[href] {
                            background-color: #c67605;
                        }

                        #lblCartCount {
                            font-size: 12px;
                            background: #ff0000;
                            color: #fff;
                            padding: 0 5px;
                            vertical-align: top;
                            margin-left: -10px;
                        }
                    </style>
                </ul>
                <!-- ***** Menu End ***** -->
            </nav>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div style="min-height:750px">
        @yield('page-content')
    </div>
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Midway Dine
                            <br>Since 2023
                        </p>
                        <a href="/admin/dashboard" target="_blank">
                            <p><b><ins>Go To Admin Section</ins></b></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>
