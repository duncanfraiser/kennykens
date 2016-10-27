@extends('layouts.main')
@section('content')
<div class="container" style="margin-top: 50px">
<h1>Video Gallery</h1>


<!-- Future navigation panel -->
<div class="holder"></div>

<!-- Item container (doesn't need to be an UL) -->
<div id="itemContainer">
<!-- Items -->
@foreach($videos as $video)
<div class="vids">

{!!$video->code!!}
  <div class="desc">{{$video->title}}</div>
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
