@extends('default')

@section('header')
Change Logo
@stop

@section('content')
        <div class="row">
          <div class="jumbotron_admin">
            <div class="over container body-content">
              <div class="row">
                <div class="col-lg-9">
                  <button type="button" class="btn btn btn-xs btn-default">
                    <i class="fa fa-fw fa-arrow-left"></i> Go Back
                  </button>
                  <br/><br/>
                  <label>
                    Assign access to the Reports module below.
                  </label>
                  <br/><br/>
                  <label>Search User: &nbsp</label><input class="form-control-inline">
                  <button type="button" class="btn btn-info">Search</button>
                </div>
              </div>
              <br/><br/>
              <div class="row">
                <div class="col-lg-11">

                  <div class="col-lg-5">
                    <div class="panel panel-green">
                      <div class="panel-heading">All Users</div>
                      <ul class="list-group">
                        <a href="#" class="list-group-item">User One</a>
                        <a href="#" class="list-group-item">User Two</a>
                        <a href="#" class="list-group-item">User Three</a>
                        <a href="#" class="list-group-item"><br/></a>
                        <a href="#" class="list-group-item"><br/></a>
                      </ul>
                    </div>
                  </div>

                  <div class="col-lg-2">
                    <br/><br/>
                    <button type="button" class="btn btn-default">Add <i class="fa fa-angle-double-right"></i></button><br/><br/>
                    <button type="button" class="btn btn-default"><i class="fa fa-angle-double-left"></i> Remove</button><br/><br/>
                    <button type="button" class="btn btn-default">Add All <i class="fa fa-angle-double-right"></i></button><br/><br/>
                    <button type="button" class="btn btn-default"><i class="fa fa-angle-double-left"></i> Remove All</button>
                  </div>

                  <div class="col-lg-5">
                    <div class="panel panel-green">
                      <div class="panel-heading">Users with Reports Module Access</div>
                      <ul class="list-group">
                        <a href="#" class="list-group-item">User Four</a>
                        <a href="#" class="list-group-item">User Five</a>
                        <a href="#" class="list-group-item"><br/></a>
                        <a href="#" class="list-group-item"><br/></a>
                        <a href="#" class="list-group-item"><br/></a>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

              <br/>
              <button type="button" class="btn btn-info">Submit</button>
              <button type="button" class="btn btn-info">Close</button>

            </div>
          </div>
        </div>
        <!-- /.row -->
@stop
