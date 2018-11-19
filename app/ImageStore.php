<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use File;

class ImageStore extends Model
{
    protected $table = "imagestore";
    
    public function uploadImageByType($type,$image,$addtionalData){
        //get image infomation
        $imageName = $image->getClientOriginalName();
        $imageSize = $image->getClientSize();

        if($type == "image"){
           $this->uploadNormalImage($image);
        }

        if($type == "home_page"){
            $this->uploadHomePageImage($image,$addtionalData);
        }

        if($type == "logo"){
           $this->uploadLogoImage($image,$addtionalData);
        }
    }

    private function uploadNormalImage($image){
        //get image infomation
        $imageName = $image->getClientOriginalName();
        $imageSize = $image->getClientSize();

        //move image to normal folder
        //Storage::putFileAs('public/UploadedImage/Normal/',$image,$imageName);
        $image->move('img/Normal/',$imageName);
        $path = URL::asset('img/Normal/'.$imageName);

        DB::table('imagestore')->insert([
            'nameOfimage' => $imageName,
            'size' => $imageSize,
            'imageURL' => $path,
            'imagePath' => 'img/Normal/'.$imageName,
            'type' => 'image'
        ]);
    }

    private function uploadHomePageImage($image,$addtionalData){
        //get image infomation
        $imageName = $image->getClientOriginalName();
        $imageSize = $image->getClientSize();

        //move image to normal folder
       // Storage::putFileAs('public/UploadedImage/HomePage/',$image,$imageName);
        $image->move('img/HomePage/',$imageName);
        $path = URL::asset('img/HomePage/'.$imageName);

        //automatic set order of home page image
        $wallpapers = $this->getImagesByType("home_page");
        $max = 0;
        if(sizeof($wallpapers) > 0){
            
            $count = sizeof($wallpapers);

            for($i = 0; $i < $count;$i++){
                $localMax = trim($wallpapers[$i]->notes,"$");
                if($localMax > $max){
                    $max = $localMax;
                }
            }
        }

        $order = $max + 1;

        DB::table('imagestore')->insert([
            'nameOfimage' => $imageName,
            'title' => $addtionalData->title,
            'description' => $addtionalData->description,
            'size' => $imageSize,
            'imageURL' => URL::asset($path),
            'imagePath' => 'img/HomePage/'.$imageName,
            'type' => 'home_page',
            'notes' => "$".$order."$"
        ]);
    }

    public function uploadLogoImage($image,$addtionalData){
        //get image infomation
        $imageName = $image->getClientOriginalName();
        $imageSize = $image->getClientSize();

        //move image to normal folder
        //Storage::putFileAs('public/UploadedImage/Logo/',$image,$imageName);
        $image->move('img/Logo/',$imageName);
        $path = URL::asset('img/Logo/'.$imageName);

        DB::table('imagestore')->insert([
            'nameOfimage' => $imageName,
            'size' => $imageSize,
            'imageURL' => URL::asset($path),
            'imagePath' => 'img/Logo/'.$imageName,
            'type' => 'logo',
            'notes' => '^'.$addtionalData->linkToCompany.'^'
        ]);
    }

    public function getImagesByType($type){
        return DB::table('imagestore')->where('type','=',$type)->get();
    }

    public function deleteImageByID($request){    
        if(is_dir($request->imagePath)){
            unlink($request->imagePath);
        }
        
        DB::table('imagestore')->where('id','=',$request->ID)->delete();
    }

    public function updateInformation($data){
        $id = $data['id'];

        DB::table('imagestore')->where('id','=',$id)->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'type' => $data['type'],
            'notes' => $data['notes']
        ]);
    }
}
