<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>trexova_trips</title>
    <!-- css -->
    <style>
            li.text{
                text-capitalize: none !important;
            }
        .top-header .uk-list-item, .uk-navbar-nav>li>a, .uk-navbar-toggle{
            min-height: 0px !important;
        }
            table, th, td {
                border: 1px solid black !important;
                border-collapse: collapse !important;
                text-align: center !important;
            }
            th{
                background-color: limegreen;
                font-weight: bolder;

            }

    </style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/js/uikit-icons.min.js"></script>

</head>
<body>
    <!-- header -->
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-sticky">
        <nav class=" top-header uk-navbar-container uk-flex uk-navbar-transparent uk-background-default uk-responsive-height " uk-navbar>
            <div class="uk-navbar-left ">
                <a class="uk-navbar-item uk-logo" href="/">
                    <img src="{{URL::asset('images/logo.png')}}" width ="100" height="40">
                </a>
            </div>
            <div class="uk-navbar-right uk-responsive-height uk-responsive-width ">
                <ul class="uk-navbar-nav uk-visible@m ">
                    <li class="text" ><a href="/about">About Us</a></li>
                    <li><a href="/affiliate">Affiliate</a></li>
                    <li><a href="/suppliers">Suppliers</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon uk-toggle="target: #offcanvas"></a>
            </div>
        </nav>
    </div>

    <div id="offcanvas" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">
        <ul class="uk-nav uk-nav-center uk-margin-auto-vertical">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Affiliate</a></li>
            <li><a href="#">Suppliers</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
    </div>
    <!-- Body---->
     @yield('body')
    <!--footer -->
    <div class="uk-card uk-card-default">
        <div class="uk-card-footer">
            <div class="uk container uk-flex uk-grid uk-grid-match" uk-grid>
                <div class="uk-width-1-3">
                    <div class="uk-text-left">
                        <p>About Us <br>Suppliers, Join Us</p>
                        <p>All rights reserved @ 2019</p>
                    </div>
                </div>
                <div class="uk-width-1-3 uk-padding-remove-right">
                    <div class="uk-text-left">
                        <p>Contact Us <br>Affiliates, Join Us</p>
                    </div>
                </div>
                <div class="uk-width-1-3 ">
                    <div class="uk-text-left">
                        <p>Connect with us : <br>Corp Office<br>Delhi, INDIA</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
