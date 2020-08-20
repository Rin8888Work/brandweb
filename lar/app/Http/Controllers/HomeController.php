<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index(){
      return view('pages.home');
    }

    public function viewContact(){
      return view('pages.contact');
    }

    public function viewFacebook(){
      $facebook = DB::table('chitietdichvu')
      ->where('id_dv',5)->get();

      return view('pages.facebook',['facebook'=>$facebook]);
    }

    public function viewTkw(){
      $tkw = DB::table('chitietdichvu')->where('id_dv',1)->get();
      return view('pages.tkw',['tkw'=>$tkw]);
    }

    public function viewAds(){
      $ads = DB::table('chitietdichvu')->where('id_dv',7)->get();
      return view('pages.ads',['ads'=>$ads]);
    }

    public function viewDaotao(){
      $daotao = DB::table('chitietdichvu')->where('id_dv',9)->get();
      return view('pages.daotao',['daotao'=>$daotao]);
    }

    public function viewChitiet($id,$slug_chitiet){
      $name_chitiet = DB::table('chitietdichvu')->where('id',$id)->first();
      $relationship = DB::table('chitietdichvu')
      ->join('dichvu','dichvu.id_dv','=','chitietdichvu.id_dv')->inRandomOrder()->limit(2)
      ->get();
      return view('pages.detailpage',['name_chitiet'=>$name_chitiet],['relationship'=>$relationship]);
    }
}
