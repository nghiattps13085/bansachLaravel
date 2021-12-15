<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\loaihang;
use App\Models\thanhvien;
use App\Notifications\thongbaouser;
use Illuminate\Support\Facades\Notification;


class productController extends Controller
{
    public function edit($id){
        $sp = product::find($id);
        $loaihang = loaihang::all();
        return view('admin.sanpham.edit',["sanpham"=>$sp],["loaihang"=>$loaihang]);
    }
    public function insert(Request $req){
        // lấy dữ liệu trên form
        $name = $req->name; 
        $hinh = $req->hinh;    
        $gia = $req->gia;    
        $dacbiet = $req->dacbiet;    
        $loaisp = $req->loai;   
        $mota = $req->mota;    

        $user = thanhvien::all();

        $sp = new product();
        $sp->ten_hh = $name;
        $sp->Hinh = $hinh;
        $sp->don_gia = $gia;
        $sp->dac_biet = $dacbiet;
        $sp->ma_loai = $loaisp;
        $sp->mo_ta = $mota;

        $sp->save();
        return redirect('/quantri/sanpham');
    }
    public function update(Request $req){
        $req->validate([
            'name'=>'required',
            'hinh'=>'required',
            'gia'=>'required',
            'mota'=>'required',
        ]);
        // lấy dữ liệu trên form
      // lấy dữ liệu trên form
      $name = $req->name; 
      $hinh = $req->hinh;    
      $gia = $req->gia;    
      $dacbiet = $req->dacbiet;    
      $loaisp = $req->loai; 
      $mota = $req->mota; 
      $mahh = $req->mahh; 
    // Tìm row thành viên theo mã khách hàng
        $sp = product::find($mahh);
    // Update thông tin
        $sp->ten_hh = $name;
        $sp->Hinh = $hinh;
        $sp->don_gia = $gia;
        $sp->dac_biet = $dacbiet;
        $sp->ma_loai = $loaisp;
        $sp->mo_ta = $mota;
        $sp->save();
        return redirect('/quantri/sanpham');
    }
    public function delete($id){
        $sp = product::find($id);
        $sp->delete();
        return redirect('/quantri/sanpham');
    }
}
