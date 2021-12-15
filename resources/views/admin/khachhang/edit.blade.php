@extends('admin_layout')
@section('content')
<div id="myModal1" class="modal1">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="form-area">
            <h2 style="margin-bottom:15px; color:firebrick;" class="title-modal">Update khách hàng</h2>
            <form enctype="multipart/form-data" action="/quantri/khachhang/update" method='post'>
                @csrf()
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;">*</span> Họ Tên</label>
                    <input type="text" value="{{$user->ho_ten}}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <small><span style="color: red;">{{$errors->first('name')}}</span></small>
                </div>
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;"></span> Username</label>
                    <input type="text" value="{{$user->username}}" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <small><span style="color: red;">{{$errors->first('username')}}</span></small>
                </div>
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;">*</span> password:</label>
                    <input type="text" value="{{$user->mat_khau}}" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <small><span style="color: red;">{{$errors->first('password')}}</span></small>
                </div>
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;">*</span> email</label>
                    <input type="text" value="{{$user->email}}" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <small><span style="color: red;">{{$errors->first('email')}}</span></small>
                </div>
                <div class="form-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="margin-right:20px;text-align:center;">
                                <input type="radio" <?php if($user->vai_tro ==1) echo 'checked' ?> name="vaitro" value=1 aria-label="Radio button for following text input">
                                <label for="">Quản trị</label>
                            </div>
                        </div>
                        <div  class="input-group-prepend">
                            <div class="input-group-text" >
                                <input type="radio" <?php if($user->vai_tro ==0) echo 'checked' ?>  name="vaitro" value=0 aria-label="Radio button for following text input">
                                <label for="">Người dùng</label>
                            </div>
                        </div>
                    </div>
                <input type="hidden" name="makh" id="id" value="{{$user->ma_kh}}">
                <small>Chú thích: (<span style="color: red;">*</span>) là bắt buộc</small>
                <input type="submit" value="Update" class="btn-submit">
            </form>
        </div>
        <span class="close1">&times;</span>
    </div>
</div>
@endsection 