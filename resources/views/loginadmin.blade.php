<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/admin/login.css"> 
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <!-- Icon -->
    <div class="fadeIn first">
      <img style="width:100px;" src="https://static.vega.vn/product/78.png?v=2&w=145&h=213" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="/quantri/dashboard" method="post">
      {{csrf_field()}}
      <input type="text" id="login" class="fadeIn second" name="admin" placeholder="login">
      
      
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <br>
      <small><span style="color: red;">{{$errors->first('admin')}}</span></small>
      <br>
      <small><span style="color: red;">{{$errors->first('password')}}</span></small>
      <br>
      <input type="submit" name="dangnhap" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>
    <div id="formFooter">
      <a class="" href="#"></a>
    </div>
  </div>
</div>
</body>
</html>