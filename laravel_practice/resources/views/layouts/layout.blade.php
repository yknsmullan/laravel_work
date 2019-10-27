<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/layout.css">
  </head>

<body>
  <header>
    <p>Laravel</p>
    <nav>
      <ul>
        <li><a href="/login">login</a></li>
        <li><a href="/register">register</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="">
    @yield('content')
    <div>
   </div>
  </main>
  </body>
</html>
