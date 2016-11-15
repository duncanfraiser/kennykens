
@extends('layouts.main')
@section('content')
<div class="container text-center">
<h1>Fan Contraband</h1>




{{Form::open(['method' => 'POST', 'action' => 'MerchandiseController@store'])}}

<div class="merchItm">
	<a target="blank" href="http://www.cdbaby.com/cd/kennykensthebrownbottleb"><img  class="merch" src="/img/cover.jpg"><br>Audio Download</a><br/>
	<div class="form-group">
	<h3>Album Hard Copy $10.00</h3><span style="color: #000">{{Form::select('album', [0 => 'Qty', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'])}}</span>
 	</div>
</div>

<div class="merchItm col-md-12"><h3>T-Shirt<br/>S, M, L, XL $10.00<br/>XXL, XXXL $13.00</h3>
	<div class='col-md-6'>
	<img class="merch" src="/img/tshirt_black.png"> 
	<div class="form-group" style="color: #000">
	<span style="color: #fff">{{ Form::label('bsmall', 'Select Size & Qty:')}}</span><br/>
 	   {{Form::select('bsmall', [0 => 'Qty', 1 => '1 S', 2 => '2 S', 3 => '3 S', 4 => '4 S', 5 => '5 S'])}}
 	   {{Form::select('bmedium', [0 => 'Qty', 1 => '1 M', 2 => '2 M', 3 => '3 M', 4 => '4 M', 5 => '5 M'])}}
 	   {{Form::select('blarge', [0 => 'Qty', 1 => '1 L', 2 => '2 L', 3 => '3 L', 4 => '4 L', 5 => '5 L'])}}
 	   {{Form::select('bxl', [0 => 'Qty', 1 => '1 XL', 2 => '2 XL', 3 => '3 XL', 4 => '4 XL', 5 => '5 XL'])}}<br/>
 	   {{Form::select('bxxl', [0 => 'Qty', 1 => '1 XXL', 2 => '2 XXL', 3 => '3 XXL', 4 => '4 XXL', 5 => '5 XXL'])}}
 	   {{Form::select('bxxxl', [0 => 'Qty', 1 => '1 XXXL', 2 => '2 XXXL', 3 => '3 XXXL', 4 => '4 XXXL', 5 => '5 XXXL'])}}
 	</div>
 	</div>
	<div class='col-md-6'>
	<img class="merch" src="/img/tshirt_white.png"> 
	<div class="form-group"  style="color: #000">
	<span style="color: #fff">{{ Form::label('bsmall', 'Select Size & Qty:')}}</span><br/>
 	   {{Form::select('wsmall', [0 => 'Qty', 1 => '1 S', 2 => '2 S', 3 => '3 S', 4 => '4 S', 5 => '5 S'])}}
 	   {{Form::select('wmedium', [0 => 'Qty', 1 => '1 M', 2 => '2 M', 3 => '3 M', 4 => '4 M', 5 => '5 M'])}}
 	   {{Form::select('wlarge', [0 => 'Qty', 1 => '1 L', 2 => '2 L', 3 => '3 L', 4 => '4 L', 5 => '5 L'])}}
 	   {{Form::select('wxl', [0 => 'Qty', 1 => '1 XL', 2 => '2 XL', 3 => '3 XL', 4 => '4 XL', 5 => '5 XL'])}}<br/>
 	   {{Form::select('wxxl', [0 => 'Qty', 1 => '1 XXL', 2 => '2 XXL', 3 => '3 XXL', 4 => '4 XXL', 5 => '5 XXL'])}}
 	   {{Form::select('wxxxl', [0 => 'Qty', 1 => '1 XXXL', 2 => '2 XXXL', 3 => '3 XXXL', 4 => '4 XXXL', 5 => '5 XXXL'])}}
	</div>
	</div>
</div>

<div class="merchItm">
	<img class="merch" src="/img/beerhuggie1.png"><h3>Cold Beer Koozie $3.00</h3>
	<span style="color: #000">{{Form::select('koozie', [0 => 'Qty', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'])}}</span>
</div>
<div class="merchItm"><img class="merch" src="/img/sticker.png"><h2>Sticker $1.00</h2>
	<span style="color: #000">{{Form::select('sticker', [0 => 'Qty', 1 => '1', 2 => '2', 3 => '3', 4 => '4', 5 => '5'])}}</span>
</div>
{{Form::submit('Proceed to Cart', ['class' => 'btn btn-primary'])}}
{{Form::close()}}

</div>

@stop
@section('scripts')
<script type="text/javascript">

</script>
@stop