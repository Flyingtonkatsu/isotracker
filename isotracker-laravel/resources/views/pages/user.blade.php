@extends('default')

@section('header')
User Information
@stop

@section('content')

    <div class="row">
      <div class="col-lg-12">
        <h2>
          Edit User Information
        </h2>
      </div>
    </div>

<!-- Form input fields -->
    <div class="row">
      <div class="col-lg-8">

        <div class="form-group">

          <div class="row">
            <div class="col-lg-6">
              <label>First Name</label>
              <input class="form-control" placeholder="e.g. Juan">
            </div>

            <div class="col-lg-6">
              <label>Last Name</label>
              <input class="form-control" placeholder="e.g. dela Cruz">
            </div>
          </div>
          
            <label>E-Mail</label>
            <input class="form-control" placeholder="e.g. user@example.com">

            <label>Current Password</label>
            <input class="form-control" placeholder="Current Password">

            <label>New Password</label>
            <input class="form-control" placeholder="New Password">

            <label>Confirm Password</label>
            <input class="form-control" placeholder="Confirm Password">


        </div>

        <div class="form-group">
          <label>E-Mail notifications: </label>
          <input type="checkbox">
          </label>
        </div>

        <div class="row" >
          <button type="submit" class="btn btn-default"> Save Changes </button>
        </div>

      </div>
    </div>
<!-- /Form input fields-->

  </div>
</div>

@stop
