@extends('admin_layout')
@section('content')
<div class="right__table">
    <!-- Trigger/Open The Modal -->
    <button id="btnModal" class="btn-modal">Thêm User</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="form-area" >

                <h2 style="margin-bottom:15px; color:firebrick;" class="title-modal">Add User</h2>
                <form enctype="multipart/form-data" action="/quantri/khachhang/insert" method="POST">
                @csrf()
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span> Họ Tên:
                        </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span> UserName
                        </label>
                        <input type="text" name="username" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span> Mật khẩu
                        </label>
                        <input type="text" name="password" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span> Email
                        </label>
                        <input type="text" name="email" id="name" class="form-control">
                    </div>       
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="margin-right:20px;text-align:center;">
                                <input type="radio" name="vaitro" value=1 aria-label="Radio button for following text
                                input">
                                <label for="">Quản trị</label>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="vaitro" value=0
                                    aria-label="Radio button for following text input">
                                <label for="">Người dùng</label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" id="id" value=0>
                    <small>Chú thích: (<span style="color: red;">*</span>) là bắt buộc</small>
                    <input type="submit" value="Thêm" class="btn-submit">
                </form>
            </div>
            <span class="close">&times;</span>
        </div>
    </div>
    <p class="right__tableTitle">Danh sách khách hàng</p>
    <div class="right__tableWrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Họ Tên</th>
                    <th>Email</th>
                    <th>Vai trò</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody id="content">
                @foreach($user as $r)
                <tr>
                    <td>{{$r->ma_kh}}</td>
                    <td>{{$r->username}}</td>
                    <td>{{$r->ho_ten}}</td>
                    <td>{{$r->email}}</td>
                    @if ($r->vai_tro == 1)
                    <td>Quản trị</td>
                    @endif
                    @if ($r->vai_tro == 0)
                    <td>Người dùng</td>
                    @endif  
                    <td><a href="/quantri/khachhang/delete/{{$r->ma_kh}}">Delete</a> </td>                
                    <td><a href="/quantri/khachhang/{{$r->ma_kh}}">Edit</a> </td>               
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection