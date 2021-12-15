@extends('admin_layout')
@section('content')
<div class="right__table">
    <!-- Trigger/Open The Modal -->
    <button id="btnModal" class="btn-modal">Thêm Sản phẩm</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="form-area">
                <h2 style="margin-bottom:15px; color:firebrick;" class="title-modal">Add Product</h2>
                <form enctype="multipart/form-data" action="/quantri/sanpham/insert" method='post'>
                    @csrf()
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span>Tên SP </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span>URL Hình </label>
                        <input type="text" name="hinh" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span>Giá sp</label>
                        <input type="text" name="gia" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span>Loại hàng</label>
                        <select name="loai" id="cars">
                            @foreach($loaihang as $lh)
                            <option value="{{$lh->ma_loai}}">{{$lh->ten_loai}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="margin-right:20px;text-align:center;">
                                <input type="radio" name="dacbiet" checked value=0 aria-label="Radio button for following text
                                input">
                                <label for="">Sách Hot</label>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="margin-right:20px;text-align:center;">
                                <input type="radio" name="dacbiet"   value=1
                                    aria-label="Radio button for following text input">
                                <label for="">Sách đặc biệt</label>
                            </div>
                        </div>
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="radio" name="dacbiet" value=2
                                    aria-label="Radio button for following text input">
                                <label for="">Sách thường</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span>Mô tả</label>
                        <input type="text" name="mota" id="" class="form-control">
                    </div>
                    <input type="hidden" id="id" value=0>
                    <small>Chú thích: (<span style="color: red;">*</span>) là bắt buộc</small>
                    <input type="submit" value="Thêm" class="btn-submit">
                </form>
            </div>
            <span class="close">&times;</span>
        </div>
    </div>
    <p class="right__tableTitle">Danh sách sản phẩm</p>
    <div class="right__tableWrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Mã loại</th>
                    <th>Đặc biệt</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody id="content">
                @foreach($sanpham as $sp)
                <tr>

                    <td>{{$sp->ma_hh}}</td>
                    <td><img src="{{$sp->Hinh}}" alt=""> </td>
                    <td>{{$sp->ten_hh}}</td>
                    <td>{{$sp->don_gia}}</td>
                    <td>{{$sp->ma_loai}}</td>
                    <td>{{$sp->dac_biet}}</td>
                    <td><a href="/quantri/sanpham/delete/{{$sp->ma_hh}}">Delete</a> </td>
                    <td><a href="/quantri/sanpham/{{$sp->ma_hh}}">Edit</a> </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @endsection