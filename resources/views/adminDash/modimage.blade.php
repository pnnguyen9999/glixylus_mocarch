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
                          <form action="upload" method="post" enctype="multipart/form-data" style="border:7px solid #EEEEEE;padding:10px">
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
                        <img src="img/set1/1.jpg" width="100%" height="100%">
                        <input name='del' value="link ảnh" readonly="true" style="width:100%;text-align:center"></input><br>
                      </div>
                      </div>
                  </div>
                    <!-- / UPLOAD FORM -->
                    <!-- IMG FORM -->
                     <div class="col-lg-12" style="height: 100px;padding-top:20px">
                        <label class="control-label" >Ảnh đã upload</label>
                      </div>
                    <div class="col-lg-12 col-md-12" style="overflow-y: scroll;height: 700px;padding: 0x">  
                      <div class="col-lg-3 col-md-4 col-xs-6" style="border-right: 2px solid #eeeeee">
                        <img src="img/set1/1.jpg" width="100%" height="100%">
                        <input name='del' value="link ảnh" readonly="true" style="width:100%;text-align:center"></input><br>
                      </div>
                      <div class="col-lg-3 col-md-4 col-xs-6" style="border-right: 2px solid #eeeeee">
                        <img src="img/set1/1.jpg" width="100%" height="100%">
                        <input name='del' value="link ảnh" readonly="true" style="width:100%;text-align:center"></input><br>
                      </div>
                      <div class="col-lg-3 col-md-4 col-xs-6" style="border-right: 2px solid #eeeeee">
                        <img src="img/set1/1.jpg" width="100%" height="100%">
                        <input name='del' value="link ảnh" readonly="true" style="width:100%;text-align:center"></input><br>
                      </div>
                      <div class="col-lg-3 col-md-4 col-xs-6" style="border-right: 2px solid #eeeeee">
                        <img src="img/set1/1.jpg" width="100%" height="100%">
                        <input name='del' value="link ảnh" readonly="true" style="width:100%;text-align:center"></input><br>
                      </div>
                      <div class="col-lg-3 col-md-4 col-xs-6" style="border-right: 2px solid #eeeeee">
                        <img src="img/set1/1.jpg" width="100%" height="100%">
                        <input name='del' value="link ảnh" readonly="true" style="width:100%;text-align:center"></input><br>
                      </div>
                      <div class="col-lg-3 col-md-4 col-xs-6" style="border-right: 2px solid #eeeeee">
                        <img src="img/set1/1.jpg" width="100%" height="100%">
                        <input name='del' value="link ảnh" readonly="true" style="width:100%;text-align:center"></input><br>
                      </div>
                      <div class="col-lg-3 col-md-4 col-xs-6" style="border-right: 2px solid #eeeeee">
                        <img src="img/set1/1.jpg" width="100%" height="100%">
                        <input name='del' value="link ảnh" readonly="true" style="width:100%;text-align:center"></input><br>
                      </div>
                      <div class="col-lg-3 col-md-4 col-xs-6" style="border-right: 2px solid #eeeeee">
                        <img src="img/set1/1.jpg" width="100%" height="100%">
                        <input name='del' value="link ảnh" readonly="true" style="width:100%;text-align:center"></input><br>
                      </div>
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