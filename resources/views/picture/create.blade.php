@extends('layouts.main')
@section('content')
<div class="container dashboard col-md-12" style="background:url({{ asset('img/CSA_op.png') }}); background-size: cover; margin: 0" >
<div class="col-md-6 col-md-offset-3 " style="background-color: #000; margin-top: 100px">
<h2>Upload Photo to Gallery</h2>
{{Form::open(['action' => 'PictureController@store', 'files' => true])}}
  <div class="form-group">
	{{ Form::label('title', 'Picture Title:')}}
	{{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter Picture Title'])}}
  </div>
  <div class="form-group">
    {{ Form::label('picture', 'Upload Picture:')}}
	{{ Form::file('picture')}}
  </div>
  <div class="form-group" style="float: right">
  		<a class="btn btn-secondary" href="{{url('/')}}">Cancel</a>
	{{Form::submit('Upload Photo', ['class' => 'btn btn-primary'])}}
  </div>
{{Form::close()}}
</div>
</div>
@stop