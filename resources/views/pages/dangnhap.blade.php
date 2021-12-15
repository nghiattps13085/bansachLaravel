@extends('client_layout')
@section('content')
<section class="section2">
    @if(session('dangki'))
    <script>
        alert("đăng kí thành công vui lòng đăng nhập")
    </script>
    {{session()->forget('dangki')}}
    @endif
    @if(session('error_dangnhap'))
    <script>
        alert("Sai thông tin tài khoản")
    </script>
    {{session()->forget('error_dangnhap')}}
    @endif
    @if(session('chuadangnhap'))
    <script>
        alert("Vui lòng đăng nhập hoặc đăng kí để đặt hàng")
    </script>
    {{session()->forget('chuadangnhap')}}
    @endif
        <div class="form-transparent">
            <div class="form"  >
           
                <div class="sign-up">
                    <h2>ĐĂNG Nhập</h2>
                </div>
                <form action="/trangchu/dangnhap/checkdangnhap" method='post'>  
                @csrf()                
                    <label for="">Tên Đăng Nhập</label>
                    <input class="box" type="text" name="username" placeholder="Tên đăng nhập">
                    <div class="form-group">
                        <small><span style="color: red;">{{$errors->first('username')}}</span></small>
                    </div>
                    <label for="">Mật Khẩu</label>
                    <input class="box" type="password" name="password" placeholder="Nhập mật khẩu"> 
                    <div class="form-group">
                        <small><span style="color: red;">{{$errors->first('password')}}</span></small>
                    </div>             
                    <input class="submit" type="submit" name="dangnhap" value="Đăng nhập">
                    <a href="/quenmatkhau">Quên mật khẩu!</a>
                </form>
            </div>
        </div>
    </section>
@endsection    