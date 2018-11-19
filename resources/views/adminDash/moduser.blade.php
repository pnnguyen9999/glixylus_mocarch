@extends('layouts.adminPage')

@section('body')
	 <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              	<div class="x_panel" style="height: auto">
                  	<div class="x_title">
                    	<h2>Tài khoản<small> - phê duyệt tài khoản</small></h2>
                    	<div class="clearfix"></div>          
                    </div>
                    	<table class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Tên tài khoản</th>
                          <th>Email</th>
                          <th>Trạng thái kích hoạt</th>
                          <th>Ngày tạo</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(!is_null($users))
                        @foreach($users as $user)
                          <tr>
                          <td>{{$user->id}}</td>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td>
                            <form action="{{url('/admin/modusers/activeUser')}}" method="POST" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <input type="hidden" value="{{$user->id}}" name="userID">
                              @if($user->actived == 1)
                              <p>Đã phê duyệt lúc {{$user->updated_at}}</p>
                              @else
                              <button type="submit" name="activeUser">Phê duyệt </button>
                              @endif
                            </form>
                          </td>
                          <td>{{$user->created_at}}</td>
                        </tr>
                        @endforeach
                        @endif                       
                      </tbody>
                    </table>
                </div>
            </div>
          </div>
      </div>
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
  function initFormAjax(){
    $('form').each(function(){
      var that = $(this);
      $(this).submit(false);
      $(this).on('submit',function(e){
        e.preventDefault();
        $.ajax({
          type:"POST",
          url:"/admin/modusers/activeUser",
          data: $(this).serialize(),
          success:function(data){
            that.empty();
            var activeText = "<p>Đã phê duyệt lúc " +  data + "</p>";
            that.append(activeText);
          }
        });
      });
    });
  }

initFormAjax();
</script>
@stop