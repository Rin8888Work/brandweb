@extends('admin_welcome')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm Thương Dịch Vụ
                </header>
                <div class="panel-body">
                  <?php
                  $message = Session::get('message');
                  if($message){
                  	echo "<span class='text-alert'> ".$message."</span>";
                  	Session::put('message',null);
                  }
                  ?>
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-brand')}}" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Chi Tiết Dịch Vụ</label>
                            <input type="text" class="form-control" name="brand_name" placeholder="Nhập tên ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Dịch Vụ Cha</label>
                            <select name="brand" class="form-control input-sm m-bot15">
                              @foreach($dv as $key => $value)
                                <option value="{{ $value->id_dv}}">{{ $value->name_dv }}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gia Dịch Vụ</label>
                            <input type="text" class="form-control" name="price_dv" placeholder="Nhập giá">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hình Ảnh</label>
                            <input type="file" style="resize:none;" rows="5"  class="form-control"  name="image_dv" ></input>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả Dịch Vụ</label>
                            <textarea style="resize:none;" rows="5"  class="form-control"  name="brand_desc" placeholder="Nhập mô tả thương hiệu"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Hiển thị</label>
                          <select name="status" class="form-control input-sm m-bot15">
                              <option value="0">Ẩn</option>
                              <option value="1">Hiển thị</option>
                          </select>
                        </div>
                        <button type="submit" name="add" class="btn btn-info">Thêm Thương Hiệu</button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection
