@extends('default')

@section('header')
Audits <small>Action Required</small>
@stop

@section('content')
        <div class="row">
          <button type="button" class="btn btn btn-xs btn-default">
            <i class="fa fa-fw fa-arrow-left"></i> Go Back</button>

          <button type="button" class="btn btn btn-xs btn-default">
            <i class="fa fa-fw fa-plus-circle"></i> New Audit</button>

          <button type="button" class="btn btn btn-xs btn-default">
            <i class="fa fa-fw fa-exclamation-triangle"></i> Action Required</button>

          <button type="button" class="btn btn btn-xs btn-default">
            <i class="fa fa-fw fa-edit"></i> My Audits</button>

          <button type="button" class="btn btn btn-xs btn-default">
            <i class="fa fa-fw fa-list"></i> All Audits</button>

          <button type="button" class="btn btn btn-xs btn-default">
            <i class="fa fa-fw fa-calendar"></i> Status Calendar</button>

          <button type="button" class="btn btn btn-xs btn-default">
            <i class="fa fa-fw fa-wrench"></i> Setup</button>
         
          <br/><br/>
          <div class="jumbotron_admin">
            <div class="over container body-content">
              <div class="col-lg-11">
                <div class="row">
                  <div class="col-lg-3">
                    <label><i class="fa fa-fw fa-calendar"></i>Date From:  </label>
                    <input class="form-control">
                  </div>
                  <div class="col-lg-3">
                    <label><i class="fa fa-fw fa-calendar"></i>Date To:  </label>
                    <input class="form-control">
                  </div>
                  <div class="col-lg-3">
                    <br/>
                    <button type="button" class="btn btn-info">Find</button>
                    <button type="button" class="btn btn-info">Clear</button>
                  </div>
                  <div class="col-lg-3">
                    <label>Search: </label>
                    <input class="form-control">
                  </div>
                </div>

                <br/><br/>

                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped th_audit">
                    <thead>
                      <tr>
                        <th>Audit No</th>
                        <th>Title</th>
                        <th>Type</th>
                        <th>Auditor</th>
                        <th>Auditee</th>
                        <th>Questions</th>
                        <th>Status</th>
                        <th>Date & Time</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>AUD-13-0001</td>
                        <td>An example of a typical graded audit with a checklist that was uploaded into isoTracker </td>
                        <td>Internal</td>
                        <td>Super Admin</td>
                        <td>User One</td>
                        <td>60</td>
                        <td>Awaiting</td>
                        <td>14-Jul-2014 16:00</td>
                        <td>
                          <a href="#" class="jumbotron_admin_font"><font color="red"><i class="fa fa-fw fa-info-circle"></font></i></a>
                          <a href="#" class="jumbotron_admin_font"><i class="fa fa-fw fa-rocket"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>

                <label>Showing 1 to 1 of 1 Entries</label>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
@stop
