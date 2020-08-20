@extends('welcome')
@section('content')
<!-- banner -->
	<div class="w3ls-banner-1">
		<h3>Thiết Kế Web</h3>
	</div>
	<!-- //banner -->
	<!-- Gallery -->
	<div id="gallery" class="gallery">
		<div class="container">
			<div class="w3-heading-all">
		<h3>Các Mẫu Demo</h3>
		</div>
		</div>
		<div class="agileinfo-gallery-row">
			@foreach($tkw as $key => $value)
      <div class="col-md-4 col-sm-12 col-xs-12 w3gallery-grids">
				<div class="cha" >
	      <img  width="100%" src="{{URL::to('public/uploads/cate/'.$value->image_chitiet)}}" title="{{$value->name_chitiet}}" alt="">
	    </div>

        <div class="agile-figcaption">
          <p style="margin-bottom:10px;font-size:25px;">{{$value->name_chitiet}}</p>
					<hr style="margin:10px auto;width:80%;height:1px;background:white;">
					<div class="chitietdv">
						<a class="btn btn-warning">Xem Chi Tiết</a>
						<a class="btn btn-warning">Xem Demo</a>
					</div>
        </div>

      </div>
			@endforeach
			<div class="clearfix"> </div>

		</div>
	</div>
	<!-- //Gallery -->
@endsection
