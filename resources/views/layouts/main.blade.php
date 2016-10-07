<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kenny Kens</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/80936d74be.js"></script>

  
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}?1">

{{--        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}

  @include('_includes.froala.froala-css')
</head>

<body>
@include('_includes.nav')
@yield('content')
<div class="footer pull-right">
    <div class="col-lg-12">
    <!-- Yield the slider if there is one -->
    <p>&copy; 2016 Kenny Kens & The Brown Bottle Boys</p>
    </div>
</div>

    @include('_includes.froala.froala-js')
    @yield('scripts')
</body>
</html>

