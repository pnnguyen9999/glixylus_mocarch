@extends('layouts.adminPage')

@section('body')
	 <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              			@if(session('saveMess'))
		<div class="alert alert-success w3-animate-zoom" role="alert">
                  <strong>Thông báo : </strong>  {{session('saveMess')}}
                  </div>               
        @endif
              	<div class="x_panel" style="height: auto">
                  	<div class="x_title">
                    	<h2>Article Loader<small> - lựa chọn chủ để bài viết</small></h2>
                    	<div class="clearfix"></div>
                    </div>
                    <label class="control-label">Chủ đề</label>
                     <div class="form-group col-lg-12 col-xs-12">

                        <div class="col-lg-10 col-xs-12" style="padding:5px">
                          <select name="type" id="selectType">
                            <option value="0">Thiết kế</option>
                            <option value="1">Thi công</option>
                            <option value="2">Nội thất</option>
                            <option value="3">Cảnh quan</option>
                            <option value="4">Nhà gỗ</option>
                            <option value="5">Nghiên cứu</option>
                          </select> 
                        </div>
                        <div class="col-lg-2 col-xs-12" style="text-align: center;padding:5px">
                        	<button type="button" onclick="loadArticlesByType()" class="btn btn-success" style="width: 100%">Load bài đăng</button>
                        </div>
                        <script>
                        	function loadArticlesByType(){
                        		optionBox = document.getElementById('selectType');
                        		window.location = "{{url('/admin/modarticle/type=')}}" + optionBox.value;
                        	}
                        </script>
                   </div>
               	</div>
               	<div class="x_panel" style="height: auto">
                  	<div class="x_title">
                    	<h2>M.O.C {{$data['name']}}<small> - lựa chọn bài viết cần chỉnh sửa</small></h2>
                    	<div class="clearfix"></div>
                    </div>
                     <div class="form-group col-lg-12 col-xs-12">
                        <h5>Có {{$data['articles']->count()}} bài viết ở danh mục này</h5>
                        @foreach($data['articles'] as $value)
                        <!-- article card -->
                        <div class="col-lg-3 w3-card-4" >
                        	<form action="{{url('/admin/modarticle/modify')}}" method="POST" enctype="multipart/form-data" >
                        		{{ csrf_field() }}
                        		<div class="thumbnail" style="height: auto">
	                           <div class="image view view-first" style="height: 100%">
	                           	  <img style="width: 100%; display: block;" src="{{$value->wallpaperURL}}" />
	                           		  <div class="mask" style="height: 100%">
			                              <div class="tools" style="bottom: 0;position:absolute;width: 100%">
			                              	<input type="hidden" name="slug" value="{{$value->slug}}">
			                              	<input type="hidden" name="ID" value="{{$value->id}}">
			                                <button type="submit" name="modifyBtn" value="gotoArticle" style="background-color: #303030"><i class="fa fa-link"></i></button>
			                                <button type="submit" name="modifyBtn" value="editArticle" style="background-color: #303030"><i class="fa fa-pencil"></i></button>
			                                <button type="submit" name="modifyBtn" value="deleteArticle" style="background-color: #303030"><i class="fa fa-times"></i></button>
			                              </div>
		                              </div>
		                       </div>
		                       <h4>{{$value->title}}</h4>
		                       <blockquote style="font-family: font1;font-size: 12pt">
			                        <i>{{$value->description}}</i>
		                       </blockquote>
                       	 	</div>
                        	</form>                       	 
                        </div>
                        <!-- article card -->
                        @endforeach                                          
                   </div>
               	</div>
            </div>
          </div>
 <!-- footer content -->
        <footer>
          <div class="pull-right">
             Website engine by <a href="#">Glixylus Team Dev</a> | Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- NỘI DUNG TRANG -->
    </div>


@stop