<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Beauty Project</title>
    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="shortcut icon" href="{{asset('website/images/favicon.ico" type="image/png')}}">

    <!-- ::::::::::::::All CSS Files here :::::::::::::: -->
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('website/css/vendor/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/vendor/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/vendor/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/vendor/jquery-ui.min.css')}}">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('website/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/plugins/venobox.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/plugins/jquery.lineProgressbar.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/plugins/aos.min.css')}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <header class="header-section d-none d-xl-block">
        <div class="header-wrapper">
            <!-- Start Header Top -->
            <div class="header-top header-top-bg--black section-fluid">
                <div class="container">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <div class="header-top-left">
                            <div
                                class="header-top-contact header-top-contact-color--white header-top-contact-hover-color--green">
                                <a href="tel:0123456789" class="icon-space-right"><i
                                        class="icon-call-in"></i>0123456789</a>
                                <a href="mailto:demo@example.com" class="icon-space-right"><i
                                        class="icon-envelope"></i>demo@example.com</a>
                            </div>
                        </div>
                        <div class="header-top-right">
                            <div
                                class="header-top-user-link header-top-user-link-color--white header-top-user-link-hover-color--green">
                                <a href="{{route('showWishlist')}}">Wishlist</a>
                                <a href="{{route('showcart')}}">Cart</a>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Top -->
            <!-- Start Header Bottom -->
            <div class="header-bottom header-bottom-color--green section-fluid sticky-header sticky-color--white">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-between">
                            <!-- Start Header Logo -->
                            <div class="header-logo">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('website/images/logo/logo_black.png')}}" alt=""></a>
                                </div>
                            </div>
                            <!-- End Header Logo -->

                            <!-- Start Header Main Menu -->
                            <div class="main-menu menu-color--black menu-hover-color--green">
                                <nav>
                                    <ul>
                                        <li class="has-dropdown">
                                            <a class="active main-menu-link" href="{{route('home.index')}}">Home</a>
                                            <!-- Sub Menu -->
                                        </li>
                                        <li class="has-dropdown has-megaitem" >
                                            <a href="{{route('filterpage.filter')}}">Shop<i
                                                    class="fa fa-angle-down"></i></a>
                                            <!-- Mega Menu -->
                                            <div class="mega-menu" style="width:300px">
                                                <ul class="mega-menu-inner" style="width:300px">
                                                    <!-- Mega Menu Sub Link -->
                                                    <li class="mega-menu-item">
                                                        <a href="{{route('filterpage.filter')}}" class="mega-menu-item-title">Products</a>
                                                        <ul class="mega-menu-sub">
                                                            <li><a href="{{route('filterpage.filter')}}">Category
                                                                   </a></li>
                                                            <li><a href="{{route('filterpage.filter')}}">Brand
                                                                   </a></li>
                                                          
                                                        </ul>
                                                    </li>
                                                    <!-- Mega Menu Sub Link -->
                                                    <li class="mega-menu-item">
                                                        <a href="#" class="mega-menu-item-title">Other Pages</a>
                                                        <ul class="mega-menu-sub">
                                                      <li><a href="{{route('product.show')}}">Coupon</a></li>
                                                            <li><a href="{{route('showcart')}}">Cart</a></li>
                                                
                                                            <li><a href="{{route('showWishlist')}}">Wishlist</a></li>
                                                            <li><a href="{{route('showCompareProduct')}}">Compare</a></li>
                                                            <li><a href="{{route('myaccount.index')}}">My Account</a></li>
                                                        </ul>
                                                    </li>
                                                    <!-- Mega Menu Sub Link -->
                                                
                                                    </li>
                                                    <!-- Mega Menu Sub Link -->
                                                   
                                                </ul>
                                                <div class="menu-banner">
                                                    <a href="#" class="menu-banner-link">
                                                        <img class="menu-banner-img"
                                                            src="{{asset('website/images/banner/menu-banner.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        
                                        <li class="has-dropdown">
                                            <a href="#">Pages<i class="fa fa-angle-down"></i></a>
                                            <!-- Sub Menu -->
                                            <ul class="sub-menu">
                                                <li><a href="faq.html">Frequently Questions</a></li>
                                                <li><a href="privacy-policy.html">Terms And conditions</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                       
                                        <li>
                                            <a href="contact-us.html">Contact Us</a>
                                        </li>
                       <li>
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                       </li>
                                         
                                    </ul>
                                </nav>
                            </div>
                            <!-- End Header Main Menu Start -->

                            <!-- Start Header Action Link -->
                            <ul class="header-action-link action-color--black action-hover-color--green">
                                <li>
                                    <a href="{{route('showWishlist')}}" >
                                        <i class="icon-heart"></i>
                                        <span class="item-count">{{session('count')}}</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('showcart')}}"   >
                                        <i class="icon-bag"></i>
                                        <span class="item-count">3</span>
                                    </a>
                                </li>
                        
                            </ul>
                            <!-- End Header Action Link -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Bottom -->
        </div>
    </header>

    <!-- Start Mobile Header -->
    <div class="mobile-header mobile-header-bg-color--white section-fluid d-lg-block d-xl-none">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center justify-content-between">
                    <!-- Start Mobile Left Side -->
                    <div class="mobile-header-left">
                        <ul class="mobile-menu-logo">
                            <li>
                                <a href="index.html">
                                    <div class="logo">
                                        <img src="{{asset('website/images/logo/logo_black.png')}}" alt="">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Left Side -->

                    <!-- Start Mobile Right Side -->
                    <div class="mobile-right-side">
                        <ul class="header-action-link action-color--black action-hover-color--green">
                           
                            <li>
                                <a href="{{route('showWishlist')}}">
                                    <i class="icon-heart"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('showcart')}}">
                                    <i class="icon-bag"></i>
                                    <span class="item-count">3</span>
                                </a>
                            </li>
                            <li>
                                <a href="#mobile-menu-offcanvas" class="offcanvas-toggle offside-menu">
                                    <i class="icon-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Mobile Right Side -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Mobile Header -->


     <!--  Start Offcanvas Mobile Menu Section -->
    <div id="mobile-menu-offcanvas" class="offcanvas offcanvas-rightside offcanvas-mobile-menu-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <div class="offcanvas-mobile-menu-wrapper">
            <!-- Start Mobile Menu  -->
            <div class="mobile-menu-bottom">
                <!-- Start Mobile Menu Nav -->
                <div class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="{{route('home.index')}}"><span>Home</span></a>
                            
                        </li>
                        <li>
                            <a href="#"><span>Shop</span></a>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="">Produts</a>
                                    <ul class="mobile-sub-menu">
                                        <li><a href="{{route('filterpage.filter')}}">Category</a></li>
                                        <li><a href="{{route('filterpage.filter')}}">Brand</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Pages</a>
                                    <ul class="mobile-sub-menu">
                                         <li><a href="{{route('product.show')}}">Coupon</a></li>
                                        <li><a href="{{route('showcart')}}">Cart</a></li>
                                        <li><a href="'{{route('showWishlist')}}">Wishlist</a></li>
                                        <li><a href="{{route('showCompareProduct')}}">Compare</a></li>
                                
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><span>Pages</span></a>
                            <ul class="mobile-sub-menu">
                                <li><a href="faq.html">Frequently Questions</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                        <li>
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    </li>
                    </ul>
                </div> <!-- End Mobile Menu Nav -->
            </div> <!-- End Mobile Menu -->

            <!-- Start Mobile contact Info -->
            <div class="mobile-contact-info">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('website/images/logo/logo_white.png')}}" alt=""></a>
                </div>

                <address class="address">
                    <span>Address: Your address goes here.</span>
                    <span>Call Us: 0123456789, 0123456789</span>
                    <span>Email: demo@example.com</span>
                </address>

                <ul class="social-link">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>

                <ul class="user-link">
                    <li><a href="{{route('showWishlist')}}">Wishlist</a></li>
                    <li><a href="
                        {{route('showcart')}}">Cart</a></li>
                 
                </ul>
            </div>
            <!-- End Mobile contact Info -->

        </div> <!-- End Offcanvas Mobile Menu Wrapper -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->

    <!-- Start Offcanvas Mobile Menu Section -->
    <div id="offcanvas-about" class="offcanvas offcanvas-rightside offcanvas-mobile-about-section">
        <!-- Start Offcanvas Header -->
        <div class="offcanvas-header text-right">
            <button class="offcanvas-close"><i class="ion-android-close"></i></button>
        </div> <!-- End Offcanvas Header -->
        <!-- Start Offcanvas Mobile Menu Wrapper -->
        <!-- Start Mobile contact Info -->
        <div class="mobile-contact-info">
            <div class="logo">
                <a href="index.html"><img src="{{asset('website/images/logo/logo_white.png')}}" alt=""></a>
            </div>

            <address class="address">
                <span>Address: Your address goes here.</span>
                <span>Call Us: 0123456789, 0123456789</span>
                <span>Email: demo@example.com</span>
            </address>

            <ul class="social-link">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>

          <ul class="user-link">
                <li><a href="{{route('showWishlist')}}">Wishlist</a></li>
                <li><a href="{{route('showcart')}}">Cart</a></li>
                
            </ul>
        </div>
        <!-- End Mobile contact Info -->
    </div> <!-- ...:::: End Offcanvas Mobile Menu Section:::... -->




