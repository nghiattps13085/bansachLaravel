@extends('client_layout')
@section('content')
<section>
    <div class="product">
        <p>Kết quả cho từ khóa: <span style="color:red;">{{$keyword}}</span></p>
    </div>
    <div class="row-book">
    @forelse($sanphamsearch as $r)
        <div class="book">
            <img src="{{$r->Hinh}}" alt="">
            <p class="name">{{$r->ten_hh}}</p>
            <p class="view">1.236 lượt xem</p>
            <button><a href="/trangchu/chitietsp/{{$r->ma_hh}}">Chi tiết sách</a></button>
        </div>
    @empty
        <p style="text-align:center;">Không có kết quả</p> 
    @endforelse
    </div>
</section>
@endsection