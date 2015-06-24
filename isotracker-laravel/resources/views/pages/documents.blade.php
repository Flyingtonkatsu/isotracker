@extends('default')

@section('header')
Documents Listing
@stop

@section('content')

<!-- import and initialization for treeview-->

<link href="/css/plugins/easyTree.css" rel="stylesheet">
<script src="js/plugins/easyTree.js"></script>
<!-- end import-->


<!-- buttons for user control-->
<div class="row">
	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-eye-slash fa-fw"></i> Hide Folders</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-bars fa-fw"></i> Folder Properties</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-plus-circle fa-fw"></i> New Folder</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-trash fa-fw"></i> Delete Folder</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-edit fa-fw"></i> New Document</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-list fa-fw"></i> View All</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-search fa-fw"></i> Search</button>

	<button type="button" class="btn btn-xs btn-default">
		<i class="fa fa-wrench fa-fw"></i> Set-Up</button>
</div>

<br>

<!-- panels -->
<div class="row">

	<!-- panel for tree view -->
	<div class="col-lg-3" style="padding-right: 2px">
		<div class="panel panel-info">

			<div class="panel-heading"> </div>

			<div class="panel-body">
				<div class="easy-tree">
					<ul>
						<li><i class="fa fa-folder-open fa-fw"></i> Activities
							<ul>
								<li><i class="fa fa-folder fa-fw"></i> Comments</li>
								<li><i class="fa fa-folder fa-fw"></i> Approval</li>
								<li><i class="fa fa-folder fa-fw"></i> Check-in</li>
								<li><i class="fa fa-folder fa-fw"></i> Check-out</li>
								<li><i class="fa fa-folder fa-fw"></i> Templates</li>
							</ul>
						</li>
						<li><i class="fa fa-folder fa-fw"></i> Folder 1</li>
						<li><i class="fa fa-folder fa-fw"></i> Folder 2</li>
					</ul>
				</div>
			</div>

		</div>
	</div>

	<!-- panel for folder contents -->
	<div class="col-lg-9" style="padding-left: 1px">
		<div class="panel panel-info">

			<div class="panel-heading">
			</div>

			<div class="panel-body">

				<!-- row for document filter -->
				<div class="row" style="padding-bottom: 10px">
					<div class="col-lg-8"></div>

					<div class="col-lg-4">
						<select class="form-control">
                <option>All</option>
                <option>Review</option>
                <option>Approval</option>
                <option>Change Request</option>
            </select>
					</div>
				</div>

				<!-- row with table for displaying documents -->
				<div class="row">
					 <div class="table-responsive" style="padding-left: 10px; padding-right: 10px">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>Owner</th>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="7"> No items to display. </td>
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
