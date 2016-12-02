@extends('layouts.main')
<style>
table {
    width: 100%;
}

th {
    height: 50px;
    font-size: 1.5em;
}

li {text-indent:-1px}
</style>
@section('content')
<div class="container dashboard col-md-12" style="background:url({{ asset('img/CSA_op.png') }}); background-size: cover; margin: 0" >
<div class="col-md-8 col-md-offset-2 " style="background-color: #000; margin-top: 100px">
<h2><u>{{$merch->name}} Contraband Order:</u></h2>
<h3>Shipping Status:
@if($merch->status != 'pending')
 <span style="color: red">{{$merch->status}}</span></h3>
@else
 <span style="color: #337ab7">{{$merch->status}}</span></h3>
@endif
<h3>Shipping Address:</h3>
<h5 style="padding-left: 1em">{{$merch->street}}</h5>
<h5 style="padding-left: 1em">{{$merch->city}}</h5>
<h5 style="padding-left: 1em">{{$merch->state}}</h5>
<h5 style="padding-left: 1em">{{$merch->zip}}</h5>

	<table>
  <tr>
    <th><u>Items</u></th>
    <th><u>Qty.</u></th>
    <th><u>Price</u></th>
  </tr>
@if($merch->album != 0)
  <tr>
    <td>~ CD What the Hell Happened to Country? ~</td>
    <td>~ {{$merch->album}} ~</td>
    <td style="color: green">~ ${{$merch->atotal}}.00 ~</td>
  </tr>
@endif
@if($merch->bsmall != 0)
  <tr>
    <td>~ Small Black T-Shirt ~</td>
    <td>~ {{$merch->bsmall}} ~</td>
    <td style="color: green">~ ${{$merch->bsmalltotal}}.00 ~</td>
  </tr>
@endif
@if($merch->bmedium != 0)
  <tr>
    <td>~ Medium Black T-Shirt ~</td>
    <td>~ {{$merch->bmedium}} ~</td>
    <td style="color: green">~ ${{$merch->bmediumtotal}}.00 ~</td>
  </tr>
@endif
@if($merch->blarge != 0)
  <tr>
    <td>~ Large Black T-Shirt ~</td>
    <td>~ {{$merch->blarge}} ~</td>
    <td style="color: green">~ ${{$merch->blargetotal}}.00 ~</td>
  </tr>
@endif
@if($merch->bxl != 0)
  <tr>
    <td>~ X Large Black T-Shirt ~</td>
    <td>~ {{$merch->bxl}} ~</td>
    <td style="color: green">~ ${{$merch->bxltotal}}.00 ~</td>
  </tr>
@endif
@if($merch->bxxl != 0)
  <tr>
    <td>~ XX Large Black T-Shirt ~</td>
    <td>~ {{$merch->bxxl}} ~</td>
    <td style="color: green">~ ${{$merch->bxxltotal}}.00 ~</td>
  </tr>
@endif
@if($merch->bxxxl != 0)
  <tr>
    <td>~ XXX Large Black T-Shirt ~</td>
    <td>~ {{$merch->bxxxl}} ~</td>
    <td style="color: green">~ ${{$merch->bxxxltotal}}.00 ~</td>
  </tr>
@endif


@if($merch->wsmall != 0)
  <tr>
    <td>~ Small White T-Shirt ~</td>
    <td>~ {{$merch->wsmall}} ~</td>
    <td style="color: green">~ ${{$merch->wsmalltotal}}.00 ~</td>
  </tr>
@endif
@if($merch->wmedium != 0)
  <tr>
    <td>~ Medium White T-Shirt ~</td>
    <td>~ {{$merch->wmedium}} ~</td>
    <td style="color: green">~ ${{$merch->wmediumtotal}}.00 ~</td>
  </tr>
@endif
@if($merch->wlarge != 0)
  <tr>
    <td>~ Large White T-Shirt ~</td>
    <td>~ {{$merch->blarge}} ~</td>
    <td style="color: green">~ ${{$merch->wlargetotal}}.00 ~</td>
  </tr>
@endif
@if($merch->wxl != 0)
  <tr>
    <td>~ X Large White T-Shirt ~</td>
    <td>~ {{$merch->wxl}} ~</td>
    <td style="color: green">~ ${{$merch->wxltotal}}.00 ~</td>
  </tr>
@endif
@if($merch->wxxl != 0)
  <tr>
    <td>~ XX Large White T-Shirt ~</td>
    <td>~ {{$merch->wxxl}} ~</td>
    <td style="color: green">~ ${{$merch->wxxltotal}}.00 ~</td>
  </tr>
@endif
@if($merch->wxxxl != 0)
  <tr>
    <td>~ XXX Large White T-Shirt ~</td>
    <td>~ {{$merch->wxxxl}} ~</td>
    <td style="color: green">~ ${{$merch->wxxxltotal}}.00 ~</td>
  </tr>
@endif
@if($merch->koozie != 0)
  <tr>
    <td>~ Contraband Koozie ~</td>
    <td>~ {{$merch->koozie}} ~</td>
    <td style="color: green">~ ${{$merch->ktotal}}.00 ~</td>
  </tr>
@endif
@if($merch->sticker != 0)
  <tr>
    <td>~ Contraband Sticker ~</td>
    <td>~ {{$merch->sticker}} ~</td>
    <td style="color: green">~ ${{$merch->stotal}}.00 ~</td>
  </tr>
@endif
<br/>
  <tr >
    <td></td>
    <td style=" border-top: solid #fff">~ Grand Total ~</td>
    <td style=" border-top: solid #fff; color: green">~ ${{$merch->total}}.00 ~</td>
  </tr>

</table><br/>
	<div class="form-group pull-right">

		<a class="btn btn-secondary" href="{!! URL::previous() !!}">Back</a>
        {{Form::open(['method' => 'DELETE', 'route' => ['merchandise.destroy', $merch->id], 'class' => 'delete', 'style' => 'float:right'])}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {{Form::close()}}
		@if($merch->status != 'shipped')
        {{Form::open(['method' => 'PATCH', 'route' => ['merchandise.update', $merch->id], 'style' => 'float:right'])}}
        {{ Form::hidden('status', 'shipped') }}
        {{Form::submit('Mark as Shipped', ['class' => 'btn btn-primary'])}}
        {{Form::close()}}
        @endif
	</div>
</div>
</div>
@stop