@extends('admin_welcome')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập Nhật Dịch Vụ
                </header>
                <div class="panel-body">
                  <?php
                  $message = Session::get('message');
                  if($message){
                  	echo "<span class='text-alert'> ".$message."</span>";
                  	Session::put('message',null);
                  }
                  ?>
                  @foreach($edit_category_product as $key => $value)
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/edit-cate/'.$value->id_dv)}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Dịch Vụ</label>
                            <input type="text" value="{{ $value->name_dv }}" class="form-control" name="name_cate" placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình Ảnh</label>
                            <input type="file" style="resize:none;" rows="5"  class="form-control"  name="cate_image" ></input>
                            <img width="150" src="{{URL::to('public/uploads/cate/'.$value->image_dv)}}" alt="">

                        </div>
                        <button type="submit" name="update" class="btn btn-info">Cập Nhật Dịch Vụ</button>
                    </form>
                    </div>
                    @endforeach
                </div>
            </section>

    </div>
</div>
@endsection
