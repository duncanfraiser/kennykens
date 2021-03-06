
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
 .stripe-button
{
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }

</style>
@stop
@section('content')

<div class="container">
<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 50px">
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
  </div>




<div class="col-md-6 col-md-offset-3" style="background-color: #000; margin-top: 50px">
    <h2>Contraband Shipping Info</h2>
{{Form::model($merch, ['method' => 'PATCH', 'action' => ['MerchandiseController@update', $merch->id]])}}
    <div class="form-group">
      {{Form::label('name', 'Name:')}}
      {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>
    <div class="form-group">
      {{Form::label('street', 'Street Address:')}}
      {{Form::text('street', null, ['class' => 'form-control', 'placeholder' => 'Enter Street Address'])}}
    </div>
    <div class="form-group">
      {{Form::label('city', 'City:')}}
      {{Form::text('city', null, ['class' => 'form-control', 'placeholder' => 'Enter City'])}}
    </div>
    <div class="form-group">
      {{Form::label('state', 'State:')}}
      {{Form::text('state', null, ['class' => 'form-control', 'placeholder' => 'Enter State'])}}
    </div>
    <div class="form-group">
      {{Form::label('zip', 'Zip:')}}
      {{Form::text('zip', null, ['class' => 'form-control', 'placeholder' => 'Enter Zip'])}}
    </div>
    <div class="form-group pull-right"  style="margin-top: 3em">
      <a class="btn btn-secondary" href="{!! URL::previous() !!}">Back</a>
      {{Form::submit('Buy Some Shit', ['class' => 'btn btn-primary', 'id' => 'customButton'])}}
    </div>
{{Form::close()}}
</div>
</div>


{{-- Easy STRIPE SCRIpt
<form action="/checkout" method="POST">


<input type=hidden name=totalshit value={{$total}}>

  {{csrf_field()}}
  <script  
    src="https://checkout.stripe.com/checkout.js" class="stripe-button" 
    data-key="{{ config('services.stripe.key') }}"
    data-amount=  "{{$total}}"
    data-name="Contraband"
    data-description="Checkout"
    data-image="{{url('img/jugnail.png')}}"
    data-locale="auto">
  </script>
</form> --}}









{{-- 



<form id="checkout-form" action="/checkout" method="POST">
  {{csrf_field()}}
<input type=hidden name="totalshit" value={{$total}}>
<input type=hidden name="merchid" value={{$merch->id}}>
<input type=hidden name="stripeToken" id="stripeToken">
<input type=hidden name="stripeEmail" id="stripeEmail">
<input type=hidden name="stripeAddress_city" id="stripeAddress_city">
    {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name'])}}

  <div class="form-group pull-right"  style="margin-top: 3em">
    <a class="btn btn-secondary" href="{!! URL::previous() !!}">Back</a>
{{Form::submit('Buy Some Shit', ['class' => 'btn btn-primary', 'id' => 'customButton'])}}
    {{Form::close()}}   
  </div>

</form>


<script src="https://checkout.stripe.com/checkout.js"></script>



<script>
var handler = StripeCheckout.configure({
  key: '{{ config('services.stripe.key') }}',
  image: '{{url('img/jugnail.png')}}',
  locale: 'auto',
  token: function(token, args) {
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
      document.querySelector('#stripeEmail').value = token.email;
      document.querySelector('#stripeToken').value = token.id;


      
      document.querySelector('#checkout-form').submit();

  }
});

document.getElementById('customButton').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handler.open({
    name: 'Contraband',
    description: 'Checkout',
    amount: "{{$total}}",
    billingAddress: "true",
    shippingAddress: "true"
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});
</script> --}}





@stop