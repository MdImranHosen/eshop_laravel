@extends('layout')
@section('contant')
<section id="cart_items">
<!-- <div class="container"> -->
<div class="breadcrumbs">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active">Check out</li>
</ol>
</div><!--/breadcrums-->

<div class="register-req">
<p>Please Fillup this From..</p>
</div><!--/register-req-->

<div class="shopper-informations">
<div class="row">
<div class="col-sm-8 col-sm-offset-2 clearfix">
	<div class="bill-to">
		<p><strong>Shipping Details</strong></p>
		<div class="signup-form" style="border: 1px solid #ddd;">
			<form action="{{url('/save-shipping-details')}}" method="post">
				{{ csrf_field() }}
				<input type="text" name="shipping_full_name" placeholder="Full Name *">
				<input type="text" name="shipping_email" placeholder="Email Address *">
				<input type="text" name="shipping_mobile_number" placeholder="Mobile Number *">
				<input type="text" name="shipping_address" placeholder="Address *">
			    <input type="text" name="shipping_city" placeholder="City Name *">
				<button type="submit" class="btn btn-default">Signup</button>
			 </form>
		</div>
	</div>
</div>				
</div>
</div>
<div class="review-payment">
<h2>Payment</h2>
</div>
<hr>
<div class="payment-options">
<span>
	<label><input type="checkbox">Cash Payment</label>
</span>
<span>
	<label><input type="checkbox"> Direct Bank Transfer</label>
</span>
<span>
	<label><input type="checkbox"> Check Payment</label>
</span>
<span>
	<label><input type="checkbox"> B-Cash Payment</label>
</span>
</div>
<!-- </div> -->
</section> <!--/#cart_items-->


@endsection