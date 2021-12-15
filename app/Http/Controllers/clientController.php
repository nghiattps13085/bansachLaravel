<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\loaihang;
use App\Models\user;
use App\Models\product;
use App\Models\thanhvien;
use App\Models\order;
use App\Models\oderdetail;
use Mail;
use App\Notifications\thongbaouser;
use App\Notifications\thongbaoorder;
use Illuminate\Support\Facades\Notification;
use Carbon\Carbon;
use Illuminate\Support\Str;

// use Illuminate\Support\Collection ;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham = product::where("dac_biet","=",0)->limit(6)->get();
        $loaihang = loaihang::all();
        $loaihang2 = loaihang::limit(4)->get();
        $spmoinhat = product::Orderby('ma_hh', 'desc')->limit(6)->get();
        return view('pages.homepage',compact('sanpham','loaihang','loaihang2','spmoinhat'));
    }
    public function cart()
    {
        return view('pages.cart');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function dangki()
    {
        return view('pages.dangki');
    }
    public function dangnhap()
    {
        return view('pages.dangnhap');
    }
    public function productDetail()
    {
        return view('pages.productDetail');
    }
    public function productlist()
    {
        $sanpham = product::all();
        return view('pages.productlist',compact('sanpham'));
    }
    public function quenmatkhau()
    {
        return view('pages.quenmatkhau');
    }
    public function checkemail(Request $req)
    {
        $email = $req->email;
        $user = thanhvien::where('email','=',$email)->first();
        if($user){
            $randompass = Str::random(8);
            $tv = thanhvien::find($user->ma_kh);
            $tv->mat_khau= $randompass;
            $tv->save();
            $user['to']= $email;
            $data = ['newpass'=>$randompass,'name'=>$user->ho_ten,'username'=>$user->username];
            Mail::send('pages.mailquenmk',$data,function($messages) use ($user){
                $messages->to($user['to']);
                $messages->subject('Mật khẩu của bạn');
            });
            $req->session()->put('successmail', 'ok');

        }else{
            $req->session()->put('errormail', 'ok');         
        }
        return Redirect()->back(); 
    }
    public function news()
    {
        return view('pages.news');
    }
    public function sptheotl($id)
    {
        $tentl = loaihang::find($id);
        $loaihang = loaihang::all();
        $loaihang2 = loaihang::limit(4)->get();
        $sanpham = product::where("ma_loai","=",$id)->get();
        return view('pages.theotheloai',compact('loaihang','loaihang2','sanpham','tentl'));
    }
    public function chitietsp($id)
    {   
        $loaihang = loaihang::limit(6)->get();
        $sanpham = product::find($id);
        $theloai = loaihang::find($sanpham->ma_loai);
        $sanphamlq = product::where('ma_loai','=',$theloai->ma_loai)
        ->where('ma_hh','!=',$id)->limit(3)
        ->get();
        $sanphamthich = product::where('ma_loai','=',$theloai->ma_loai)
        ->where('ma_hh','!=',$id)->limit(6)
        ->get();
        return view('pages.productDetail',compact('sanpham','theloai','loaihang','sanphamlq','sanphamthich'));
    
    }
    public function deletecart($id,Request $request)
    {
         $cart = session('cart');
         array_splice($cart,$id,1);
        session(['cart' => $cart]);
        return Redirect()->back(); 
  
    }
    public function donhang(Request $request)
    {
        $idusser = session('user_id');
        $alldonhanguser = order::where('id_khachhang','=', $idusser)->orderBy('id_hoadon', 'DESC')->get();
        return view('pages.donhang',compact('alldonhanguser')); 
  
    }
    public function addtocart($idsp,Request $req)
    {
     
       $sp = product::find($idsp);
       $id = $sp->ma_hh;
       $ten = $sp->ten_hh;
       $hinh = $sp->Hinh;
       $gia = $sp->don_gia;
      
    $productcart = collect([
        'id'=> $id,
        'ten'=> $ten,
        'hinh'=> $hinh,
        'gia'=> $gia,
        'sl'=>1
    ]);
    $check=0;
    if(session('cart')){
           for($i=0;$i< count(session('cart'));$i++){            
               if(session('cart')[$i]['id']==$id){
                   $check=1;
                   session('cart')[$i]['sl']=session('cart')[$i]['sl']+1;
                   break;
               }
           }
           if($check==0){
            $req->session()->push('cart', $productcart); 
           } 
        }
        else {
            $req->session()->push('cart', $productcart);
        } 
        return Redirect()->back();  
        // foreach (session('cart') as $r){
        //     echo $r['sl']."</br>";          
        // }
    //   $req->session()->forget('cart');
    }
      
    public function dathang(Request $req)
    {
       if(session('user_id'))
       {
        $tongtien = 0;
        foreach(session('cart') as $r){
           $tongtien+=$r['sl']*$r['gia'];
        }
        $idusser = session('user_id');
        $order = new order();
        $order->id_khachhang = $idusser;
        $order->Tongtien = $tongtien;
        $order->trangthai = 0;
        $order->Ngaymua = Carbon::now('Asia/Ho_Chi_Minh');
        $order->save();   
        $lastrow = order::latest('id_hoadon')->first();
        
        foreach(session('cart') as $r){
            $orderdetail = new oderdetail();
            $orderdetail->SoHD = $lastrow->id_hoadon;
            $orderdetail->MaSP = $r['id'];
            $orderdetail->SoLuong = $r['sl'];
            $orderdetail->DonGia = $r['sl']*$r['gia'];
            $orderdetail->save();          
        }
        $userfind = thanhvien::find($idusser);     
    
        $oderdetail = oderdetail::join('hang_hoa','hoadonchitiet.MaSP','=','hang_hoa.ma_hh')->where('SoHD','=',$lastrow->id_hoadon)->get();
        $user['to']= $userfind->email;
        $data = ['data'=>  $oderdetail,'sohd'=>$lastrow->id_hoadon,'tongtien'=>$tongtien];
        Mail::send('pages.mail',$data,function($messages) use ($user){
            $messages->to($user['to']);
            $messages->subject('Thông tin đơn hàng của bạn');
        });
        $idor =$lastrow->id_hoadon;
        $req->session()->put('dathang', 'ok');
        $req->session()->forget('cart');
        $user = User::all();
        Notification::send($user, new thongbaoorder( $idor,$tongtien)); 
        return Redirect('/trangchu/donhang');
    }else{
        $req->session()->put('chuadangnhap', 'ok');
        return Redirect('/dangnhap');
    }  
    }
    public function search(Request $req)
    {
      
       $keyword = $req->keyword;
       $sanphamsearch = product::where('ten_hh','like',"%{$keyword}%")->get(); 
        return view('pages.search',compact('sanphamsearch','keyword'));
    }
    public function checkdangnhap(Request $req)
    {
        $req->validate([
            'username'=>'required',
            'password'=>'required'
        ]);
       $username = $req->username;
       $password = $req->password;
       $resurlt = thanhvien::where('username',$username)->where('mat_khau',$password)->first();
       if($resurlt){
        session()->put('username',$resurlt->ho_ten);
        session()->put('user_id',$resurlt->ma_kh );  
        return Redirect('/');
       }else{
        session()->put('error_dangnhap',"Sai thông tin tài khoản" );
        return Redirect('/dangnhap');
       }
     
    }
    public function logout(Request $req)
    {
      if(session('user_id')&&session('username')){
        session()->forget('user_id');
        session()->forget('username');
        return Redirect('/');
      }
    }

    public function checkdangki(Request $req)
    {

        $req->validate([
            'name'=>'required',
            'email'=>'required|email',
            'username'=>'required',
            'pass'=>'required',
            'repass'=>'required|same:pass',
            'yes'=>'required',
        ]);
       $name = $req->name;
       $email = $req->email;
       $username = $req->username;
       $pass = $req->pass;
       $repass = $req->repass;
       $yes = $req->yes;

       $tv = new thanhvien();
       if($yes==1){
            $tv->ho_ten = $name;
            $tv->email = $email;
            $tv->username = $username;
            $tv->vai_tro = 0;
            if($repass==$pass){
            $tv->mat_khau = $pass;
            }else {
            $mess = "sai mật khẩu";
            }
            $tv->ho_ten = $name;
            if($tv->save()){
                $req->session()->put('dangki', 'ok');
                $user = User::all();
                Notification::send($user, new thongbaouser($name,$email)); 
            }
            
            return redirect('/dangnhap');
       }
       $sanphamsearch = product::where('ten_hh','like',"%{$keyword}%")->get(); 
        return view('pages.search',compact('sanphamsearch','keyword'));
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
