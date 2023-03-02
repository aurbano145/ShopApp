<!DOCTYPE html>
<html>
    <head>
		<script type="text/javascript">
			if (top !== window) {
				top.location.href = window.location.href;
			}
			if (window.location.hash) {
				window.location.href = window.location.href.replace(window.location.hash, '');
			}
		</script>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Molla - Best Premium HTML Template</title>

		<meta name="author" content="p-Themes">

		<!-- Favicon -->
		<link rel="shortcut icon" href="https://www.portotheme.com/html/molla/assets/images/demos-img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../../../www.portotheme.com/html/molla/assets/images/demos-img/apple-touch-icon.html">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ url('lib/bootstrap/bootstrap.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ url('assets/css/main.min.css') }}">
		
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ url('assets/css/custom.css') }}">

	</head>
	<body>
		<div class="page-wrapper">
			<header id="header">
				<div class="container-lg">
					<div class="header-left">
						<div class="logo">
							<a href="#"><img src="{{ url('assets/images/demos-img/logo.png') }}" alt="Molla Logo"></a>
						</div>
					</div>
					<div class="header-main">
						<ul class="menu">
							<li>
								<a href="https://aurbano145.ieszaidinvergeles.es/laraveles/ShopApp/public/" class="goto-home">Home</a>
							</li>
							<li>
								<a href="https://aurbano145.ieszaidinvergeles.es/laraveles/ShopApp/public/simple" class="goto-simple">Simple Shop</a>
							</li>
							<li>
								<a href="https://aurbano145.ieszaidinvergeles.es/laraveles/ShopApp/public/ajax" class="goto-ajax">Ajax Shop</a>
							</li>
						</ul>
					</div>
					<div class="header-right"></div>
				</div>
			</header>
			<div id="main">
				<section class="banner section-dark" style="background: #222;">
					<img src="{{ url('assets/images/custom/homebg.png') }}" alt="" width="1920" height="1120">
					<!--div class="banner-text text-center">
						<h1>Multi-Purpose eCommerce HTML5 Template</h1>
						<h5 class="mb-5">Molla is simply the best choice for your new website. Your search for the best solution is over, get your own copy and join thousands of happy customers.</h5>
					</div-->
				</section>
			</div>
		</div>

		<!-- Vendor -->
		<script src="{{ url('lib/jquery/jquery.min.js') }}"></script>
		<script src="{{ url('lib/jquery.appear/jquery.appear.min.js') }}"></script>
		<!--<script src="lib/popper/umd/popper.min.js"></script>-->
		<script src="{{ url('lib/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ url('lib/isotope/jquery.isotope.min.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ url('assets/main.js') }}"></script>
	</body>
</html>