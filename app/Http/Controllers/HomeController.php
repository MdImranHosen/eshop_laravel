<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
session_start();
class HomeController extends Controller
{
    public function index(){
      $all_product_info = DB::table('tbl_products')
      ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
      ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
      ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
      ->where('tbl_products.publication_status',1)
      ->limit(9)
      ->get();

     $manage_product=view('pages.home_contant')->with('all_product_in',$all_product_info);
      return view('layout')
      ->with('pages.home_contant',$manage_product);
    }
    public function show_product_by_category($category_id){
      $product_by_category = DB::table('tbl_products')
      ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
      ->select('tbl_products.*','tbl_category.category_name')
      ->where('tbl_category.category_id', $category_id)
      ->where('tbl_products.publication_status',1)
      ->limit(18)
      ->get();

     $manage_product_by_category=view('pages.category_by_product')->with('product_by_category',$product_by_category);
      return view('layout')
      ->with('pages.category_by_product',$manage_product_by_category);
    }
    public function show_product_by_manufacture($manufacture_id){
      $manufacture_by_id = DB::table('tbl_products')
      ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
      ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
      ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
      ->where('tbl_manufacture.manufacture_id',$manufacture_id)
      ->where('tbl_products.publication_status',1)
      ->limit(15)
      ->get();

     $manage_product_by_manufacture=view('pages.manufacture_by_product')->with('manufacture_by_product_id',$manufacture_by_id);
      return view('layout')
      ->with('pages.manufacture_by_product',$manage_product_by_manufacture);
    }

    public function product_details_by_id($product_id){
       $product_info_by_id = DB::table('tbl_products')
      ->join('tbl_category','tbl_products.category_id','=','tbl_category.category_id')
      ->join('tbl_manufacture','tbl_products.manufacture_id','=','tbl_manufacture.manufacture_id')
      ->select('tbl_products.*','tbl_category.category_name','tbl_manufacture.manufacture_name')
      ->where('tbl_products.product_id',$product_id)
      ->where('tbl_products.publication_status',1)
      ->first();

     $manage_product_by_id=view('pages.product_details')->with('product_by_id_in',$product_info_by_id);
      return view('layout')
      ->with('pages.product_details',$manage_product_by_id);
    }
}
