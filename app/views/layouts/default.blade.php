<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Home') | MowerMatcher</title>
  <link href="/css/all.css" type="text/css" rel="stylesheet">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body ng-app="mowerMatcherApp">

  @include('layouts.partials.nav')

  <div class="container">
    @include('flash::message')

    @yield('content')
  </div>
  <script src="https://maps.googleapis.com/maps/api/js" type="text/javascript"></script>
  <script src="/js/all.js" type="text/javascript"></script>
  <script>$('#flash-overlay-modal').modal();</script>
</body>
</html>