<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kenny Kens</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
<style>
  .container {
      padding: 30px 10px;
  }
  .cirImg {
/*      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 100%;
      height: 100%;
      min-height: 20em;*/

      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
  }
  .cirImg:hover {
      border:10px;
      border-color: #909090;
  }

  .myCarousel{

    margin:auto;

  }
   .carousel-inner img {
/*      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
   /*   height:700;*/
      margin: auto;
      margin-top: 50px;
  }

  .tourDate {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .tourDate h3 {
    color: #fff;
}
  .tourDate p {
    font-style: italic;
}
    
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
    
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 10px 10px 50px 10px;
      border: none;
      border-radius: 0;
  }
  .thumbnail h1 {
      font-family: 'Shadows Into Light', cursive;
      margin-top: 15px;
      color: red;
      padding-top: 5px;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
.navbar{
    min-height: 50px;
}
  .navbar-brand img{
    max-height: 25px;
    padding: 0;
    margin: 0;
  }

  #blackandwhite{
          -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white 
  }




</style>



</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" ><img src="img/logo2.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">BAND</a></li>
        <li><a href="#tour">TOUR</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>



<div id="myCarousel" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/banner1.png" alt="Damn Kenny Kens">
      </div>
    
    <div class="item">
      <img src="img/banner2.png" alt="Chicago">
   
      </div> 
    </div>
</div>

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




</body>
</html>