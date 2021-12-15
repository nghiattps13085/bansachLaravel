
@extends('client_layout')
@section('content')
<section class="section2">
        <div class="form-transparent">
            <div class="form"  >
           
                <div class="sign-up">
                    <h2>QUÊN MẬT KHẨU</h2>
                </div>
                <form action="/quenmatkhau/checkemail" method='post'>  
                @csrf()                
                    <label for="">Email đã đăng kí</label>
                    <input class="box" type="email" name="email" placeholder="Vui lòng nhập email">   
                   @if(session('errormail')) <div class="form-group">
                        <small><span style="color: red;font-size:12pt; margin-bottom:20px;">Email này chưa đăng kí</span></small>
                    </div>
                    {{session()->forget('errormail')}}
                    @endif  
                    @if(session('successmail')) <div class="form-group">
                        <small><span style="color: green;font-size:12pt; margin-bottom:20px;">Vui lòng kiểm tra email của bạn</span></small>
                    </div>
                    {{session()->forget('successmail')}}
                    @endif                                 
                    <input class="submit" type="submit" name="dangnhap" value="Đăng nhập">
                </form>
            </div>
        </div>
    </section>
@endsection  