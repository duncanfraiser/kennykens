@extends('layouts.main')
@section('content')

<div class="container" style="margin-top: 50px; padding: 50px">
<h1>Picture Gallery</h1>
<!-- Future navigation panel -->
<div class="holder"></div>

<!-- Item container (doesn't need to be an UL) -->
<div id="itemContainer" >



@foreach($pics as $pic)
<div class="pics">
<a target="BLANK" href="{{ url('/picture/'.$pic->id)}}">
<img src="{{ url('/storage/thumbnails/' . $pic->thumbnail)}} " width="360px" ></a>

  <div class="desc">{{$pic->title}}</div>
</div>
@endforeach
</div>
</div>
@stop
@section('scripts')
<script>
$(function(){

  $("div.holder").jPages({
    containerID : "itemContainer",
    perPage     : 6
  });

});
</script>
@stop
