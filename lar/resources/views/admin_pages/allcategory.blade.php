@extends('admin_welcome')
@section('admin_content')
<div class="table-agile-info">
<div class="panel panel-default">
<div class="panel-heading">
  Dịch Vụ
</div>
<div class="row w3-res-tb">
  <div class="col-sm-5 m-b-xs">
    <select class="input-sm form-control w-sm inline v-middle">
      <option value="0">Xóa mục đã chọn</option>
      <option value="1">Xuất</option>
    </select>
    <button class="btn btn-sm btn-default">Áp Dụng</button>
  </div>
  <div class="col-sm-4">
  </div>
  <div class="col-sm-3">
    <div class="input-group">
      <input type="text" class="input-sm form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn btn-sm btn-default" type="button">Go!</button>
      </span>
    </div>
  </div>
</div>
<div class="table-responsive">
  <?php
  $message = Session::get('message');
  if($message){
    echo "<span class='text-alert'> ".$message."</span>";
    Session::put('message',null);
  }
  ?>
  <table class="table table-striped b-t b-light">
    <thead>
      <tr>
        <th style="width:20px;">
          <label  class="i-checks m-b-none">
            <input id="all_check" type="checkbox"><i></i>
          </label>
        </th>
        <th>Tên Dịch Vụ</th>
        <th>HÌnh Ảnh</th>
        <th>Hiển Thị</th>
        <th style="width:30px;"></th>
      </tr>
    </thead>
    <tbody>
        @foreach ($category_product as $key => $value)
      <tr>
        <td><label class="i-checks m-b-none"><input type="checkbox" name="check"><i></i></label></td>
        <td>{{ $value->name_dv }}</td>
        <td><img width="200"src="{{URL::to('public/uploads/cate/'.$value->image_dv)}}" alt=""></td>
        <td><span class="text-ellipsis">
          <?php
          if($value->status == 0){
            ?>
            <a href="{{URL::to('/active-cate/'.$value->id_dv)}}" style='font-weight:bold;color:red'>Ẩn</a>
            <?php
          }else{
            ?>
            <a href="{{URL::to('/unactive-cate/'.$value->id_dv)}}" style='font-weight:bold;color:green'>Hiện</a>
            <?php
          }
          ?>

        </span></td>
        <td>
          <a href="{{URL::to('/update-cate/'.$value->id_dv)}}" class="active" ui-toggle-class="">
            <i class="fa fa-pencil-square-o text-success text-active"></i>
          </a>
          <a href="{{URL::to('/delete-cate/'.$value->id_dv)}}" onclick="return confirm('Bạn có chắc chắn xóa')" class="active" ui-toggle-class="">
            <i class="fa fa-times text-danger text"></i>
          </a>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
<footer class="panel-footer">
  <div class="row">

    <div class="col-sm-5 text-center">
      <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
    </div>
    <div class="col-sm-7 text-right text-center-xs">
      <ul class="pagination pagination-sm m-t-none m-b-none">
        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
        <li><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
      </ul>
    </div>
  </div>
</footer>
</div>
</div>

@endsection
