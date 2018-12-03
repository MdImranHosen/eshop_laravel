<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>4D NATIONAL SECURITY</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="frontend/js/html5shiv.js"></script>
    <script src="frontend/js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('frontend/images/home/icon.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('frontend/images/ico/apple-touch-icon-144-precomposed.png') }}"> 
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">
<style type="text/css">
        .paymentWrap {
    padding: 50px;
}
.paymentWrap .paymentBtnGroup {
    max-width: 800px;
    margin: auto;
}
.paymentWrap .paymentBtnGroup .paymentMethod {
    padding: 40px;
    box-shadow: none;
    position: relative;
}
.paymentWrap .paymentBtnGroup .paymentMethod.active {
    outline: none !important;
}
.paymentWrap .paymentBtnGroup .paymentMethod.active .method {
    border-color: #4cd264;
    outline: none !important;
    box-shadow: 0px 3px 22px 0px #7b7b7b;
}
.paymentWrap .paymentBtnGroup .paymentMethod .method {
    position: absolute;
    right: 3px;
    top: 3px;
    bottom: 3px;
    left: 3px;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    border: 2px solid transparent;
    transition: all 0.5s;
}
.paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
    background-image: url("http://citinewslive.com/wp-content/uploads/2017/01/cash-handed-over.jpg");
}
.paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
    background-image: url("https://www.paypalobjects.com/webstatic/mktg/logo-center/PP_Acceptance_Marks_for_LogoCenter_266x142.png");
}
.paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
    background-image: url("http://www.theindependentbd.com/assets/news_images/bkash.jpg");
}
.paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
    background-image: url("https://cdn0.iconfinder.com/data/icons/50-payment-system-icons-2/480/Payza.png");
}
.paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
    background-image: url("http://www.busbooking.lk/img/carousel/BusBooking.lk_ezCash_offer.png");
}
.paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
    border-color: #4cd264;
    outline: none !important;
}
    </style>
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +88 019 12070200</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> sohel.china@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="{{ URL::to('/') }}"><img src="{{ asset('frontend/images/home/4d logo.png') }}" alt="" /><!-- <strong><span style="color: red;">4D</span> NATIONAL <span style="color: blue;">SECURITY</span></strong> --></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    USA
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canada</a></li>
                                    <li><a href="#">UK</a></li>
                                </ul>
                            </div>
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    DOLLAR
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Canadian Dollar</a></li>
                                    <li><a href="#">Pound</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                <?php
                                   $customer_id = Session::get('customer_id');
                                   $shipping_id = Session::get('shipping_id');
                                 ?>
                                @if($customer_id != NULL && $shipping_id == NULL)
                                <li><a href="{{ URL::to('/checkout') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                @elseif($customer_id != NULL && $shipping_id != NULL)
                                <li><a href="{{ URL::to('/payment') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                @else
                                <li><a href="{{ URL::to('/login-check') }}"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                @endif
                                <li><a href="{{ URL::to('/show-cart') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                @if($customer_id != NULL)
                                <li><a href="{{ URL::to('/customer-logout')}}"><i class="fa fa-lock"></i> Logout</a></li>
                                @else
                                <li><a href="{{ URL::to('/login-check') }}"><i class="fa fa-lock"></i> Login</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="index.html" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <?php $customer_id = Session::get('customer_id'); ?>
                                        @if($customer_id != NULL)
                                         <li><a href="{{ URL::to('/checkout') }}"> Checkout</a></li>
                                        @else
                                         <li><a href="{{ URL::to('/login-check') }}">Checkout</a></li>
                                        @endif
                                        <li><a href="{{ URL::to('/show-cart') }}">Cart</a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
                                        <li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->
@yield('slider')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            <?php 
                            $all_published_category = DB::table('tbl_category')
                                      ->where('publication_status',1)
                                      ->get();
                        
                             foreach($all_published_category as $v_category){

                            ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{ URL::to('/product_by_category/'.$v_category->category_id )}}">{{ $v_category->category_name }}</a></h4>
                                </div>
                            </div>
                           <?php } ?>
                        </div><!--/category-products-->
                    
                        <div class="brands_products"><!--brands_products-->
                            <h2>Brands</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    <?php 
                                        $all_published_manufacture = DB::table('tbl_manufacture')
                                          ->where('publication_status',1)
                                          ->get();
                        
                                     foreach($all_published_manufacture as $v_manufacture){

                                       ?>
                                    <li><a href="{{ URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id )}}"> <span class="pull-right">(50)</span>{{ $v_manufacture->manufacture_name }}</a></li>
                                     <?php } ?>
                                </ul>
                            </div>
                        </div><!--/brands_products-->
                        
                        <div class="price-range"><!--price-range-->
                            <h2>Price Range</h2>
                            <div class="well text-center">
                                 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                                 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
                            </div>
                        </div><!--/price-range-->
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{ asset('frontend/images/home/shipping.jpg') }}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
                </div>
                
                <div class="col-sm-9 padding-right">
                    @yield('contant')
                </div>
            </div>
        </div>
    </section>
    
    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>4D</span>-VISION</h2>
                            <p>4D National Security best CCTV Seller in Bangladesh and Customer Support.</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ URL::to('frontend/images/home/rahoman.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Abdur Rahoman</p>
                                <small>01927214025</small>
                                <h2>Manager of <br/> 4D VISION</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ URL::to('frontend/images/home/tapon.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Tapon</p>
                                <h2>Manager of <br/> 4D VISION</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ URL::to('frontend/images/home/rahoman.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Abdur Rahoman</p>
                                <h2>Manager of <br/> 4D VISION</h2>
                            </div>
                        </div>
                        
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="{{ URL::to('frontend/images/home/tapon.png') }}" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Tapon</p>
                                <h2>Technician <br/> 4D VISION</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <?php 
                              $map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46384.53861494888!2d90.37965075133273!3d23.727612741863208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8be4acbb045%3A0xdfb91d95ff995e2d!2sMotalib+Plaza%2C+Dhaka+1205!5e0!3m2!1sen!2sbd!4v1543831479047" width="250" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>';
                              if ($map != NULL) {
                                  echo $map;
                                 }else{ ?>
                           
                            <img src="{{ asset('frontend/images/home/4dns1.png') }}" alt="" />
                            <p>Motalib Plaza, Dhaka, Bangladesh - 1205</p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Wifi Camera Servicing</a></li>
                                <li><a href="#">AHD Camera Setup</a></li>
                                <li><a href="#">IP Camera Setup</a></li>
                                <li><a href="#">Analog Camera Setup</a></li>
                                <li><a href="#">Online Help</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Product</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Wifi Camera</a></li>
                                <li><a href="#">IP Camera</a></li>
                                <li><a href="#">AHD Camera</a></li>
                                <li><a href="#">Bullet Camera</a></li>
                                <li><a href="#">Dome Camera</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Others</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Access Controller</a></li>
                                <li><a href="#">Action Camera</a></li>
                                <li><a href="#">Motion Sensor</a></li>
                                <li><a href="#">Car GPS Tracker</a></li>
                                <li><a href="#">Doorbell</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Accessories</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">CCTV Accessorices</a></li>
                                <li><a href="#">CCTV Multiple Connecters</a></li>
                                <li><a href="#">Action Camera Accessorics</a></li>
                                <li><a href="#">Access Controller Accessorics</a></li>
                                <li><a href="#">Mobile Accessorics</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2><small>Owner:</small> Md Shafiqul Alam Sohel</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#"><i class="fas fa-envelope" style="background:red;color: white;padding: 5px;border-radius: 3px;"></i> sohel.china@gmail.com</a></li>
                                <li><a href="#"><i class="fa fa-phone" style="background:white;color: blue;padding: 5px;border-radius: 3px;"></i> +88 01912070200</a></li>
                                <li><a href="#"><i class="fab fa-qq" style="background:red;color: black;padding: 5px;border-radius: 3px;"></i> Sohel.china </a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" style="background:green;color: white;padding: 5px;border-radius: 3px;"></i> +88 01912070200</a></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright &copy; <?php echo date("Y"); ?> 4D VISION. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="{{ URL::to('http://www.fb.com/Md.ImranHosen.up/')}}">Md.Imran Hosen</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>