<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Molla - Simple Shop Product</title>
        <meta name="keywords" content="HTML5 Template">
        <meta name="description" content="Molla - Bootstrap eCommerce Template">
        <meta name="author" content="p-themes">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/images/icons/apple-touch-icon.png') }}">
            <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/images/icons/favicon-32x32.png') }}">
            <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/images/icons/favicon-16x16.png') }}">
            <link rel="manifest" href="{{ url('assets/images/icons/site.html') }}">
            <link rel="mask-icon" href="{{ url('assets/images/icons/safari-pinned-tab.svg') }}" color="#666666">
            <link rel="shortcut icon" href="{{ url('assets/images/icons/favicon.ico') }}">
            <meta name="apple-mobile-web-app-title" content="Molla">
            <meta name="application-name" content="Molla">
            <meta name="msapplication-TileColor" content="#cc9966">
            <meta name="msapplication-config" content="{{ url('assets/images/icons/browserconfig.xml') }}">
            <meta name="theme-color" content="#ffffff">
            <!-- Plugins CSS File -->
            <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
            <!-- Main CSS File -->
            <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/plugins/owl-carousel/owl.carousel.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/plugins/magnific-popup/magnific-popup.css') }}">
            <link rel="stylesheet" href="{{ url('assets/css/plugins/nouislider/nouislider.css') }}">
    </head>
    
    <body>
        <div class="page-wrapper">
            <header class="header">
                <div class="header-top">
                    <div class="container">
                        <div class="header-left">
                            <div class="header-dropdown">
                                <a href="#">Usd</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">Eur</a></li>
                                        <li><a href="#">Usd</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->
    
                            <div class="header-dropdown">
                                <a href="#">Eng</a>
                                <div class="header-menu">
                                    <ul>
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </div><!-- End .header-menu -->
                            </div><!-- End .header-dropdown -->
                        </div><!-- End .header-left -->
    
                        <div class="header-right">
                            <ul class="top-menu">
                                <li>
                                    <a href="#">Links</a>
                                    <ul>
                                        <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                        <li><a href="wishlist.html"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .top-menu -->
                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-top -->
    
                <div class="header-middle sticky-header">
                    <div class="container">
                        <div class="header-left">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>
    
                            <a href="index.html" class="logo">
                                <img src="{{ url('assets/images/logo.png') }}" alt="Molla Logo" width="105" height="25">
                            </a>
    
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="megamenu-container">
                                        <a href="{{ url('') }}" class="sf-with-ul">Home</a>
                                    </li>
                                    <li class="megamenu-container active">
                                        <a href="{{ url('clothes') }}" class="sf-with-ul">Simple Shop</a>
                                    </li>
                                    <li class="megamenu-container">
                                        <a href="{{ url('ajax') }}" class="sf-with-ul">Ajax Shop</a>
                                    </li>
                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .header-left -->
    
                        <div class="header-right">
                            <div class="header-search">
                                <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                <form action="{{ $url ?? url('clothes') }}" method="get">
                                    <div class="header-search-wrapper">
                                        <label for="q" class="sr-only">Search</label>
                                        <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." value="{{ $q ?? '' }}" required >
                                    </div><!-- End .header-search-wrapper -->
                                </form>
                            </div><!-- End .header-search -->
                            <div class="dropdown compare-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" aria-label="Compare Products">
                                    <i class="icon-random"></i>
                                </a>
                            </div><!-- End .compare-dropdown -->
    
                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">0</span>
                                </a>
                            </div><!-- End .cart-dropdown -->
                        </div><!-- End .header-right -->
                    </div><!-- End .container -->
                </div><!-- End .header-middle -->
            </header><!-- End .header -->
    
            <main class="main">
                <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                    <div class="container d-flex align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('clothes') }}">Simple Shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $clothes->name }}</li>
                        </ol>
    
                        <!--nav class="product-pager ml-auto" aria-label="Product">
                            <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                                <i class="icon-angle-left"></i>
                                <span>Prev</span>
                            </a>
    
                            <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                                <span>Next</span>
                                <i class="icon-angle-right"></i>
                            </a>
                        </nav--><!-- End .pager-nav -->
                    </div><!-- End .container -->
                </nav><!-- End .breadcrumb-nav -->
    
                <div class="page-content">
                    <div class="container">
                        <div class="product-details-top">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="product-gallery product-gallery-vertical">
                                        <div class="row">
                                            <figure class="product-main-image">
                                                <img id="product-zoom" src="{{ $clothes->photo }}" data-zoom-image="assets/images/products/single/1-big.jpg" alt="product image">
    
                                                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                    <i class="icon-arrows"></i>
                                                </a>
                                            </figure><!-- End .product-main-image -->
                                        </div><!-- End .row -->
                                    </div><!-- End .product-gallery -->
                                </div><!-- End .col-md-6 -->
    
                                <div class="col-md-6">
                                    <div class="product-details">
                                        <h1 class="product-title">{{ $clothes->name }}</h1><!-- End .product-title -->
    
                                        <div class="product-price">
                                            ${{ $clothes->price }}
                                        </div><!-- End .product-price -->
    
                                        <div class="product-content">
                                            <p>{{ $clothes->description }}</p>
                                        </div><!-- End .product-content -->
    
                                        <div class="product-details-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
    
                                            <div class="details-action-wrapper">
                                                <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                                <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                            </div><!-- End .details-action-wrapper -->
                                        </div><!-- End .product-details-action -->
    
                                        <div class="product-details-footer">
                                            <div class="product-cat">
                                                <span>Category:</span>
                                                <a href="#">{{ $clothes->genre->name }}</a>,
                                                <a href="#">{{ $clothes->category->name }}</a>
                                            </div><!-- End .product-cat -->
    
                                            <div class="social-icons social-icons-sm">
                                                <span class="social-label">Share:</span>
                                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                                <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                            </div>
                                        </div><!-- End .product-details-footer -->
                                    </div><!-- End .product-details -->
                                </div><!-- End .col-md-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .product-details-top -->
                    </div><!-- End .container -->
                </div><!-- End .page-content -->
            </main><!-- End .main -->
    
            <footer class="footer">
            	<div class="footer-middle">
    	            <div class="container">
    	            	<div class="row">
    	            		<div class="col-sm-6 col-lg-3">
    	            			<div class="widget widget-about">
    	            				<img src="{{ url('assets/images/logo.png') }}" class="footer-logo" alt="Footer Logo" width="105" height="25">
    	            				<p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
    
    	            				<div class="social-icons">
    	            					<a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
    	            					<a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
    	            					<a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
    	            					<a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
    	            					<a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
    	            				</div><!-- End .soial-icons -->
    	            			</div><!-- End .widget about-widget -->
    	            		</div><!-- End .col-sm-6 col-lg-3 -->
    
    	            		<div class="col-sm-6 col-lg-3">
    	            			<div class="widget">
    	            				<h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->
    
    	            				<ul class="widget-list">
    	            					<li><a href="about.html">About Molla</a></li>
    	            					<li><a href="#">How to shop on Molla</a></li>
    	            					<li><a href="#">FAQ</a></li>
    	            					<li><a href="contact.html">Contact us</a></li>
    	            					<li><a href="login.html">Log in</a></li>
    	            				</ul><!-- End .widget-list -->
    	            			</div><!-- End .widget -->
    	            		</div><!-- End .col-sm-6 col-lg-3 -->
    
    	            		<div class="col-sm-6 col-lg-3">
    	            			<div class="widget">
    	            				<h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->
    
    	            				<ul class="widget-list">
    	            					<li><a href="#">Payment Methods</a></li>
    	            					<li><a href="#">Money-back guarantee!</a></li>
    	            					<li><a href="#">Returns</a></li>
    	            					<li><a href="#">Shipping</a></li>
    	            					<li><a href="#">Terms and conditions</a></li>
    	            					<li><a href="#">Privacy Policy</a></li>
    	            				</ul><!-- End .widget-list -->
    	            			</div><!-- End .widget -->
    	            		</div><!-- End .col-sm-6 col-lg-3 -->
    
    	            		<div class="col-sm-6 col-lg-3">
    	            			<div class="widget">
    	            				<h4 class="widget-title">My Account</h4><!-- End .widget-title -->
    
    	            				<ul class="widget-list">
    	            					<li><a href="#">Sign In</a></li>
    	            					<li><a href="cart.html">View Cart</a></li>
    	            					<li><a href="#">My Wishlist</a></li>
    	            					<li><a href="#">Track My Order</a></li>
    	            					<li><a href="#">Help</a></li>
    	            				</ul><!-- End .widget-list -->
    	            			</div><!-- End .widget -->
    	            		</div><!-- End .col-sm-6 col-lg-3 -->
    	            	</div><!-- End .row -->
    	            </div><!-- End .container -->
    	        </div><!-- End .footer-middle -->
    
    	        <div class="footer-bottom">
    	        	<div class="container">
    	        		<p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
    	        		<figure class="footer-payments">
    	        			<img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
    	        		</figure><!-- End .footer-payments -->
    	        	</div><!-- End .container -->
    	        </div><!-- End .footer-bottom -->
            </footer><!-- End .footer -->
        </div><!-- End .page-wrapper -->
        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
    
        <!-- Sign in / Register Modal -->
        <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="icon-close"></i></span>
                        </button>
    
                        <div class="form-box">
                            <div class="form-tab">
                                <ul class="nav nav-pills nav-fill" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="tab-content-5">
                                    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="singin-email">Username or email address *</label>
                                                <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                            </div><!-- End .form-group -->
    
                                            <div class="form-group">
                                                <label for="singin-password">Password *</label>
                                                <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                            </div><!-- End .form-group -->
    
                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>LOG IN</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>
    
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                    <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                                </div><!-- End .custom-checkbox -->
    
                                                <a href="#" class="forgot-link">Forgot Your Password?</a>
                                            </div><!-- End .form-footer -->
                                        </form>
                                        <div class="form-choice">
                                            <p class="text-center">or sign in with</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-g">
                                                        <i class="icon-google"></i>
                                                        Login With Google
                                                    </a>
                                                </div><!-- End .col-6 -->
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-f">
                                                        <i class="icon-facebook-f"></i>
                                                        Login With Facebook
                                                    </a>
                                                </div><!-- End .col-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .form-choice -->
                                    </div><!-- .End .tab-pane -->
                                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                        <form action="#">
                                            <div class="form-group">
                                                <label for="register-email">Your email address *</label>
                                                <input type="email" class="form-control" id="register-email" name="register-email" required>
                                            </div><!-- End .form-group -->
    
                                            <div class="form-group">
                                                <label for="register-password">Password *</label>
                                                <input type="password" class="form-control" id="register-password" name="register-password" required>
                                            </div><!-- End .form-group -->
    
                                            <div class="form-footer">
                                                <button type="submit" class="btn btn-outline-primary-2">
                                                    <span>SIGN UP</span>
                                                    <i class="icon-long-arrow-right"></i>
                                                </button>
    
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                    <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                                </div><!-- End .custom-checkbox -->
                                            </div><!-- End .form-footer -->
                                        </form>
                                        <div class="form-choice">
                                            <p class="text-center">or sign in with</p>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login btn-g">
                                                        <i class="icon-google"></i>
                                                        Login With Google
                                                    </a>
                                                </div><!-- End .col-6 -->
                                                <div class="col-sm-6">
                                                    <a href="#" class="btn btn-login  btn-f">
                                                        <i class="icon-facebook-f"></i>
                                                        Login With Facebook
                                                    </a>
                                                </div><!-- End .col-6 -->
                                            </div><!-- End .row -->
                                        </div><!-- End .form-choice -->
                                    </div><!-- .End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .form-tab -->
                        </div><!-- End .form-box -->
                    </div><!-- End .modal-body -->
                </div><!-- End .modal-content -->
            </div><!-- End .modal-dialog -->
        </div><!-- End .modal -->
    
        <!-- Plugins JS File -->
            <script src="{{ url('assets/js/jquery.min.js') }}"></script>
            <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ url('assets/js/jquery.hoverIntent.min.js') }}"></script>
            <script src="{{ url('assets/js/jquery.waypoints.min.js') }}"></script>
            <script src="{{ url('assets/js/superfish.min.js') }}"></script>
            <script src="{{ url('assets/js/owl.carousel.min.js') }}"></script>
            <script src="{{ url('assets/js/wNumb.js') }}"></script>
            <script src="{{ url('assets/js/bootstrap-input-spinner.js') }}"></script>
            <script src="{{ url('assets/js/jquery.magnific-popup.min.js') }}"></script>
            <script src="{{ url('assets/js/nouislider.min.js') }}"></script>
            <!-- Main JS File -->
            <script src="{{ url('assets/js/main.js') }}"></script>
    </body>
</html>