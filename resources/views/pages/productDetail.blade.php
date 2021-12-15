@extends('client_layout')
@section('content')
<div class="content3">
    <div class="wrap-header">
        <div class="card-title">
            <h1>văn học </h1>
        </div>
        <div class="wrap-nav">
            @foreach($loaihang as $r)
            <li><a href="/trangchu/theloai/{{$r->ma_loai}}">{{$r->ten_loai}}</a></li>
            @endforeach
        </div>
    </div>
    <div class="wrap-content3">
        <div class="left-wrap-cnt">
            <div class="top-left-wr">
                <div class="card-img">
                    <img src="{{$sanpham->Hinh}}" alt="">
                </div>
                <div class="txt-detail">
                   
                    <h1>{{$sanpham->ten_hh}}</h1>
                    <p>Tác giả: <span>minh trang</span></p>
                    <p>Nhà xuất bản: <span>NXB thanh niên</span></p>
                    <p>Ngày cập nhật: <span>14/01/2020</span></p>
                    <p>Thể loại: <span>{{$theloai->ten_loai}}</span></p>
                    <p>Giá sách: <span class="price">{{number_format($sanpham->don_gia)}} VNĐ</span></p>
                    <a href="/trangchu/addtocart/{{$sanpham->ma_hh}}"><button style="width:150px;color:white;cursor:pointer">Thêm vào giỏ hàng</button></a>
                    <p class="detail">{{$sanpham->mo_ta}}
                    </p>
                </div>
            </div>
            <div class="cmt">
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                    data-numposts="5" data-width="820px"></div>
            </div>
        </div>

        <div class="right-wrap-cnt">
            <h1>liên quan</h1>
            <div class="list-img">
                @foreach($sanphamlq as $r)
                <div class="box-img">
                    <a href="/trangchu/chitietsp/{{$r->ma_hh}}"> <img src="{{$r->Hinh}}" alt=""></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<section class="new-week">
        <div class="product">
            <p>có thể bạn thích</p>
        </div>

        <div class="row">
        @foreach($sanphamthich as $r)
            <div class="card-book">
                <div>
                    <a href="/trangchu/chitietsp/{{$r->ma_hh}}"><img src="{{$r->Hinh}}" alt=""></a>
                    <div class="txt">
                        <p class="name"><a href="">{{$r->ten_hh}}</a></p>
                        <p class="author"><a href="">văn thanh</a></p>
                        <p class="view">500 lượt xem</p>
                    </div>
                </div>
            </div>
            @endforeach  
         
        </div>
    </section>

@endsection