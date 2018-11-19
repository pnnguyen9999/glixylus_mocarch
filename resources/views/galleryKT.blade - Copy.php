<!doctype html>
<!-- (c) PNNGUYEN 2017 - MOCARCH.COM -->
<!-- University of Information Technology - VNU-HCM -->
<!-- Glixylus Team 2018 -->
<html>
<head>
<meta charset="utf-8">
<title>M O C - Thiết kế</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body style="font-family: font2;">

	<div style="padding: 10px;text-align: center">
		<h1 class="animated fadeIn" style="font-family: font2;font-size: 40pt">M.O.C - THIẾT KẾ</h1>
	</div>
	<div style="padding: 10px;"></div>

	<div style="display: flex;width: 100%;text-align: center;font-size: 20pt">

		@yield('navigation_bar')
		<div style="flex: 1"></div>
		<div style="flex: 1">
			<a href="/">Trang chủ</a>
		</div>
		<div style="flex: 1">
			<a href="#" style="border-bottom: 7px solid #616161">Thiết kế</a>
		</div>
		<div style="flex: 1">
			<a href="/">Thi công</a>
		</div>
		<div style="flex: 1">
			<a href="/">Nội thất</a>
		</div>
		<div style="flex: 1">
			<a href="/">Cảnh quan</a>
		</div>
		<div style="flex: 1">
			<a href="/">Nhà gỗ</a>
		</div>
		<div style="flex: 1">
			<a href="/">Nghiên cứu</a>
		</div>
		<div style="flex: 1"></div>
	</div>
	<div style="padding: 20px"></div>
	<!-- front end này load 11 kết quả gần nhất, sử dụng query limit để get đính hey -->
	<div class="col-lg-12" style="background-image: url('https://static1.squarespace.com/static/5410b247e4b0b9bdbd0c4439/54175e3ae4b0b77770536103/5418c649e4b003eaab4690b2/1410909770938/SLIDE_BARTON.jpg');background-position: center;opacity:0.15;height: 450px"> <!-- first 3 img -->
	</div>

	<div class="col-sm-12" style="margin-top: -460px;text-align: center;position: relative;">
			<!-- ẢNH 1 -->
			<div style="margin:0 auto;width: 1200px;height: auto;text-align: left;padding: 5px;" >
				<div class="container animated slideInRight" style=" position: relative;width: 600px;height: 490px;float: left;padding: 0px;padding: 5px">
				 <!-- ĐƯỜNG DẪN ẢNH 1 -->
				 <img src="https://static1.squarespace.com/static/5410b247e4b0b9bdbd0c4439/54175e3ae4b0b77770536103/5418c649e4b003eaab4690b2/1410909770938/SLIDE_BARTON.jpg"  width="100%" height="100%" style="object-fit: cover;" class="image w3-card-4">
				  <div class="middle">
				    <div class="text" style="display: inline-block;">
				    	<!-- TIÊU ĐỀ ẢNH 1 -->
				    	Tiêu đề ảnh
				    	<hr>
				    	<div style="font-size: 12pt">
				    		<!-- MÔ TẢ ẢNH 1 -->
				    		Bàn duy nhất trên chấm phạt đền của Eden Hazard giúp đội bóng thành London thắng 1-0 dù bị lấn lướt trong phần lớn thời gian trận chung kết tối 19/5 trên sân Wembley.
				    	</div>
				    		<!-- READ MORE 1 -->
				    	<a href="#" style="font-size: 11pt"><i>...xem bài viết ></i></a>
				    </div>
				  </div>
				</div>
				<!-- KHUNG FLEX ẢNH 2 ẢNH 3 -->
				<div style="width: 590px;height: 490px;float: right;display: flex;flex: 1;padding: 5px;">
					  <!-- ẢNH 2-->
					  <div class="container animated slideInLeft" style="flex: 1;padding: 5px;border-right: 1px solid #9E9E9E">
						   <img src="http://www.ebizbydesign.com/data/img/gorgeous-house-architecture-styles-a-collection-of-modern-styles-of-house-architecture.jpg" width="100%" height="100%" style="object-fit: cover;"class="image w3-card-4">
						   <div class="middle-portal">
						     <div class="text-portal">
						     	<!-- TIÊU ĐỀ ẢNH 2 -->
						    	Tiêu đề ảnh
						    	<hr>
						    	<div style="font-size: 12pt">
						    		<!-- MÔ TẢ ẢNH 2 -->
						    		Bàn duy nhất trên chấm phạt đền của Eden Hazard giúp đội bóng thành London thắng 1-0 dù bị lấn lướt trong phần lớn thời gian trận chung kết tối 19/5 trên sân Wembley.
						        </div>
						        <!-- READ MORE 2 -->
				    			<a href="#" style="font-size: 11pt"><i>...xem bài viết ></i></a>
						     </div>
						  </div>
					  </div>
					  <!-- ẢNH 3-->
					  <div class="container animated slideInRight" style="flex: 1;padding: 5px;">
					  	  <img src="https://i.pinimg.com/originals/5e/78/48/5e7848936b636491ec096799cc0a4dff.jpg" width="100%" height="100%" style="object-fit: cover;"class="image w3-card-4">
						   <div class="middle-portal">
						     <div class="text-portal">
						     	<!-- TIÊU ĐỀ ẢNH 3 -->
						    	Tiêu đề ảnh
						    	<hr>
						    	<div style="font-size: 12pt">
						    		<!-- MÔ TẢ ẢNH 3 -->
						    		Bàn duy nhất trên chấm phạt đền của Eden Hazard giúp đội bóng thành London thắng 1-0 dù bị lấn lướt trong phần lớn thời gian trận chung kết tối 19/5 trên sân Wembley.
						    	</div>
						    	<!-- READ MORE 3 -->
				    			<a href="#" style="font-size: 11pt"><i>...xem bài viết ></i></a>
						     </div>
						  </div>
					  </div>  
				</div>
			</div>
	</div>

	<div class="" style="margin-top: 110px;width: 100%;height: auto;">
		<div class="col-lg-2 col-md-2 col-xs-2"></div>
		<div class="col-lg-8 col-md-8 col-xs-8" style="height: auto;flex: 10">
			<hr>
			<h1 style="font-family: font1;font-size: 21pt"><b>Cũ hơn</b></h1><br>
			<!-- Photo Grid -->
			<div class="col-lg-4 col-md-4 col-xs-4 container" style="padding: 10px">
				<a href="#"><img src="http://cdmiennam.edu.vn/uploads/page/2016_08/cong-nghe-ky-thuat-kien-truc-1.JPG" width="100%" height="100%"class="image-bot w3-card-4"></a>
				<div class="middle-portal">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 3 -->
						   <h5>Tiêu đề ảnh</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 3 -->
						   	Bàn duy nhất trên chấm phạt đền của Eden Hazard giúp đội bóng thành London thắng 1-0 dù bị lấn lướt trong phần lớn thời gian trận chung kết tối 19/5 trên sân Wembley.
						   </div>
						   <!-- READ MORE 3 -->
				    	<a href="#" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-4 container" style="padding: 10px">
				<a href="#"><img src="http://cdmiennam.edu.vn/uploads/page/2016_08/cong-nghe-ky-thuat-kien-truc-1.JPG" width="100%" height="100%"class="image-bot w3-card-4"></a>
				<div class="middle-portal">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 3 -->
						   <h5>Tiêu đề ảnh</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 3 -->
						   	Bàn duy nhất trên chấm phạt đền của Eden Hazard giúp đội bóng thành London thắng 1-0 dù bị lấn lướt trong phần lớn thời gian trận chung kết tối 19/5 trên sân Wembley.
						   </div>
						   <!-- READ MORE 3 -->
				    	<a href="#" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-4 container" style="padding: 10px">
				<a href="#"><img src="http://cdmiennam.edu.vn/uploads/page/2016_08/cong-nghe-ky-thuat-kien-truc-1.JPG" width="100%" height="100%"class="image-bot w3-card-4"></a>
				<div class="middle-portal">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 3 -->
						   <h5>Tiêu đề ảnh</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 3 -->
						   	Bàn duy nhất trên chấm phạt đền của Eden Hazard giúp đội bóng thành London thắng 1-0 dù bị lấn lướt trong phần lớn thời gian trận chung kết tối 19/5 trên sân Wembley.
						   </div>
						   <!-- READ MORE 3 -->
				    	<a href="#" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-4 container" style="padding: 10px">
				<a href="#"><img src="http://cdmiennam.edu.vn/uploads/page/2016_08/cong-nghe-ky-thuat-kien-truc-1.JPG" width="100%" height="100%"class="image-bot w3-card-4"></a>
				<div class="middle-portal">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 3 -->
						   <h5>Tiêu đề ảnh</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 3 -->
						   	Bàn duy nhất trên chấm phạt đền của Eden Hazard giúp đội bóng thành London thắng 1-0 dù bị lấn lướt trong phần lớn thời gian trận chung kết tối 19/5 trên sân Wembley.
						   </div>
						   <!-- READ MORE 3 -->
				    	<a href="#" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-4 container" style="padding: 10px">
				<a href="#"><img src="http://cdmiennam.edu.vn/uploads/page/2016_08/cong-nghe-ky-thuat-kien-truc-1.JPG" width="100%" height="100%"class="image-bot w3-card-4"></a>
				<div class="middle-portal">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 3 -->
						   <h5>Tiêu đề ảnh</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 3 -->
						   	Bàn duy nhất trên chấm phạt đền của Eden Hazard giúp đội bóng thành London thắng 1-0 dù bị lấn lướt trong phần lớn thời gian trận chung kết tối 19/5 trên sân Wembley.
						   </div>
						   <!-- READ MORE 3 -->
				    	<a href="#" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-4 container" style="padding: 10px">
				<a href="#"><img src="http://cdmiennam.edu.vn/uploads/page/2016_08/cong-nghe-ky-thuat-kien-truc-1.JPG" width="100%" height="100%"class="image-bot w3-card-4"></a>
				<div class="middle-portal">
				  <div class="text-portal">
						<!-- TIÊU ĐỀ ẢNH 3 -->
						   <h5>Tiêu đề ảnh</h5>
						   <hr>
						   <div style="font-size: 10pt">
						   	<!-- MÔ TẢ ẢNH 3 -->
						   	Bàn duy nhất trên chấm phạt đền của Eden Hazard giúp đội bóng thành London thắng 1-0 dù bị lấn lướt trong phần lớn thời gian trận chung kết tối 19/5 trên sân Wembley.
						   </div>
						   <!-- READ MORE 3 -->
				    	<a href="#" style="font-size: 11pt"><i>...xem bài viết ></i></a>     	
					</div>
				 </div></a>
			</div>

			<!-- Photo Grid -->
			<div style="text-align: center;">
				<nav aria-label="Page navigation example">
				  <ul class="pagination">
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Previous">
				        <span aria-hidden="true">&laquo;</span>
				        <span class="sr-only">Previous</span>
				      </a>
				    </li>
				    <li class="page-item"><a class="page-link" href="#">1</a></li>
				    <li class="page-item"><a class="page-link" href="#">2</a></li>
				    <li class="page-item"><a class="page-link" href="#">3</a></li>
				    <li class="page-item">
				      <a class="page-link" href="#" aria-label="Next">
				        <span aria-hidden="true">&raquo;</span>
				        <span class="sr-only">Next</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-xs-2"></div>
	</div><br>
	<div class="col-lg-12">
		Designed by Glixylus Team 2018
	</div>
</body>

