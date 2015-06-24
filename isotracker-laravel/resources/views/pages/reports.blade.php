@extends('default')

@section('header')
Reports
@stop

@section('content')
 	<div class="row">
	<div class="jumbotron_admin">
	<div class="over container body-content">
  	<div class="col-lg-11">

  		<div class="row">
  			<div class="col-lg-6 col-md-8">
  				<a href="reports_documents">
  				<div class="panel panel-primary">
  					<div class="panel-heading">
  						<div class="row">
  							<div class="col-xs-2">
  								<i class="fa fa-comments fa-5x"></i>
  							</div>
  							<div class="col-xs-8 huge text-center"> Documents</div>
  						</div>
  					</div>
  				</div>
  				</a>
  			</div>
  		</div>

  		<div class="row">
  			<div class="col-lg-6 col-md-8">
  				<a href="reports_complaints">
  				<div class="panel panel-red">
  					<div class="panel-heading">
  						<div class="row">
  							<div class="col-xs-2">
  								<i class="fa fa-exclamation-triangle fa-5x"></i>
  							</div>
  							<div class="col-xs-8 huge text-center"> Complaints</div>
  						</div>
  					</div>
  				</div>
  				</a>
  			</div>
  		</div>

  		<div class="row">
  			<div class="col-lg-6 col-md-8">
  				<a href="reports_audits">
  				<div class="panel panel-yellow">
  					<div class="panel-heading">
  						<div class="row">
  							<div class="col-xs-2">
  								<i class="fa fa-check-square fa-5x"></i>
  							</div>
  							<div class="col-xs-8 huge text-center"> Audits</div>
  						</div>
  					</div>
  				</div>
  				</a>
  			</div>
  		</div>

  		<div class="row">
  			<div class="col-lg-6 col-md-8">
  				<a href="reports_competency">
  				<div class="panel panel-green">
  					<div class="panel-heading">
  						<div class="row">
  							<div class="col-xs-2">
  								<i class="fa fa-graduation-cap fa-5x"></i>
  							</div>
  							<div class="col-xs-8 huge text-center"> Competency</div>
  						</div>
  					</div>
  				</div>
  				</a>
  			</div>
  		</div>

  	</div>
  	</div>
  	</div>
  	</div>

@stop