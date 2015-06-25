@extends('default')

@section('header')
Time Zone
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
                  </div>
                </div>
                <br/>

                <div class="form-group">
                  <label>Time Zone<font color="red">*</font>:</label>
                  <select class="form-control-inline">
                    <option>All</option>
                    <option>Europe/London (GMT + 1)</option>
                    <option>Pacific (GMT + 9)</option>
                    <option>Asia/Bangkok (GMT + 7)</option>
                  </select><br/>
                  <label>Current Date & Time:	</label> 25 June, 2015 06:55 <br/>
                  <label>Selected Time Zone: </label> Europe/London (GMT + 1)
                </div>
                <br/>
                <button type="button" class="btn btn-info">Export Users</button>
                <button type="button" class="btn btn-info">Close</button>

              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
@stop
