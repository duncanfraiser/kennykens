@extends('layouts.main')
@section('content')
<div class="container text-center">
<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 50px; padding-bottom: 50px">
<h1>Thanks {{$merch->name}} for buying some of my shit.</h1>
<h2>I will mail you your contraband as soon as I get off my lazy ass and make it to the post office!!!!</h2>
<div>
	<img src="{{url('/img/Ken.png')}}">
</div>
<h2>You just wait there with bells on sweetie, it's a commin!</h2>

</div>
</div>



@stop