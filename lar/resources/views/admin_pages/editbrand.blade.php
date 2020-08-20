@extends('admin_welcome')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập Nhật Thương Hiệu Sản Phẩm
                </header>
                <div class="panel-body">
                  <?php
                  $message = Session::get('message');
                  if($message){
                  	echo "<span class='text-alert'> ".$message."</span>";
                  	Session::put('message',null);
                  }
                  ?>
                  @foreach($edit_brand as $key => $value)
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/edit-brand/'.$value->id)}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Dịch Vụ</label>
                            <input type="text" value="{{ $value->name_chitiet }}" class="form-control" name="brand_name" placeholder="Nhập tên Thương Hiệu">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Dịch Vụ Cha</label>
                            <select name="brand" class="form-control input-sm m-bot15">
                              @foreach($dv as $key => $dichvu)
                              @if($value->id_dv == $dichvu->id_dv)
                                <option selected value="{{ $value->id_dv}}">{{ $dichvu->name_dv }}</option>
                                @else
                                <option value="{{ $value->id_dv}}">{{ $dichvu->name_dv }}</option>
                                @endif
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gia Dịch Vụ</label>
                            <input type="text"  value="{{ $value->price_dv }}" class="form-control" name="price_dv" placeholder="Nhập giá">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình Ảnh</label>
                            <input type="file" style="resize:none;" rows="5"  class="form-control"  name="image_chitiet" ></input>
                            <img src="{{URL::to('public/uploads/cate/'.$value->image_chitiet)}}" alt="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả Dịch Vụ</label>
                            <textarea style="resize:none;" rows="5"  class="form-control"  name="brand_desc" placeholder="Nhập mô tả Thương Hiệu">{{ $value->content_dv }}</textarea>
                        </div>
                        <button type="submit" name="update" class="btn btn-info">Cập Nhật Thương Hiệu</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
</div>
@endsection
