<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waka</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="/client/css/style.css">
    <script src="https://kit.fontawesome.com/55d1548d79.js" crossorigin="anonymous"></script>   
    <style>
        .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
    </style> 
</head>

<body>
    <header>
        <div class="top-menu" id="myheader">
            <div class="logo">
                <img src="client/img/logo.png" alt="">
            </div>
            <form action="/trangchu/search/" method='post'>
                @csrf()
                <input class="search" name="keyword" type="text" placeholder="Nhập tên sách" required>
                <input type="submit" class="btn" name="timkiem" value="Tìm kiếm">
            </form>
            @if(session('user_id')&&session('username'))
            <div class="login">
               <button class="register"><a href="/cart"><i class="fas fa-shopping-cart"></i><span>@if(session('cart')) {{count(session('cart'))}} @endif</span></a></button>
               <div class="dropdown">
                <button class="register dropbtn"><a href="">{{session('username')}}</a></button>
                <div class="dropdown-content">
                 <a href="/trangchu/donhang">Đơn hàng của bạn</a>
                 <a href="/trangchu/logout">Thoát</a>
                    
                </div>
                </div>
                <!-- <button class="register"><a href="/trangchu/logout">Thoát</a></button> -->
            </div>
            @endif
            @if(!session('user_id')&&!session('username'))
            <div class="login">
                <button class="register"><a href="/cart"><i class="fas fa-shopping-cart"></i>@if(session('cart')) {{count(session('cart'))}} @endif</a></button>
                <button class="register"><a href="/dangnhap">đăng nhập</a></button>
                <button class="register"><a href="/dangki">đăng ký</a></button>
            </div>
            @endif
        </div>
        <div class="bot-menu">
            <li><a href="/">trang chủ</a></li>
            <li><a href="/productlist">sản phẩm</a></li>
            <li><a href="/about">giới thiệu</a></li>
            <li><a href="/contact">liên hệ</a></li>
            <li><a href="/news">tin tức</a></li>
        </div>
    </header>
    <script>
        window.onscroll = function() {
            myFunction()
        };

        var header = document.getElementById("myheader");
        var sticky = header.offsetTop;

        function myFunction() {
            if (window.pageYOffset > sticky) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        }
    </script>
        @section('content')
        @show
    <!-------------------bán chạy nhất----------------->

    <!-------------------banner 2----------------->
    <!--
    <div class="bn">
        <div class="img">
            <div class="bn-tilte">
                truyện tranh
            </div>
            <div class="bn-txt">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates, perspiciatis modi exercitationem, illum labore atque nam quaerat corrupti sint reprehenderit nisi architecto perferendis ea placeat optio et ut enim necessitatibus.
            </div>
        </div>

    </div>
    -->
    <!-------------------banner 2----------------->

    <div class="slogan" style="margin-top:100px">
        <p class="author">MOMO, MICHAEL ENDE</p>
        <p>" Vì thời gian là cuộc sống. Mà chúng ta cảm nhận cuộc sống bằng con tim "</p>
    </div>

    <footer>
        <div class="footer-transparent">
            <div class="information">
                <div>THÔNG TIN HỮU ÍCH</div>
                <P>
                    Review Truyện - Cafe Sách <br><br> Tin waka <br><br> Giới thiệu chung <br><br> Thỏa thuận chung <br><br>
                </P>

            </div>
            <div class="contact">
                <div>THÔNG TIN LIÊN HỆ</div>
                <p>
                    Email: support@waka.vn <br><br> Tel: 0243791844 <br><br> Giấy xác nhận Đăng ký hoạt động phát hành xuất bản phẩm điện tử số 8132/XN-CXBIPH do Cục Xuất bản, <br> In và Phát hành cấp ngày 31/12/2019

                </p>
            </div>
            <div class="connect">
                <div>LIÊN KẾT</div>
                <!-- start font awesome -->
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <!-- end font awesome -->
            </div>
        </div>
    </footer>
</body>

</html>