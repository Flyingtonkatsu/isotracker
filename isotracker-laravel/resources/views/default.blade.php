<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

	<title>UP ITDC ISO Tracker</title>

	<!-- Own CSS -->
	<link href="/css/style.css" rel="stylesheet">

	<!-- Bootstrap Core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="/css/sb-admin.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="/css/plugins/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>


<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="home">
                  <div class="logo">
                    <img src="/images/UPITDC_logo.PNG">
                  </div>
                  <div class="app_name">
                    ISO Tracker
                  </div>
                </a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                  <a href="admin"><i class="fa fa-fw fa-magic"></i> Admin</a>
                </li>
                <li>
                  <a href="user"><i class="fa fa-fw fa-user"></i> User</a>
                </li>
                <li>
                  <a href="help"><i class="fa fa-fw fa-life-ring"></i> Help</a>
                </li>
                <li>
                  <a href="logout"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="details_pane">
                        Super Admin <br/>
                        June 26, 2015 <br/>
                        10:00 AM
                    </li>
                    <li>
                        <a href="home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="summary"><i class="fa fa-fw fa-bar-chart-o"></i> Summary</a>
                    </li>
                    <li>
                        <a href="documents"><i class="fa fa-fw fa-table"></i> Documents</a>
                    </li>
                    <li>
                        <a href="audits"><i class="fa fa-fw fa-calculator"></i> Audits</a>
                    </li>
                    <li>
                        <a href="complaints"><i class="fa fa-fw fa-exclamation-circle"></i> Complaints</a>
                    </li>
                    <li>
                        <a href="competency"><i class="fa fa-fw fa-mortar-board"></i> Competency</a>
                    </li>
                    <li>
                        <a href="reports"><i class="fa fa-fw fa-book"></i> Reports</a>
                    </li>
                    <li>
                        <a href="review"><i class="fa fa-fw fa-spinner"></i> Review</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>


    <div id="page-wrapper">
      <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    @yield('header')
                </h1>
            </div>
        </div>


	   @yield('content')

        </div>
    </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
