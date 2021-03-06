@extends('layouts.main')
@section('content')
<div class='container'>
<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 100px">

<h2>{{$event->title}}<img style="float: right" src="{{url('img/jugnail.png')}}"></h2>
<p><span style="color: #337ab7"><u>Start Date and Time:</u></span><br/>
{{ date('F d, Y', strtotime($event->start_date)) }}<br/>{{ date('h:i:s a', strtotime($event->start_time)) }}</p>
</div>
<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 50px; min-height: 50%">
<h2>{!!$event->body!!}</h2>
@if(\Auth::check())
		<a style="float: right" class="btn btn-secondary" href="{{url('/event/'.$event->id.'/edit')}}">edit</a>
@endif
</div>
</div>