<!DOCTYPE html>
<html lang="ja" >
<head>
  <meta charset="utf-8">
  <title></title>
  @extends('layouts.layout')
  <style>
  .content{
    height: 400px;
    width: 600px;
    margin: 0 auto;
    background: #fff;
    border: solid #fff 1px;
    border-radius: 10px;
    margin-top: 30px;
  }
  .content_text{
    font-size: 17px;
    background: #aaa;
    height: 40px;
    margin: 0;
    margin-bottom: 20px;
  }

  form{
     margin: 0 auto;
     width: 200px;
  }

  .item{
      overflow: hidden;
      margin-bottom: 20px;
  }
   label{
      float: left;
      margin-right: 20px;
      width:135px;
      padding-left: 10px;
      font-size: 13px;
      font-weight: bold;
  }

  input[type="name"],input[type="email"],input[type="password"]{
    border: solid 1px #333;
    border-radius: 5px;
    padding: 10px;
    font-size: 15px;
    display: block;
    margin: 0 auto;
  }

  input[type="submit"]{
  background: #444;
  border: none;
  color: white;
  font-size:16px;
  font-weight:bold;
  padding: 10px 20px;
  text-align: center;
  }
  </style>
</head>

<body>
    @section('content')

<section class="content">
    <p class="content_text">Login</p>
<form class="" action="/register" method="post">
  <div class="item">
    <label for="name">Name
    <input type="name" name="name" id="name">
    </label>
  </div>
  <div class="item">
    <label for="email">E-Mail
    <input type="email" name="email" id="email">
    </label>
  </div>
  <div class="item">
    <label for="password">Password
    <input type="password" name="password" id="password">
    </label>
  </div>
  <div class="item">
    <label for="confirmpassword">Confirm Password
    <input type="password" name="password" id="confirmpassword">
    </label>
  </div>
  <div class="button">
    <input type="submit" name="submit" value="login">
  </div>
</form>
</section>
  @endsection
</body>
</html>
