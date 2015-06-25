@extends('default')

@section('header')
Change Logo
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
                  <label>
                    The required dimensions of your logo are 220 x 70 pixels and either in GIF or JPEG format. If it is smaller than that, then it will be resized upwards and it may looked blurred. If it is larger than that it will be rejected. Please contact us if you have any problems.
                  </label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Click here to return to default UP ITDC logo and then click on submit.
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Click here to use another logo, select logo image and then click on submit.
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
