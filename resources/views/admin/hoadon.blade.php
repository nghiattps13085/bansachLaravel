@extends('admin_layout')
@section('content')
<div class="right__table">
                        <!-- Trigger/Open The Modal -->                     
                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <div class="form-area">
                                    <h2 style="margin-bottom:15px; color:firebrick;" class="title-modal">Add Product</h2>
                                    <form enctype="multipart/form-data" action="admin.php?act=insert" method='post'>
                                        <div class="form-group">
                                            <label class="input-group-text col-md-2"><span style="color: red;">*</span> Name Category: </label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                        <input type="hidden" id="id" value=0>
                                        <small>Chú thích: (<span style="color: red;">*</span>) là bắt buộc</small>
                                        <input type="submit" value="Thêm" class="btn-submit">
                                    </form>
                                </div>
                                <span class="close">&times;</span>
                            </div>
                        </div>
                        <p class="right__tableTitle">Danh sách hóa đơn</p>
                        <div class="right__tableWrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Mã hóa đơn</th>
                                        <th>Mã khách hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                        <th>Chi tiết đơn hàng</th>
                                        <th>Delete</th>                              
                                    </tr>
                                </thead>
                                <tbody id="content"> 
                                    @foreach($order as $or)
                                    <tr>
                                        <td>{{$or->id_hoadon}}</td>
                                        <td>{{$or->id_khachhang}}</td>
                                        <td>{{$or->Tongtien}}</td>
                                        @if($or->trangthai==0 )
                                        <td style="color:red;"><a href="/quantri/hoadon/{{$or->id_hoadon}}">Đang chờ xử lí</a></td>
                                        @endif
                                        @if($or->trangthai==1)
                                        <td style="color:green;"><a href="/quantri/hoadon/{{$or->id_hoadon}}">Đang giao hàng</a></td>
                                        @endif
                                        @if($or->trangthai==2)
                                        <td style="color:green;"><a href="/quantri/hoadon/{{$or->id_hoadon}}">Đã giao hàng</a></td>
                                        @endif
                                        <td style=""><a href="/quantri/hoadon/hdct/{{$or->id_hoadon}}">Chi tiết đơn hàng</a></td>
                                        <td><a href="/quantri/hoadon/delete/{{$or->id_hoadon}}">Delete</a></td>                              
                                    </tr>
                                    @endforeach                                                            
                                </tbody>
                            </table>
                    </div>
@endsection                    