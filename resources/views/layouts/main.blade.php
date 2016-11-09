<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kenny Kens</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="icon" href="{{url('/img/jugLogo.png')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/80936d74be.js"></script>



  
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}?1">

{{--        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> --}}

  @include('_includes.froala.froala-css')

          {{-- Full Calendar Links --}}
         <link rel="stylesheet" href="{{ asset('css/fullcalendar.css') }}">
         <script src="{{ asset('js/jquery.min.js') }}"></script>
         <script src="{{ asset('js/moment.min.js') }}"></script>
         <script src="{{ asset('js/fullcalendar.js') }}"></script>
         <script src="{{ asset('js/jPages.js') }}"></script>

<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
     @yield('styles')                        
</head>

<body>
@include('_includes.nav')
@yield('content')
<div class="footer" style="float: right">
    <div class="col-lg-12" >
    <!-- Yield the slider if there is one -->
    <p style="padding: 50px 0 30px 0">

<span style="color: #fff; font-size: 15px; float: right">Follow us on social media!<br>
<a target="BLANK" title="Facebook" href="https://www.facebook.com/KennyKensBand/">
<img src="/img/facebook.png" width="35" height="35" />
</a>
<a target="Blank" title="Instagram" href="https://www.instagram.com/kenny.kens/?hl=en">
<img src="/img/instagram.png" width="35" height="35" />
</a>
<a target="BLANK" title="Reverb Nation" href="https://www.reverbnation.com/kennykensthecashcreekband">
<img src="/img/reverbnation.png" width="35" height="35" />
</a>
<a target="BLANK" title="Twitter" href="https://twitter.com/?lang=en">
<img src="/img/twitter.png" width="35" height="35" />
</a>
<a target="BLANK" title="You Tube" href="https://www.youtube.com/channel/UCTSkUmSQr8RzVgxODOy_bpA">
<img src="/img/youtube1.png" width="35" height="35" />
</a></span></p>
<p style="color: #9d9d9d"><br/>&copy; 2016 Kenny Kens & The Brown Bottle Boys</p>

</div>

    @include('_includes.froala.froala-js')
    @yield('scripts')
</body>
</html>

