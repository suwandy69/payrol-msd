<?php
  session_start();
  if($_SESSION['username']=='')
  {
  header('Location: login.php');	  
  }
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Beranda</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
	    <div class="sidebar" data-background-color="brown" data-active-color="danger">
			<div class="logo">
				<a href="#" class="simple-text logo-mini"></a>
				<a href="#" class="simple-text logo-normal">AVISENA</a>
			</div>
	    	<div class="sidebar-wrapper">				
	            <ul class="nav">
	                <li class="active">
	                    <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
	                        <i class="ti-panel"></i>
	                        <p>Dashboard
                                <b class="caret"></b>
                            </p>
	                    </a>
						<div class="collapse in" id="dashboardOverview">
							<ul class="nav">
								<li>
									<a href="index.php">
										<span class="sidebar-mini">B</span>
										<span class="sidebar-normal">Beranda</span>
									</a>
								</li>
								<li>
									<a href="karyawan.php">
										<span class="sidebar-mini">K</span>
										<span class="sidebar-normal">Karyawan</span>
									</a>
								</li>
								<li class="active">
									<a href="data.php">
										<span class="sidebar-mini">D</span>
										<span class="sidebar-normal">Data</span>
									</a>
								</li>
								<li>
									<a href="payroll.php">
										<span class="sidebar-mini">P</span>
										<span class="sidebar-normal">Payroll</span>
									</a>
								</li>
								<li>
									<a href="logout.php">
										<span class="sidebar-mini">L</span>
										<span class="sidebar-normal">Logout</span>
									</a>
								</li>
							</ul>
						</div>
	                </li>					
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-default">
	            <div class="container-fluid">
					<div class="navbar-minimize">
						<button id="minimizeSidebar" class="btn btn-fill btn-icon"><i class="ti-more-alt"></i></button>
					</div>
	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle">
	                        <span class="sr-only">Toggle navigation</span>
	                        <span class="icon-bar bar1"></span>
	                        <span class="icon-bar bar2"></span>
	                        <span class="icon-bar bar3"></span>
	                    </button>
	                    <a class="navbar-brand" href="#Dashboard">
							Upload Data Dasar Perhitungan
						</a>
	                </div>
                    
	                <div class="collapse navbar-collapse">
	                    <ul class="nav navbar-nav navbar-right">
	                        <li>
	                            <img src="assets/img/icon.png">
	                        </li>
	                    </ul>
	                </div>
	                
	            </div>
	        </nav>

	        <div class="content">
	            <div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<form method="post" enctype="multipart/form-data" action="upload_data.php">
                                    <div class="card-content text-center" style="background:#9FC;">
                                        <h6 class="big-title">Pilih File:</h6>                                    
                                        <div id="chartNewVisitors" class="chart-circle" data-percent="100"></div>
                                    </div>
                                    <div class="card-footer">
                                        <hr>
                                        <div class="footer-title"><input name="filepegawai" type="file" required> </div>
                                        <div class="pull-right">                                            
                                        <input name="upload" type="submit" value="Import">
                                        </div>
                                    </div>                                    
                                </form>
							</div>
						</div>
					</div>
                </div>
	        </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="">Medika Solution</a>
                    </div>
                </div>
            </footer>
	    </div>
	</div>
</body>

	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
	<script src="assets/js/perfect-scrollbar.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/es6-promise-auto.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.js"></script>
	<script src="assets/js/bootstrap-selectpicker.js"></script>
	<script src="assets/js/bootstrap-switch-tags.js"></script>
	<script src="assets/js/jquery.easypiechart.min.js"></script>
	<script src="assets/js/chartist.min.js"></script>
	<script src="assets/js/bootstrap-notify.js"></script>
	<script src="assets/js/sweetalert2.js"></script>
	<script src="assets/js/jquery-jvectormap.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<script src="assets/js/jquery.bootstrap.wizard.min.js"></script>
	<script src="assets/js/bootstrap-table.js"></script>
	<script src="assets/js/jquery.datatables.js"></script>
	<script src="assets/js/fullcalendar.min.js"></script>
	<script src="assets/js/paper-dashboard.js"></script>
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){
			demo.initOverviewDashboard();
			demo.initCirclePercentage();

    	});
	</script>

</html>
