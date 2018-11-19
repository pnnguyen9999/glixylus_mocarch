<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\article;

class ArticleController extends Controller
{
    public function showArticle($slug){
    	$article = article::where('slug',$slug)->get();
    	return view('article')->with('data',$article[0]);
    }

    /*FOR ADMIN */
    public function showArticleToAdminPage($type){   
    	$name = "";
    	if($type == 0){
    		$name = "THIẾT KẾ";
    	}
    	if($type == 1){
    		$name = "THI CÔNG";
    	}
    	if($type == 2){
    		$name = "NỘI THẤT";
    	}
    	if($type == 3){
    		$name = "CẢNH QUAN";
    	}
    	if($type == 4){
    		$name = "NHÀ GỖ";
    	}
    	if($type == 5){
    		$name = "NGHIÊN CỨU";
    	}

    	$articles = article::where('type',$type)->orderBy('created_at','desc')->get();
    	return view('adminDash/modarticle')->with('data',['articles' => $articles,'name' => $name]);
    }

    public function modifyArticle(Request $request){
    	if($request->modifyBtn == "gotoArticle"){
    		if(!is_null($request->slug)){
    			return Redirect::to('/show/'.$request->slug);
    		}    		
    	}

    	if($request->modifyBtn == "editArticle"){
    		if(!is_null($request->ID)){
    			$article = article::find($request->ID);
    			return view('adminDash/modgalleryKT_edit')->with('article',$article);
    		}
    	}

    	if($request->modifyBtn == "deleteArticle"){
    		if(!is_null($request->ID)){
    			article::destroy($request->ID);
    		}		
    	}
    	return redirect()->back();
    }


}
