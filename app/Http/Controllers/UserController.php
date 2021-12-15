<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thanhvien;
class UserController extends Controller
{
    public function edit($id){
        $user = thanhvien::find($id);
        return view('admin.khachhang.edit',["user"=>$user]);
    }
    public function insert(Request $req){
        // lấy dữ liệu trên form
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        $username = $req->username;
        $vaitro = $req->vaitro;

        $tv = new thanhvien();
        $tv->ho_ten = $name;
        $tv->username = $username;
        $tv->mat_khau = $password;
        $tv->email = $email;
        $tv->vai_tro = $vaitro;
        $tv->save();
        return redirect('/quantri/khachhang');
    }
    public function update(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'username'=>'required',
        ]);
        // lấy dữ liệu trên form
        $name = $req->name;
        $email = $req->email;
        $password = $req->password;
        $username = $req->username;
        $vaitro = $req->vaitro;
        $ma_kh = $req->makh;
    // Tìm row thành viên theo mã khách hàng
        $tv = thanhvien::find($ma_kh);
    // Update thông tin
        $tv->ho_ten = $name;
        $tv->username = $username;
        $tv->mat_khau = $password;
        $tv->email = $email;
        $tv->vai_tro = $vaitro;
        $tv->save();
        return redirect('/quantri/khachhang');
    }
    public function delete($id){
        $tv = thanhvien::find($id);
        $tv->delete();
        return redirect('/quantri/khachhang');

    }
}
