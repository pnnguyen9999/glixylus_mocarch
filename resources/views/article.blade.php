<!doctype html>
<!-- (c) PNNGUYEN 2017 - MOCARCH.COM -->
<!-- University of Information Technology - VNU-HCM -->
<!-- Glixylus Team 2018 -->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>M.O.C -  {{$data->title}}</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<style>
img {
    max-width: 100%;
    height: auto;
}
</style>
<body style="font-family: font2;" onload="loaderFunc()">
<div class="col-xs-12 animated " id="loader" style="height: 100%;position: absolute;z-index: 3;background-color: #212121;display: block;"></div>
	<div class="col-lg-2 col-md-1"></div>
	<div class="col-lg-8 col-md-10">
		<br>
		<a href="{{url()->previous()}}"><button type="button" class="btn"><span class="glyphicon glyphicon-triangle-left"></span><i style="font-size: 11pt">Quay về M.O.C gallery</i></button></a>
		<hr>
		<h1 style="font-family: font2;font-size: 40pt"> {{$data->title}} </h1><br>
		<div class="col-lg-12" style="padding: 10px;border: 1px solid #d4d4d4">
			{!!$data->content!!}
		</div>
		<div class="col-lg-12" style="text-align: center;padding: 50px">
			(c) copyright M.O.C 2018 - Designed by Glixylus Team Devs
		</div>
	</div>
	<div class="col-lg-2 col-md-1"></div>
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