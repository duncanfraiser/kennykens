@extends('layouts.main')
@section('content')
<div class="container dashboard col-md-12" style="background:url({{ asset('img/CSA_op.png') }}); background-size: cover; margin: 0" >
<div class="col-md-6 col-md-offset-3 " style="background-color: #000; margin-top: 100px">
<h2>{{$book->venue_name}}</h2>

<p><span style="color: #337ab7"><u>Venue Address:</u></span><br/>
{{$book->venue_address}}</p>

<p><span style="color: #337ab7"><u>Start Date and Time:</u></span><br/>
{{ date('F d, Y', strtotime($book->start_date)) }}<br/>{{ date('h:i:s a', strtotime($book->start_time)) }}</p>

<p><span style="color: #337ab7"><u>End Date and Time:</u></span><br/>
{{ date('F d, Y', strtotime($book->end_date)) }}<br/>{{ date('h:i:s a', strtotime($book->end_time)) }}</p>

<p><span style="color: #337ab7"><u>Venue Contact:</u></span><br/>
{{$book->contact}}</p>

<p><span style="color: #337ab7"><u>Venue Facebook Page:</u></span><br/>
{{$book->facebook}}</p>

<p><span style="color: #337ab7"><u>Supplier of Sound and Lights:</u></span><br/>
{{$book->sound_lights}}</p>

<p><span style="color: #337ab7"><u>Merchandise Area Avaliable:</u></span><br/>
{{$book->merch_area}}</p>

<p><span style="color: #337ab7"><u>Set Lengths:</u></span><br/>
{{$book->set_length}}</p>

<p><span style="color: #337ab7"><u>Big Fat Fucking Offer:</u></span><br/>
<span style="color: green">{{$book->offer}}</span></p>


</div>
</div>



@stop