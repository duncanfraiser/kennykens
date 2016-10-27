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
    <a style="color: #fff" href="{{url('/book/create')}}"><img src="img/cir4.png" class="img-circle cirImg" alt="Kenny Kens & The Brown Bottle Boys"><p style="margin-top: 0">Booking</p></a>
    </div>
    <div class="col-sm-4">
    <img src="img/cir5.png" class="img-circle cirImg" alt="Kenny Kens & The Brown Bottle Boys">
    </div>
    </div>
</div>

<!-- Container (Up Comming Event) -->
<div class="tourDate">
    <div class="container">
    <h3 class="text-center"><em><h2>~UP COMING EVENT~</h2>WHAT THE HELL HAPPENED TO COUNTRY?<br/>CD RELEASE PARTY</em></h3><br/>
    <div class="row text-center">
    <div class="col-sm-6" style="background-color: #000">
    <div class="thumbnail">
    <img src="img/poster.png" alt="Kenny Kens & The Brown Bottle Boys" width="400" height="300">
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









<div class="container">
<h3 class="text-center">The Brown Bottle Boys</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Kenny Kens</a></li>
    <li><a data-toggle="tab" href="#menu1">Duncan</a></li>
    <li><a data-toggle="tab" href="#menu2">Elvis</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Kenny Kens, Exalted Ruler</h2>
                <button class="btn" data-toggle="modal" data-target="#myModal">Read More</button>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Duncan, Beer Drinker</h2>
      <button class="btn" data-toggle="modal" data-target="#myModal2">Read More</button>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Elvis, The King</h2>
      <button class="btn" data-toggle="modal" data-target="#myModal3">Read More</button>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4>Kenny Kens</h4>
      </div>
      <div class="modal-body text-center">
      <img src="img/ken.jpg" alt="Kenny Kens & The Brown Bottle Boys">
      <p style="color: #555"><br/>I enjoy long walks in parking lots of rest areas at night. I LOOOOVEEE penises in my mouth, can't get enough. Give me a bag~O~dicks PLEASE. I'm a huge vagina when it comes to relationships. HEY FELLAS.....HOLLA!<br>YOLO!</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary pull-right" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Done Reading
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal2" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4>Drunkin Duncan</h4>
      </div>
      <div class="modal-body text-center">
      <img src="img/duncan.png" alt="Kenny Kens & The Brown Bottle Boys">
      <p style="color: #555"><br/>Wicked Jedi Badass Coder<br/>All around great guy.<br/>Lifetime pass holder for all KK & The BB Boys shows!<br/>TCB Bitches!!</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary pull-right" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Done Reading
        </button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal3" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4>Elvis Presley</h4>
      </div>
      <div class="modal-body text-center">
      <img src="img/ep.png" alt="Kenny Kens & The Brown Bottle Boys">
      <p style="color: #555"><br/>I'm fucking Elvis.<br/>Nuff Said.<br/>I'll pull your tounge out by the ROOTS!<br/>Thank ya, thank ya very much!</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary pull-right" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> Done Reading
        </button>
      </div>
    </div>
  </div>
</div>

@stop