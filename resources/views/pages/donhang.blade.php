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
    <div class="cart">
        <div class="tittle">
            Đơn hàng của bạn
        </div>
        <div class="item">
            <div class="name bold">Số hóa đơn</div>
            <div class="quanity bold">Tổng tiền</div>
            <div class="price bold">Ngày mua</div>
            <div class="action bold">Trạng thái</div>
        </div>
        <hr>
        @foreach($alldonhanguser as $r)
        <div class="item">
            <div class="name">{{$r->id_hoadon}}</div>
            <div class="quanity">{{number_format($r->Tongtien)}}đ</div>
            <div class="price">{{$r->Ngaymua}}</div>    
            @if($r->trangthai==0)
            <div class="action" style="color:red">Đang chờ xử lí</div>
            @endif
            @if($r->trangthai==1)
            <div class="action" style="color:green">Đang giao hàng</div>
            @endif
            @if($r->trangthai==2)
            <div class="action" style="color:green">Giao hàng thành công</div>
            @endif
        </div>
        <hr>
        @endforeach
    </div>
    @if(session('dathang'))
    <script>
        alert("Đặt hàng thành công");
    </script>
    {{session()->forget('dathang')}}
    @endif
    <div class="itemfinal">
      <div class="back">
      <a href="/"> <button>Tiếp tục mua hàng</button></a>
      </div>
        <div class="total">
        </div>
    </div>
</section>
@endsection