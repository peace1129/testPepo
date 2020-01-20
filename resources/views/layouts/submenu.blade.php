<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/landing-page.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/simple-line-icons.css') }}">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  @yield('stylesheet')
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">ジャックラッセルクラブ</a>
      <a class="btn btn-primary" href="{{ url('/Mypage') }}"><i class="icon ion-md-desktop"></i>  Sign In</a>
    </div>
  </nav>

  @yield('content');

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
