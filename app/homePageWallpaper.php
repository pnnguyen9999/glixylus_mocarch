<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class homePageWallpaper extends Model
{
	protected $table="wallpapers";

   	public function loadWallpapersToView(){
   		 return DB::table('wallpapers')->get();
   	}

   	public function saveWallpaperByID($id,$order,$nameOfimage,$description){
   		DB::table('wallpapers')->where('id','=',$id)->update([
   			'nameOfimage' => $nameOfimage,
   			'descrition' => $description,
   			'orders' => $order
   		]);  		
   	}

   	public function deleteWallpaperByID($id){
   		DB::table('wallpapers')->where('id','=',$id)->delete();
   	}

   	public function createAWallpaperRecord($nameOfimage,$description,$imageURL){
   		//auto set order
   		$data = DB::table('wallpapers')->get();
         
   		$max = 0;
   		if(sizeof($data) > 0){
   			$data = json_decode($data,true);
   			$max = $data[0]['orders'];
   			for($i = 0; $i < count($data);$i++){
   			if($data[$i]['orders'] > $max){
   				$max = $data[$i]['orders'];
   			}
   			}
   		}	
   		  		
   		$order = $max + 1;

   		Db::table('wallpapers')->insert([
   			'imageURL' => $imageURL,
   			'nameOfimage' => $nameOfimage,
   			'descrition' => $description,
   			'orders' => $order
   		]);
   	}
}
