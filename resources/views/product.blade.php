<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sản phẩm</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
</head>
<body style="text-align: center;font-family: font3">
<br>
<div class="col-sm-12">
	<h1 style="font-family: font2;font-size: 30pt">M O C &nbsp; P R O D U C T S</h1>
</div>
</br>

	<div style="heigh:10px"></div>
<div class="col-sm-1"></div>
	<div class="col-sm-10">
		<div class="col-sm-9" style="padding: 1px;">
			<div style="width: 100%;height: 380px;border: 1px solid #C7C7C7">
				<!-- <div class="w3-card-2" style="height: 22px;width: 100%;color: #aaaaaa;border-bottom: 1px solid #c7c7c7">TỔNG QUAN</div> -->
				<!-- <img src="/img/sample.jpg" height="94%" width="100%"> -->
				<div class="w3-animate-right" style="width: 300px;height: 100%;float:right;display: none" id="dataDiv">
                
            </div>
			</div>
		</div>
		<div class="col-sm-3" style="padding: 1px;">
			<div style="width: 100%;height: 380px;border: 1px solid #C7C7C7">
				<div class="w3-card-2" style="height: 22px;width: 100%;color: #aaaaaa;border-bottom: 1px solid #c7c7c7">i t e m s</div>
				<div class="list-group" style="overflow-y: scroll;width: 100%;height: 94%">
					@foreach($data as $value)
						<li class="list-group-item itemS" style="cursor: pointer" id="{{ $value->id }}" onclick="abc({{ $value->id }})">{{ $value->name }}</li>
					@endforeach
				</div>
			</div>
		</div>
	</div>
<div class="col-sm-1"></div>
</div>
</body>
</html>
<script>
			function abc(IDs){
              /* $.get('getRequest', function(data){
                  $('#dataDiv').append(data);
                  console.log(data);
               })*/
                  
                  $.ajax({
                  type: "GET",
                  url: "getRequest",
                  data: { productID: IDs },
                  success: function(data){
                     console.log(data);
                     $('#dataDiv').show();
                     $('#dataDiv').html(data);

                  }
               })
                  
            }
         function closedataDiv(){
            $('#dataDiv').hide();
         }
         
</script>