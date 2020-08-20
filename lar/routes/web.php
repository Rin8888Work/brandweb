<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index');
Route::get('/trang-chu.html','HomeController@index');
Route::get('/lien-he.html','HomeController@viewContact');
Route::get('/dich-vu-facebook.html','HomeController@viewFacebook');
Route::get('/thiet-ke-web.html','HomeController@viewTkw');
Route::get('/dich-vu-ads.html','HomeController@viewAds');
Route::get('/dao-tao.html','HomeController@viewDaotao');
Route::get('/{id}/{slug_chitiet}.html','HomeController@viewChitiet');
//admin

Route::get('/admin','AdminController@index');
Route::get('/dashboard','AdminController@showDashboard');
Route::post('/admin-dashboard','AdminController@Dashboard');
Route::get('/logout','AdminController@logout');
Route::get('/export-excel','ExportExcelController@exportExcel');


//category product
Route::get('/add-category-product','CategoryProduct@addCate');

Route::get('/category-product','CategoryProduct@allCate');

Route::get('/unactive-cate/{cate_id}','CategoryProduct@unactiveCate');
Route::get('/active-cate/{cate_id}','CategoryProduct@activeCate');

Route::post('/save-cate','CategoryProduct@saveCate');

Route::get('/update-cate/{cate_id}','CategoryProduct@updateCate');
Route::post('/edit-cate/{cate_id}','CategoryProduct@editCate');

Route::get('/delete-cate/{cate_id}','CategoryProduct@deleteCate');

//brand product
Route::get('/add-brand','BrandController@addBrand');

Route::get('/brand','BrandController@allBrand');

Route::get('/unactive-brand/{brand_id}','BrandController@unactiveBrand');
Route::get('/active-brand/{brand_id}','BrandController@activeBrand');

Route::post('/save-brand','BrandController@saveBrand');

Route::get('/update-brand/{brand_id}','BrandController@updateBrand');
Route::post('/edit-brand/{brand_id}','BrandController@editBrand');

Route::get('/delete-brand/{brand_id}','BrandController@deleteBrand');

//product admin
Route::get('/add-pro','ProductController@addPro');

Route::get('/pro','ProductController@allPro');

Route::get('/unactive-pro/{brand_id}','ProductController@unactivePro');
Route::get('/active-pro/{brand_id}','ProductController@activePro');

Route::post('/save-pro','ProductController@savePro');

Route::get('/update-pro/{pro_id}','ProductController@updatePro');
Route::post('/edit-pro/{pro_id}','ProductController@editPro');

Route::get('/delete-pro/{pro_id}','ProductController@deletePro');
