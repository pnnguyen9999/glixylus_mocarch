<!doctype html>
<!-- (c) PNNGUYEN 2017 - MOCARCH.COM -->
<!-- University of Information Technology - VNU-HCM -->
<!-- Glixylus Team 2018 -->
<html>
<head>
<meta charset="utf-8">
<title>M.O.C - @yield('namepage')</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body style="font-family: font2;">

	<div style="padding: 10px;text-align: center">
		<h1 class="animated fadeIn" style="font-family: font2;font-size: 40pt">M.O.C - @yield('namepage')</h1>
	</div>
	<div style="padding: 10px;"></div>

	<div style="display: flex;width: 100%;text-align: center;font-size: 20pt">
		@yield('navigation_bar')
	</div>

	<div class="container">
		@yield('body')
	</div>

	<div class="col-lg-12">
		Designed by Glixylus Team 2018
	</div>
</body>

