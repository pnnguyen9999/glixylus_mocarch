@extends('layouts.adminPage')

@section('body')
  <!-- NỘI DUNG TRANG -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->
          <h3>Modify image</h3>
          <div class="row">
             <!-- FORM UPLOAD ẢNH -->
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile"  style="height: 100%">
                <div class="x_title">
                  <h2>Upload hình</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <!-- UPLOAD FORM -->
                     <div style="padding: 15px">
                      <div class="col-lg-4 col-xs-12">
                          <label class="control-label" >Form upload</label>
                          <form action="{{url('/admin/upload_image/processing')}}" method="post" enctype="multipart/form-data" style="border:7px solid #EEEEEE;padding:10px">
                          {{ csrf_field() }}
                          <i><h5>Thêm hình ảnh</h5></i>
                            Hình ảnh:</br>
                              <input type="file" class="input-file" name="fileToUpload" id="fileToUpload" style="width:100%;border:1px solid #aaaaaa"></br>
                              <input type="submit" value="tải lên" name="submit" style="width:100%" class="btn btn-default"></br>
                             
                              <hr>
                          </form>
                      </div>
                      <div class="col-lg-8 col-xs-12">
                        Ảnh vừa upload
                        @if(isset($data['newImage']))
                        @if(!is_null($data['newImage']))
                        <img src="{{$data['newImage']->imageURL}}" width="100%" height="100%">
                        <input name='del' value="{{$data['newImage']->imageURL}}" readonly="true" style="width:100%;text-align:center"></input><br>
                        @endif
                        @else
                        <p>Chưa có ảnh nào được upload</p>
                        @endif 
                      </div>
                      </div>
                  </div>
                    <!-- / UPLOAD FORM -->
                    <!-- IMG FORM -->
                     <div class="col-lg-12" style="height: 100px;padding-top:20px">
                        <label class="control-label" >Ảnh đã upload</label>
                      </div>
                    <div class="col-lg-12 col-md-12" style="overflow-y: scroll;height: 700px;padding: 0x">
                    @if(isset($data['allImage'])) 
                    @if(!is_null($data['allImage']))
                    @foreach($data['allImage'] as $value)
                     <!-- article card -->
                        <div class="col-lg-3 col-md-6 col-xs-12 w3-card-4" >
                           <div class="thumbnail" style="height: auto">
                             <div class="image view view-first" style="height: 100%">
                                <img style="width: 100%;height:300px;object-fit: cover;" src="{{$value->imageURL}}" />
                             </div>
                            <form action="{{url('/admin/upload_image/delete')}}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                            <input name='del' value="{{$value->imageURL}}" readonly="true" style="width:100%;text-align:center"></input><br>
                            <input name="ID" value="{{$value->id}}" type="hidden">
                            <input name="imagePath" value='{{$value->imagePath}}' type="hidden">
                           <button type="submit" class="btn btn-danger col-xs-12" style="font-size: 10pt;padding: 5px"><i class="fa fa-times"></i>&nbsp;xóa</button>                               
                            </form>
                          </div>
                        </div>
                        <!-- article card -->
                    @endforeach
                    @endif      
                    @endif 
                    </div>
                    <!--  / IMG FORM -->
                </div>
              </div>
            </div>
           <!-- / FORM UPLOAD ẢNH -->
        </div>
        <!-- /page content -->

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