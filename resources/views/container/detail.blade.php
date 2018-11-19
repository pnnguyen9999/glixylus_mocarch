<div style="padding:10px;border-left:2px solid #C7C7C7;height: 100%;">
	<div style="width:25px;height: 23px;float:right;background-color:#f7f7f7;cursor: pointer" onclick="closedataDiv()">
  		<b>X</b>
	</div> 
	@foreach($dataItem as $itemValue)
		<div><b>{{ $itemValue->name }}</b></div>
		<div style="text-align: left">
			<h5>{{ $itemValue->price }}
				<button type="button" class="btn btn-success btn-xs" style="float:right"><span class="glyphicon glyphicon-shopping-cart"></span> thêm vào giỏ</button></h5>
			<div style="padding:20px;width: 100%;height: 150px;text-align: center">
				<img src="/img/item1.png" width="50%">
			</div>
			<div>{{ $itemValue->des }}</div>
		</div>
	@endforeach
</div>
      