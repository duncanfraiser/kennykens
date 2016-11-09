@extends('layouts.main')
@section('content')
<div class="container text-center">
	<h2>{{$pic->title}}</h2>
	<img src="{{url('/storage/pics/'.$pic->pic)}}">
</div>
@stop