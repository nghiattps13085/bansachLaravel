<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\product;
use App\Models\oderdetail;

class orderController extends Controller
{
    public function edit($id){
        $or = order::find($id);
        return view('admin.order.edit',["order"=>$or]);
        // return view('admin.order.edit',["loaihang"=>$lh]);

    }
    public function hdct($id){ 
        $sp = product::all(); 
        // $oderdetail = oderdetail::where('SoHD','=',$id)->get();
        $oderdetail = oderdetail::join('hang_hoa','hoadonchitiet.MaSP','=','hang_hoa.ma_hh')->where('SoHD','=',$id)->get();
        
        return view('admin.order.oderdetail',["orderdetail"=>$oderdetail]);  
    }
    // public function insert(Request $req){
    //     // lấy dữ liệu trên form
    //     $name = $req->name;    
    //     $lh = new loaihang();
    //     $lh->ten_loai = $name;
    //     $lh->save();
    //     return redirect('/quantri/loaihang');
    // }
    public function update(Request $req){
        // lấy dữ liệu trên form
        $trangthai = $req->trangthai;
        $ma_order = $req->maorder;
    // Tìm row thành viên theo mã khách hàng
        $or = order::find($ma_order);
    // Update thông tin
        $or->trangthai = $trangthai;
        $or->save();
        return redirect('/quantri/hoadon');
    }
    public function delete($id){
        $or = order::find($id);
        $or->delete();
        return redirect('/quantri/hoadon');
    }
}
