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
	<button type="button" class="btn btn-xs btn-default">Hide Folders</button>
	<button type="button" class="btn btn-xs btn-default">Folder Properties</button>
	<button type="button" class="btn btn-xs btn-default">New Folder</button>
	<button type="button" class="btn btn-xs btn-default">Delete Folder</button>
	<button type="button" class="btn btn-xs btn-default">New Document</button>
	<button type="button" class="btn btn-xs btn-default">View All</button>
	<button type="button" class="btn btn-xs btn-default">Search</button>
	<button type="button" class="btn btn-xs btn-default">Set-Up</button>
</div>

<p></p>

<!-- panels -->
<div class="row">

	<!-- panel for tree view -->
	<div class="col-lg-4">
		<div class="panel panel-info">

			<div class="panel-heading"> </div>

			<div class="panel-body">
				<div class="easy-tree">
					<ul>
						<li>Activities
							<ul>
								<li>Comments</li>
								<li>Approval</li>
								<li>Check-in</li>
								<li>Check-out</li>
								<li>Templates</li>
							</ul>
						</li>
						<li>Folder 1</li>
						<li>Folder 2</li>
					</ul>
				</div>
			</div>

		</div>
	</div>

	<!-- panel for folder contents -->
	<div class="col-lg-8">
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
