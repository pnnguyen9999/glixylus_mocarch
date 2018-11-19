<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class article extends Model
{   
    protected $table = "article";

    public function createArticleRecord(Request $request){
        $type = $request->type;
        $title = $request->title;
        $description_mode = $request->description_mode;
        $custom_description = $request->custom_description_field;
        $content = $request->content;
        $post_mode = ($request->submit == 'post') ? 'post' : 'save';
        $description = $custom_description;

        if(is_null($title)){
            return -2;
        }

        if($description_mode == '0'){
            // 100 first words 
            $description = strip_tags($content);
            $description = preg_replace('/((\w+\W*){100}(\w+))(.*)/', '${1}',$content);
        }

        if(is_null($description)){
            $description = "Không có mô tả";
        }
        
        //extract the first image
        $wallpaperURL = '';
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content,$match);
        if(!isset($match['src'])){
            $wallpaperURL = URL::asset('img/Default/company_logo.jpg'); 
        }else{
            $wallpaperURL = $match['src'];
        }

        //auto set up slug
        $slug = $this->preprocessingSlug($title);

        //determine if slug was exist.
        $iSSlugExist = is_null(DB::table('article')->where('slug','=',$slug)->first()) ? false : true;

        if($iSSlugExist == true){
            return -1;
        }

        DB::table('article')->insert([
            'type' => $type,
            'title' => $title,
            'wallpaperURL' => $wallpaperURL,
            'description' => $description,
            'content' => $content,
            'post_mode' => $post_mode,
            'slug' => $slug
        ]);
        return 0;
    }

    public function saveArticle(Request $request){
        $type = $request->type;
        $title = $request->title;
        $custom_description = $request->custom_description_field;
        $content = $request->content;
        $post_mode = ($request->submit == 'post') ? 'post' : 'save';
        $description = $custom_description;

        if(is_null($title)){
            return -2;
        }

        if(is_null($description)){
            $description = "Không có mô tả";
        }
        
        //extract the first image
        $wallpaperURL = '';
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $content,$match);
        if(!isset($match['src'])){
            $wallpaperURL = URL::asset('img/Default/company_logo.jpg'); 
        }else{
            $wallpaperURL = $match['src'];
        }

        //auto set up slug
        $slug = $this->preprocessingSlug($title);

        //determine if slug was exist.
        $iSSlugExist = is_null(DB::table('article')->where('slug','=',$slug)->first()) ? false : true;

        if($iSSlugExist == true){
            return -1;
        }

        
        DB::table('article')->where('id','=',$request->ID)->update([
            'type' => $type,
            'title' => $title,
            'wallpaperURL' => $wallpaperURL,
            'description' => $description,
            'content' => $content,
            'post_mode' => $post_mode,
            'slug' => $slug
        ]);
        
        return 0;
    }

    public function preprocessingSlug($input){
        $unicodeArray_a = array("à", "á", "ả", "ã", "ạ", "â", "ầ", "ấ", "ẩ", "ẫ", "ậ", "ă", "ằ", "ắ", "ẳ", "ẵ", "ặ");
        $unicodeArray_d = array("đ");
        $unicodeArray_e = array("è", "é", "ẻ", "ẽ", "ẹ", "ê", "ề", "ế", "ể", "ễ", "ệ");
        $unicodeArray_i = array("ì", "í", "ỉ", "ĩ", "ị");
        $unicodeArray_o = array("ò", "ó", "ỏ", "õ", "ọ", "ô", "ồ", "ố", "ổ", "ỗ", "ộ", "ơ", "ờ", "ớ", "ở", "ỡ", "ợ");
        $unicodeArray_u = array("ù", "ú", "ủ", "ũ", "ụ", "ư", "ừ", "ứ", "ử", "ữ", "ự");
        $unicodeArray_y = array("ỳ", "ý", "ỷ", "ỹ", "ỵ");
        $unicodeArray_empty = array("&lt;","&gt;","&amp;","&apos;","&quot;","&#60;","&#62;","&#38;","&#39;","&#34;","!","#","$","&","'","(",")","*","+",",","/",":",";","=","_","?","@","[","]","`","\"", ".","<",">","{","}","™","®","©");
        $unicodeArray_inline = array(" ");

        $charArray = preg_split('//u', $input, null, PREG_SPLIT_NO_EMPTY);

        for($i = 0; $i < count($charArray);$i++){
            if(in_array($charArray[$i], $unicodeArray_a)){
                $charArray[$i] = 'a';
            }
            if(in_array($charArray[$i],$unicodeArray_d)){
                $charArray[$i] = 'd';
            }
            if(in_array($charArray[$i],$unicodeArray_e)){
                $charArray[$i] = 'e';
            }
            if(in_array($charArray[$i], $unicodeArray_i)){
                $charArray[$i] = 'i';
            }
            if(in_array($charArray[$i],$unicodeArray_o)){
                $charArray[$i] = 'o';
            }
            if(in_array($charArray[$i],$unicodeArray_u)){
                $charArray[$i] = 'u';
            }
            if(in_array($charArray[$i],$unicodeArray_y)){
                $charArray[$i] = 'y';
            }
            if(in_array($charArray[$i], $unicodeArray_empty)){
                $charArray[$i] = "";
            }
            if(in_array($charArray[$i],$unicodeArray_inline)){
                $charArray[$i] = "-";
            }
        }

        $slug = implode("", $charArray);
        $slug = strtolower($slug);
        return $slug;
     }

    public function getArticlePreviewByType($type){
        $data = DB::table('article')->where('type','=',$type)->get();
        return $data;
    }

    
}
