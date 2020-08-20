<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use App\Http\Requests;
use DB;
session_start();
class AdminController extends Controller
{
    public function checkLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
          return Redirect::to('/dashboard');
        }else {
          return Redirect::to('/admin')->send();
        }
    }

    public function index(){
      return view('admin_login');
    }

    public function showDashboard(){
      $this->checkLogin();
      return view('admin_pages.dashboard');
    }

    public function Dashboard(Request $request){
      $admin_email = $request->admin_email;
      $admin_password = md5($request->admin_password);
      $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
      if($result)
      {
        Session::put('admin_name',$result->admin_name);
        Session::put('admin_id',$result->admin_id);
        return Redirect::to('/dashboard');
      }else {
        Session::put('message',"Tài khoản hoặc mật khẩu sai");
        return Redirect::to('/admin');

      }
    }

    public function logout(){
      $this->checkLogin();

      Session::put('admin_name',null);
      Session::put('admin_id',null);
      return Redirect::to('/admin');
    }

}
