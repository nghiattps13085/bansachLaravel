<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\thanhvien;
use App\Models\loaihang;
use App\Models\product;
use App\Models\order;
use App\Models\User;
use DB;
use Carbon\Carbon;
use Session;
session_start();
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         
          $value = $request->session()->get('admin_name');
          if($value) 
          {
               return View('admin.dashboard');          
            }
          
           else{return view('loginadmin'); }  
    }
    public function dashboard(Request $request)
    {
                $request->validate([
                    'admin'=>'required',
                    'password'=>'required',                 
                ]);
            $admin = $request->admin;
            $password = $request->password;
            $resurlt = DB::table('khach_hang')->where('username',$admin)->where('mat_khau',$password)->where('vai_tro',1)->first();
            if($resurlt){
                   session()->put('admin_name',$resurlt->ho_ten);
                   session()->put('admin_id',$resurlt->ma_kh ); 
                   $value = $request->session()->get('admin_name');      
                    return View('admin.dashboard');
            }else {
                return Redirect('/quantri');
            }                  
    }
    public function logout(Request $request){
        $request->session()->flush();
        echo  $request->session()->get('admin_name');
        return Redirect('/quantri');
    }
    public function loaihang(Request $request)
    {
            $user = User::find(1);
            $loaihang = loaihang::all();          
            return view('admin.loaihang',["loaihang"=> $loaihang],['user'=>$user]);
           
    }
    public function sanpham(Request $request)
    {
            $sanpham = product::all();   
            $loaihang = loaihang::all();     
            return view('admin.sanpham',["loaihang"=>$loaihang],["sanpham"=>$sanpham]);
            // echo$loaihang;
            
     
    }
    public function khachhang(Request $request)
    {
            $users = thanhvien::all();
           
            return view('admin.khachhang',["user"=>$users]);
      
    }
    public function hoadon(Request $request)
    { 
      
        $order = order::all();
        return view('admin.hoadon',["order"=>$order]);
   
        
    }
    public function docthongbao(Request $request,$idnof)
    {
        
        DB::table('notifications')->where('id',$idnof)->update(['read_at'=>Carbon::now()]);
        return Redirect('/quantri');
    }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
