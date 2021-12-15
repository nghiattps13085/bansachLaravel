@extends('admin_layout')
@section('content')
<h3>Lịch sử Hoạt động</h3>
<br>
<?php
use App\Models\User;
 $user = User::find(1);
?>
<?php
if($user){
foreach($user->unreadNotifications as $nt){ ?>  
   <div style="color: #3c763d;background-color: #dff0d8; border-color: #d6e9c6;padding: 15px; margin-bottom: 20px; border: 1px solid transparent; border-radius: 4px;">    
   {{$nt->data['action']}} {{$nt->data['name']}} , {{ $nt->data['email'] }} lúc {{$nt->created_at}}
    <div style="float:right;">
       <a href="/quantri/dashboard/{{$nt->id}}"><button style="font-size:12pt;cursor:pointer; padding:5px;background-color: #dff0d8;">Mask as read</button></a>
    </div>
  </div>

<?php
}
}?>
@endsection  