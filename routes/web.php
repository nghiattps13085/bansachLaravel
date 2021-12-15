<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoaihangController;
use App\Http\Controllers\productController;
use App\Http\Controllers\orderController;






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
// Client Route
Route::get('/',[clientController::class,'index']);
Route::get('/about',[clientController::class,'about']);
Route::get('/contact',[clientController::class,'contact']);
Route::get('/dangki',[clientController::class,'dangki']);
Route::get('/dangnhap',[clientController::class,'dangnhap']);
Route::get('/productlist',[clientController::class,'productlist']);
Route::get('/productDetail',[clientController::class,'productDetail']);
Route::get('/news',[clientController::class,'news']);
Route::get('/cart',[clientController::class,'cart']);
Route::get('/cart/deletecart/{id}',[clientController::class,'deletecart']);
Route::get('/cart/dathang',[clientController::class,'dathang']);
Route::get('/trangchu/donhang',[clientController::class,'donhang']);
Route::get('/quenmatkhau',[clientController::class,'quenmatkhau']);
Route::post('/quenmatkhau/checkemail',[clientController::class,'checkemail']);








Route::get('/trangchu/theloai/{id}',[clientController::class,'sptheotl']);
Route::get('/trangchu/chitietsp/{id}',[clientController::class,'chitietsp']);
Route::post('/trangchu/search',[clientController::class,'search']);
Route::post('/trangchu/dangki/checkdangki',[clientController::class,'checkdangki']);
Route::post('/trangchu/dangnhap/checkdangnhap',[clientController::class,'checkdangnhap']);
Route::get('/trangchu/logout',[clientController::class,'logout']);
Route::get('/trangchu/addtocart/{idsp}',[clientController::class,'addtocart']);






// Admin Route
Route::get('/quantri/dashboard',[adminController::class,'index']);
Route::get('/quantri',[adminController::class,'index']);
Route::get('/quantri/loaihang',[adminController::class,'loaihang']);
Route::get('/quantri/sanpham',[adminController::class,'sanpham']);
Route::get('/quantri/khachhang',[adminController::class,'khachhang']);
Route::get('/quantri/hoadon',[adminController::class,'hoadon']);
Route::post('/quantri/dashboard',[adminController::class,'dashboard']);
Route::get('/quantri/logout',[adminController::class,'logout']);
Route::get('/quantri/dashboard/{idnof}',[adminController::class,'docthongbao']);



//  Khách hàng act
Route::get('/quantri/khachhang/{id}',[UserController::class,'edit']);
Route::get('/quantri/khachhang/delete/{id}',[UserController::class,'delete']);
Route::post('/quantri/khachhang/insert',[UserController::class,'insert']);
Route::post('/quantri/khachhang/update',[UserController::class,'update']);

// Loại hàng ACt
Route::post('/quantri/loaihang/insert',[LoaihangController::class,'insert']);
Route::get('/quantri/loaihang/delete/{id}',[LoaihangController::class,'delete']);
Route::get('/quantri/loaihang/{id}',[LoaihangController::class,'edit']);
Route::post('/quantri/loaihang/update',[LoaihangController::class,'update']);

// Sản phẩm act 
Route::post('/quantri/sanpham/insert',[productController::class,'insert']);
Route::get('/quantri/sanpham/delete/{id}',[productController::class,'delete']);
Route::get('/quantri/sanpham/{id}',[productController::class,'edit']);
Route::post('/quantri/sanpham/update',[productController::class,'update']);

// Hóa đơn act
Route::get('/quantri/hoadon/delete/{id}',[orderController::class,'delete']);
Route::get('/quantri/hoadon/{id}',[orderController::class,'edit']);
Route::post('/quantri/hoadon/update',[orderController::class,'update']);
// Hóa đơn ct
Route::get('/quantri/hoadon/hdct/{id}',[orderController::class,'hdct']);






























