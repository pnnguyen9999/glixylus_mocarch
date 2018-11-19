
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>M.O.C</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
</head>

<body style="">

<div class="" style="width:300px">
<form action="upload" method="post" enctype="multipart/form-data" style="border-left:7px solid #EEEEEE;padding:10px">
{{ csrf_field() }}
<i><h5>Thêm hình ảnh</h5></i>
	<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-cog"></i></span>
	<input type="text" class="form-control" name="tieude" placeholder="thêm tiêu đề" style="width:100%"  onkeypress="if (event.keyCode == 13) {return false;}"></div>
	<div class="input-group">
	<span class="input-group-addon"><i class="fa fa-file-code-o"></i></span>
	<input type="text" class="form-control" name="mota" placeholder="thêm mô tả" style="width:100%"  onkeypress="if (event.keyCode == 13) {return false;}"></div><br>
Hình ảnh:</br>
	<input type="file" class="input-file" name="fileToUpload" id="fileToUpload" style="width:100%;border:1px solid #aaaaaa"></br>
	<input type="submit" value="tải lên" name="submit" style="width:100%" class="btn btn-default"></br>
	<hr>
</form>
</div>
<div class="col-sm-1"></div>
<div class="col-sm-10">
@foreach($data as $value)
<div class="col-sm-3" style="padding:5px;">

<div class="w3-card-2" style="background-color:#F5F5F5;border:1px solid #aaaaaa;padding:2px;height:440px;overflow-y: auto;">
<form action="modify" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
<table>
	<tr>
		<h4>{{ $value->nameOfimage}}</h4>
		<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
		<input type="text" class="form-control" name="stt" placeholder="{{ $value->orders }}" style="width:100%"></div>
		<hr>
		<i>{{ $value->descrition }}</i><br>


		<img src="img/{{ $value->imageURL }}" style="width:100%"><br>
		<input name='del' value="{{ $value->imageURL }}" readonly="true" style="width:100%;text-align:center"></input><br>
		<b>Chỉnh sửa:</b><br>
		<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-cog"></i></span>
    <input type="text" class="form-control" name="title" placeholder=". . .tiêu đề" style="width:100%"></div>
		<div class="input-group">
		<span class="input-group-addon"><i class="fa fa-file-code-o"></i></span>
		<input type="text" class="form-control" name="desc" placeholder=". . .mô tả" style="width:100%"></div>
	</tr>
</table>
<hr>
</div>
<div style="text-align:right;">
	<i class="fa fa-check" aria-hidden="true"></i><input type="submit" name="btn" value="save" class="btn btn-default btn-xs"></input>
	| <i class="fa fa-times" aria-hidden="true"></i><input type="submit" name="btn" value="remove" class="btn btn-default btn-xs"></input>
</div>

</form>
<hr>
</div>
@endforeach

</div>
<div class="col-sm-1"></div>
<div class="col-sm-12" style="height:20px"></div>
</body>
</html>
