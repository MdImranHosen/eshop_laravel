<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Frontend route.........
Route::get('/', 'HomeController@index');




// Show Category Wise Product

Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category');
Route::get('/product_by_manufacture/{manufacture_id}','HomeController@show_product_by_manufacture');
Route::get('/view-prduct/{product_id}', 'HomeController@product_details_by_id');


// Add to Cart Manage....Route

Route::post('/add-to-cart','CartController@add_to_cart');
Route::get('/show-cart','CartController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartController@delete_to_cart');
Route::post('/update-cart','CartController@update_cart_qyt');


//Checkout Route Manage.....
Route::get('/login-check','CheckoutController@login_check');
Route::post('/customer-regitration','CheckoutController@customer_registration');
Route::get('/checkout','CheckoutController@checkout');
Route::post('/save-shipping-details','CheckoutController@save_shipping_details');
//Customer Login and Logout Route here.....
Route::get('/customer-logout', 'CheckoutController@logout');
Route::post('/customer-login','CheckoutController@customer_login');
//Customer Payment Route here....
Route::get('/payment','CheckoutController@payment');
Route::post('/order-place','CheckoutController@order_place');

//Backend route...............
Route::get('/logout', 'SupperAdminController@logout');
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'SupperAdminController@index');
Route::post('/admin-dashboard', 'AdminController@dashboard');

 //Category Related .....

 Route::get('/add-category', 'CategoryController@index');
 Route::get('/all-category', 'CategoryController@all_category');
 Route::post('/save-category', 'CategoryController@save_category');
 Route::get('/edit-category/{category_id}', 'CategoryController@edit_category');
 Route::post('/update-category/{category_id}', 'CategoryController@update_category');
 Route::get('/delete-category/{category_id}', 'CategoryController@delete_category');
 Route::get('/unactive_category/{category_id}', 'CategoryController@unactive_category');
 Route::get('/active_category/{category_id}', 'CategoryController@active_category');

 //Manufacture or Brand Category Related Route...
 Route::get('/add-manufacture', 'ManufactureController@index');
 Route::get('/all-manufacture', 'ManufactureController@all_manufacture');
 Route::post('/save-manufacture', 'ManufactureController@save_manufacture');
 Route::get('/edit-manufacture/{manufacture_id}', 'ManufactureController@edit_manufacture');
 Route::post('/update-manufacture/{manufacture_id}', 'ManufactureController@update_manufacture');
 Route::get('/delete-manufacture/{manufacture_id}','ManufactureController@delete_manufacture');
 Route::get('/unactive_manufacture/{manufacture_id}','ManufactureController@unactive_manufacture');
 Route::get('/active_manufacture/{manufacture_id}','ManufactureController@active_manufacture');

 //Products routs are here .....

 Route::get('/add-product', 'ProductController@index');
 Route::post('/save-product', 'ProductController@save_product');
 Route::get('/all-product', 'ProductController@all_products');
 Route::get('/unavailable_product/{product_id}','ProductController@unavailable_product');
 Route::get('/available_product/{product_id}','ProductController@available_product');
 Route::get('/delete-product/{product_id}','ProductController@delete_product');




 //Slider Routs are here .....

 Route::get('/add-slider', 'SliderController@index');
 Route::post('/save-slider', 'SliderController@save_slider');
 Route::get('/all-slider', 'SliderController@all_slider');
 Route::get('/unactive-slider/{slider_id}', 'SliderController@unactive_slider');
 Route::get('/active-slider/{slider_id}', 'SliderController@active_slider');
 Route::get('/delete-slider/{slider_id}', 'SliderController@delete_slider');

 // Manage order Route here...
Route::get('/manage-order','CheckoutController@manage_order');
Route::get('/view-order/{order_id}','CheckoutController@view_order_id');
