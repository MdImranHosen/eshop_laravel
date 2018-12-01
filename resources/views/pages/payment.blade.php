@extends('layout')
@section('contant')
<section id="cart_items">
		<!-- <div class="container col-sm-12"> -->
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
                     $contents=Cart::content();

				?>
				<table class="table table-condensed table-border">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($contents as $v_contents) {?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_contents->options->image)}}" height="80px" width="80px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_contents->name}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>{{$v_contents->price}} BDT</p>
							</td>
							<td class="cart_quantity">
							    <p>{{$v_contents->qty}}</p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$v_contents->total}} BDT</p>
							</td>
						</tr>
                       <?php }?>
						
					</tbody>
				</table>
			</div>
		<!-- </div> -->
	</section> <!--/#cart_items-->
<section id="do_action">
		<!-- <div class="container"> -->
			<div class="row">
				<div class="col-sm-12">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>{{ Cart::subtotal()}}</span></li>
							<li>Eco Tax <span>{{ Cart::tax() }}</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>{{ Cart::total() }}</span></li>
						</ul>
					</div>
				</div>
			</div>
		<!-- </div> -->
	</section><!--/#do_action-->
<section id="do_action">
	<!-- <div class="container"> -->
		<div class="row">
		<div class="paymentCont col-sm-8 col-sm-offset-2">
					<div class="headingWrap">
							<h3 class="headingTop text-center">Select Your Payment Method</h3>
					</div>
				 <form action="{{url('/order-place')}}" method="post">
				 	{{ csrf_field() }}
					<div class="paymentWrap">
						<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
				            <label class="btn paymentMethod active">
				            	<div class="method visa"></div>
				                <input type="radio" name="payment_method" value="handcash"> 
				            </label>
				            <label class="btn paymentMethod">
				            	<div class="method master-card"></div>
				                <input type="radio" name="payment_method" value="card"> 
				            </label>
				            <label class="btn paymentMethod">
			            		<div class="method amex"></div>
				                <input type="radio" name="payment_method" value="bakash">
				            </label>
				       <label class="btn paymentMethod">
			             		<div class="method vishwa"></div>
				                <input type="radio" name="payment_method" value="payza"> 
				            </label>
				            <label class="btn paymentMethod">
			            		<div class="method ez-cash"></div>
				                <input type="radio" name="payment_method" value="ezcash"> 
				            </label> 
				         
				        </div>        
					</div>
					<div class="footerNavWrap  clearfix">
						<button type="submit" class="btn btn-success center-block btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span> Done <span class="glyphicon glyphicon-chevron-right"></span></button>
					</div>
				</form>
				<!-- </div> -->
		</div>
	</div>
</section><!--/#do_action-->
@endsection