<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class SliderController extends Controller
{
    public function index(){
    	return view('admin.add_slider');
    }
    public function save_slider(Request $request){
       $data = array();
       $data['slider_name']        = $request->slider_name;
       $data['slider_description'] = $request->slider_description;
       $data['publication_status'] = $request->publication_status;

       $image = $request->file('slider_image');
       if ($image) {
         	$image_name = str_random(20);
         	$ext = strtolower($image->getClientOriginalExtension());
         	$image_full_name = $image_name.'.'.$ext;
         	$upload_path = 'slider/';
         	$image_url = $upload_path.$image_full_name;
         	$success=$image->move($upload_path,$image_full_name);
         	if ($success) {
         		$data['slider_image']=$image_url;

            DB::table('tbl_slider')->insert($data);
         	Session::put('message','Slider Image Added Successfully!');
            return Redirect::to('/add-slider');
         	}
         }
        DB::table('tbl_slider')->insert($data);
        Session::put('message','Slider Image Added Successfully!');
        return Redirect::to('/add-slider');
    }
    public function all_slider(){
      $all_slider_info = DB::table('tbl_slider')->get();
      $manage_slider=view('admin.all_slider')->with('all_slider_in',$all_slider_info);
      return view('admin_layout')
      ->with('admin.all_slider',$manage_slider);
    }
    public function unactive_slider($slider_id){
        DB::table('tbl_slider')
          ->where('slider_id',$slider_id)
          ->update(['publication_status'=>0]);
          Session::put('message','Slider Inactive Successfully!');
          return Redirect::to('/all-slider');
    }
    public function active_slider($slider_id){
       DB::table('tbl_slider')
          ->where('slider_id',$slider_id)
          ->update(['publication_status'=>1]);
          Session::put('message','Slider Actived Successfully!');
          return Redirect::to('/all-slider');
    }
    public function delete_slider($slider_id){

      $del_slider = DB::table('tbl_slider')
                    ->where('slider_id',$slider_id)
                    ->first();
    
          if ($del_slider != NULL) {
                    $del_img = $del_slider->slider_image;
                if (!file_exists($del_img)) {
                	
                }else{
                    unlink($del_img);
                }
          }          
       
       DB::table('tbl_slider')
           ->where('slider_id', $slider_id)
           ->delete();
         Session::put('message','Slider Image Deleted!');
         return Redirect::to('/all-slider'); 


    }
}
