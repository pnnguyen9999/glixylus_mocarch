<!-- đây là template mẫu chung (đính lấy làm master page nhé) -->
<!-- code thô trước rồi xong t bổ sung sau, code ngang phần mô thì nhắn t để t làm luôn front end phần nấy (admin control dashboard) -->
<!-- chúc may mắn ! -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}" />   
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>M.O.C AdminDashboard</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admindash/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admindash/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admindash/bootstrap/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('admindash/iCheck/skins/flat/green.css') }}" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('admindash/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('admindash/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('admindash/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  </head>
<!-- BẮT ĐẦU BODY -->
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><span>&nbsp;M.O.C Admin Dash</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- INTRO NHỎ GÓC TRÊN -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{URL::asset('img/Default/company_logo.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Xin chào</span>
                <h4 style="color: #eeeeee">{{Auth::user()->name}}</h4>
              </div>
            </div>
           <!-- INTRO NHỎ GÓC TRÊN -->

            <br />

            <!-- SIDE BAR MENU -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Danh mục</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Trang chính <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="/admin">Bảng điều khiển</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Chỉnh sửa<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('admin/modhome')}}">Trang chủ</a></li>
                      <li><a href="{{url('admin/modgallery')}}">Gallery</a></li>
                      <li><a href="{{url('admin/upload_image')}}" target="_blank">Upload hình</a></li>
                      <li><a href="{{url('admin/modarticle/type=0')}}">Bài viết</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-user"></i>Tài khoản<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('admin/modusers')}}">Phê duyệt</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
           <!-- SIDE BAR MENU -->

           <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>                                           
            </div>
           <!-- /menu footer buttons -->
        </div>
      </div>

        <!-- NAV GÓC TRÊN PHẢI -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="https://freeiconshop.com/wp-content/uploads/edd/person-flat.png" alt="">abc
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!-- <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="{{URL::asset('img/Default/company_logo.jpg')}}" alt="Profile Image" /></span>
                        <span>
                          <span>M.O.C Message</span>
                          <span class="time">0 phút trước</span>
                        </span>
                        <span class="message">
                          Chức năng này chưa khả dụng
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Tất cả thông báo</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
       <!-- NAV GÓC TRÊN PHẢI -->

       <div class="container">
          @yield('body')
       </div>
       
       <!-- jQuery -->
    <script type="text/javascript" src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>    
    <script src="{{ asset('admindash/jquery/dist/jquery.min.js') }}"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('admindash/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('admindash/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('admindash/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('admindash/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('admindash/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('admindash/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('admindash/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('admindash/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('admindash/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admindash/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('admindash/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('admindash/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('admindash/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('admindash/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('admindash/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('admindash/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('admindash/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('admindash/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('admindash/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('admindash/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('admindash/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('admindash/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('js/admin.js') }}"></script>
     <!-- tiny MCE -->
    <script src="{{ asset('https://cloud.tinymce.com/stable/tinymce.min.js') }}"></script>
    @yield("customJS")
  </body>
</html>