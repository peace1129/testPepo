<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>@yield('title')</title>
  <!-- Bootstrap core CSS -->
  <script src="{{ asset('/js/bootstrap_csrf.js') }}"></script>
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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
  @yield('stylesheet')
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="/">ココにロゴ</a>
      <div class="pull-right">
        @yield('loginHtml')
      </div>
    </div>
  </nav>

  @yield('content');

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.js') }}"></script>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
