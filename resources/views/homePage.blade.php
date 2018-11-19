<!doctype html>
<!-- (c) GLIXYLUS TEAM 2018 - MOCARCH.COM -->
<!-- @Front-End by PN Nguyen - University of Information Technology - VNU-HCM -->
<!-- @Back-End by Bui Quang Dinh - Da Nang University of Technology -->
<!-- have a nice day ! -->
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>M O C</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<style>

</style>
<body style="font-family: font2;" onload="loaderFunc()">
<div class="col-xs-12 animated " id="loader" style="height: 100%;position: absolute;z-index: 3;background-color: #212121;display: block;"></div>
<div class="l1" style="z-index: 2;height: 100%;width: 110px;float: left; position:fixed;color:#ffffff;">
	<div class="tipl tiphome w3-card-4" style="margin-top: 70px">
		<div style="padding: 7px;color: white;"></div>
			<a href="/type=0" style="text-decoration:none" style="width: 120px;padding: 5px;"><span aria-hidden="true">&nbsp;</span>THIẾT KẾ</a>
	</div>
	<br>
	<div class="tipl tiphome w3-card-4">
		<div style="padding: 7px;"></div>
			<a href="/type=1" style="text-decoration:none" style="width: 120px;padding: 5px;"><span aria-hidden="true">&nbsp;</span>THI CÔNG</a>
	</div>
	<br>
	<div class="tipl tiphome w3-card-4">
		<div style="padding: 7px;"></div>
			<a href="/type=2" style="text-decoration:none" style="width: 120px;padding: 5px;"><span aria-hidden="true">&nbsp;</span>NỘI THẤT</a>
	</div>
	<br>
	<div class="tipl tiphome w3-card-4">
		<div style="padding: 7px;"></div>
			<a href="/type=3" style="text-decoration:none" style="width: 120px;padding: 5px;"><span aria-hidden="true">&nbsp; </span>CẢNH QUAN</a>
	</div>
	<br>
	<div class="tipl tiphome w3-card-4">
		<div style="padding: 7px;"></div>
			<a href="/type=4" style="text-decoration:none" style="width: 120px;padding: 5px;"><span aria-hidden="true">&nbsp; </span>NHÀ GỖ</a>
	</div>
	<br>
	<div class="tipl tiphome w3-card-4">
		<div style="padding: 7px;"></div>
			<a href="/type=5" style="text-decoration:none" style="width: 110px;padding: 5px;"><span class="" aria-hidden="true">&nbsp; </span>NGHIÊN CỨU</a>
	</div>
	<br>
	
		@if(Auth::check())
		<div class="tipl tiphome w3-card-4" style="width: 110px;height: 50px;border: 0px;">
			<div style="padding: 7px;"></div>
			<a href="{{route('logout')}}" onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();" style="text-decoration:none" style="width: 110px;padding: 5px;"><span class="glyphicon glyphicon-new-window" aria-hidden="true">&nbsp;|</span></a>
	        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form> 
	        <a href="/admin" style="text-decoration:none" style="width: 110px;padding: 5px;"><span class="" aria-hidden="true">&nbsp; </span>ADMIN</a>
	    </div>                                                       
		@else
		<div class="tipl tiphome w3-card-4" style="width: 110px;height: 50px;border: 0px;">
			<div style="padding: 7px;"></div>
			<a href="/login" style="text-decoration:none" style="width: 110px;padding: 5px;"><span class="glyphicon glyphicon-log-in" aria-hidden="true">&nbsp; </span></a>
		</div>
		@endif
			
	
	
</div>
<!-- MOBILE MENU RESPONSIVE -->
<div class="menuM" style="display: none;width: 100%;height: 45px;background-color: #303030;color: white;z-index: 2;">
    <!-- Collapse button -->
    <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
        aria-expanded="false" aria-label="Toggle navigation" style="width: 60px;height: 45px;background-color: #454545;border: 0px;color: #eeeeee;float: right;"><span class="dark-blue-text"><i class="fa fa-bars fa-1x"></i></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse w3-card-4" id="navbarSupportedContent1" style="background-color: #E0E0E0;color: black;border-bottom-right-radius: 5px;position: relative;">
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
             @if(Auth::check())

			<li class="nav-item menuLi" style="">
				<a href="{{route('logout')}}" onclick="event.preventDefault();
		                                                     document.getElementById('logout-form').submit();" style="text-decoration:none" style="width: 110px;padding: 5px;"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;logout_{{Auth::user()->name}}</a>&nbsp;|
		        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form> 
		        <a href="/admin" style="text-decoration:none" style="width: 110px;padding: 5px;"><span class="" aria-hidden="true">&nbsp; </span>ADMIN</a>
            </li>                                       
			@else
			<a href="/login" style="text-decoration:none" style="width: 110px;padding: 5px;">
			<li class="nav-item menuLi" style="">
				<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;Đăng nhập
			</li>
			</a>	
			@endif
        </ul>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->
</div>

<div class="mainImg" style="">
	@if(!is_null($data["wallpapers"]))
	@foreach($data["wallpapers"] as $value)
	<table>
		<tr>
			<a><img class="imgCon myS animated fadeIn col-xs-12" src="{{ $value['imageURL']}}"  style="width:100%;object-fit:cover;z-index: -1;padding: 0px;"></a>
		</tr>
	</table>
	@endforeach
	@endif
</div>
<!-- MOBILE RESPONSIVE -->
<div class="infoM col-xs-12" style="display: none;text-align: center;padding: 0px;z-index: -1">
	<div style="width: 100%;text-align: right;background-color: #282828;font-family: font2;font-size: 10pt;color: #dddddd">
		@if(!is_null($data["wallpapers"]))
		@foreach($data["wallpapers"] as $value)
		<div class="myM" style="padding-right: 5px">
			{{$value['title']}}	
		</div>
		@endforeach
		@endif
	</div>
   <div class="" style="background-color: rgb(30,30,30);height: 100%;color: #ffffff;width: 100%;float: right;padding: 10px"> 
			<h6>công ty TNHH Thiết kế kiến trúc</h6>
			<div style="padding: 1px"></div>
			<h3 style="letter-spacing: 0px"><kbd>M.O.C</kbd></h3>
			<div style="padding-left: 10px;padding-right: 10px">
				<hr style="border-top: 2px solid #808080;">
			</div>
			<div style="padding-left: 10px;padding-right: 10px">
				<span class="fa fa-address-card" aria-hidden="true">&nbsp; </span>&nbsp;Địa chỉ: {{$data["company_info"]['address']}}</br>
				-<br>
				<a href="tel:+84967387439" target="_top"><span class="fa fa-phone" aria-hidden="true">&nbsp; </span>&nbsp;{{$data["company_info"]['phone_number']}}</a></br>
				<a href="mailto:info@mocarch.com" target="_top"><span class="fa fa-envelope-open" aria-hidden="true">&nbsp; </span>&nbsp;{{$data["company_info"]['email']}}</a></br>
				-<br>
				<div style="letter-spacing: 5px">www.mocarch.com</div>
			</div>
	<div style="width:100%;height: 100px;">
	    <div style="float: right;">
			<div style="padding:10px"></div>
			<div style="height: 80%;">
				<div style="width: 95%;height: 100%;padding:20px">
					<marquee behavior="" scrollamount="10" onmouseover="this.stop()" onmouseout="this.start()" >
						@if(!is_null($data["logos"]))
						@foreach($data["logos"] as $value)
						<a href="{{$value['notes']}}" target="_blank">
						<img class="w3-card-4" src="{{$value['imageURL']}}" height="55px" style="vertical-align: middle;margin-right: 60px">
						@endforeach
						@endif					
					</marquee>
				</div>
			</div>
		</div>
	</div>
	<a style="color: #6e6e6e;font-family: font3;font-size: 10pt">Design & Engine by Glixylus Team Devs | website under construction</a>
    </div>
</div>
<!-- MOBILE RESPONSIVE -->
<div id="bottom" style="right: 0;bottom: 0;height: 280px;color: #000000; position: fixed;display: block;text-align: center;display: flex">
	<div class="leftsideInfo" style="height: 100%;padding: 8px" style="z-index:-1">
		@if(!is_null($data["wallpapers"]))
		@foreach($data["wallpapers"] as $value)
		<div class="myX " style="height: 90px;text-align: right">
			<h1 class="w3-card-4" style="background-color: rgba(200,200,200,0.75);color: black;display: inline;font-family: font1;padding: 5px"><b>{{$value['title']}}</b></h1>
			<br>
			<div style="padding: 8px"></div>
			<div class="w3-card-4" style="background-color: rgba(220,220,220,0.75);padding:2px;height: 100px;display: inline;color:black;font-size: 15pt;font-family: font3">
				{{$value['description']}}
			</div>
		</div>
		@endforeach
		@endif
		<br>
		<div class="" style="width:500px;height: 160px;bottom: 0;float: right;">
		  <div style="float: right;">
				<div style="padding:10px"></div>
				<div style="background-color: rgba(30,30,30,0.3);height: 80%;border-top-left-radius: 25px;">
					<div style="width: 95%;height: 100%;padding:50px">
						<marquee behavior="" scrollamount="10" onmouseover="this.stop()" onmouseout="this.start()" >
							@if(!is_null($data["logos"]))
							@foreach($data["logos"] as $value)
							<a href="{{$value['notes']}}" target="_blank">
							<img class="w3-card-4" src="{{$value['imageURL']}}" height="55px" style="vertical-align: middle;margin-right: 60px">
							@endforeach
							@endif					
						</marquee>
					</div>
				</div>
		   </div>
		</div>
	</div>
	<div class="info col-xs-12">
		<div class="" style="background-color: rgba(30,30,30,0.75);height: 100%;color: #ffffff;width: 400px;float: right;"> 
			<h6>công ty TNHH Thiết kế kiến trúc</h6>
			<div style="padding: 1px"></div>
			<h3 style="letter-spacing: 0px"><kbd>M.O.C</kbd></h3>
			<div style="padding-left: 10px;padding-right: 10px">
				<hr style="border-top: 2px solid #808080;">
		</div>
		<div style="padding-left: 10px;padding-right: 10px">
			<span class="fa fa-address-card" aria-hidden="true">&nbsp; </span>&nbsp;Địa chỉ: {{$data["company_info"]['address']}}</br>
			-<br>
			<a href="tel:+84967387439" target="_top"><span class="fa fa-phone" aria-hidden="true">&nbsp; </span>&nbsp;{{$data["company_info"]['phone_number']}}</a></br>
			<a href="mailto:info@mocarch.com" target="_top"><span class="fa fa-envelope-open" aria-hidden="true">&nbsp; </span>&nbsp;{{$data["company_info"]['email']}}</a></br>
			-<br>
			<div style="letter-spacing: 5px">www.mocarch.com</div>
		</div>
	</div>
</div>



<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("myS");
    var title = document.getElementsByClassName("myX");
    var titleM = document.getElementsByClassName("myM");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
       title[i].style.display = "none";
       titleM[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
	title[myIndex-1].style.display = "block";
	titleM[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000);

}
var preLoadtime;
	function loaderFunc() {
	    preLoadtime = setTimeout(showPage, 500);
	    document.getElementById("loader").classList.add("fadeOut");
	}
	function showPage() {
	  document.getElementById("loader").style.display = "none";
	}
</script>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
