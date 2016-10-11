@extends('layouts.main')
@section('content')
<div class="container dashboard col-md-12" style="background:url({{ asset('img/CSA_op.png') }}); background-size: cover" >
<div class="text-center">
<h1>This is where you create our welcome message!</h1>
<img src="{{ asset('img/Duncan.png') }}">
<h1>You Love Me!!</h1>
</div>
<div class="col-md-8 col-md-offset-2">
{{Form::open(['method' => 'POST', 'action' => 'WelcomeController@store'])}}
	<div class="form-group">
		{{Form::label('title', 'Title:')}}
		{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
		{{Form::label('body', 'Body:')}}
			{!!Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Enter Body'])!!}
	</div>
	<div class='pull-right'>
		<div class="form-group">
		{{Form::submit('Create Welcome', ['class' => 'btn-primary'])}}
		{{Form::close()}}		
		</div>
	</div>
{{Form::close()}}

</div>





@stop

@section('scripts')
@include('_includes.froala.froala-options')
@stop


