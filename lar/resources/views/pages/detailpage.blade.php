@extends('welcome')
@section('content')
<!-- banner -->

	<div class="w3ls-banner-1">
		<h3>{{ $name_chitiet->name_chitiet}}</h3>
	</div>
	<!-- //banner -->
<!--//Header-->
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
		<!---728x90--->
			<div class="col-md-7 banner_bottom_left">
				<h2 class="title-w3-agileits one">{{ $name_chitiet->name_chitiet}}</h2>
				<p><i>Một trong những phương pháp dẫn đến thành công </i> {{ $name_chitiet->content_dv}}</p>
				<div class="more wthree_more1 ">
					<a href="#" class="hvr-shutter-in-vertical" data-toggle="modal" data-target="#myModal">Read More<span class="glyphicon glyphicon-arrow-right"></span></a>
				</div>
			</div>
			<div class="col-md-5 banner_bottom_right">
				<div class="img_agile">
					<img src="images/ab1.jpg" class="img-responsive" alt="" />
				</div>


			</div>

			<div class="clearfix"> </div>
			<div class="banner_bottom_agile_grids">
				<div class="wthree_banner_bottom_right_grids">
          <center><h3>Có thể bạn quan tâm</h3></center>
          @foreach($relationship as $key => $value)
					<div class="col-md-3 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fa fa-eye" aria-hidden="true"></i>
								<h3>{{ $value->name_chitiet}}</h3>
								<p>{{ $value->content_dv}}</p>
							</div>
							<div class="mask">
								<img src="{{ URL::to('public/uploads/cate/'.$value->image_chitiet)}}" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
          @endforeach
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!---728x90--->
	<!-- banner-bottom -->

@endsection
