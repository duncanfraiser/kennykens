@extends('layouts.main')
@section('content')
<div class="container dashboard col-md-12" style="background:url({{ asset('img/CSA_op.png') }}); background-size: cover; margin: 0" >
<div class="col-md-6 col-md-offset-3 " style="background-color: #000; margin-top: 100px;  min-height: 20em">
<h2><u><span style="color: #337ab7">Pending</span> Contraband Orders</u></h2>
<ul>
@foreach($orders as $order)
	<li><a href="{{url('/merchandise/'.$order->id.'/orders')}}">{{$order->name}}</li>
@endforeach
</ul>
</div>
</div>
@stop
