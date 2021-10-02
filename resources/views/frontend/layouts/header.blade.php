<header>
    <div class="header-top-area section-bg">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-4 col-lg-7 offset-xl-3 col-md-6">
                    <ul class="top-contact-info list-inline">
                        <li><i class="far fa-map-marker-alt"></i>238 Hoàng Quốc Việt - Cầu Giấy</li>
                        <li><i class="far fa-phone"></i>+84 0393286094</li>
                    </ul>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div class="top-right text-right">
                        <ul class="top-social-icon list-inline d-inline">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-google"></i></a></li>
                        </ul>
                        @if (Auth::check())
                        <a href="{{ route('profile') }}" class="ml-3">
                            <i class="fa fa-user mx-2"></i>
                            <strong>{{ Auth::user()->name }}</strong>
                        </a>
                        <a class="ml-3" href="{{ route('user.logout') }}"><i class="fas fa-sign-out-alt fa-1x"></i></a>
                        @else
                        <ul class="top-menu list-inline d-inline ml-4">
                            <li><a href="{{ route('user.show_register_form') }}"><i class="fa fa-user"></i> Register</a>
                            </li>
                            <li><a href="{{ route('user.show_login_form') }}"><i class="fa fa-lock"></i> Login</a></li>
                        </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3 col-md-4 col-7">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('assets/frontend') }}/img/logo.png" alt="Avson"></a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-5">
                    <div class="menu-right-area text-right">
                        <nav class="main-menu">
                            <ul class="list-inline">
                                <li class="active-page">
                                    <a href="/">Home</a>
                                </li>
                                <li class="have-submenu">
                                    <a href="{{ route('user.category') }}">Rooms</a>
                                    <ul class="submenu">
                                        <li><a href="#">Room Classic</a></li>
                                        <li><a href="#">Room Modern</a></li>
                                        <li><a href="#">Room Luxury</a></li>
                                    </ul>
                                </li>
                                <li><a href="service.html">Services</a></li>
                                <li class="submenu">
                                    <a href="{{ route('user.blogs') }}">News</a>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                </li>
                                <li><a href="{{ route('cart.show') }}">Cart</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="search-wrap">
                            <a href="#" class="search-icon"><i class="far fa-search"></i></a>
                            <a href="#" class="search-icon icon-close">
                                <i class="far fa-times"></i>
                            </a>
                            <div class="search-form">
                                <form>
                                    <input type="search" placeholder="TYPE AND PRESS ENTER.....">
                                </form>
                            </div>
                        </div>
                        <div class="quote-btn">
                            <a href="room.html" class="btn filled-btn">Booking now
                                <i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobilemenu"></div>
</header>
