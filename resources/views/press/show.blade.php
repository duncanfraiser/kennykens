@extends('layouts.main')
@section('content')
<div class="container text-center">
<div class="press">
<h1>{{$press->title}}</h1>
</div>
<img class="pressImg" src="/img/{{$press->img}}">
	
</div>
@stop