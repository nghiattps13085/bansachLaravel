@extends('client_layout')
@section('content')
<section class="section2">
    <div class="maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6515862561173!2d105.79302821442676!3d21.04662249254527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3abea8ced1%3A0xb680deb2d22b3fcd!2zV0FLQSBTSE9QIC0gTmjDoCBzw6FjaCB0cuG7sWMgdHV54bq_bg!5e0!3m2!1svi!2s!4v1588064924196!5m2!1svi!2s"
            width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>
    <div class="form-transparent">
        <div class="form">
            <div class="sign-up">
                <h2>ĐĂNG KÝ</h2>
            </div>
            <div  >
                <form action="/trangchu/dangki/checkdangki" method='post'>
                    @csrf()
                    <label for="">Tên </label>
                    <input class="box" value="{{old('name') }}" type="text" name="name" placeholder="Nhập tên...">
                    <div class="form-group">
                        <small><span style="color: red;">{{$errors->first('name')}}</span></small>
                    </div>
                    <label for="">Email</label>
                    <input class="box" type="email" value="{{old('email') }}" name="email" placeholder="Nhập email">
                    <div class="form-group">
                        <small><span style="color: red;">{{$errors->first('email')}}</span></small>
                    </div>
                    <label for="">Tên Đăng Nhập</label>
                    <input class="box" type="text" value="{{old('username') }}" name="username" placeholder="Tên đăng nhập">
                    <div class="form-group">
                        <small><span style="color: red;">{{$errors->first('username')}}</span></small>
                    </div>
                    <label for="">Mật Khẩu</label>
                    <input class="box" type="password"  name="pass" placeholder="Nhập mật khẩu">
                    <div class="form-group">
                        <small><span style="color: red;">{{$errors->first('pass')}}</span></small>
                    </div>
                    <label for="">Xác Nhận Mật Khẩu</label>
                    <input class="box" type="password" name="repass" placeholder="Xác nhận mật khẩu">
                    <div class="form-group">
                        <small><span style="color: red;">{{$errors->first('repass')}}</span></small>
                    </div>
                    <input type="checkbox" name="yes" value="1"> Tôi đồng ý. <br><br>
                    <div class="form-group">
                        <small><span style="color: red;">{{$errors->first('yes')}}</span></small>
                    </div>
                    <input style="margin-bottom:50px;"  class="submit" type="submit" value="Đăng Ký">
                </form>
            </div>

        </div>
    </div>
</section>
@endsection