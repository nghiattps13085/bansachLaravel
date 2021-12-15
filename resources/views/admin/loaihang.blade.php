@extends('admin_layout')
@section('content')
<div class="right__table">
    <!-- Trigger/Open The Modal -->
    <button id="btnModal" class="btn-modal">Thêm loại hàng</button>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="form-area">
                <h2 style="margin-bottom:15px; color:firebrick;" class="title-modal">Add Product</h2>
                <form enctype="multipart/form-data" action="/quantri/loaihang/insert" method='post'>
                    @csrf
                    <div class="form-group">
                        <label class="input-group-text col-md-2"><span style="color: red;">*</span> Tên loại </label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>                     
                    <input type="hidden" id="id" value=0>
                    <small>Chú thích: (<span style="color: red;">*</span>) là bắt buộc</small>
                    <input type="submit" value="Thêm"  class="btn-submit">
                </form>
                <label for="">Sai tên</label>
            </div>
            <span class="close">&times;</span>
        </div>
    </div>

    <!-- <script>
        var aler = document.getElementById('alerss');
        console.log(aler);
        function bienmat(){
            aler.style.display ="none";    
        }
        if(aler!= null){
            setTimeout(() => {
                bienmat();
            }, 2000); 
        }     
    </script> -->

    <p class="right__tableTitle">Danh sách loại hàng</p>
    <div class="right__tableWrapper">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody id="content">
                @foreach($loaihang as $lh)
                <tr>
                    <td>{{$lh->ma_loai}}</td>
                    <td>{{$lh->ten_loai}}</td>
                    <td><a href="/quantri/loaihang/delete/{{$lh->ma_loai}}">Delete</a> </td>
                    <td><a href="/quantri/loaihang/{{$lh->ma_loai}}">Edit</a> </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
   