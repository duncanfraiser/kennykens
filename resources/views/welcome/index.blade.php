@extends('layouts.main')
@section('content')
@include('_includes.banner')

<div class="container text-center">

{{--   <img src="img/logo.png"> --}}
  <h2><em><b>100% PURE DETROIT HONKEY TONK!</b></em></h2>
  
  <p>Bacon ipsum dolor amet picanha beef ribs frankfurter, boudin ribeye strip steak bresaola pork chop bacon fatback. Doner pancetta pastrami fatback t-bone. Rump shankle bacon, jowl turkey pork belly sirloin strip steak ham salami. Biltong short loin meatball sausage cow.<br /><br />
  Bacon ipsum dolor amet ham hock bacon tenderloin filet mignon doner, pork belly sirloin pork chop pig short ribs hamburger alcatra ball tip jowl strip steak. Porchetta ribeye corned beef, ham short ribs meatball ham hock doner pork loin prosciutto flank bacon. Pork meatloaf andouille short loin, fatback capicola bacon ham meatball beef shankle. Tongue pig capicola flank, meatloaf shank hamburger corned beef shoulder boudin bresaola strip steak pastrami. Filet mignon bacon pork chop ham hock short ribs. Ground round ribeye salami rump venison beef porchetta pork. Ribeye alcatra kielbasa, porchetta swine hamburger short ribs turkey bresaola picanha.<br /><br />

Leberkas alcatra tongue, corned beef turkey ham hock chicken meatball short ribs boudin picanha brisket meatloaf pig fatback. Filet mignon ribeye bacon salami andouille leberkas, landjaeger turkey. Corned beef turducken shoulder tenderloin short loin, shank shankle pork ribeye jowl pork belly swine tail beef. Ham hock rump bresaola pork belly, picanha flank swine doner cow meatloaf. Shank brisket capicola tenderloin frankfurter, cow tri-tip jowl. Chicken salami bacon spare ribs jerky turducken. Strip steak shank landjaeger, picanha ground round sirloin bresaola venison leberkas alcatra biltong short loin pork loin prosciutto.</p>
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