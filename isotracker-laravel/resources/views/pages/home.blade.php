@extends('default')

@section('header')
Dashboard <small>Documents</small>
@stop

@section('content')
	<div class="row">
		<!-- 1st column-->
		<div class="col-lg-4">
			<!-- Documents Aging By User -->
			@include('pages/dashboardpanels/_documents_aging_by_user')
			<!-- New Published Documents -->
			@include('pages/dashboardpanels/_new_published_documents')
			<!-- Documents for Approval -->
			@include('pages/dashboardpanels/_documents_for_approval')
		</div>

		<div class="col-lg-4">
			<!-- Documents Aging By Activities -->
			@include('pages/dashboardpanels/_documents_aging_by_activities')
			<!-- New Published Documents -->
			@include('pages/dashboardpanels/_new_published_versions')
			<!-- Change Requests for Approval -->
			@include('pages/dashboardpanels/_change_requests_for_approval')
		</div>

		<div class="col-lg-4">
			<!-- Documents Impending Review -->
			@include('pages/dashboardpanels/_documents_impending_review')
			<!-- Best Approvers -->
			@include('pages/dashboardpanels/_best_approvers')
			<!-- Average Time -->
			@include('pages/dashboardpanels/_average_time')
		</div>
	</div>
	<!-- /.row -->
@stop
