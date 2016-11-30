@extends('layouts.main')
@section('content')
<div class="container text-center">
	<h2>{{$pic->title}}</h2>
	<img src="{{ url('/storage/pics/' . $pic->pic)}}">
	<div style="padding-top: 1em"><a class="btn btn-secondary" href="{!! URL::previous() !!}">Back To Photos</a></div>
</div>
@stop