@extends('layouts.main')
@section('content')
@include('_includes.banner')


<div class="container text-center">
    <div class="col-md-10 col-md-offset-1" >
    <h2><em><b>{{$welcome->title}}</b></em></h2>
    <p> {!!$welcome->body!!}</p>
    </div>
</div>

{{-- Circle Photo Links --}}
<div class="container text-center ">
    <div class="row">
    <div class="col-sm-4">
    <a style="color: #fff" href="{{url('/video')}}"><img src="img/cir1.png" class="img-circle cirImg" alt="Kenny Kens & The Brown Bottle Boys"><p style="margin-top: 0">Video Gallery</p></a>
    </div>
    <div class="col-sm-4">
    <a style="color: #fff" href="{{url('/event')}}"><img src="img/cir4.png" class="img-circle cirImg" alt="Kenny Kens & The Brown Bottle Boys"><p style="margin-top: 0">Upcoming Events</p></a>
    </div>
    <div class="col-sm-4">
    <a style="color: #fff" href="{{url('/picture')}}"><img src="img/cir5.png" class="img-circle cirImg" alt="Kenny Kens & The Brown Bottle Boys"><p style="margin-top: 0">Photo Gallery</p></a>
    </div>
    </div>
</div>

<!-- Container (Up Comming Event) -->
<div class="tourDate">
    <div class="container">
    <h3 class="text-center"><em><h2>~UP COMING EVENT~</h2>LIVE AT SAGEBRUSH CANTINA!<br/>12/17/16<br/><br/>WHAT THE HELL HAPPENED TO COUNTRY?<br/>CD AVAILABLE FOR PURCHASE IN<br/> <a href="{{url('/merchandise')}}">~CONTRABAND MERCANDISE~</a></em></h3><br/>
    <div class="row text-center">
    <div class="col-sm-6" style="background-color: #000">
    <div class="thumbnail">
    <img src="img/sagebrush.png" alt="Kenny Kens & The Brown Bottle Boys" width="400" height="300">
    </div>
    </div>
    <div class="col-sm-6">
    <div class="thumbnail">
    <img src="img/cover.jpg" alt="Kenny Kens & The Brown Bottle Boys" width="400" height="300">
    </div>
    </div>
    </div>
    </div>
</div>











@stop