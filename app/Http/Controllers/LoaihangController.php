<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\loaihang;
use App\Models\user;
use App\Notifications\thongbao;
use Illuminate\Support\Facades\Notification;

class LoaihangController extends Controller
{
    public function edit($id){
        $lh = loaihang::find($id);
        return view('admin.loaihang.edit',["loaihang"=>$lh]);
    }
    public function insert(Request $req){

        
        $user = User::all();
        // lấy dữ liệu trên form
        $name = $req->name;    
        $lh = new loaihang();
        $lh->ten_loai = $name;
        $lh->save();      
        Notification::send($user, new thongbao($req->name)); 
        return redirect('/quantri/loaihang');
    }
    public function update(Request $req){
        // lấy dữ liệu trên form
        $req->validate([
            'name'=>'required'
        ]);
        $name = $req->name;
        $ma_lh = $req->malh;
    // Tìm row thành viên theo mã khách hàng
        $lh = loaihang::find($ma_lh);
    // Update thông tin
        $lh->ten_loai = $name;
        $lh->save();
        return redirect('/quantri/loaihang');
    }
    public function delete($id){
        $lh = loaihang::find($id);
        $lh->delete();
        return redirect('/quantri/loaihang');
    }
}
