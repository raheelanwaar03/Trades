<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from bplugins.net/hipre/referral-link.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 20:47:15 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Hipre - HYIP Investment Website HTML5 Template</title>

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google Fonts -->
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
    <link href="{{ asset('assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/odometer.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- Boxed Wrapper -->

<body>

    <div class="boxed_wrapper">
        <header class="dashboard-header">
            <div class="outer-container">
                <figure class="logo-box"><a href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}"
                            alt=""></a></figure>
                <div class="header-content">
                    <div class="left-content">
                        <div class="menu-text mobile-nav-toggler"><img
                                src="{{ asset('assets/images/icons/icon-23.svg') }}" alt="">Dashboard</div>
                        <div class="search-box">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <div class="icon-box"><img src="{{ asset('assets/images/icons/icon-25.svg') }}"
                                            alt=""></div>
                                    <input type="search" name="search-field" placeholder="Search Here" required>
                                    <button type="submit"><img src="{{ asset('assets/images/icons/icon-24.svg') }}"
                                            alt=""></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="right-content">
                        <div class="notification-box"><button><img src="{{ asset('assets/images/icons/icon-26.svg') }}"
                                    alt=""><span class="alart"></span></button></div>
                        <div class="admin-box">
                            <span>Admin</span>
                            <figure class="image-box"><img src="{{ asset('assets/images/resource/admin.png') }}"
                                    alt=""></figure>
                            <ul class="dropdown-box">
                                <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-28.svg') }}"
                                            alt="">Profile</a>
                                </li>
                                <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-29.svg') }}"
                                            alt="">Password</a>
                                </li>
                                <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-30.svg') }}"
                                            alt="">Logout</a>
                                </li>
                            </ul>
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
                <figure class="logo-box"><a href="index-2.html"><img src="{{ asset('assets/images/logo.png') }}"
                            alt=""></a></figure>
                <ul class="dashboard-category-list">
                    <li><a href="{{ route('User.Dashboard') }}" class="current"><img
                                src="{{ asset('assets/images/icons/icon-31.svg') }}" alt="">Dashboard</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-32.svg') }}"
                                alt="">Deposit</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-33.svg') }}"
                                alt="">Buy Package</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-34.svg') }}"
                                alt="">Buy Package History</a>
                    </li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-35.svg') }}"
                                alt="">Withdraw</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-36.svg') }}"
                                alt="">My Direct</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-37.svg') }}"
                                alt="">Level Report</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-38.svg') }}"
                                alt="">Rank & Rewards</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-39.svg') }}"
                                alt="">Bonus Reports</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-40.svg') }}"
                                alt="">Transactions</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-41.svg') }}"
                                alt="">Affiliate Tools</a></li>
                    <li><a href="index-2.html"><img src="{{ asset('assets/images/icons/icon-42.svg') }}"
                                alt="">Log Out</a></li>
                </ul>
            </div>
        </div>
        <!-- End Mobile Menu -->


        <section class="dashboard-section">
            <div class="outer-container">
                <div class="dashboard-content">
                    <div class="pricing-dashboard">
                        <div class="upper-box d-flex justify-content-between align-items-center">
                            <div class="">
                                <ul class="text-list clearfix">
                                    <li>User ID : {{ auth()->user()->user_id }}</li>
                                    <li>User Name : <span
                                            style="text-transform:uppercase;">{{ auth()->user()->name }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <button type="button" class="theme-btn" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Invest Now</button>
                            </div>
                        </div>
                        <div class="row clearfix">
                            @forelse ($plans as $item)
                                <div class="col-lg-4 col-md-6 col-sm-12 pricing-block">
                                    <div class="pricing-block-one wow fadeInUp animated" data-wow-delay="00ms"
                                        data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <span class="upper-text">{{ $item->name }}</span>
                                            <h2>{{ $item->min }}</h2>
                                            <ul class="list-item clearfix">
                                                <li>1 business account</li>
                                                <li>Lifetime</li>
                                            </ul>
                                            <span class="key-text">Key Features :</span>
                                            <ul class="feature-list clearfix">
                                                <li>Basic Moderate Returns</li>
                                                <li>Expected Return 5% to 25%</li>
                                                <li>General Support</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h4 class="text-center text-white">Empty</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Buy Any Plan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('User.Buy.Plan') }}">
                            @csrf
                            <div class="form-group">
                                <label>Amount</label>
                                <input type="text" name="amount" placeholder="$00000">
                            </div>
                            <div class="form-group">
                                <label>Select Plan</label>
                                <div class="select-box">
                                    <select class="wide" name="plan">
                                        <option data-display="Select Plan">Select Plan</option>
                                        @foreach ($plans as $item)
                                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="theme-btn">Purchase</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Scroll Top -->
        <button class="scroll-top scroll-to-target" data-target="html"><i class="icon-4"></i></button>

    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</body>

</html>
