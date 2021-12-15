@extends('client_layout')
@section('content')
<section>
        <div class="product">
            <p>Sản Phẩm</p>
        </div>
        <div class="row-book">
         @foreach($sanpham as $sanpham)
            <div class="book">
                <img src="{{$sanpham->Hinh}}" alt="">
                <p class="name">{{$sanpham->ten_hh}}</p>
                <p class="view">1.236 lượt xem</p>
                <button><a href="/trangchu/chitietsp/{{$sanpham->ma_hh}}">Chi tiết sách</a></button>
            </div>
        @endforeach
        </div>

    </section>
@endsection    