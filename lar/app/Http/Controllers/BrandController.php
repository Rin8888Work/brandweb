<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use DB;
use Str;
session_start();

class BrandController extends Controller
{
  public function checkLogin(){
      $admin_id = Session::get('admin_id');
      if($admin_id){
        return Redirect::to('/dashboard');
      }else {
        return Redirect::to('/admin')->send();
      }
  }

  public function addBrand(){
    $this->checkLogin();
    $dichvu = DB::table('dichvu')->get();// lấy dữ liệu

    return view('admin_pages.add_brand')->with('dv',$dichvu);
}
  public function allBrand(){
    $this->checkLogin();
    $all_brand = DB::table('chitietdichvu')->get();
    $manager_brand = view('admin_pages.brand')->with('brand',$all_brand);
    return view('admin_welcome')->with('admin_pages.brand',$manager_brand);
  }

  public function saveBrand(Request $request){
    $this->checkLogin();
    $data = array();
    $data['name_chitiet'] = $request->brand_name;
    $slug = $request->brand_name;
    $data['price_dv'] = $request->price_dv;
    $data['id_dv'] = $request->brand;
    $data['content_dv'] = $request->brand_desc;
    $data['status'] = $request->status;
    $data['slug_chitiet'] = Str::slug($slug);
    $get_image = $request->file('image_dv');
    if($get_image){
      $get_name_image = $get_image->getClientOriginalName();
      $name_image = current(explode('.',$get_name_image));
      $new_image = $name_image . rand(0,999).'.'.$get_image->getClientOriginalExtension();
      $get_image->move('public/uploads/cate',$new_image);
      $data['image_chitiet'] = $new_image;
      DB::table('chitietdichvu')->insert($data);
      Session::put('message','Thêm Dịch Vụ Thành Công');
      return Redirect::to('add-category-product');
    }
    $data['image_chitiet'] = "";
    //add
    DB::table('chitietdichvu')->insert($data);
    Session::put('message','Thêm Dịch Vụ Thành Công');
    return Redirect::to('add-category-product');
  }

  public function activeBrand($brand_id){
    $this->checkLogin();

    DB::table('chitietdichvu')->where('id',$brand_id)->update(['status'=>1]);
    Session::put('message','Hiện Dịch Vụ Thành Công');
    return Redirect::to('brand');
  }

  public function unactiveBrand($brand_id){
    $this->checkLogin();

    DB::table('chitietdichvu')->where('id',$brand_id)->update(['status'=>0]);
    Session::put('message','Ẩn Dịch Vụ Thành Công');
    return Redirect::to('brand');
    }

  public function updateBrand($brand_id){
    $this->checkLogin();
    $dv = DB::table('dichvu')->orderby('id_dv','desc')->get();
    $edit_brand = DB::table('chitietdichvu')->where('id',$brand_id)->get();
    $manager_brand = view('admin_pages.editbrand')->with('edit_brand',$edit_brand)->with('dv',$dv);
    return view('admin_welcome')->with('admin_pages.editbrand',$manager_brand);
    }

    public function editBrand(Request $request,$brand_id){
      $this->checkLogin();

      $data = array();
      $data['name_chitiet'] = $request->brand_name;
      $slug = $request->brand_name;
      $data['slug_chitiet'] = Str::slug($slug);
      $data['id_dv'] = $request->brand;
      $data['price_dv'] = $request->price_dv;
      $data['content_dv'] = $request->brand_desc; // có dì hỏi à
      $get_image = $request->file('image_chitiet');
      if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image . rand(0,999).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/cate',$new_image);
        $data['image_chitiet'] = $new_image;
        DB::table('chitietdichvu')->where('id',$brand_id)->update($data);
        Session::put('message','Cập Nhật Chi Tiết Dịch Vụ Thành Công');
        return Redirect::to('/brand');
      }
      DB::table('chitietdichvu')->where('id',$brand_id)->update($data);
      Session::put('message','Cập Nhật Chi Tiết Dịch Vụ  Thành Công');
      return Redirect::to('/brand');
    }

  public function deleteBrand($brand_id){
    $this->checkLogin();

    DB::table('chitietdichvu')->where('id',$brand_id)->delete();
    return Redirect::to('brand');
    }
}
