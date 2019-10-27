<!DOCTYPE html>
<html lang="ja" >
<head>
  <meta charset="utf-8">
  <title></title>
  @extends('layouts.layout')
  </head>


  <body>
    @section('content')

  <section class="content">
   <p class="content_text">Login</p>
  <form class="" action="/login" method="post">

  <div class="item">
    <label>E-Mail
    <input type="email" name="email" value="">
    </label>
  </div>
  <div class="item">
    <label>Password
    <input type="password" name="password" value="">
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
