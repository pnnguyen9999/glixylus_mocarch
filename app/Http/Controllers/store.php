<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\upload;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class store extends Controller
{
	function test(Request $request){
	    if($request->ajax()){
	        $productID = $_GET['productID'];
	        $data['dataItem'] = DB::table('store')->where('id', $productID)->get();
			return view('container/detail',$data);
	    }
	}
	function storeLoad() {
		  $data['data'] = DB::table('store')->orderBy('id', 'asc')->get();
			return view('product',$data);
	}
	
}
