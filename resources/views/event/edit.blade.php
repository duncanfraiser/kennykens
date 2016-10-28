@extends('layouts.main')
@section('content')
<div class="container dashboard col-md-12" style="background:url({{ asset('img/CSA_op.png') }}); background-size: cover" >
<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 100px">
<h2>Create Brown Bottle Event</h2>
<div class="col-md-12">
    @if (count($errors))
    <ul class="err">
    @foreach($errors->all() as $error)
    <li class="err" style="color: red">{{$error}}</li>
    @endforeach
    </ul>
    @endif
</div>
{{Form::model($event, ['method' => 'PATCH', 'action' => ['EventController@update', $event->id]])}}
	<div class="form-group">
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Event Title'])}}
	</div>
	<div class="form-group">
		{{Form::label('body', 'Event Description:')}}
		{{Form::textarea('body', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('start_date', 'Start Date:')}}
		{{Form::date('start_date', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('start_time', 'Start Date:')}}
		{{Form::time('start_time', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('end_date', 'End Date:')}}
		{{Form::date('end_date', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group">
		{{Form::label('end_time', 'End Date:')}}
		{{Form::time('end_time', null, ['class' => 'form-control'])}}
	</div>
	<div class="form-group pull-right">
		<a class="btn btn-secondary" href="{{url('/')}}">Cancel</a>
		{{Form::submit('Create Event', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
	</div>

{{Form::close()}}
</div>
</div>
@stop
@section('scripts')
@include('_includes.froala.froala-options')
@stop