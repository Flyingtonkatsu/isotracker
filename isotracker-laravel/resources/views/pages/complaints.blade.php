@extends('default')

@section('header')
Complaints <small>Action Required</small>
@stop

@section('content')
        <div class="row">
          <button type="button" class="btn btn btn-xs btn-default"><i class="fa fa-fw fa-arrow-left"></i> Go Back</button>
          <button type="button" class="btn btn btn-xs btn-default"><i class="fa fa-fw fa-plus-circle"></i> New Complaints</button>
          <button type="button" class="btn btn btn-xs btn-default"><i class="fa fa-fw fa-exclamation-triangle"></i> Action Required</button>
          <button type="button" class="btn btn btn-xs btn-default"><i class="fa fa-fw fa-user"></i> My Complaints</button>
          <button type="button" class="btn btn btn-xs btn-default"><i class="fa fa-fw fa-list-ul"></i> All Complaints</button>
          <button type="button" class="btn btn btn-xs btn-default"><i class="fa fa-fw fa-wrench"></i> Set-Up</button>
          <br/><br/>
          <div class="jumbotron_admin">
            <div class="over container body-content">
              <div class="col-lg-11">
                <div class="row">
                  <div class="col-lg-2">
                    <label>From:  </label>
                    <select class="form-control">
                      <option>All</option>
                      <option>Customer</option>
                      <option>Supplier</option>
                      <option>Employee</option>
                      <option>Various</option>
                    </select>
                  </div>
                  <div class="col-lg-2">
                    <label>About:  </label>
                    <select class="form-control">
                      <option>All</option>
                      <option>Product</option>
                      <option>Process</option>
                      <option>Customer</option>
                      <option>Supplier</option>
                      <option>Employee</option>
                      <option>Others</option>
                    </select>
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
                    <button type="button" class="btn btn-md btn-info"><i class="fa fa-fw fa-search"></i> </button>
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
                          <a href="#" class="jumbotron_admin_font"><font color="red"><i class="fa fa-fw fa-info-circle"></font></i></a>
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
                          <a href="#" class="jumbotron_admin_font"><font color="red"><i class="fa fa-fw fa-info-circle"></font></i></a>
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
