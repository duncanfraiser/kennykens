@extends('layouts.main')
@section('content')
<div class="container dashboard col-md-12" style="background:url({{ asset('img/CSA_op.png') }}); background-size: cover; margin: 0" >
<div class="col-md-6 col-md-offset-3 " style="background-color: #000; margin-top: 100px">
<h2>Brown Bottle Booking List<img style="float: right" src="{{url('img/jugnail.png')}}"></h2>

<ul>
@foreach($books as $book)
<li><a href="{{ url('/book/'.$book->id) }}">{{$book->venue_name}}</a></li>
<p>{{$book->date}}</p>
@endforeach

</ul>

</div>
</div>



@stop