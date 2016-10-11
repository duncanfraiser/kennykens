@extends('layouts.main')
@section('content')
@include('_includes.banner')

<div class="container text-center">

{{--   <img src="img/logo.png"> --}}
  <h2><em><b>{{$welcome->title}}</b></em></h2>
  
  <p>{!!$welcome->body!!}</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p><strong>Bar</strong></p><br>
      <a href="#demo" data-toggle="collapse">
      <img src="img/cir2.png" class="img-circle cirImg" alt="Random Name"  width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Kenny Kens</p>
        <p>& The Brown Bottle Boys</p>
        <p>At some damn bar.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p><strong>Machine Shop</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
      <img src="img/cir1.png" class="img-circle cirImg" alt="Random Name"  width="36" height="562">
      </a>
      <div id="demo2" class="collapse">
        <p>Kenny Kens</p>
        <p>& The Brown Bottle Boys</p>
        <p>At some other damn bar.</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p><strong>Painted Lady</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
      <img src="img/cir3.png" class="img-circle cirImg" alt="Random Name"  width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Kenny Kens</p>
        <p>& The Brown Bottle Boys</p>
        <p>At some damn other other bar.</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div class="tourDate">
  <div class="container">
    <h3 class="text-center">TOUR DATES BITCHES!</h3>
    <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
    <ul class="list-group">
      <li class="list-group-item">September Sold Out!</li>
      <li class="list-group-item">October Sold Out!</li>
      <li class="list-group-item">November 3</li>
    </ul>

<div class="row text-center">
      <div class="col-sm-6">
        <div class="thumbnail">
          <img src="img/Duncan.png" alt="Paris" width="400" height="300">
          <h1><strong>Duncan "Dunk" Fraiser</strong></h1>
{{--           <p>Fri. 27 November 2015</p> --}}
{{--           <button class="btn">Buy Tickets</button> --}}
        </div>
      </div>
      <div class="col-sm-6">
        <div class="thumbnail">
          <img src="img/Ken.png" alt="San Francisco" width="400" height="300">
          <h1><strong>Kenny "Fitz" Matzol</strong></h1>
{{--           <p>Sun. 29 November 2015</p> --}}
{{--           <button class="btn">Buy Tickets</button> --}}
        </div>
      </div>
    </div>
  </div>
</div>

@stop