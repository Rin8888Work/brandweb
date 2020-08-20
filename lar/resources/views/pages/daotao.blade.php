@extends('welcome')
@section('content')
<!-- banner -->
	<div class="w3ls-banner-1">
		<h3>Đào Tạo</h3>
	</div>
	<!-- //banner -->
	<!-- Gallery -->
  <div id="gallery" class="gallery">
    <div class="container">
      <div class="w3-heading-all">
    <h3>Chương Trình Đào Tạo</h3>
    </div>
    </div>
    <div class="agileinfo-gallery-row">
			@foreach($daotao as $key => $value)
			<div class="col-md-4 col-sm-3 col-xs-6 w3gallery-grids">
				<a href="{{URL::to('/'.$value->id.'/'.$value->slug_chitiet.'.html')}}" class="imghvr-hinge-right figure">
				<img src="{{URL::to('public/uploads/cate/'.$value->image_chitiet)}}" alt="" title="{{$value->name_chitiet}}"/>
				<div class="agile-figcaption">
				<i class="fa fa-info" aria-hidden="true"></i>
					<p>{{$value->name_chitiet}}</p>
				</div>
			</a>
			</div>
			@endforeach
      <div class="clearfix"> </div>

    </div>
  </div>
	<!-- //Gallery -->
@endsection
