@extends('client_layout')
@section('content')
<style>
.cart {
    width: 70%;
    margin: 0 auto;
    min-height: 300px;
    border: 1px solid black;
    border-radius: 15px;
    padding: 15px;
}

.cart .tittle {
    width: 100%;
    float: left;
    font-size: 16pt;
    margin-bottom: 20px;
}

.cart .item {
    width: 100%;
    float: left;
}

.cart .item .bold {
    font-weight: bold;
    margin-bottom: 10px;
}

.cart .item .image img {
    width: 60px;
}

.cart .item .image,
.name,
.quanity,
.price,
.action {
    width: 20%;
    float: left;
    text-align: center;
    font-size: 12pt;
}

.itemfinal {
    width: 70%;
    float:left;
    margin-left:15%;

}

.itemfinal .total {
    margin-top: 20px;
    width: 20%;
    float: right;
    font-size: 14pt
}
.itemfinal .back  {
    margin-top: 20px;
    width: 20%;
    float: left;
    font-size: 14pt
}
.itemfinal .back button{
  width: 150px;
  font-size:10pt;
  border: 1px solid black;
  border-radius:10px;
  padding:8px;
    
}
.itemfinal .back button:hover{
  background-color:#858b8a; 
}
.itemfinal .total button{
  width: 150px;
  font-size:14pt;
  /* padding-left:10px;
  padding-right:15px; */
  padding-top: 7px;
  padding-bottom: 7px;
  border:none;
  border-radius:10px;
  background-color:#1ba085;
  color:white;
    
}
.itemfinal .total button:hover{
  background-color:green;
}
</style>

<section class="section2">
@if(session('cart'))
    <div class="cart">
        <div class="tittle">
            Đơn hàng của bạn
        </div>
        <div class="item">
            <div class="image bold">
                Ảnh sách
            </div>
            <div class="name bold">Tên sách</div>
            <div class="quanity bold">Số lượng</div>
            <div class="price bold">Thành tiền</div>
            <div class="action bold">Hành động</div>
        </div>
        <hr>
   <?php
   $i=0;
   $tongtien=0;
   ?>
    @foreach(session('cart') as $r)
        <div class="item">
            <div class="image">
                <img src="{{$r['hinh']}}" alt="">
            </div>
            <div class="name">{{$r['ten']}}</div>
            <div class="quanity">{{$r['sl']}}</div>
            <div class="price">{{number_format($r['sl']*$r['gia'])}}</div>
            <div class="action"> <a href="/cart/deletecart/{{$i}}"> Xóa</a></div>
        </div>
        <hr>
        <?php $i++;
        $tongtien += $r['sl']*$r['gia']
        ?>
     @endforeach  
   
    </div>
    <div class="itemfinal">
        <div class="total">Tổng tiền:{{ number_format($tongtien)}}</div>   
    </div>
    <div class="itemfinal">
      <div class="back">
      <a href="/"> <button>Tiếp tục mua hàng</button></a>
      </div>
        <div class="total">
        <a href="/cart/dathang"><button>Đặt hàng</button></a>
        </div>
        
    </div>
    @endif
    @if(!session('cart'))
    <h1>Giỏ hàng của bạn đang rỗng</h1>
    @endif
</section>
@endsection