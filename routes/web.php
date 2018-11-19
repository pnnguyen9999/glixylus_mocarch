<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// LOAD TRANG CHỦ
Route::get('/', 'HomePageController@getData');

//--------------------------------------
// LOAD VÀO GALLERY KIẾN TRÚC
Route::get('/galleryKT',function(){
   return view('galleryKT');
});

// TAC VU CUA ADMIN
Route::group(['prefix' => '/admin','middleware' => 'CheckLogin'],function(){
	Route::get('/','AdminController@initAdminDashboard');
	Route::get('/modhome','AdminController@loadWallpapersToAdminPage');
	Route::post('/modify', 'AdminController@modifyWallpaperFromAdminPage');
	Route::post('/upload','AdminController@uploadNewWallpaper');
	Route::post('/upload_new_logo','AdminController@uploadNewLogo');
	Route::post('/modify_logo','AdminController@modifyLogo');
	Route::get('/modgallery',function(){
   		return view('adminDash/modgalleryKT');
	});
	Route::get('/modarticle/type={type}','ArticleController@showArticleToAdminPage');
	Route::post('/modarticle/modify','ArticleController@modifyArticle');
	Route::get('/modusers','AdminController@initUserDashboard');
	Route::post('/modusers/activeUser','AdminController@activeUser');
	Route::post('/modgallery/submit_post','AdminController@submitArticle');
	Route::post('/modgallery/save_post','AdminController@saveArticle');
	Route::get('/upload_image','ImageController@initUploadPage');
	Route::post('/upload_image/processing','ImageController@uploadNewImage');
	Route::post('/upload_image/delete','ImageController@deleteImage');
	Route::post('/edit_company_info','AdminController@editCompanyInfo');
});

/*---------------------------*/

Route::get('/type={type}','GalleryController@loadGalleryByType');
Route::get('/show/{slug}','ArticleController@showArticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
