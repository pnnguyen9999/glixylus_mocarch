<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageStore;
use App\CompanyInfo;

class HomePageController extends Controller
{
    public function getData(){
        $imagestore = new ImageStore();
        $wallpapers = $imagestore->getImagesByType("home_page");

        $wallpapers = json_decode($wallpapers,true);

    	//sort data by order
    	for($i = 0; $i < count($wallpapers);$i++){ 
    		for($j = count($wallpapers) - 1;$j > $i;$j--){ 
                $jOrder = trim($wallpapers[$j]['notes'],"$");
                $previousJorder = trim($wallpapers[$j-1]['notes'],"$");

    			if($jOrder < $previousJorder){
    				//swap
    				$t = $wallpapers[$j];
    				$wallpapers[$j] = $wallpapers[$j-1];
    				$wallpapers[$j-1] = $t;
    			}
    		}
    	}

        $logos = $imagestore->getImagesByType("logo");
        $logos = json_decode($logos,true);

        for($i = 0; $i < count($logos);$i++){
            $link = trim($logos[$i]["notes"],"^");
            $logos[$i]["notes"] = $link;
        }

        $companyInfo = CompanyInfo::find(1);

    	return view('homePage')->with('data',["wallpapers" => $wallpapers,"logos" => $logos,"company_info" => $companyInfo]);
    }
}
