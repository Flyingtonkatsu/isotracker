@extends('default')

@section('header')
Product
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
                      <i class="fa fa-fw fa-plus-circle"></i> Add Product</button>
                      <button type="button" class="btn btn btn-xs btn-default">
                        <i class="fa fa-fw fa-plus-circle"></i> Add Field</button>
                    <button type="button" class="btn btn btn-xs btn-default">
                      <i class="fa fa-fw fa-wrench"></i> Settings</button>
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
                        <th>Product</th>
                        <th>Supplier</th>
                        <th>Description</th>
                        <th>Town</th>
                        <th>Batch Number</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>AAA Product</td>
                        <td>AAA Supplier</td>
                        <td>Small</td>
                        <td>Miami</td>
                        <td>Blank Field</td>
                        <td>Active</td>
                        <td>
                          <a href="#" class="jumbotron_admin_font"><font color="green"><i class="fa fa-fw fa-exclamation-circle"></font></i></a>
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
