@extends('layouts.adminPage')

@section('body')
       <!-- NỘI DUNG TRANG -->
        <div class="right_col" role="main">
          <h3>Moc Gallery modify / edit</h3>
          <div class="row">
           <!--  FORM POST BÀI ĐĂNG - TEXT -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile"  style="height: auto">
                <div class="x_title">
                  <h2>CHỈNH SỬA BÀI VIẾT</h2>
                  <div class="clearfix"></div>
                </div>
                  
                <div class="x_content">
                  <!-- FORM POST -->
                      <br />

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('admin/modgallery/save_post')}}" method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="ID" value="{{$article->id}}">
                      <div class="form-group">
                        <label class="control-label">Chủ đề</label>
                        <div class="col-xs-12">
                          <select name="type" class="form-control">
                            <option value="0">Thiết kế</option>
                            <option value="1">Thi công</option>
                            <option value="2">Nội thất</option>
                            <option value="3">Cảnh quan</option>
                            <option value="4">Nhà gỗ</option>
                            <option value="5">Nghiên cứu</option>                          
                          </select>
                      </div>

                    </div>
                      <div class="form-group">
                        <label class="control-label" >Tên bài viết</label>
                        <div class="col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="title" value="{{$article->title}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tùy chọn mô tả</label>
                        <div class="col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="custom_description_field" value="{{$article->description}}">
                        </div>
                      </div>
                      <label class="control-label" >Nội dung bài viết</label>  <br>
                      (Upload hình ảnh ở ô công cụ bên cạnh)<br>
                      <!--  text area tạo đề -->
                             <!-- tiny MCE -->
                          <textarea id="postform" name="content">{{$article->content}}</textarea>
                             <!-- / tiny MCE -->
                      <!--  text area tạo đề -->
                          <input type="submit" value="save" name="submit" style="width:100%" class="btn btn-success"></br>
                    </form>
                  <!-- / FORM POST -->
                </div>
              </div>
            </div>
           <!--  / FORM POST BÀI ĐĂNG - TEXT -->
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

@section('customJS')
     <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  <script>tinymce.init({
  selector: 'textarea',
  height: 500,
  theme: 'modern',
  plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools contextmenu colorpicker textpattern help',
  toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });</script>
@stop
