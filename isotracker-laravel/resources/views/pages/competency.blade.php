@extends('default')

@section('header')
Competency
@stop

@section('content')

<!-- row with button control-->
<div class="row">

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-arrow-left fa-fw"></i> Back</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-plus-circle fa-fw"></i> New Assessment</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-exclamation fa-fw"></i> Action Required</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-edit fa-fw"></i> My Assessments</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-list fa-fw"></i> All Assessments</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-briefcase fa-fw"></i> Escalation Notification</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-wrench fa-fw"></i> Setup</button>
</div>
<br>

<div class="row">
	<div class="jumbotron_admin">
		<div class="over container body-content">
			<div class="col-lg-11">

<!-- search bar-->
<div class="row" style="padding-top: 5px">
	<div class="col-lg-12">
		<label>Enter Keyword(s) : </label> <input class="form-control-inline">
		<button type="submit" class= "btn btn-sm btn-info"> Search </button>
	</div>
</div>

<br>

<!-- table with results -->
<div class="row" style="padding-top: 5px">
	<div class="table-responsive" style="padding-left: 10px; padding-right: 10px">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr style="background-color: #FFF">
                    <th>Assessment No</th>
                    <th>Name</th>
                    <th>Trainer</th>
                    <th>Trainee</th>
                    <th>Tests</th>
                    <th>Date and Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="8"> No items to display. </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</div>
</div>
</div>
</div>

@stop