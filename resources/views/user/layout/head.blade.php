<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>{{ env('APP_NAME') }} - We welcome our investors with huge love</title>
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400..800&amp;display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets List -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/data-table.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    @yield('links')

</head>

<body>

    <x-alert />

    <div class="boxed_wrapper">
        <!-- Dashboard Header -->
        <header class="dashboard-header">
            <div class="outer-container">
                <figure class="logo-box"><a href="{{ route('User.Dashboard') }}"><img
                            src="{{ asset('assets/images/resource/logo.png') }}" height="100px" width="100px"></a>
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
                                    <li><a href="{{ route('profile.edit') }}"><img
                                                src="{{ asset('assets/images/icons/icon-28.svg') }}"
                                                alt="">Profile</a>
                                    </li>
                                    <li><a href="{{ route('User.Change.Password') }}">
                                            <img src="{{ asset('assets/images/icons/icon-29.svg') }}" alt="">
                                            Password</a>
                                    </li>
                                    <li>
                                        {{-- adding logout button with icon --}}
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <img src="{{ asset('assets/images/icons/icon-30.svg') }}"
                                                alt="">Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
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
                            style="height: 80px; width:100px" src="{{ asset('assets/images/resource/logo.png') }}"
                            alt=""></a>
                </figure>
                <ul class="dashboard-category-list">
                    <li><a href="{{ route('User.Dashboard') }}" class="current"><img
                                src="{{ asset('assets/images/icons/icon-31.svg') }}" alt="">Dashboard</a></li>
                    <li><a href="{{ route('User.Deposit') }}"><img
                                src="{{ asset('assets/images/icons/icon-32.svg') }}" alt="">Deposit</a></li>
                    <li><a href="{{ route('User.Deposit.Report') }}"><img
                                src="{{ asset('assets/images/icons/icon-40.svg') }}" alt="">Deposit Report</a>
                    </li>
                    <li><a href="{{ route('User.Plans') }}"><img src="{{ asset('assets/images/icons/icon-33.svg') }}"
                                alt="">Buy Plans</a>
                    </li>
                    <li><a href="{{ route('User.Purchased.Plans') }}"><img
                                src="{{ asset('assets/images/icons/icon-34.svg') }}" alt="">Purchased Plans</a>
                    </li>
                    <li><a href="{{ route('User.All.Rewards') }}"><img
                                src="{{ asset('assets/images/icons/icon-39.svg') }}" alt="">All Rewards</a>
                    </li>
                    <li><a href="{{ route('User.Refer.New.User') }}"><img
                                src="{{ asset('assets/images/icons/icon-36.svg') }}" alt="">Refer Member</a>
                    </li>
                    <li><a href="{{ route('User.My.Team') }}"><img
                                src="{{ asset('assets/images/icons/icon-37.svg') }}" alt="">My Team</a>
                    </li>
                    <li><a href="{{ route('User.Apply.Withdraw') }}"><img
                                src="{{ asset('assets/images/icons/icon-35.svg') }}" alt="">Withdraw</a></li>
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><img
                                src="{{ asset('assets/images/icons/icon-42.svg') }}" alt="">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End Mobile Menu -->
