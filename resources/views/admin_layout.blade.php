<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/admin/admin.css">
</head>

<body>
    <div class="wrapper">
        <div class="dashboard">
            <div class="left">
                <span class="left__icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <div class="left__content">
                    <div class="left__logo"><a href="/quantri/dashboard"><img
                                src="https://static.vega.vn/product/78.png?v=2&w=145&h=213" width="70px" alt="logo"></a>
                    </div>
                    <div class="left__profile">
                        <p class="left__name">LV</p>
                    </div>
                    <ul class="left__menu">
                        <li class="left__menuItem">
                            <div class="left__title"><img src="/admin/assets/icon-tag.svg" alt=""><a
                                    href="/quantri/loaihang">Loại sản phẩm</a> </div>
                        </li>
                        <li class="left__menuItem">
                            <div class="left__title"><img src="/admin/assets/icon-edit.svg" alt=""><a
                                    href="/quantri/sanpham">Sản phẩm</a></div>

                        </li>
                        <li class="left__menuItem">
                            <div class="left__title"><img src="/admin/assets/icon-book.svg" alt=""><a
                                    href="/quantri/khachhang">Khách hàng</a></div>

                        </li>
                        <li class="left__menuItem">
                            <div class="left__title"><img src="/admin/admin/assets/icon-user.svg" alt=""><a
                                    href="/quantri/hoadon">Hóa đơn</a></div>
                        </li>
                        <li class="left__menuItem">
                            <a href="/quantri/logout" class="left__title"><img src="/admin/assets/icon-logout.svg"
                                    alt="">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="right__content">
                    @include('admin.thongke.thongke')
                    

                    @section('content')
                    @show

                </div>
            </div>
        </div>

        <div id="modalDelete" class="modal">
            <span onclick="document.getElementById('modalDelete').style.display='none'" class="close"
                title="Close Modal">×</span>
            <form class="modal-content" action="/action_page.php">
                <div class="container">
                    <h1>Delete Product</h1>
                    <p>Are you sure you want to delete this product?</p>

                    <div class="clearfix">
                        <button type="button" class="deletebtn btn-confirm">Delete</button>
                        <button type="button" class="cancelbtn btn-confirm">Cancel</button>
                    </div>
                </div>
            </form>
        </div>

        <script src="/admin/admin.js"></script>
</body>

</html>