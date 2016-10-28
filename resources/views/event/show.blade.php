@extends('layouts.main')
@section('content')
<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 100px">
@if(\Auth::check())
		<a style="float: right" class="btn btn-secondary" href="{{url('/event/'.$event->id.'/edit')}}">edit</a>
@endif
<h2>{{$event->title}}</h2>
<p><u>Start Date and Time:</u><br/>
{{ date('F d, Y', strtotime($event->start_date)) }}<br/>{{ date('h:i:s a', strtotime($event->start_time)) }}</p>
</div>
<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 50px">
<h2>{!!$event->body!!}</h2>
</div>