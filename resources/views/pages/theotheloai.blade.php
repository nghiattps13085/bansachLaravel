@extends('client_layout')
@section('content')
<section>
    <div class="banner">
        <img src="client/img/bn.jpg" alt="">
    </div>
    <div class="content">
        <div class="left-siderbar">
            <p class="h2">DANH MỤC</p>
          
            @foreach($loaihang as $r)
            <li><a href="/trangchu/theloai/{{$r->ma_loai}}">{{$r->ten_loai}}</a></li>
            @endforeach          
        </div>
        <div class="right-siderbar">

            <div class="content-header">
                <a class="title" href="">{{$tentl->ten_loai}}</a>
                <!--menu content-->
                <ul class="content-header-nav">                  
                @foreach($loaihang2 as $r)
            <li><a href="/trangchu/theloai/{{$r->ma_loai}}">{{$r->ten_loai}}</a></li>
            @endforeach
                               
                </ul>
            </div>
            <div class="wrap-book">
               @foreach($sanpham as $r)
                <div class="box-transparent">
                    <div class="book">
                        <img src="{{$r->Hinh}}" alt="">
                        <div class="title">
                            <p>{{$r->ten_hh}}</p>
                            <p class="author">Janet S. Fox <br><br> 56 vote <br><br> tóm tắt tuyển tập
                            </p>
                        </div>
                        <div class="view">
                            1.200 lượt xem
                        </div>
                        <button><a href="/trangchu/chitietsp/{{$r->ma_hh}}">Chi Tiết</a></button>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
</section>
<!-----------------slogan 1---------------->

<!-----------------slogan 1---------------->

<!-----------------mới nhất trong tuần---------------->

<!-------------------mới nhất trong tuần----------------->

<!-----------------sách mới nhất---------------->

<!-------------------sách mới nhất----------------->

<!-----------------bán chạy nhất---------------->

@endsection