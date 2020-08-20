@extends('welcome')
@section('content')
<!-- banner -->
	<div class="w3ls-banner-1">
    <h3>Liên Hệ Chúng Tôi</h3>
	</div>
	<!-- //banner -->
<!--//Header-->
<!-- contact -->
<!-- contact -->
<div class="w3ls-section contact" id="contact">
  <div class="container">
    <div class="w3-heading-all contact-head">
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
	<div class="agileits-w3layouts-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.789217958547!2d106.62207301526047!3d10.827436461209691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bd738bce125%3A0x57a197c47d44a05c!2zMTY1LCAyMCBQaGFuIFbEg24gSOG7m24sIFTDom4gVGjhu5tpIE5o4bqldCwgUXXhuq1uIDEyLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1590060575038!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>

	<!-- //contact -->
  @endsection
