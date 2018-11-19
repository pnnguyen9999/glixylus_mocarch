<!doctype html>
<!-- (c) PNNGUYEN 2017 - MOCARCH.COM -->
<!-- University of Information Technology - VNU-HCM -->
<!-- Glixylus Team 2018 -->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>M.O.C - {{$data['nameOfpage']}}</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body class="" style="font-family: font2;" onload="loaderFunc()">
<div class="col-xs-12 animated " id="loader" style="height: 100%;position: absolute;z-index: 3;background-color: #212121;display: block;"></div>
<!-- MOBILE RESPONSIVE -->
<div class="galleryM" style="display: none">
	<div class="menuM w3-card-4" style="display: none;width: 100%;height: 45px;background-color: #303030;color: white;z-index: 2;position: fixed;z-index: 3">
	    <!-- Collapse button -->
	    <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
	        aria-expanded="false" aria-label="Toggle navigation" style="width: 60px;height: 45px;background-color: #454545;border: 0px;color: #eeeeee;float: right;"><span class="dark-blue-text"><i class="fa fa-bars fa-1x"></i></span></button>

	    <!-- Collapsible content -->
	    <div class="collapse navbar-collapse w3-card-4" id="navbarSupportedContent1" style="background-color: #E0E0E0;color: black;border-bottom-right-radius: 5px;z-index: 2;position: relative;">
	        <!-- Links -->
	        <ul class="navbar-nav menuLi" style="font-family: font3;text-align: center;letter-spacing: 2px;border-bottom: 0px;padding-top: 0px">
	        	 <a class="" href="/" style="text-decoration: none">
	             	<li class="nav-item menuLi">
	                	Trang chủ
	           	 	</li>
           		 </a>
	             <a class="" href="/type=0" style="text-decoration: none">
	             	<li class="nav-item menuLi">
	                	Thiết kế
	           	 	</li>
	           	 </a>
	             <a class="" href="/type=1" style="text-decoration: none">
	             	<li class="nav-item menuLi">
	               		Thi công
	           	 	</li>
	           	 </a>
	             <a class="" href="/type=2" style="text-decoration: none">
	             	<li class="nav-item menuLi">
	               	 	Nội thất
	           		</li>
	           	</a>
	             <a class="" href="/type=3" style="text-decoration: none">
	             	<li class="nav-item menuLi">
	                	Cảnh quan
	           	 	</li>
	           	 </a>
	             <a class="" href="/type=4" style="text-decoration: none">
	             	<li class="nav-item menuLi">
	                	Nhà gỗ
	             		</li>
	             </a>
	             <a class="" href="/type=5" style="text-decoration: none">
	             	<li class="nav-item menuLi" style="">
	               	 	Nghiên cứu
	             	</li>
	             </a>
	        </ul>
	        <!-- Links -->
	    </div>
    <!-- Collapsible content -->
	</div>
	<div style="padding-top: 45px;text-align: center;background-image: url({{$data['newArticles'][0]['wallpaperURL']}});background-position: center;opacity:0.20;height: 450px;">
	</div>
	
	
	<div class="col-xs-12" style="padding-top: 25px;margin-top: -420px">
		<div style="padding-top: 25px;padding-bottom:25px;text-align: center;">
	    	<h1 class="" style="font-family: font2;font-size: 30pt;">M.O.C - {{$data['nameOfpage']}}</h1>
		</div>
		<div class="col-xs-12 container" style="padding: 10px;margin-top: 0px;top: 0px;float: left;">
				<a href="#"><img src="{{$data['newArticles'][0]['wallpaperURL']}}" width="100%" height="100%" class="image-bot w3-card-4"></a>
				<div class="middle-portal" style="z-index: 4">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 1 -->
						   <h5>{{$data['newArticles'][0]['title']}}</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 1 -->
						   	{{$data['newArticles'][0]['description']}}
						   </div>
						   <!-- READ MORE 1 -->
				    	<a href="/show/{{$data['newArticles'][0]['slug']}}" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
		</div>
		<div class="col-xs-12 container" style="padding: 10px;margin-top: 0px;top: 0px;float: left;">
				<a href="#"><img src="{{$data['newArticles'][1]['wallpaperURL']}}" width="100%" height="100%" class="image-bot w3-card-4"></a>
				<div class="middle-portal" style="z-index: 3">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 2 -->
						   <h5>{{$data['newArticles'][1]['title']}}</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 2 -->
						   	{{$data['newArticles'][1]['description']}}
						   </div>
						   <!-- READ MORE 2 -->
				    	<a href="/show/{{$data['newArticles'][1]['slug']}}" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
		</div>
		<div class="col-xs-12 container" style="padding: 10px;margin-top: 0px;top: 0px;float: left;">
				<a href="#"><img src="{{$data['newArticles'][2]['wallpaperURL']}}" width="100%" height="100%" class="image-bot w3-card-4"></a>
				<div class="middle-portal" style="z-index: 2">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 3 -->
						   <h5>{{$data['newArticles'][2]['title']}}</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 3 -->
						   	{{$data['newArticles'][2]['description']}}
						   </div>
						   <!-- READ MORE 3 -->
				    	<a href="/show/{{$data['newArticles'][2]['slug']}}" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
		</div>
	</div>

	<div class="col-xs-12" style="padding-top: 80px;padding-right: 0px;padding-left: 0px">
		<div class="col-xs-12" style="font-size: 12pt;font-family: font3;padding-bottom: 10px">
			<i>CÁC MỤC {{$data['nameOfpage']}} KHÁC</i>
		</div>
		@if(!is_null($data['articles']))
			@foreach($data['articles'] as $value)
			<div class="col-xs-6 container" style="padding: 2px;margin-top: 0px;top: 0px;float: left;">
				<a data-toggle="collapse" data-target="#infoImg{{$value->id}}"><img src="{{$value->wallpaperURL}}" width="100%" height="100%" class="image-bot w3-card-4"></a>
				<div class="middle-portal collapse" id="infoImg{{$value->id}}" style="z-index: 2;opacity: 1;position: relative;">
					<div class="text-portal" style="height: 100%">
						<!-- TIÊU ĐỀ ẢNH 3 -->
						   <h5>{{$value->title}}</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 3 -->
						   	{{$value->description}}
						   </div>
						   <!-- READ MORE 3 -->
				    	<a href="/show/{{$value->slug}}" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
			</div>
			</div>
			
			@endforeach
			@endif
		</div>
	</div>
	<div class="col-xs-12 pagM" style="text-align: center;display: none">
		<!-- Photo Grid -->
		<div style="text-align: center;">
			<div class="text-center">
				{!!$data['articles']->links();!!}
			</div>
		</div>
	</div>
</div>
</div>
<!-- // MOBILE RESPONSIVE -->
<div class="galleryPc">
	<div style="padding: 10px;text-align: center">
		<h1 class="animated fadeIn" style="font-family: font2;font-size: 40pt">M.O.C - {{$data['nameOfpage']}}</h1>
	</div>
			<div style="padding: 5px;"></div>
	<div class="col-lg-12" style="text-align: center">
		<div style="width: 1100px;text-align: left;font-size: 20pt;margin: 0 auto">
			<a href="/" style="padding-right: 53px">Trang chủ</a>
			<a href="{{url('/type=0')}}" style="padding-right: 53px">Thiết kế</a>
			<a href="{{url('/type=1')}}" style="padding-right: 53px">Thi công</a>
			<a href="{{url('/type=2')}}" style="padding-right: 53px">Nội thất</a>
			<a href="{{url('/type=3')}}" style="padding-right: 53px">Cảnh quan</a>
			<a href="{{url('/type=4')}}" style="padding-right: 53px">Nhà gỗ</a>
			<a href="{{url('/type=5')}}" style="padding-right: 53px">Nghiên cứu</a>
		</div>
	</div>
	<div style="padding: 25px"></div>
	<!-- front end này load 11 kết quả gần nhất, sử dụng query limit để get đính hey -->
	<div class="col-lg-12" style="background-image: url({{$data['newArticles'][0]['wallpaperURL']}});background-position: center;opacity:0.15;height: 450px"> <!-- first 3 img -->
	</div>

	<div class="col-sm-12" style="margin-top: -460px;text-align: center;position: relative;">
			<!-- ẢNH 1 -->
			<div style="margin:0 auto;width: 1200px;height: auto;text-align: left;padding: 5px;" >
				<div class="container animated slideInRight" style=" position: relative;width: 600px;height: 490px;float: left;padding: 0px;padding: 5px">
				 <!-- ĐƯỜNG DẪN ẢNH 1 -->
				 <img src="{{$data['newArticles'][0]['wallpaperURL']}}"  width="100%" height="100%" style="object-fit: cover;" class="image w3-card-4">
				  <div class="middle">
				    <div class="text" style="display: inline-block;">
				    	<!-- TIÊU ĐỀ ẢNH 1 -->
				    	{{$data['newArticles'][0]['title']}}
				    	<hr>
				    	<div style="font-size: 12pt">
				    		<!-- MÔ TẢ ẢNH 1 -->
				    		{{$data['newArticles'][0]['description']}}
				    	</div>
				    		<!-- READ MORE 1 -->
				    	<a href="/show/{{$data['newArticles'][0]['slug']}}" style="font-size: 11pt"><i>...xem bài viết ></i></a>
				    </div>
				  </div>
				</div>
				<!-- KHUNG FLEX ẢNH 2 ẢNH 3 -->
				<div style="width: 590px;height: 490px;float: right;display: flex;flex: 1;padding: 5px;">
					  <!-- ẢNH 2-->
					  <div class="container animated slideInLeft" style="flex: 1;padding: 5px;">
						   <img src="{{$data['newArticles'][1]['wallpaperURL']}}" width="100%" height="100%" style="object-fit: cover;"class="image w3-card-4">
						   <div class="middle-portal">
						     <div class="text-portal">
						     	<!-- TIÊU ĐỀ ẢNH 2 -->
						    	{{$data['newArticles'][1]['title']}}
						    	<hr>
						    	<div style="font-size: 12pt">
						    		<!-- MÔ TẢ ẢNH 2 -->
						    		{{$data['newArticles'][1]['description']}}
						        </div>
						        <!-- READ MORE 2 -->
				    			<a href="/show/{{$data['newArticles'][1]['slug']}}" style="font-size: 11pt"><i>...xem bài viết ></i></a>
						     </div>
						  </div>
					  </div>
					  <!-- ẢNH 3-->
					  <div class="container animated slideInRight" style="flex: 1;padding: 5px;">
					  	  <img src="{{$data['newArticles'][2]['wallpaperURL']}}" width="100%" height="100%" style="object-fit: cover;"class="image w3-card-4">
						   <div class="middle-portal">
						     <div class="text-portal">
						     	<!-- TIÊU ĐỀ ẢNH 3 -->
						    	{{$data['newArticles'][2]['title']}}
						    	<hr>
						    	<div style="font-size: 12pt">
						    		<!-- MÔ TẢ ẢNH 3 -->
						    		{{$data['newArticles'][2]['description']}}
						    	</div>
						    	<!-- READ MORE 3 -->
				    			<a href="/show/{{$data['newArticles'][2]['slug']}}" style="font-size: 11pt"><i>...xem bài viết ></i></a>
						     </div>
						  </div>
					  </div>  
				</div>
			</div>
	</div>
<div class="col-lg-12" id="galleryScrollto" style="text-align: center;padding-bottom: 50px;padding-top: 50px;">
		<div style="width: 1100px;text-align: left;font-size: 20pt;margin: 0 auto;">
			<h1 style="font-family: font1;font-size: 21pt"><b></b></h1><br>
			<!-- Photo Grid -->
			@if(!is_null($data['articles']))
			@foreach($data['articles'] as $value)
			<div class="col-xs-4 container" style="padding: 10px;margin-top: 0px;top: 0px;float: left;">
				<a href="#"><img src="{{$value->wallpaperURL}}" width="100%" height="100%" class="image-bot w3-card-4"></a>
				<div class="middle-portal">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 3 -->
						   <h5>{{$value->title}}</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 3 -->
						   	{{$value->description}}
						   </div>
						   <!-- READ MORE 3 -->
				    	<a href="/show/{{$value->slug}}" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
			</div>
			@endforeach
			@endif

			<div class="col-lg-12" style="text-align: center;">
					<!-- Photo Grid -->
				<div style="text-align: center;">
					    <div class="text-center">
					    	{!!$data['articles']->links();!!}
					    </div>
				</div>
			</div>
		</div>
</div>
</div>
</body>
<script>
	var preLoadtime;
	function loaderFunc() {
	    preLoadtime = setTimeout(showPage, 500);
	    document.getElementById("loader").classList.add("fadeOut");
	}
	function showPage() {
	  document.getElementById("loader").style.display = "none";
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
