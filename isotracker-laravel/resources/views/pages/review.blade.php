@extends('default')

@section('header')
Review
@stop

@section('content')
        <div class="row">
          <div class="jumbotron_admin">
            <div class="over container body-content">
              <div class="col-lg-11">
                <div class="row">
                  <div class="col-lg-3">
                    <a href="#" class="jumbotron_admin_font"><font color="green"><i class="fa fa-fw fa-plus-square"></font></i>Add Review Item</a><br/>
                  </div>
                </div>
                <br/>
                <div class="row">
                  <div class="col-lg-2">
                    <label><i class="fa fa-fw fa-calendar"></i>Date From:  </label>
                    <input class="form-control">
                  </div>
                  <div class="col-lg-2">
                    <label><i class="fa fa-fw fa-calendar"></i>Date To:  </label>
                    <input class="form-control">
                  </div>
                  <div class="col-lg-2">
                    <label>Status: </label>
                    <select class="form-control">
                      <option>All</option>
                      <option>Open</option>
                      <option>In Progress</option>
                      <option>Completed</option>
                      <option>Overdue</option>
                    </select>
                  </div>
                  <div class="col-lg-4">
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
                        <th>Item</th>
                        <th>Objective</th>
                        <th>Responsibility</th>
                        <th>Status</th>
                        <th>%</th>
                        <th>Priority</th>
                        <th>Date Created</th>
                        <th>Date Due</th>
                        <th>Comment</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Sample Item</td>
                        <td>Sample Objective </td>
                        <td>Test Userone</td>
                        <td>In Progress</td>
                        <td>50%</td>
                        <td>Normal</td>
                        <td>24-Jun-2015 06:08</td>
                        <td>14-Jul-2015 16:00</td>
                        <td>Comment goes here.</td>
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
                <button type="button" class="btn btn-info">Generate Excel Report</button>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
@stop
