@extends('admin_layout')
@section('content')
<div id="myModal1" class="modal1">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="form-area">
            <h2 style="margin-bottom:15px; color:firebrick;" class="title-modal">Update sản phẩm</h2>
            <form enctype="multipart/form-data" action="/quantri/sanpham/update" method='post'>
                @csrf()
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;">*</span> Tên sản phẩm</label>
                    <input type="text" value="{{$sanpham->ten_hh}}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <small><span style="color: red;">{{$errors->first('name')}}</span></small>
                </div>
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;"></span> URL Hình</label>
                    <input type="text" value="{{$sanpham->Hinh}}" name="hinh" class="form-control">
                </div>
                <div class="form-group">
                    <small><span style="color: red;">{{$errors->first('hinh')}}</span></small>
                </div>
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;">*</span> Đơn giá</label>
                    <input type="text" value="{{$sanpham->don_gia}}" name="gia" class="form-control">
                </div>
                <div class="form-group">
                    <small><span style="color: red;">{{$errors->first('gia')}}</span></small>
                </div>
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;">*</span> Đặc biệt</label>
                    <div class="input-group-prepend">
                        <div class="input-group-text" style="margin-right:20px;text-align:center;">
                            <input type="radio" <?php if($sanpham->dac_biet ==0) echo 'checked' ?> name="dacbiet"
                                value=0 aria-label="Radio button for following text input">
                            <label for="">Sách Hot</label>
                        </div>
                    </div>
                    <div class="input-group-prepend">
                        <div class="input-group-text" style="margin-right:20px;text-align:center;">
                            <input type="radio" <?php if($sanpham->dac_biet ==1) echo 'checked' ?> name="dacbiet"
                                value=1 aria-label="Radio button for following text input">
                            <label for="">Sách đăc biệt</label>
                        </div>
                    </div>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" <?php if($sanpham->dac_biet ==2) echo 'checked' ?> name="dacbiet"
                                value=2 aria-label="Radio button for following text input">
                            <label for="">Sách thường</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;">*</span>Loại hàng</label>
                    <select name="loai" id="cars">
                        @foreach($loaihang as $lh)
                        <option <?php if($sanpham->ma_loai ==$lh->ma_loai) echo 'selected';  ?>
                            value="{{$lh->ma_loai}}">{{$lh->ten_loai}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;">*</span> Mô tả</label>
                    <input type="text" value="{{$sanpham->mo_ta}}" name="mota" class="form-control">
                </div>
                <div class="form-group">
                    <small><span style="color: red;">{{$errors->first('mota')}}</span></small>
                </div>
                <input type="hidden" name="mahh" id="id" value="{{$sanpham->ma_hh}}">
                <small>Chú thích: (<span style="color: red;">*</span>) là bắt buộc</small>
                <input type="submit" value="Update" class="btn-submit">
            </form>
        </div>
        <span class="close1">&times;</span>
    </div>
</div>
@endsection