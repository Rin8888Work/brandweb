@extends('admin_welcome')
@section('admin_content')
<!DOCTYPE html>
  <style media="screen">
    .cha{
      width:400px !important;
      height: 400px;
      z-index: 5;
      position:relative;
      overflow:hidden;
    }
    .cha img{
      position:absolute;
      transition: all ease-in-out 3.2s;
      transition-property: all;
      transition-duration: 3.2s;
      transition-timing-function: ease-in-out;
      transition-delay: 0s;
      top:0;
      left:0;
    }
    .cha img:hover{
          top: 100%;
      transform: translateY(-100%);
      position:absolute;
    }
  </style>
    <div class="wrap" >
      <div class="cha" >
      <img width="400"src="test.png" alt="">
    </div>
    </div>

@endsection
