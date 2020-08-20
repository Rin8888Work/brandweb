<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>PPMedia</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Design Lab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('public/frontend/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontend/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
		<div class="banner-top">
			<div class="social-bnr-agileits">
				<ul class="social-icons3">
					<li><a href="https://www.facebook.com/nguyenvanphuoc.vn" class="fab fa-facebook icon-border facebook" target="_blank"> </a></li>
					<li><a href="#" class="fab fa-twitter icon-border twitter"> </a></li>
					<li><a href="#" class="fab fa-google-plus icon-border googleplus"> </a></li>
					<li><a href="#" class="fas fa-envelope-square icon-border rss"> </a></li>
				</ul>
			</div>
			<div class="contact-bnr-w3-agile">
				<ul>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">PHUOCNV106@GMAIL.COM</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i>+84 36-561-0561</li>

				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="{{URL::to('/trang-chu.html')}}"><span>PP</span>MEDIA</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item {{Request::is('trang-chu.html','/')? 'menu__item--current' : null }}"><a href="{{URL::to('/trang-chu.html')}}" class="menu__link">Trang Chủ</a></li>
              <li class="menu__item {{Request::is('dich-vu-facebook.html')? 'menu__item--current' : null }}"><a href="{{URL::to('/dich-vu-facebook.html')}}" class="menu__link">DV Facebook</a></li>
              <li class="menu__item {{Request::is('thiet-ke-web.html')? 'menu__item--current' : null }}"><a href="{{URL::to('/thiet-ke-web.html')}}" class="menu__link">Thiết Kế Website</a></li>
              <li class="menu__item {{Request::is('dich-vu-ads.html')? 'menu__item--current' : null }}"><a href="{{URL::to('/dich-vu-ads.html')}}" class="menu__link">DV ADS</a></li>
							<li class="menu__item {{Request::is('dao-tao.html')? 'menu__item--current' : null }}"><a href="{{URL::to('/dao-tao.html')}}" class="menu__link">Đào Tạo</a></li>
							<li class="menu__item {{Request::is('lien-he.html')? 'menu__item--current' : null }}"><a href="{{URL::to('/lien-he.html')}}" class="menu__link">Liên Hệ</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>

<!-- //header -->
@yield('content')

	<!-- footer -->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-agileinfo">
				<div class="col-md-3 col-sm-6 footer-grid">
					<h3>Địa chỉ</h3>
          <ul>
						<li> 165/20 Phan Văn Hớn</li>
            <li> Quận 12- Tp.HCM</li>
            <li> Email: phuocnv106@gmail.com</li>
						<li> Điện Thoại: 0365610561</li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-6 footer-grid footer-tags">
					<h3>Bảng Dịch Vụ</h3>
					<ul>
						<li><a href="index.html"><i class="fa fa-angle-right"></i> Facebook</a></li>
						<li><a href="about.html"><i class="fa fa-angle-right"></i> Website</a></li>
						<li><a href="gallery.html"><i class="fa fa-angle-right"></i> Đào Tạo</a></li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-6 footer-grid footer-review">
					<h3>Liên Hệ Với Chúng Tôi</h3>
					<p>Nhập vào email của bạn</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email của bạn" required="">
						<input type="submit" value="Gửi">
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="col-md-2 col-sm-6 footer-grid w3social">
					<h3>Mạng Xã Hội</h3>
					<ul>
						<li><a href="#"><i class="fab fa-google-plus"></i>Google-plus</a></li>
						<li><a href="https://www.facebook.com/nguyenvanphuoc.vn"><i class="fab fa-facebook"></i>Facebook</a></li>
						<li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
						<li><a href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="copy-right wthree">
		<div class="container">
			<p>© 2020 All rights reserved | Design by <a href="http://facebook.com/nguyenvanphuoc.vn"> Văn Phước</a></p>
		</div>
	</div>
	<!-- //footer -->

<!-- js -->
<script type="text/javascript" src="{{asset('public/frontend/js/jquery-2.1.4.min.js')}}"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{asset('public/frontend/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('public/frontend/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
		<script src="{{asset('public/frontend/js/responsiveslides.min.js')}}"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });

						});
			</script>
	<!-- clients js file-->
	<script src="{{asset('public/frontend/js/jquery.wmuSlider.js')}}"></script>
		<script>
			$('.example1').wmuSlider();
		</script>
<!-- //clients js file -->


<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{asset('public/frontend/js/bootstrap-3.1.1.min.js')}}"></script>
</body>
</html>
