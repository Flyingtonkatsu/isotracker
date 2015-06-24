@extends('default')

@section('header')
Complaints <small>Action Required</small>
@stop

@section('content')
        <div class="row">
          <button type="button" class="btn btn-default">Go Back</button>
          <button type="button" class="btn btn-default">New Complaints</button>
          <button type="button" class="btn btn-default">Action Required</button>
          <button type="button" class="btn btn-default">My Complaints</button>
          <button type="button" class="btn btn-default">All Complaints</button>
          <button type="button" class="btn btn-default">Set-Up</button>
          <br/><br/>
          <div class="jumbotron_admin">
            <div class="over container body-content">
              <div class="col-lg-11">
                <div class="row">
                  <div class="col-lg-2">
                    <label><i class="fa fa-fw fa-calendar"></i>From:  </label>
                    <div class="dropdown">
                      <button class="btn btn-block btn-default dropdown-toggle" type="button" data-toggle="dropdown">All <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">All</a></li>
                        <li><a href="#">Customer</a></li>
                        <li><a href="#">Supplier</a></li>
                        <li><a href="#">Employee</a></li>
                        <li><a href="#">Various</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <label><i class="fa fa-fw fa-calendar"></i>About:  </label>
                    <div class="dropdown">
                      <button class="btn btn-block btn-default dropdown-toggle" type="button" data-toggle="dropdown">All <span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="#">All</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Process</a></li>
                        <li><a href="#">Customer</a></li>
                        <li><a href="#">Supplier</a></li>
                        <li><a href="#">Employee</a></li>
                        <li><a href="#">Others</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <label><i class="fa fa-fw fa-calendar"></i>Date From:  </label>
                    <input class="form-control">
                  </div>
                  <div class="col-lg-2">
                    <label><i class="fa fa-fw fa-calendar"></i>Date To:  </label>
                    <input class="form-control">
                  </div>
                  <div class="col-lg-2">
                    <br/>
                    <button type="button" class="btn btn-info">Find</button>
                  </div>
                  <div class="col-lg-2">
                    <label>Search: </label>
                    <input class="form-control">
                  </div>
                </div>

                <br/><br/>

                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped th_audit">
                    <thead>
                      <tr>
                        <th>Number</th>
                        <th>About</th>
                        <th>Type</th>
                        <th>Originator</th>
                        <th>Received</th>
                        <th>Assigned</th>
                        <th>Age</th>
                        <th>Status</th>
                        <th>Severity</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>COMP-12-0002</td>
                        <td>ZZZ Product, Small, O'Keefe  </td>
                        <td>Wrong Amount </td>
                        <td>Christopher Stainow, XYZ Ltd </td>
                        <td>14-Nov-2013 22:13</td>
                        <td>User One</td>
                        <td>586</td>
                        <td>Logged</td>
                        <td>3</td>
                        <td>
                          <a href="tables.html" class="jumbotron_admin_font"><i class="fa fa-fw fa-info-circle"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td>COMP-13-0001</td>
                        <td>AAA Product, Small, Miami </td>
                        <td>Broken Glass </td>
                        <td>Christopher Stainow, XYZ Ltd </td>
                        <td>14-Nov-2013 20:33</td>
                        <td>Two One</td>
                        <td>586</td>
                        <td>Accepted</td>
                        <td>2</td>
                        <td>
                          <a href="tables.html" class="jumbotron_admin_font"><i class="fa fa-fw fa-info-circle"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <label>Showing 1 to 2 of 2 Entries</label>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
@stop
