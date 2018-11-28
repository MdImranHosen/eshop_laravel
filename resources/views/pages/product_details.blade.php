@extends('layout')
@section('contant')
<div class="product-details"><!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="{{ URL::to( $product_by_id_in->product_image )}}" alt="" />
			<h3>ZOOM</h3>
		</div>
		<div id="similar-product" class="carousel slide" data-ride="carousel">
			
			  <!-- Wrapper for slides -->
			    <div class="carousel-inner">
					<div class="item active">
					  <a href=""><img src="{{ URL::to('frontend/images/product-details/similar1.jpg') }}" alt=""></a>
					  <a href=""><img src="{{ URL::to('frontend/images/product-details/similar2.jpg') }}" alt=""></a>
					  <a href=""><img src="{{ URL::to('frontend/images/product-details/similar3.jpg') }}" alt=""></a>
					</div>
					<div class="item">
					  <a href=""><img src="{{ URL::to('frontend/images/product-details/similar1.jpg') }}" alt=""></a>
					  <a href=""><img src="{{ URL::to('frontend/images/product-details/similar2.jpg') }}" alt=""></a>
					  <a href=""><img src="{{ URL::to('frontend/images/product-details/similar3.jpg') }}" alt=""></a>
					</div>
					<div class="item">
					  <a href=""><img src="{{ URL::to('frontend/images/product-details/similar1.jpg') }}" alt=""></a>
					  <a href=""><img src="{{ URL::to('frontend/images/product-details/similar2.jpg') }}" alt=""></a>
					  <a href=""><img src="{{ URL::to('frontend/images/product-details/similar3.jpg') }}" alt=""></a>
					</div>
					
				</div>

			  <!-- Controls -->
			  <a class="left item-control" href="#similar-product" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			  </a>
			  <a class="right item-control" href="#similar-product" data-slide="next">
				<i class="fa fa-angle-right"></i>
			  </a>
		</div>

	</div>
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<img src="{{ URL::to('frontend/images/product-details/new.jpg') }}" class="newarrival" alt="" />
			<h2>{{ $product_by_id_in->product_name }}</h2>
			<p><b>Color:</b> {{ $product_by_id_in->product_color }}</p>
			<img src="{{ URL::to('images/product-details/rating.png') }}" alt="" />
			<span>
				<span>{{ $product_by_id_in->product_price }}</span>
               <form action="{{ url('/add-to-cart') }}" method="post">
               	{{ csrf_field() }}
				<label>Quantity: </label>
				<input type="text" name="qty" value="1" />
				<input type="hidden" name="product_id" value="{{ $product_by_id_in->product_id }}">
				<button type="submit" class="btn btn-fefault cart">
					<i class="fa fa-shopping-cart"></i>
					Add to cart
				</button>
                </form>
			</span>
			<p><b>Availability:</b> In Stock ( {{ $product_by_id_in->product_quantity }} )</p>
			<p><b>Condition:</b> New</p>
			<p><b>Brand:</b> {{ $product_by_id_in->manufacture_name }}</p>
			<p><b>Category:</b> {{ $product_by_id_in->category_name }}</p>
			<p><b>Size:</b> {{ $product_by_id_in->product_size }}</p>
			<a href=""><img src="{{ URL::to('frontend/images/product-details/share.png') }}" class="share img-responsive"  alt="" /></a>
		</div><!--/product-information-->
	</div>
</div><!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			<li><a href="#details" data-toggle="tab">Details</a></li>
			<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
			<li><a href="#tag" data-toggle="tab">Tag</a></li>
			<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
		</ul>
	</div>
	<div class="tab-content">
		<div class="tab-pane fade" id="details" >
			<p>{{ $product_by_id_in->product_short_description }}</p>
			<p>{{ $product_by_id_in->product_long_description }}</p>
		</div>
		
		<div class="tab-pane fade" id="companyprofile" >
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{ URL::to('frontend/images/home/gallery1.jpg') }}" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="tab-pane fade" id="tag" >
			
			<div class="col-sm-3">
				<div class="product-image-wrapper">
					<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{ URL::to('frontend/images/home/gallery2.jpg') }}" alt="" />
							<h2>$56</h2>
							<p>Easy Polo Black Edition</p>
							<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="tab-pane fade active in" id="reviews" >
			<div class="col-sm-12">
				<ul>
					<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
					<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
					<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
				</ul>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
				<p><b>Write Your Review</b></p>
				
				<form action="#">
					<span>
						<input type="text" placeholder="Your Name"/>
						<input type="email" placeholder="Email Address"/>
					</span>
					<textarea name="" ></textarea>
					<b>Rating: </b> <img src="{{ URL::to('frontend/images/product-details/rating.png') }}" alt="" />
					<button type="button" class="btn btn-default pull-right">
						Submit
					</button>
				</form>
			</div>
		</div>
		
	</div>
</div><!--/category-tab-->

<div class="recommended_items"><!--recommended_items-->
	<h2 class="title text-center">recommended items</h2>
	
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ URL::to('frontend/images/home/recommend1.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ URL::to('frontend/images/home/recommend2.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ URL::to('frontend/images/home/recommend3.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">	
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ URL::to('frontend/images/home/recommend1.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ URL::to('frontend/images/home/recommend2.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
							<div class="productinfo text-center">
								<img src="{{ URL::to('frontend/images/home/recommend3.jpg') }}" alt="" />
								<h2>$56</h2>
								<p>Easy Polo Black Edition</p>
								<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		  </a>
		  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
			<i class="fa fa-angle-right"></i>
		  </a>			
	</div>
</div><!--/recommended_items-->

@endsection