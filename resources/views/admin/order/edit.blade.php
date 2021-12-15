@extends('admin_layout')
@section('content')
<div id="myModal1" class="modal1">
    <!-- Modal content -->
    <div class="modal-content">
        <div class="form-area">
            <h2 style="margin-bottom:15px; color:firebrick;" class="title-modal">Xử lí đơn hàng</h2>
            <form enctype="multipart/form-data" action="/quantri/hoadon/update" method='post'>
                @csrf()
                <div class="form-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text" style="margin-right:20px;text-align:center;">
                            <input type="radio" <?php if($order->trangthai ==0) echo 'checked' ?> name="trangthai"
                                value=0 aria-label="Radio button for following text input">
                            <label for="">Đang chờ xử lí</label>
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" <?php if($order->trangthai ==1) echo 'checked' ?> name="trangthai"
                                value=1 aria-label="Radio button for following text input">
                            <label for="">Đang giao</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="radio" <?php if($order->trangthai ==2) echo 'checked' ?> name="trangthai"
                                value=2 aria-label="Radio button for following text input">
                            <label for="">Đã  giao</label>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="maorder" id="id" value="{{$order->id_hoadon}}">
                <small>Chú thích: (<span style="color: red;">*</span>) là bắt buộc</small>
                <input type="submit" value="Cập nhật" class="btn-submit">
            </form>
        </div>
        <span class="close1">&times;</span>
    </div>
</div>
@endsection