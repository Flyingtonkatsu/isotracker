@extends('default')

@section('header')
Employee
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
                      <i class="fa fa-fw fa-plus-circle"></i> Add Employee</button>
                    <button type="button" class="btn btn btn-xs btn-default">
                      <i class="fa fa-fw fa-upload"></i> Bulk Upload Users</button>
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
                        <th>Number</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Department</th>
                        <th>Job Title</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Country</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>AB - 001</td>
                        <td>George</td>
                        <td>Wallace</td>
                        <td>Administration</td>
                        <td>Assistant</td>
                        <td>georgew@lennoxhill.com </td>
                        <td> </td>
                        <td>United Kingdom</td>
                        <td>Active</td>
                        <td>
                          <a href="#" class="jumbotron_admin_font"><font color="green"><i class="fa fa-fw fa-exclamation-circle"></font></i></a>
                          <a href="#" class="jumbotron_admin_font"><font color="red"><i class="fa fa-fw fa-times-circle"></font></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <label>Showing 1 to 1 of 1 Entries</label>
                <br/><br/>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
@stop
