<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;

class GalleryController extends Controller
{
     public function loadGalleryByType($type){
        //get new article
        $newArticles = gallery::where('type',$type)->orderby('created_at','desc')->select('id','title','wallpaperURL','description','slug')->get(3);

        if($newArticles->count() <= 0){
            abort(404);
        }
        
        $articles = gallery::where('type',$type)->where('id','<>',$newArticles[0]->id)->where('id','<>',$newArticles[1]->id)->where('id','<>',$newArticles[2]->id)->orderby('created_at','desc')->select('id','title','wallpaperURL','description','slug')->paginate(6);

        $nameOfpage = '';
        if($type == 0){
            $nameOfpage = 'THIẾT KẾ';
        }
        if($type == 1){
            $nameOfpage = 'THI CÔNG';
        }
        if($type == 2){
            $nameOfpage = 'NỘI THẤT';
        }
        if($type == 3){
            $nameOfpage = 'CẢNH QUAN';
        }
        if($type == 4){
            $nameOfpage = 'NHÀ GỖ';
        }
        if($type == 5){
            $nameOfpage = 'NGHIÊN CỨU';
        }

        return view('gallery')->with('data',['newArticles' => $newArticles,'articles' => $articles,'nameOfpage' => $nameOfpage]);
    }

}
