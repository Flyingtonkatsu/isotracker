@extends('default')

@section('header')
Administrator Menu
@stop

@section('content')
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron_admin">
                  <div class="over container body-content">
                    <div class="col-sm-4">
                        <a href="admin_manage_users" class="jumbotron_admin_font">
                          <i class="fa fa-user fa-2x"></i> &nbsp Manage Users</a> <br/><br/>
                        <a href="admin_select_timezone" class="jumbotron_admin_font">
                          <i class="fa fa-clock-o fa-2x"></i> &nbsp Select Time Zone</a> <br/><br/>
                        <a href="admin_change_logo" class="jumbotron_admin_font">
                          <i class="fa fa-leaf fa-2x"></i> &nbsp Change Logo</a> <br/><br/>
                        <a href="admin_summary_scroll_text" class="jumbotron_admin_font">
                          <i class="fa fa-caret-square-o-down fa-2x"></i> &nbsp Summary Scroll Text</a> <br/><br/>
                        <a href="admin_report_module_access" class="jumbotron_admin_font">
                          <i class="fa fa-book fa-2x"></i> &nbsp Report Module Access</a> <br/><br/>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-briefcase fa-2x"></i> &nbsp Customer</a> <br/><br/>
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-truck fa-2x"></i> &nbsp Supplier</a> <br/><br/>
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-child fa-2x"></i> &nbsp Employee</a> <br/><br/>
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-lightbulb-o fa-2x"></i> &nbsp Product</a> <br/><br/>
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-reorder fa-2x"></i> &nbsp Process</a> <br/><br/>
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-globe fa-2x"></i> &nbsp Various</a> <br/><br/>
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-spinner fa-2x"></i> &nbsp Review</a> <br/><br/>
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-eraser fa-2x"></i> &nbsp Delete Data</a> <br/><br/>
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-times-circle-o fa-2x"></i> &nbsp Non-Conformance</a> <br/><br/>
                        <a href="#" class="jumbotron_admin_font">
                          <i class="fa fa-cubes fa-2x"></i> &nbsp Modules</a> <br/><br/>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
@stop
