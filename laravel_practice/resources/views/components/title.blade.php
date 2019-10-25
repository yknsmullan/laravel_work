<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      body{
        background: #f3f3f3;
        margin: 0;
      }
      .header{
        margin: 0;
        background: #fff;
        width: 100%;
        height: 80px;
      }
      .header p{
        margin: 0;
        font-weight: bold;
        font-size: 18px;
        padding: 10px;
      }
      nav{
      float: right;
      }
      nav ul{
      margin: 0 ;
      padding: 0 ;
      }
      nav ul li{
      list-style: none;
      display: inline-block;
      width: 18%;
      min-width: 90px;
      }
      nav ul li a{
      text-decoration: none;
      color: #333;
      }
      nav ul li a:hover{
      color: #E7DA66;
      }


    </style>
  </head>
  <body>
    <section class='header'>
      <p>Laravel</p>
      <nav>
        <ul>
          <li><a href="/login">login</a></li>
          <li><a href="/register">register</a></li>
        </ul>
      </nav>
    </section>



  </body>
</html>
