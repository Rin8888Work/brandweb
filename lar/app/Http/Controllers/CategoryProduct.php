<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Http\Requests;
use DB;
use Str;
session_start();
use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
  public function checkLogin(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
        return Redirect::to('/dashboard');
      }else {
        return Redirect::to('/admin')->send();
      }
  }

    public function addCate(){
      $this->checkLogin();

      return view('admin_pages.category');
    }

    public function allCate(){
      $this->checkLogin();

      $all_cate = DB::table('dichvu')->get();
      $manager_cate = view('admin_pages.allcategory')->with('category_product',$all_cate);
      return view('admin_welcome')->with('admin_pages.allcategory',$manager_cate);
    }

    public function saveCate(Request $request){
      $this->checkLogin();

      $data = array();
      $data['name_dv'] = $request->name_cate;
      $slug = $request->name_cate;
      $data['image_dv'] = $request->cate_image;
      $data['status'] = $request->status;
      $data['slug_dv'] = Str::slug($slug);
      $get_image = $request->file('cate_image');
      if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image . rand(0,999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/cate',$new_image);
        $data['image_dv'] = $new_image;
        DB::table('dichvu')->insert($data);
        Session::put('message','Thêm Dịch Vụ Thành Công');
        return Redirect::to('add-category-product');
      }
      $data['image_dv'] = "";
      //add
      DB::table('dichvu')->insert($data);
      Session::put('message','Thêm Dịch VụThành Công');
      return Redirect::to('add-category-product');
    }

    public function activeCate($cate_id){
      $this->checkLogin();

      DB::table('dichvu')->where('id_dv',$cate_id)->update(['status'=>1]);
      Session::put('message','Hiện Dịch Vụ Thành Công');
      return Redirect::to('category-product');
    }

    public function unactiveCate($cate_id){
      $this->checkLogin();

      DB::table('dichvu')->where('id_dv',$cate_id)->update(['status'=>0]);
      Session::put('message','Ẩn Dịch Vụ Thành Công');
      return Redirect::to('category-product');
      }

    public function updateCate($cate_id){
      $this->checkLogin();

      $edit_cate = DB::table('dichvu')->where('id_dv',$cate_id)->get();
      $manager_cate = view('admin_pages.editcate')->with('edit_category_product',$edit_cate);
      return view('admin_welcome')->with('admin_pages.editcate',$manager_cate);
      }

      public function editCate(Request $request,$cate_id){
        $this->checkLogin();

        $data = array();
        $data['name_dv'] = $request->name_cate;
        $get_image = $request->file('cate_image');
        if($get_image){
          $get_name_image = $get_image->getClientOriginalName();
          $name_image = current(explode('.',$get_name_image));
          $new_image = $name_image . rand(0,999).'.'.$get_image->getClientOriginalExtension();
          $get_image->move('public/uploads/cate',$new_image);
          $data['image_dv'] = $new_image;
          DB::table('dichvu')->where('id_dv',$cate_id)->update($data);
          Session::put('message','Cập Nhật Dịch Vụ Thành Công');
          return Redirect::to('category-product');
        }
        DB::table('dichvu')->where('id_dv',$cate_id)->update($data);
        Session::put('message','Cập Nhật Dịch Vụ Thành Công');
        return Redirect::to('category-product');
      }

    public function deleteCate($cate_id){
      $this->checkLogin();

      DB::table('dichvu')->where('id_dv',$cate_id)->delete();
      return Redirect::to('category-product');
      }

}
