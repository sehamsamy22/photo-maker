@extends('layout.boxed')
@section('title')

الخلفيات الرئيسه
@endsection


@section('aside')
<aside class="main-sidebar">

<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

  <!-- Sidebar user panel (optional) -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <!-- Status -->
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- search form (Optional) -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
      </span>
    </div>
  </form>
  <!-- /.search form -->

  <!-- Sidebar Menu -->
  <ul class="sidebar-menu">
    <li class="header">HEADER</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{url('/setting')}}"><i class="fa fa-link"></i> <span>الضبط</span></a></li>
    <li><a href="{{url('/addbackground')}}"><i class="fa fa-link"></i> <span>اضافه صور</span></a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href="#">Link in level 2</a></li>
        <li><a href="#">Link in level 2</a></li>
      </ul>
    </li>
  </ul><!-- /.sidebar-menu -->
</section>
<!-- /.sidebar -->
</aside>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

<section class="content-header">
 
  
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">



<section class="content-header">
          <h1>
            Data Tables
            <small>advanced tables</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="{{url('/start')}}"><i class="fa fa-dashboard"></i> الرئسيه</a></li>
            <li  class="active"><a href="{{url('/category')}}">الاقسام</a></li>
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">القسم السادس</h3>
                   <h5><a href="/addimage">اضافه صوره جديده</a></h5>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>اسم القسم</th>
                        <th>عرض صوره القسم</th>
                      
                        <th>صلاحيات الادمن </th>
                       
                      </tr>
                    </thead>
                    <tbody>

                       <tr>
                        <td></td>
                        <td><img src="" width="100px" height="100px"></td>
                          <td>
                         
                          <a class="btn btn-danger" href="">delete</a>
                          <a class="btn btn-primary" href="/addimage ">Edit</a>
                          </td>
                      
                      </tr>                                         </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->






</section><!-- /.content -->




</div><!-- /.content-wrapper -->



<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Create the tabs -->
<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
  <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
</ul>
<!-- Tab panes -->
<div class="tab-content">
  <!-- Home tab content -->
  <div class="tab-pane active" id="control-sidebar-home-tab">
    <h3 class="control-sidebar-heading">Recent Activity</h3>
    <ul class="control-sidebar-menu">
      <li>
        <a href="javascript::;">
          <i class="menu-icon fa fa-birthday-cake bg-red"></i>
          <div class="menu-info">
            <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
            <p>Will be 23 on April 24th</p>
          </div>
        </a>
      </li>
    </ul><!-- /.control-sidebar-menu -->

    <h3 class="control-sidebar-heading">Tasks Progress</h3>
    <ul class="control-sidebar-menu">
      <li>
        <a href="javascript::;">
          <h4 class="control-sidebar-subheading">
            Custom Template Design
            <span class="label label-danger pull-right">70%</span>
          </h4>
          <div class="progress progress-xxs">
            <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
          </div>
        </a>
      </li>
    </ul><!-- /.control-sidebar-menu -->

  </div><!-- /.tab-pane -->
  <!-- Stats tab content -->
  <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
  <!-- Settings tab content -->
  <div class="tab-pane" id="control-sidebar-settings-tab">
    <form method="post">
      <h3 class="control-sidebar-heading">General Settings</h3>
      <div class="form-group">
        <label class="control-sidebar-subheading">
          Report panel usage
          <input type="checkbox" class="pull-right" checked>
        </label>
        <p>
          Some information about this general settings option
        </p>
      </div><!-- /.form-group -->
    </form>
  </div><!-- /.tab-pane -->
</div>
</aside><!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
   immediately after the control sidebar -->
@endsection




@section('footer')

  
{ !!  Html:: script('/plugins/datatables/jquery.dataTables.min.js')!!}
{ !!  Html:: script('/plugins/datatables/dataTables.bootstrap.min.js')!!}
@endsection
<script>
    $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
        </script>