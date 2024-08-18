<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Trades Sphere - We welcome our investors with huge love</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets List -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/data-table.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- Boxed Wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Preloader End -->


        <!-- Dashboard Header -->
        <header class="dashboard-header">
            <div class="outer-container">
                <figure class="logo-box"><a href="{{ route('User.Dashboard') }}"><img
                            src="{{ asset('assets/images/logo.png') }}" alt=""><span
                            style="color: white;margin-right:14px;">{{ env('APP_NAME') }}</span></a>
                </figure>
                <div class="header-content">
                    <div class="left-content">
                        <div class="menu-text mobile-nav-toggler"><img
                                src="{{ asset('assets/images/icons/icon-23.svg') }}" alt="">
                            <span>Menu</span>
                        </div>
                        <div class="right-content" style="margin-left: 180px">
                            <div class="admin-box">
                                <span>{{ auth()->user()->name }}</span>
                                <figure class="image-box"><img src="{{ asset('assets/images/resource/admin.png') }}"
                                        alt="">
                                </figure>
                                <ul class="dropdown-box">
                                    <li><a href="#"><img src="{{ asset('assets/images/icons/icon-28.svg') }}"
                                                alt="">Profile</a>
                                    </li>
                                    <li><a href="#">
                                            <img src="{{ asset('assets/images/icons/icon-29.svg') }}" alt="">
                                            Password</a>
                                    </li>
                                    <li>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Dashboard Header End -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu dashboard-mobile-menu">
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <div class="dashboard-sidebar">
                <figure class="logo-box"><a href="{{ route('User.Dashboard') }}"><img
                            src="{{ asset('assets/images/logo.png') }}" alt=""><span
                            style="color: white;margin-left:12px;">{{ env('APP_NAME') }}</span></a>
                </figure>
                <ul class="dashboard-category-list">
                    <li><a href="index.html" class="current"><img src="{{ asset('assets/images/icons/icon-31.svg') }}"
                                alt="">Dashboard</a></li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-32.svg') }}"
                                alt="">Deposit</a></li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-33.svg') }}"
                                alt="">Buy Package</a>
                    </li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-34.svg') }}"
                                alt="">Buy Package
                            History</a>
                    </li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-35.svg') }}"
                                alt="">Withdraw</a></li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-36.svg') }}"
                                alt="">My Direct</a>
                    </li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-37.svg') }}"
                                alt="">Level Report</a>
                    </li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-38.svg') }}"
                                alt="">Rank &
                            Rewards</a></li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-39.svg') }}"
                                alt="">Bonus
                            Reports</a></li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-40.svg') }}"
                                alt="">Transactions</a></li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-41.svg') }}"
                                alt="">Affiliate
                            Tools</a></li>
                    <li><a href="index.html"><img src="{{ asset('assets/images/icons/icon-42.svg') }}"
                                alt="">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Mobile Menu -->
