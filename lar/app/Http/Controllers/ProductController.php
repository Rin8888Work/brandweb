<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use Str;
session_start();
class ProductController extends Controller
{
  public function checkLogin(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
        return Redirect::to('/dashboard');
      }else {
        return Redirect::to('/admin')->send();
      }
  }

  public function addPro(){
    $this->checkLogin();

    $cate = DB::table('tbl_category')->orderby('cate_id','desc')->get();
    $brand = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
    return view('admin_pages.addproduct')->with('cate',$cate)->with('brand',$brand);
  }

  public function allPro(){
    $this->checkLogin();

    $all_product = DB::table('tbl_product')
    ->join('tbl_category','tbl_category.cate_id','=','tbl_product.cate_id')
    ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
    ->orderby('tbl_product.pro_id','desc')->get();
    $manager_product = view('admin_pages.product')->with('product',$all_product);
    return view('admin_welcome')->with('admin_pages.product',$manager_product);
  }

  public function savePro(Request $request){
    $this->checkLogin();

    $data = array();
    $data['pro_name'] = $request->pro_name;
    $slug = $request->pro_name;
    $data['pro_slug'] = Str::slug($slug).".html";
    $data['pro_detail'] = $request->pro_detail;
    $data['pro_price'] = $request->pro_price;
    $data['pro_sale'] = $request->pro_sale;
    $data['cate_id'] = $request->cate;
    $data['brand_id'] = $request->brand;
    $data['pro_status'] = $request->status;
    $get_image = $request->file('pro_image');
    if($get_image){
      $get_name_image = $get_image->getClientOriginalName();
      $name_image = current(explode('.',$get_name_image));
      $new_image = $name_image . rand(0,999).'.'.$get_image->getClientOriginalExtension();
      $get_image->move('public/uploads/products',$new_image);
      $data['pro_image'] = $new_image;
      DB::table('tbl_product')->insert($data);
      Session::put('message','Thêm Sản Phẩm Thành Công');
      return Redirect::to('add-pro');
    }

    //add
    $data['pro_image'] = "";
    DB::table('tbl_product')->insert($data);
    Session::put('message','Thêm Sản Phẩm Thành Công');
    return Redirect::to('add-pro');
  }

  public function activePro($pro_id){
    $this->checkLogin();

    DB::table('tbl_product')->where('pro_id',$pro_id)->update(['pro_status'=>1]);
    Session::put('message','Hiện Sản Phẩm Thành Công');
    return Redirect::to('/pro');
  }

  public function unactivePro($pro_id){
    $this->checkLogin();

    DB::table('tbl_product')->where('pro_id',$pro_id)->update(['pro_status'=>0]);
    Session::put('message','Ẩn Sản Phẩm Thành Công');
    return Redirect::to('/pro');
    }

  public function updatePro($pro_id){
    $this->checkLogin();

    $cate = DB::table('tbl_category')->orderby('cate_id','desc')->get();
    $brand = DB::table('tbl_brand')->orderby('brand_id','desc')->get();
    $edit_pro = DB::table('tbl_product')->where('pro_id',$pro_id)->get();
    $manager_pro = view('admin_pages.editproduct')->with('editproduct',$edit_pro)->with('cate',$cate)->with('brand',$brand);
    return view('admin_welcome')->with('admin_pages.editcate',$manager_pro);
    }

    public function editPro(Request $request,$pro_id){
      $this->checkLogin();

      $data = array();
      $data['pro_name'] = $request->pro_name;
      $data['pro_detail'] = $request->pro_detail;
      $data['pro_price'] = $request->pro_price;
      $data['pro_sale'] = $request->pro_sale;
      $data['cate_id'] = $request->cate;
      $data['brand_id'] = $request->brand;
      $data['pro_status'] = $request->status;
      $get_image = $request->file('pro_image');
      if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image . rand(0,999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/products',$new_image);
        $data['pro_image'] = $new_image;
        DB::table('tbl_product')->where('pro_id',$pro_id)->update($data);
        Session::put('message','Cập Nhật Sản Phẩm Thành Công');
        return Redirect::to('/pro');
      }

      //add
      DB::table('tbl_product')->where('pro_id',$pro_id)->update($data);
      Session::put('message','Cập Nhật Sản Phẩm Thành Công');
      return Redirect::to('/pro');
    }

  public function deletePro($pro_id){
    $this->checkLogin();

    DB::table('tbl_product')->where('pro_id',$pro_id)->delete();
    return Redirect::to('/pro');
    }
}
