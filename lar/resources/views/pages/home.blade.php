@extends('welcome')
@section('content')
<!-- banner -->
	<div class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>Thiết Kế Web Chuyên Nghiệp</h4>

								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Hỗ Trợ Các Vấn Đề FaceBook</h4>


								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>Đào Tạo Học Viên </h4>

								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		<div class="main-agileits">
<!--form-stars-here-->
		<div class="book-form">
			<h6>Chúng tôi có thể liên hệ bạn bằng cách nào?</h6>
			   <form action="#" method="post">
					<div class="w3ls-field">
						<input type="text" name="Name" placeholder="Tên" required=""/>
					</div>
					<div class="w3ls-field">
						<input type="email" name="Email" placeholder="Email" required=""/>
					</div>
					<div class="w3ls-field">
						<input type="text" name="Class" placeholder="Điện Thoại" required=""/>
					</div>
					<div class="w3ls-field">
						<input type="text" name="Subject" placeholder="Nội dung cần hỗ trợ" required=""/>
					</div>
					<div class="w3ls-field submit-w3ls-field">
						  <input type="submit" value="Gửi">
					</div>
			<div class="clearfix"> </div>
				</form>
			</div>

<!--//form-ends-here-->
<div class="clear"></div>
</div>

	</div>
	<!-- //banner -->
<!--//Header-->
<!-- /services -->
<div class="services" id="services">
	<div class="container">
		<div class="w3-heading-all">
		<h3>Dịch Vụ</h3>
	   </div>

		<div class="col-md-4 w3-services-right">
		<div class="w3-services-right w3-services-align">
		      <div class="col-md-3 w3-services-right1 services-icons">
					<i class="fab fa-facebook" aria-hidden="true"></i>
		     </div>
			 <div class="col-md-9 w3-services-right2">
					<h3>FaceBook</h3>

		     </div>
			 <div class="clearfix"></div>
			 </div>
			 <div class="w3-services-right w3-services-align">
			 		      <div class="col-md-3 w3-services-right1 services-icons">
					 <i class="fab fa-instagram" aria-hidden="true"></i>
		     </div>
			 <div class="col-md-9 w3-services-right2">
			 <h3>Instagram</h3>
		     </div>
			 <div class="clearfix"></div>
			 </div>
			 			 <div class="w3-services-right w3-services-align">
			 		       <div class="col-md-3 w3-services-right1 services-icons">
					<i class="fab fa-youtube" aria-hidden="true"></i>
		     </div>
			 <div class="col-md-9 w3-services-right2">
		             <h3>Youtube</h3>
		     </div>
			 <div class="clearfix"></div>
			  </div>
		</div>
		<div class="col-md-4 w3-services-middle">
				<img src="{{asset('public/frontend/images/ab.png')}}" alt="img1">
		</div>
		<div class="col-md-4 w3-services-left">
		<div class="w3-services-right w3-services-align">
		     <div class="col-md-3 w3-services-left1 services-icons">
			     <i class="fas fa-globe" aria-hidden="true"></i>

		     </div>
			 <div class="col-md-9 w3-services-left2">
		          <h3>Website</h3>
		     </div>
			 <div class="clearfix"></div>
			 </div>
			 <div class="w3-services-right w3-services-align">
			   <div class="col-md-3 w3-services-left1 services-icons">
				<i class="fas fa-chalkboard" aria-hidden="true"></i>

		     </div>
			 <div class="col-md-9 w3-services-left2">
				<h3>Landing Page</h3>
		     </div>
			 <div class="clearfix"></div>
			 </div>
			  <div class="w3-services-right w3-services-align">
			    <div class="col-md-3 w3-services-left3 services-icons">
			     <i class="fas fa-ad" aria-hidden="true"></i>

		     </div>
			 <div class="col-md-9 w3-services-left3 ">
		          <h3>ADS</h3>
		     </div>
			 <div class="clearfix"></div>
			 </div>

		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- //services -->
<!-- team -->
	<div class="team" id="team">
		<div class="container">
		<div class="w3-heading-all">
		<h3>Đội Ngũ</h3>
	   </div>
			<div class="team-grids">
				<ul class="ch-grid">
					<li class="col-xs-3 ch-grid-item">
						<div class="ch-item ch-img-1">
							<img height="283,33"src="{{asset('public/frontend/images/phuoc.jpg')}}" alt=" ">
						</div>
						<div class="ch-info">
							<h3>Nguyễn Văn Phước</h3>
							<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
								<ul class="top-links">
									<li><a href="https://www.facebook.com/nguyenvanphuoc.vn"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
					<li class="col-xs-3 ch-grid-item">
						<div class="ch-item ch-img-2">
							<img src="{{asset('public/frontend/images/t2.jpg')}}" alt=" ">
						</div>
						<div class="ch-info">
							<h3>Sean Damon</h3>
							<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
								<ul class="top-links">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
					<li class="col-xs-3 ch-grid-item">
						<div class="ch-item ch-img-3">
							<img src="{{asset('public/frontend/images/t3.jpg')}}" alt=" ">
						</div>
						<div class="ch-info">
							<h3>Tom Gene</h3>
							<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
								<ul class="top-links">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
					<li class="col-xs-3 ch-grid-item">
						<div class="ch-item ch-img-4">
							<img src="{{asset('public/frontend/images/t4.jpg')}}" alt=" ">
						</div>
						<div class="ch-info">
							<h3>Heatr Wayne</h3>
							<div class="social-icons animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="800ms">
								<ul class="top-links">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
								<div class="clearfix"> </div>
							</div>
						</div>
					</li>
				</ul>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //team -->
<!-- clients-->
	<div class="clients" id="clients">
		<div class="container">
		<div class="w3-heading-all">
		<h3> Đánh Giá </h3>
	   </div>
			<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="col-md-4 client-grids">
									<p style="height:185px!important">Linh đã sử dụng dịch vụ của PPMedia và Linh cảm thấy rất hài lòng về đội ngũ làm việc. Họ thực hiện yêu cầu của khách hàng nhanh chóng, chất lượng, hỗ trợ rất nhiệt tình, còn bảo hành nữa.</p>
									<div class="col-md-5 c-img">
										<img style="width:100px!important;height:100px !important" src="{{asset('public/frontend/images/doanhnhan.jpg')}}"  alt="" />
									</div>
									<div class="col-md-7 c-info">
										<h4>Chị Linh</h4>
										<h5>Nữ Doanh Nhân</h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 client-grids">
									<p style="height:185px!important">Đội ngũ làm việc đã tư vấn , hỗ trợ tôi rất nhiệt tình trong quá

trình lấy lại facebook của tôi. Ngoài ra , tôi còn được tặng gói bảo mật

tài khoản facebook từ PPMedia. Đây quả là một dịch vụ uy tín,

chất lượng. Tôi tự cho mình là may mắn khi tìm đến đúng dịch vụ này

trong lần đầu gặp sự cố </p>
									<div class="col-md-5 c-img">
										<img style="width:100px!important; height:100px !important" src="{{asset('public/frontend/images/nam.jpg')}}"  alt="" />
									</div>
									<div class="col-md-7 c-info">
										<h4>Anh Bình</h4>
										<h5>Chủ Shop Quần Áo</h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 client-grids">
									<p style="height:185px!important">Mình từng làm việc với đội ngũ hỗ trợ của PPMedia khi mình bị report nick facebook. My rất hài lòng về tác phong làm việc của họ, đặc biệt là cách nói chuyện dễ thương và giá cả rất hợp lí.</p>
									<div class="col-md-5 c-img">
										<img style="width:100px!important;height:100px !important " src="{{asset('public/frontend/images/quanao.jpg')}}"  alt="" />
									</div>
									<div class="col-md-7 c-info">
										<h4>Chị Lan</h4>
										<h5>Chủ Shop Mỹ Phẩm</h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="col-md-4 client-grids">
									<p style="height:185px!important">Mình bán hàng online, lang thang trên mạng và tìm được trang PPMedia tuyệt vời này. Từ khi tham gia dịch vụ, lượng hàng mình bán ngày càng tăng đồng nghĩa với việc doanh thu cũng tăng lên rất nhiều.</p>
									<div class="col-md-5 c-img">
										<img style="width:100px!important;height:100px !important " src="{{asset('public/frontend/images/nam2.jpg')}}"  alt="" />
									</div>
									<div class="col-md-7 c-info">
										<h4>Anh Tuấn</h4>
										<h5>Bán Hàng Online</h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 client-grids">
									<p style="height:185px!important">Mình từng làm việc với đội ngũ hỗ trợ của PPMedia khi mình muốn tạo một trang web. My rất hài lòng về tác phong làm việc của họ, đặc biệt là cách nói chuyện dễ thương và giá cả rất hợp lí.</p>
									<div class="col-md-5 c-img">
										<img style="width:100px!important;height:100px !important " src="{{asset('public/frontend/images/nam1.jpg')}}"  alt="" />
									</div>
									<div class="col-md-7 c-info">
										<h4>Anh Nam</h4>
										<h5>Bán Gỗ</h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="col-md-4 client-grids">
									<p style="height:185px!important">Đội ngũ làm việc rất nhiệt tình và dễ thương</p>
									<div class="col-md-5 c-img">
										<img style="width:100px!important;height:100px !important " src="{{asset('public/frontend/images/nu1.png')}}"  alt="" />
									</div>
									<div class="col-md-7 c-info">
										<h4>Chị Hồng</h4>
										<h5>Bán Hàng Online</h5>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</article>
					</div>
				</div>
		</div>
	</div>
<!--//clients-->
	<!-- contact -->
	<div class="w3ls-section contact" id="contact">
		<div class="container">
			<div class="w3-heading-all contact-head">
		<h3>Liên Hệ Chúng Tôi</h3>
		<span  class="w3-heading-icon">
		</span>
		</div>
			<div class="contact-form">
				<div class="col-md-5 contact-left">
					<div class="address">
						<h5>Địa Chỉ:</h5>
						<p><i class="glyphicon glyphicon-home"></i> 165/20 Phan Văn Hớn - Quận 12 -Tp.HCM</p>
					</div>
					<div class="address address-mdl">
						<h5>Điện Thoại:</h5>
						<p><i class="glyphicon glyphicon-earphone"></i>0365610561</p>
					</div>
					<div class="address">
						<h5>Email:</h5>
						<p><i class="glyphicon glyphicon-envelope"></i> <a href="mailto:phuocnv106@gmail.com">phuocnv106@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-7 contact-right">
					<h5>Chúng Tôi Có Thể Giúp Bạn</h5>
					<form action="#" class="form_w3layouts" method="post">
						<input type="text" placeholder="Tên" required="">
						<input class="email" type="email" placeholder="Email" required="">
						<textarea placeholder="Nội dung" required=""></textarea>
						<input type="submit" value="Gửi">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="w3-contact-pos">
		<h3>Hãy liên lạc để có được thiết kế mới nhất
</h3>
		<p>Hãy hỏi nhóm của chúng tôi để có được thiết kế trong mơ</p>
		</div>
	</div>

	<!-- //contact -->
  @endsection
