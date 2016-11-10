@extends('layouts.main')
@section('content')
<div class='container'>
<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 100px">
<h2>Brown Bottle Booking</h2>
<div class="col-md-12">
    @if (count($errors))
    <ul class="err">
    @foreach($errors->all() as $error)
    <li class="err" style="color: red">{{$error}}</li>
    @endforeach
    </ul>
    @endif
</div>
{{Form::open(['method' => 'POST', 'action' => 'BookController@store'])}}
	<div class="form-group">
		{{Form::label('date', 'Date:')}}
		{{Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
	</div>
	<div class="form-group">
		{{Form::label('venue_name', 'Venue Name:')}}
		{{Form::text('venue_name', null, ['class' => 'form-control', 'placeholder' => 'Enter Venue Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('venue_address', 'Venue Address:')}}
		{{Form::text('venue_address', null, ['class' => 'form-control', 'placeholder' => 'Enter Venue Name'])}}
	</div>
	<div class="form-group">
		{{Form::label('facebook', 'Venue Facebook Page:')}}
		{{Form::text('facebook', null, ['class' => 'form-control', 'placeholder' => 'Enter Venue FB'])}}
	</div>
	<div class="form-group">
		{{Form::label('contact', 'Venue Manager/Person in charge of booking:')}}
		{{Form::text('contact', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Info'])}}
	</div>
	<div class="form-group">
		{{Form::label('offer', 'Complete offer for booking:')}}
		{{Form::text('offer', null, ['class' => 'form-control', 'placeholder' => 'Enter Offer'])}}
	</div>
	<div class="form-group">
		{{Form::label('start_time', 'Start Time:')}}
		{{Form::time('start_time', null, ['class' => 'form-control', 'placeholder' => 'Enter Contact Info'])}}
	</div>
	<div class="form-group">
		{{Form::label('set_length', 'Set Lengths:')}}
		{{Form::text('set_length', null, ['class' => 'form-control', 'placeholder' => 'Enter Set Lengths'])}}
	</div>
	<div class="form-group">
		{{Form::label('sound_lights', 'Who provides the sound and lights:')}}<br/>
    	{{ Form::radio('sound_lights', 'The Band') }} {{ Form::label('sound_lights', 'The Band')}}<br />
		{{ Form::radio('sound_lights', 'The Club') }} {{ Form::label('sound_lights', 'The Club')}}
	</div>
	<div class="form-group">
		{{Form::label('merch_area', 'Merch Area Available:')}}<br/>
    	{{ Form::radio('merch_area', 'Yes') }} {{ Form::label('merch_area', 'Yes')}}<br />
		{{ Form::radio('merch_area', 'No') }} {{ Form::label('merch_area', 'No')}}
	</div>
	
	<div class="form-group pull-right">
		<a class="btn btn-secondary" href="{{url('/')}}">Cancel</a>
		{{Form::submit('Book Kenny Kens', ['class' => 'btn btn-primary'])}}
		{{Form::close()}}		
	</div>

{{Form::close()}}

</div>
</div>
@stop
