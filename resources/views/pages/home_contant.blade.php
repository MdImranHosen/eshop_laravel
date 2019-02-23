<!-- 
=> Country: Bangladesh
=> Developer: Md Imran Hosen
=> Github: www.github.com/MdImranHosen
=> Facebook: www.fb.com/Md.ImranHosen.up
=> Phone: +880 1983912645 
-->
@extends('layout')
@section('contant')
@include('slider')
<div class="features_items"><!--features_items-->
<h2 class="title text-center">Features Items</h2>
<?php 

 foreach($all_product_in as $v_product){

?>
<div class="col-sm-4">
<div class="product-image-wrapper">
    <div class="single-products">
            <div class="productinfo text-center">
                <img src="{{ asset( $v_product->product_image ) }}" height="250" alt="" />
                <h2>{{ $v_product->product_price }} TK</h2>
                <p>{{ $v_product->product_name }}</p>
                <a href="{{ URL::to('/view-prduct/'.$v_product->product_id )}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
            </div>
            <div class="product-overlay">
                <div class="overlay-content">
                    <h2>{{ $v_product->product_price }} TK</h2>
                    <a href="{{ URL::to('/view-prduct/'.$v_product->product_id )}}"><p>{{ $v_product->product_name }}</p></a>
                    <a href="{{ URL::to('/view-prduct/'.$v_product->product_id )}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
            </div>
    </div>
    <div class="choose">
        <ul class="nav nav-pills nav-justified">
            <li><a href="{{ URL::to('/product_by_manufacture/'.$v_product->manufacture_id )}}"><i class="fa fa-plus-square"></i>{{ $v_product->manufacture_name }}</a></li>
            <li><a href="{{ URL::to('/view-prduct/'.$v_product->product_id )}}"><i class="fa fa-plus-square"></i>View Product</a></li>
        </ul>
    </div>
</div>
</div>
<?php } ?>
                    {{ $all_product_in->links() }}
</div><!--features_items-->

<div class="category-tab"><!--category-tab-->
<div class="col-sm-12">
<ul class="nav nav-tabs">
    <?php 
        $show_tab_manufacture = DB::table('tbl_manufacture')
          ->where('publication_status',1)
          ->get();
     ?>
     @foreach($show_tab_manufacture as $count => $v_manufacture)

       
<!-- {{ URL::to('/product_by_manufacture_tab/'.$v_manufacture->manufacture_id )}} -->
       <li @if($count == 0) class="active" @endif ><a href="manufacture{{ $v_manufacture->manufacture_id }}" data-toggle="tab">{{ $v_manufacture->manufacture_name }}</a></li>
    <!-- <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>
    <li><a href="#blazers" data-toggle="tab">Blazers</a></li>
    <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>
    <li><a href="#kids" data-toggle="tab">Kids</a></li>
    <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li> -->
    @endforeach
</ul>
</div>
<div class="tab-content">
<!-- <div class="tab-pane fade" id="blazers" > -->
<?php 
        $show_tab_products_all = DB::table('tbl_products')
          ->where('manufacture_id', $v_manufacture->manufacture_id)
          ->where('publication_status',1)
          ->get();
    ?>
     @foreach($show_tab_products_all as $count => $v_product_all)
<div  @if($count == 0) class="tab-pane in active" @else class="tab-pane" @endif id="manufacture{{ $v_manufacture->manufacture_id }}" >

   <?php 
        $show_tab_products = DB::table('tbl_products')
          ->where('manufacture_id', $v_manufacture->manufacture_id)
          ->where('publication_status',1)
          ->limit(4)
          ->get();
    ?>
     @foreach($show_tab_products as $v_product_tab)

     
    <div class="col-sm-3">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{ asset( $v_product_tab->product_image ) }}" alt="" />
                    <h2>{{ $v_product_tab->product_price }} Tk</h2>
                    <p>{{ $v_product_tab->product_name }}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                
            </div>
        </div>
    </div>

    @endforeach
</div>
  @endforeach
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
                        <img src="{{ asset('frontend/images/home/recommend1.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/home/recommend2.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/home/recommend3.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
                        <img src="{{ asset('frontend/images/home/recommend1.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/home/recommend2.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{ asset('frontend/images/home/recommend3.jpg') }}" alt="" />
                        <h2>$56</h2>
                        <p>Easy Polo Black Edition</p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
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
