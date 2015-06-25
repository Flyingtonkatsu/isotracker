@extends('default')

@section('header')
Summary Scroll Text
@stop

@section('content')
        <div class="row">
          <div class="jumbotron_admin">
            <div class="over container body-content">
              <div class="col-lg-4">
                <div class="row">
                  <div class="col-lg-9">
                    <button type="button" class="btn btn btn-xs btn-default">
                      <i class="fa fa-fw fa-arrow-left"></i> Go Back</button>
                  </div>
                </div>
                <br/>

                <div class="form-group">
                  <label>Scroll Text: </label>
                  <textarea class="form-control" rows="3">This is the UP ITDC ISO Tracker.</textarea><br/>

                  <label>Start Date: </label>
                  <input class="form-control-inline" value="25-Jun-2015"><i class="fa fa-fw fa-calendar"></i><br/>

                  <label>End Date: </label>
                  <input class="form-control-inline" value="25-Jun-2015"><i class="fa fa-fw fa-calendar"></i><br/>

                  <div class="checkbox">
                    <label>
                      <input type="checkbox" value="1"> Display
                    </label>
                  </div>
                </div>

                <br/>
                <button type="button" class="btn btn-info">Submit</button>
                <button type="button" class="btn btn-info">Close</button>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
@stop
