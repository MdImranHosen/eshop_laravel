<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\support\Facades\Redirect;
session_start();

class SupperAdminController extends Controller
{
    public function logout(){
    	/*Session::put('admin_name',NULL);
    	Session::put('admin_id',NULL);*/
    	Session::flush();
    	return Redirect::to('/admin');
    }
}
