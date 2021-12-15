@extends('admin_layout')
@section('content')
<div id="myModal1" class="modal1">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="form-area">
            <h2 style="margin-bottom:15px; color:firebrick;" class="title-modal">Update khách hàng</h2>
            <form enctype="multipart/form-data" action="/quantri/loaihang/update" method='post'>
                @csrf()
                <div class="form-group">
                    <label class="input-group-text col-md-2"><span style="color: red;">*</span> Họ Tên</label>
                    <input type="text" value="{{$loaihang->ten_loai}}" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <small><span style="color: red;">{{$errors->first('name')}}</span></small>
                </div>
                <input type="hidden" name="malh" id="id" value="{{$loaihang->ma_loai}}">
                <small>Chú thích: (<span style="color: red;">*</span>) là bắt buộc</small>
                <input type="submit" value="Update" class="btn-submit">
            </form>
        </div>
        <span class="close1">&times;</span>
    </div>
</div>
@endsection