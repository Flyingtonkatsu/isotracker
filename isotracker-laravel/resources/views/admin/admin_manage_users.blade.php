@extends('default')

@section('header')
User Listing
@stop

@section('content')
        <div class="row">
          <div class="jumbotron_admin">
            <div class="over container body-content">
              <div class="col-lg-11">
                <div class="row">
                  <div class="col-lg-9">
                    <button type="button" class="btn btn btn-xs btn-default">
                      <i class="fa fa-fw fa-arrow-left"></i> Go Back</button>
                    <button type="button" class="btn btn btn-xs btn-default">
                      <i class="fa fa-fw fa-plus-circle"></i> Create New User</button>
                    <button type="button" class="btn btn btn-xs btn-default">
                      <i class="fa fa-fw fa-upload"></i> Bulk Upload Users</button>
                    <button type="button" class="btn btn btn-xs btn-default">
                      <i class="fa fa-fw fa-send"></i> Send Password</button>
                    <button type="button" class="btn btn btn-xs btn-default">
                      <i class="fa fa-fw fa-list"></i> Signature Count</button>
                  </div>
                  <div class="col-lg-3">
                    <label>Search: </label>
                    <input class="form-control-inline">
                  </div>
                </div>

                <br/><br/>

                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped th_audit">
                    <thead>
                      <tr>
                        <th>Action</th>
                        <th>Name</th>
                        <th>User Name</th>
                        <th>Administrator</th>
                        <th>Doc Admin</th>
                        <th>Status</th>
                        <th>Count</th>
                        <th>Email</th>
                        <th>Login</th>
                        <th>Last Login</th>
                        <th>Registration Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <a href="#" class="jumbotron_admin_font"><font color="green"><i class="fa fa-fw fa-exclamation-circle"></font></i></a>
                          <a href="#" class="jumbotron_admin_font"><font color="red"><i class="fa fa-fw fa-times-circle"></font></i></a>
                        </td>
                        <td>Test Userone</td>
                        <td>testuser1</td>
                        <td>CT</td>
                        <td></td>
                        <td>Active</td>
                        <td>3</td>
                        <td>Yes</td>
                        <td>3</td>
                        <td>24-Jun-2015 06:08</td>
                        <td>14-Jun-2014 16:00</td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <label>Showing 1 to 1 of 1 Entries</label>
                <br/><br/>
                <button type="button" class="btn btn-info">Export Users</button>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
@stop
