@extends('layouts.adminPage')

@section('body')
    <!--  NỘI DUNG TRANG -->
      <!-- NỘI DUNG TRANG GIỮA -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">

                <!--UPLOAD SESSION HERE-->
                @if(Session::has("uploadSuccessful"))
                <div class="alert alert-success w3-animate-zoom" role="alert">
                  <strong>Thông báo : </strong> {{Session::get('uploadSuccessful')}}
                  </div>
                {!! Session::forget('uploadSuccessful')!!}               
                @elseif (Session::has("uploadFailed"))
                <div class="alert alert-danger w3-animate-zoom" role="alert">
                  <strong>Cảnh báo : </strong> {{Session::get('uploadFailed')}}
                  </div>
                {!! Session::forget('uploadFailed')!!}
                @endif
                <!--///////////////////////-->

                <div class="x_panel" style="height: auto">
                  <div class="x_title">
                    <h2>Modify <small>/ Trang chủ / + - Slide ảnh</small></h2>
                    <div class="clearfix"></div>
                     <!-- UPLOAD FORM -->
                    <div class="" style="width:300px">
                        <form action="upload" method="post" enctype="multipart/form-data" style="border-left:7px solid #EEEEEE;padding:10px">
                        {{ csrf_field() }}
                        <i><h5>Thêm hình ảnh</h5></i>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-cog"></i></span>
                          <input type="text" class="form-control" name="title" placeholder="thêm tiêu đề" style="width:100%"  onkeypress="if (event.keyCode == 13) {return false;}"></div>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-file-code-o"></i></span>
                          <input type="text" class="form-control" name="description" placeholder="thêm mô tả" style="width:100%"  onkeypress="if (event.keyCode == 13) {return false;}"></div><br>
                        Hình ảnh:</br>
                          <input type="file" class="input-file" name="fileToUpload" id="fileToUpload" style="width:100%;border:1px solid #aaaaaa"></br>
                          <input type="submit" value="tải lên" name="submit" style="width:100%" class="btn btn-default"></br>
                          <hr>
                        </form>
                    </div>
                     <!-- / UPLOAD FORM -->
                  </div>
                  <div class="x_content">

                  <!--MODIFY SESSION HERE-->
                    @if (Session::has('modifyWarning'))
                  <div class="alert alert-danger w3-animate-zoom" role="alert">
                  <strong>Cảnh báo : </strong> {{Session::get('modifyWarning')}}
                  </div>
                  {!! Session::forget('modifyWarning')!!}
                  @elseif (Session::has('modifySuccess'))
                  <div class="alert alert-success w3-animate-zoom" role="alert">
                  <strong>Thông báo : </strong> {{Session::get('modifySuccess')}}
                  </div>
                  {!! Session::forget('modifySuccess')!!}
                  @endif
                  <!--//////////////////////-->
                      <div style="width: auto;height: 700px;overflow-x: scroll;">
                     <!-- IMAGE FORM -->
                       @foreach($data["wallpapers"] as $value)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" style="padding:5px;float: left">
                        <div class="w3-card-2" style="background-color:#F5F5F5;border:1px solid #aaaaaa;padding:2px;height:500px;overflow-y: auto;">
                        <form action="modify" method="post" enctype="multipart/form-data">
                          {{ csrf_field() }}
                        <table>
                          <tr>
                            <h4>Ảnh slide: {{ $value->nameOfimage }}</h4>
                            <input type="hidden" name="nameOfimage" value="{{$value->nameOfimage}}">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
                                <input type="hidden" name="ID" value="{{$value->id}}">
                                <input type="text" class="form-control" name="order" placeholder="{{ $value->notes }}" style="width:100%" value="{{ $value->notes }}">
                            </div>
                            <b>Chỉnh sửa nội dung:</b><br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-cog"></i></span>
                                <input type="text" class="form-control" name="title" placeholder=". . .tiêu đề"  style="width:100%" value="{{$value->title}}">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file-code-o"></i></span>
                                <input type="text" class="form-control" name="description" placeholder=". . .mô tả" style="width:100%" value="{{$value->description}}">
                            </div>
                            <hr>
                            <i>{{ $value->description }}</i><br>
                            <input name='imageURL' value="{{ $value->imageURL }}" readonly="true" style="width:100%;text-align:center"></input>
                            <input type="hidden" value="{{$value->imagePath}}" name="imagePath">
                            <br>
                            <img src="{{ $value->imageURL }}" style="width:100%"><br>
                            
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
                      <!-- / IMAGE FORM -->
                  </div>
                </div>
                <!-- INFO MODIFY -->
                 <div class="x_panel" style="height: 400px">
                  <div id="companySS">
                  </div>

                  <div class="x_title">
                    <h2>Modify <small>/ Trang chủ / + - Thông tin liên hệ</small></h2>
                    <div class="clearfix"></div>
                  </div>
                    <form action="edit_company_info" method="POST" enctype="multipart/form-data" id="companyForm">
                        {{ csrf_field() }}
                      <div class="form-group" style="padding: 10px">
                        <label class="control-label" >Địa chỉ:</label>
                        <div class="col-xs-12" style="padding: 10px">
                          <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12" name="address">
                        </div>
                      </div>
                      <div class="form-group" style="padding: 10px">
                        <label class="control-label" >Số điện thoại:</label>
                        <div class="col-xs-12" style="padding: 10px">
                          <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12" name="phone_number">
                        </div>
                      </div>
                      <div class="form-group" style="padding: 10px">
                        <label class="control-label" >Email:</label>
                        <div class="col-xs-12" style="padding: 10px">
                          <input type="text" id="" required="required" class="form-control col-md-7 col-xs-12" name="email">
                        </div>
                      </div>
                      <br>
                      <div style="padding: 15px;"></div>
                      <input type="submit" value="save" name="submit" style="display: inline;padding: 5px 100px" class="btn btn-success" id="companySubmitBtn"></br>
                    </form>
                </div>

                <!-- // INFO MODIFY -->
                <!-- LOGO ADD -->
                 <div class="x_panel" style="height: auto">
                  <div class="x_title">
                    @if (Session::has('uploadLogoFailed'))
                  <div class="alert alert-danger w3-animate-zoom" role="alert">
                  <strong>Cảnh báo : </strong> {{Session::get('uploadLogoFailed')}}
                  </div>
                  {!! Session::forget('uploadLogoFailed')!!}
                  @elseif (Session::has('uploadLogoSuccessful'))
                  <div class="alert alert-success w3-animate-zoom" role="alert">
                  <strong>Thông báo : </strong> {{Session::get('uploadLogoSuccessful')}}
                  </div>
                  {!! Session::forget('uploadLogoSuccessful')!!}
                  @endif
                  <div id="logoSS">
                    
                  </div>
                    <h2>Modify <small>/ Trang chủ / + - Logo</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <!-- FORM UPLOAD -->
                   <div class="" style="width:300px">
                        <form action="upload_new_logo" method="post" enctype="multipart/form-data" style="border-left:7px solid #EEEEEE;padding:10px">
                        {{ csrf_field() }}
                        <i><h5>Thêm logo nhà đồng hành</h5></i>
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-file-code-o"></i></span>
                          <input type="text" class="form-control" name="linkToCompany" placeholder="thêm URL trang web chủ logo" style="width:100%"  onkeypress="if (event.keyCode == 13) {return false;}"></div><br>
                        Hình ảnh:</br>
                          <input type="file" class="input-file" name="fileToUpload" id="fileToUpload" style="width:100%;border:1px solid #aaaaaa"></br>
                          <input type="submit" value="tải lên" name="submit" style="width:100%" class="btn btn-default" id="logoSubmitBtn"></br>
                          <hr>
                        </form>
                   </div>
                   <!-- // FORM UPLOAD -->
                   <div style="width: 100%">
                    @if (Session::has('modifyLogoFailed'))
                  <div class="alert alert-danger w3-animate-zoom" role="alert">
                  <strong>Cảnh báo : </strong> {{Session::get('modifyLogoFailed')}}
                  </div>
                  {!! Session::forget('modifyLogoFailed')!!}
                  @elseif (Session::has('modifyLogoSuccess'))
                  <div class="alert alert-success w3-animate-zoom" role="alert">
                  <strong>Thông báo : </strong> {{Session::get('modifyLogoSuccess')}}
                  </div>
                  {!! Session::forget('modifyLogoSuccess')!!}
                  @endif

                    @if(!is_null($data["logos"]))
                    @foreach($data["logos"] as $value)
                    <div class="col-xs-2" style="border: 1px solid #999999;padding: 0px">
                      <form action="modify_logo" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       <img src="{{$value->imageURL}}" width="100%" style="object-fit: cover;">
                       <input type="hidden" value="{{$value->imagePath}}" name="imagePath">
                       <input type="hidden" value="{{$value->id}}" name="ID">
                       <br>
                       <input name='imageURL' value="{{ $value->imageURL }}" readonly="true" style="width:100%;text-align:center"></input>
                       <!-- xóa -->
                       <div style="text-align:right;">
                          <i class="fa fa-times" aria-hidden="true"></i><input type="submit" name="btn" value="remove" class="btn btn-default btn-xs"></input>
                       </div>
                     </form>
                     </div>
                    @endforeach
                    @endif
                   </div>
                </div>
                <!-- // LOGO ADD -->
              </div>
            </div>
        </div>
        <!-- / NỘI DUNG TRANG GIỮA -->
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

@section('customJS')
<script>
                  $("#companyForm").submit(false);
                  $("#companyForm").on('submit',function(e){
                    e.preventDefault();
                    $("#companySubmitBtn").prop('disabled', true);
                    $.ajax({
                      type: "POST",
                      url: "/admin/edit_company_info",
                      data: $(this).serialize(),
                      success: function(data){
                        $data = $(data);
                        $("#companySS").html($data);
                        $("#companySubmitBtn").prop('disabled', false);
                      }
                    });
                  });
</script>
@stop