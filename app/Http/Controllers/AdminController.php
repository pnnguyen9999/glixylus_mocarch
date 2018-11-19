<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Redirect;

//Model Here
use App\ImageStore;
use App\article;
use App\CompanyInfo;
//************
use Response;
use Session;

class AdminController extends Controller
{
    public function initAdminDashboard(){
        //So bai viet kien truc
        $kt = article::where('type','0')->count();
        //So bai viet thi cong
        $tc = article::where('type','1')->count();
        //So bai viet noi that
        $nt = article::where('type','2')->count();
        //So bai viet canh quan
        $cq = article::where('type','3')->count();
        //So bai viet nha go
        $ng = article::where('type','4')->count();
        //So bai viet nghien cuu
        $nc = article::where('type','5')->count();

        $data = array('kien_truc' => $kt,'thi_cong' => $tc,'noi_that' => $nt,'canh_quan' => $cq,'nha_go' => $ng,'nghien_cuu' => $nc);

        return view('adminDash/adminDashboard')->with('so_luong',$data);
    }
    /*MOD HOME*/
    public function loadWallpapersToAdminPage(){
        $imagestore = new ImageStore;
        $wallpapers = $imagestore->getImagesByType("home_page");

        //edit order
        $count = sizeof($wallpapers);
        for($i = 0; $i < $count;$i++){
            $order = trim($wallpapers[$i]->notes,"$");
            $wallpapers[$i]->notes = $order; 
        }

        $logos = $imagestore->getImagesByType("logo");
        $count = sizeof($logos);
        for($i = 0 ; $i < $count;$i++){
            $linkToCompany = trim($logos[$i]->notes,"^");
            $logos[$i]->notes = $linkToCompany;
        }
        return view('adminDash/modhome')->with('data',["wallpapers" => $wallpapers,"logos" => $logos]);
    }

    /*MODIFY HERE : SAVE OR DELETE*/

    public function modifyWallpaperFromAdminPage(Request $request){
        $mode = $request->btn;
        if($mode == 'save'){
            $this->saveWallpaperFromAdminPage($request);
        }else{
            $this->deleteWallpaperFromAdminpage($request);
        }
        return redirect()->back(); 
    }

    private function saveWallpaperFromAdminPage(Request $request){
        $order = '$'.$request->order.'$';
        $title = $request->title;
        $description = $request->description;
        $id = $request->ID;
        $type = 'home_page';

        if(is_null($order) || is_null($title) || is_null($description)){
            Session::put('modifyWarning','Vui lòng điền đủ các trường để lưu');
            return redirect()->back();
        }
        $data = array('id' => $id,'title' => $title,'description' => $description,'notes' => $order,'type' => $type);

        $imagestore = new ImageStore();
        $imagestore->updateInformation($data);
        Session::put('modifySuccess','Lưu thành công');
    }

    private function deleteWallpaperFromAdminpage(Request $request){
        $imagestore = new ImageStore();

        $imagestore->deleteImageByID($request);

        Session::put('modifySuccess','Đã xóa thành công');      
    }

    /*-----------------------*/

    /*UPLOAD WALLPAPER*/
    public function uploadNewWallpaper(Request $request){
        $nameOfimage = $request->title;
        $description = $request->description;

        if(is_null($nameOfimage) || is_null($description)){
            Session::put('warning','Có lẽ trường tiêu đề hoặc mô tả đang bị trống. Vui lòng điền đầy đủ thông tin trước khi tạo');
            return redirect()->back();
        }

        if($request->hasfile('fileToUpload')){
            //get file from Input
            $file = $request->file('fileToUpload');
            
            $imagestore = new ImageStore();
            $imagestore->uploadImageByType("home_page",$file,$request);
            Session::put("uploadSuccessful","Tạo thành công");
        }else{
            Session::put("uploadFailed","Tạo ảnh nền thất bại");
        }

        return redirect()->back();
    }
    
    /*------------------*/

    /*------------------*/

    /*ARTICLE*/
    public function submitArticle(Request $request){
        $articleModel = new article();
        $result = $articleModel->createArticleRecord($request);
        if($result == -2){
            Session::put('SubmitArticleFailed','Vui lòng điền trường tiêu đề trước khi đăng bài');
        }
        if($result == -1){
            Session::put('SubmitArticleFailed','Tạo link bài viết không thành công,tên bài viết có thể đã bị trùng. Vui lòng đổi lại tiêu đề bài viết');
        }
        if($result == 0){
            Session::put('SubmitArticleSuccess','Tạo bài viết thành công');
       }
        return redirect()->back();
    }

    public function saveArticle(Request $request){
        $articleModel = new article();
        //return $request;
        $result = $articleModel->saveArticle($request);

        if($result == -2){
            Session::put('SaveArticleFailed','Vui lòng điền trường tiêu đề trước khi đăng bài');
        }
        if($result == -1){
            Session::put('SaveArticleFailed','Tạo link bài viết không thành công,tên bài viết có thể đã bị trùng. Vui lòng đổi lại tiêu đề bài viết');
        }
        if($result == 0){
            Session::put('SaveArticleSuccess','Lưu bài viết thành công');
       }
        return Redirect::to('/admin/modarticle/type=0')->with('saveMess','Lưu thành công');
    }
    /*LOGO*/
    public function uploadNewLogo(Request $request){
        $linkToCompany = $request->linkToCompany;
        if(is_null($linkToCompany)){
            Session::put('uploadLogoFailed','Bạn cần điền đầy đủ các trường trước khi upload');
            return redirect()->back();
        }

        if($request->hasfile('fileToUpload')){
            $file = $request->file('fileToUpload');
            $imagestore = new ImageStore();
            $imagestore->uploadImageByType('logo',$file,$request);
            Session::put('uploadLogoSuccessful','Upload Logo thành công');
        }else{
            Session::put('uploadLogoFailed','Upload Logo thất bại');
        }

        return redirect()->back();
    }

    public function modifyLogo(Request $request){
        //remove
        $imagestore = new ImageStore();
        $imagestore->deleteImageByID($request);
        Session::put("modifyLogoSuccess","Đã xóa thành công");
        return redirect()->back();
    }

    /*EDIT COMPANY INFO*/
    public function editCompanyInfo(Request $request){
                    if(is_null($request->address) || is_null($request->phone_number) || is_null($request->email)){
            return "<div class='alert alert-danger w3-animate-zoom' role='alert'>
                  <strong>Thông báo : </strong> 
                  Vui lòng nhập đủ các trường trước khi cập nhật
                  </div>";
        }

        $companyInfo = CompanyInfo::find(1);
        $companyInfo->address = $request->address;
        $companyInfo->phone_number = $request->phone_number;
        $companyInfo->email = $request->email;
        $companyInfo->save();

        return "<div class='alert alert-success w3-animate-zoom' role='alert'>
                  <strong>Thông báo : </strong> 
                  Cập nhật thành công
                  </div>";
    }

    public function initUserDashboard(){
        $users = User::where('id','!=',Auth::id())->get();
        return view('adminDash/moduser')->with('users',$users);
    }

    public function activeUser(Request $request){
        $user = User::find($request->userID);
        $user->actived = 1;
        $user->save();
        return $user->updated_at->toDateTimeString();
        
    }

}

