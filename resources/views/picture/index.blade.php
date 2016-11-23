@extends('layouts.main')
@section('styles')
<style type="text/css">

  .container {
      margin-top: 10px;
      padding: 50px 10px;
      width: 100%;   
  }

div.pics{

    margin: 10px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
    height: 300px;
    overflow: hidden;
   background-color: #000;
}

.pics img{
    height: 200%;
      -webkit-transform: translate(-20%,-20%);
      -ms-transform: translate(-20%,-20%);
          transform: translate(-20%,-20%);

}
	
</style>
@stop
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
<img src="{{ url('/storage/pics/' . $pic->pic)}}"></a>
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
    perPage     : 12
  });

});
</script>
@stop