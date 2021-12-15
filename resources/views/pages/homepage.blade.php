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
                <a class="title" href="">Miễn phí hot</a>
                <!--menu content-->
                <ul class="content-header-nav">
                    <?php foreach ($loaihang2 as $r2){ ?>
                    <li><a href="">{{$r2->ten_loai}}</a></li>
                
                    <?php }?>
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
<div class="wrap">
    <div class="left-wrap">
        <p class="txt">lịch phát hành</p>
        <p class="year"> 2020</p>
        <p class="month">tháng 6</p>
    </div>
    <div class="right-wrap">
        <div class="scrollbar" id="style">
            <div class="trans">
                <div class="box-calendar">
                    <div class="calendar">
                        <p class="week-day">thứ 2</p>
                        <p class="date">01/06</p>
                    </div>
                    <div class="txt-calendar">
                        <p class="name"><a href="">hành tẩu âm dương</a>
                        </p>
                        <p class="episode">tập 11</p>
                    </div>
                </div>
                <div class="box-calendar">
                    <div class="calendar">
                        <p class="week-day">thứ 2</p>
                        <p class="date">01/06</p>
                    </div>
                    <div class="txt-calendar">
                        <p class="name"><a href="">hành tẩu âm dương</a>
                        </p>
                        <p class="episode">tập 11</p>
                    </div>
                </div>
                <div class="box-calendar">
                    <div class="calendar">
                        <p class="week-day">thứ 2</p>
                        <p class="date">01/06</p>
                    </div>
                    <div class="txt-calendar">
                        <p class="name"><a href="">hành tẩu âm dương</a>
                        </p>
                        <p class="episode">tập 11</p>
                    </div>
                </div>
                <div class="box-calendar">
                    <div class="calendar">
                        <p class="week-day">thứ 2</p>
                        <p class="date">01/06</p>
                    </div>
                    <div class="txt-calendar">
                        <p class="name"><a href="">hành tẩu âm dương</a>
                        </p>
                        <p class="episode">tập 11</p>
                    </div>
                </div>
                <div class="box-calendar">
                    <div class="calendar">
                        <p class="week-day">thứ 2</p>
                        <p class="date">01/06</p>
                    </div>
                    <div class="txt-calendar">
                        <p class="name"><a href="">hành tẩu âm dương</a>
                        </p>
                        <p class="episode">tập 11</p>
                    </div>
                </div>
                <div class="box-calendar">
                    <div class="calendar">
                        <p class="week-day">thứ 2</p>
                        <p class="date">01/06</p>
                    </div>
                    <div class="txt-calendar">
                        <p class="name"><a href="">hành tẩu âm dương</a>
                        </p>
                        <p class="episode">tập 11</p>
                    </div>
                </div>
                <div class="box-calendar">
                    <div class="calendar">
                        <p class="week-day">thứ 2</p>
                        <p class="date">01/06</p>
                    </div>
                    <div class="txt-calendar">
                        <p class="name"><a href="">hành tẩu âm dương</a>
                        </p>
                        <p class="episode">tập 11</p>
                    </div>
                </div>
                <div class="box-calendar">
                    <div class="calendar">
                        <p class="week-day">thứ 2</p>
                        <p class="date">01/06</p>
                    </div>
                    <div class="txt-calendar">
                        <p class="name"><a href="">hành tẩu âm dương</a>
                        </p>
                        <p class="episode">tập 11</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-----------------slogan 1---------------->

<!-----------------mới nhất trong tuần---------------->

<!-------------------mới nhất trong tuần----------------->

<!-----------------sách mới nhất---------------->
<section class="new-week">
    <div class="product">
        <p>sách mới nhất</p>
    </div>

    <div class="row">
     @foreach($spmoinhat as $r)
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
<!-------------------sách mới nhất----------------->

<!-----------------bán chạy nhất---------------->
<section class="new-week">
    <div class="product">
        <p>bán chạy nhất </p>
    </div>

    <div class="row">
        <div class="card-book">
            <div>
                <a href=""><img src="client/img/img18.jpg" alt=""></a>
                <div class="txt">
                    <p class="name"><a href="">thinh thế kiểu y</a></p>
                    <p class="author"><a href="">văn thanh</a></p>
                    <p class="view">500 lượt xem</p>
                </div>
            </div>
        </div>
        <div class="card-book">
            <div>
                <a href=""><img src="client/img/img19.jpg" alt=""></a>
                <div class="txt">
                    <p class="name"><a href="">thinh thế kiểu y</a></p>
                    <p class="author"><a href="">văn thanh</a></p>
                    <p class="view">500 lượt xem</p>
                </div>
            </div>
        </div>
        <div class="card-book">
            <div>
                <a href=""><img src="client/img/img20.jpg" alt=""></a>
                <div class="txt">
                    <p class="name"><a href="">thinh thế kiểu y</a></p>
                    <p class="author"><a href="">văn thanh</a></p>
                    <p class="view">500 lượt xem</p>
                </div>
            </div>
        </div>
        <div class="card-book">
            <div>
                <a href=""><img src="client/img/img21.jpg" alt=""></a>
                <div class="txt">
                    <p class="name"><a href="">thinh thế kiểu y</a></p>
                    <p class="author"><a href="">văn thanh</a></p>
                    <p class="view">500 lượt xem</p>
                </div>
            </div>
        </div>
        <div class="card-book">
            <div>
                <a href=""><img src="client/img/img22.jpg" alt=""></a>
                <div class="txt">
                    <p class="name"><a href="">thinh thế kiểu y</a></p>
                    <p class="author"><a href="">văn thanh</a></p>
                    <p class="view">500 lượt xem</p>
                </div>
            </div>
        </div>
        <div class="card-book">
            <div>
                <a href=""><img src="client/img/img23.jpg" alt=""></a>
                <div class="txt">
                    <p class="name"><a href="">thinh thế kiểu y</a></p>
                    <p class="author"><a href="">văn thanh</a></p>
                    <p class="view">500 lượt xem</p>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection