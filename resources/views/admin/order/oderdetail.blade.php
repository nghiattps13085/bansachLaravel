@extends('admin_layout')
@section('content')
<div class="right__table">                      
                        
                        <p class="right__tableTitle">Hóa đơn chi tiết</p>
                        <div class="right__tableWrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số Lượng</th>
                                        <th>Thành tiền</th>                   
                                    </tr>
                                </thead>
                                <tbody id="content">     
                                    @foreach($orderdetail as $orde)
                                        <tr>
                                        <td><img src="{{$orde->Hinh}}"alt=""></td>
                                        <td>{{$orde->ten_hh}}</td>
                                        <td>{{$orde->don_gia}}</td>
                                        <td>{{$orde->SoLuong}}</td>
                                        <td>{{$orde->DonGia}}</td>                                      
                                    </tr>                                   
                                    @endforeach                                                     
                                </tbody>
                            </table>
                    </div>
@endsection   