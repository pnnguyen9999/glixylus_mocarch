<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageStore;
use Illuminate\Support\Facades\Input;

class ImageController extends Controller
{
    public function initUploadPage(){
        
        $allImage = ImageStore::all();
        return view('uploadPage')->with('data',['allImage' => $allImage]);
    }
    
    public function uploadNewImage(Request $request){
        //return $request;
        if($request->hasfile('fileToUpload')){
            $image = $request->file('fileToUpload');
            $imagestore = new ImageStore();
            $imagestore->uploadImageByType("image",$image,null);
            $id = ImageStore::max('id');
            $image = ImageStore::where('id',$id)->first();
            $allImage = ImageStore::all();
            return view('uploadPage')->with('data',['newImage' => $image, "allImage" => $allImage]);
        }
        return view('uploadPage');
        
    }

}
