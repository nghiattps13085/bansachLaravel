<p>Cảm ơn quý khách!Đây là thông tin đơn hàng</p>
<p>Số Hóa Đơn: <span>{{$sohd}}</span></p>
<table border='1' style='border-collapse:collapse'>
          <tr>
               <th>Hình ảnh</th>  
                <th> Tên sản phẩm</th>
                <th>giá sách</th>
                <th>Số lượng</th>   
                <th>thành giá</th>
            </tr>
            @foreach($data as $r)
            <tr>
               <td><img width="70px" src="{{$r['Hinh']}}" alt=""></td>  
                <td>{{$r['ten_hh']}}</td>
                <td>{{number_format($r['don_gia'])}}đ</td>
                <td>{{$r['SoLuong']}}</td>   
                <td>{{number_format($r['DonGia'])}}đ</td>
            </tr>    
            @endforeach         
</table>
<p>Tổng tiền cần thanh toán: {{number_format($tongtien)}}Vnđ</p>
            <p>Cảm ơn quý khách</p>