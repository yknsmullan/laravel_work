<!DOCTYPE html>
<html lang="ja" >
<head>
  <meta charset="utf-8">
  <title></title>
  <style>
      .content{
        height: 250px;
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
         width: 400px;
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

      input[type="email"],input[type="password"]{
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

</style>
</head>

  <body>
    @include('components.title')

    <section class="content">
    <p class="content_text">Login</p>
    <form class="" action="/login" method="post">

    <div class="item">
      <label>E-Mail</label>
      <input type="email" name="email" value="">
    </div>
    <div class="item">
    <label>Password</label>
    <input type="password" name="password" value="">
    </div>

    <div class="button">
      <input type="submit" name="submit" value="login">
    </div>
  </form>
  </section>
  </body>
</html>
