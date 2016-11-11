
@extends('layouts.main')
@section('styles')
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
@stop
@section('content')

<div class="container">
<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 50px; min-height: 50em">
	<h2>Contraband Cart</h2>
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
    <td style="color: green">~ ${{$merch->atotal}} ~</td>
  </tr>
@endif
@if($merch->bsmall != 0)
  <tr>
    <td>~ Small Black T-Shirt ~</td>
    <td>~ {{$merch->bsmall}} ~</td>
    <td style="color: green">~ ${{$merch->bsmalltotal}} ~</td>
  </tr>
@endif
@if($merch->bmedium != 0)
  <tr>
    <td>~ Medium Black T-Shirt ~</td>
    <td>~ {{$merch->bmedium}} ~</td>
    <td style="color: green">~ ${{$merch->bmediumtotal}} ~</td>
  </tr>
@endif
@if($merch->blarge != 0)
  <tr>
    <td>~ Large Black T-Shirt ~</td>
    <td>~ {{$merch->blarge}} ~</td>
    <td style="color: green">~ ${{$merch->blargetotal}} ~</td>
  </tr>
@endif
@if($merch->bxl != 0)
  <tr>
    <td>~ X Large Black T-Shirt ~</td>
    <td>~ {{$merch->bxl}} ~</td>
    <td style="color: green">~ ${{$merch->bxltotal}} ~</td>
  </tr>
@endif
@if($merch->bxxl != 0)
  <tr>
    <td>~ XX Large Black T-Shirt ~</td>
    <td>~ {{$merch->bxxl}} ~</td>
    <td style="color: green">~ ${{$merch->bxxltotal}} ~</td>
  </tr>
@endif
@if($merch->bxxxl != 0)
  <tr>
    <td>~ XXX Large Black T-Shirt ~</td>
    <td>~ {{$merch->bxxxl}} ~</td>
    <td style="color: green">~ ${{$merch->bxxxltotal}} ~</td>
  </tr>
@endif


@if($merch->wsmall != 0)
  <tr>
    <td>~ Small Black T-Shirt ~</td>
    <td>~ {{$merch->bsmall}} ~</td>
    <td style="color: green">~ ${{$merch->bsmalltotal}} ~</td>
  </tr>
@endif
@if($merch->bmedium != 0)
  <tr>
    <td>~ Medium Black T-Shirt ~</td>
    <td>~ {{$merch->bmedium}} ~</td>
    <td style="color: green">~ ${{$merch->bmediumtotal}} ~</td>
  </tr>
@endif
@if($merch->blarge != 0)
  <tr>
    <td>~ Large Black T-Shirt ~</td>
    <td>~ {{$merch->blarge}} ~</td>
    <td style="color: green">~ ${{$merch->blargetotal}} ~</td>
  </tr>
@endif
@if($merch->blarge != 0)
  <tr>
    <td>~ X Large Black T-Shirt ~</td>
    <td>~ {{$merch->bxl}} ~</td>
    <td style="color: green">~ ${{$merch->bxltotal}} ~</td>
  </tr>
@endif
@if($merch->blarge != 0)
  <tr>
    <td>~ XX Large Black T-Shirt ~</td>
    <td>~ {{$merch->bxxl}} ~</td>
    <td style="color: green">~ ${{$merch->bxxltotal}} ~</td>
  </tr>
@endif
@if($merch->blarge != 0)
  <tr>
    <td>~ XXX Large Black T-Shirt ~</td>
    <td>~ {{$merch->bxxxl}} ~</td>
    <td style="color: green">~ ${{$merch->bxxxltotal}} ~</td>
  </tr>
@endif





</table>
	</div>
</div>


@stop