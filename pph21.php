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
			<?php
				include "logo.php";	
			?>
	    	<div class="sidebar-wrapper">				
	            <ul class="nav">
	                <li>
	                    <a data-toggle="collapse" href="#dashboardOverview">
	                        <i class="ti-user"></i>
	                        <p>Personalia
                                <b class="caret"></b>
                            </p>
	                    </a>
						<div class="collapse" id="dashboardOverview">
							<ul class="nav">
								<li>
									<a href="index.php">
										<span class="sidebar-mini">DP</span>
										<span class="sidebar-normal">Dashboard Personalia</span>
									</a>
								</li>
								<li>
									<a href="karyawan.php">
										<span class="sidebar-mini">PG</span>
										<span class="sidebar-normal">Data Pegawai</span>
									</a>
								</li>
								<li>
									<a href="jabatan.php">
										<span class="sidebar-mini">JB</span>
										<span class="sidebar-normal">Data Jabatan</span>
									</a>
								</li>
								<li>
									<a href="status.php">
										<span class="sidebar-mini">GL</span>
										<span class="sidebar-normal">Data Status</span>
									</a>
								</li>
								<li>
									<a href="data.php">
										<span class="sidebar-mini">GJ</span>
										<span class="sidebar-normal">Data Penggajian</span>
									</a>
								</li>
							</ul>
						</div>
	                </li>
					<li class="active">
	                    <a data-toggle="collapse" href="#laporanOverview" aria-expanded="true">
	                        <i class="ti-clipboard"></i>
	                        <p>Laporan
                                <b class="caret"></b>
                            </p>
	                    </a>
						<div class="collapse in" id="laporanOverview">
							<ul class="nav">
								<li>
									<a href="kehadiran.php">
										<span class="sidebar-mini">LH</span>
										<span class="sidebar-normal">Laporan Kehadiran</span>
									</a>
								</li>
								<li>
									<a href="bpjs.php">
										<span class="sidebar-mini">LB</span>
										<span class="sidebar-normal">Laporan BPJS</span>
									</a>
								</li>
								<li class="active">
									<a href="pph21.php">
										<span class="sidebar-mini">LB</span>
										<span class="sidebar-normal">Laporan PPH 21</span>
									</a>
								</li>
								<li>
									<a href="cuti.php">
										<span class="sidebar-mini">LC</span>
										<span class="sidebar-normal">Laporan Cuti</span>
									</a>
								</li>
								<li>
									<a href="payroll.php">
										<span class="sidebar-mini">LP</span>
										<span class="sidebar-normal">Laporan Penggajian</span>
									</a>
								</li>
							</ul>
						</div>
	                </li>
					<li>
	                    <a data-toggle="collapse" href="#settingsOverview">
	                        <i class="ti-settings"></i>
	                        <p>Pengaturan
                                <b class="caret"></b>
                            </p>
	                    </a>
						<div class="collapse" id="settingsOverview">
							<ul class="nav">
								<li>
									<a href="pengguna.php">
										<span class="sidebar-mini">PN</span>
										<span class="sidebar-normal">Pengguna</span>
									</a>
								<li>
									<a href="proses/logout.php">
										<span class="sidebar-mini">LG</span>
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
							Data Dasar Perhitungan
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
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-content">
	                                <div class="toolbar">
	                                    <!--Here you can write extra buttons/actions for the toolbar-->
	                                </div>
	                                <table id="bootstrap-table" class="table">
	                                    <thead style="background-color:rgb(255, 239, 191);"> 
	                                         <th data-field="no" data-sortable="true">No</th>
	                                         <th data-field="id" data-sortable="true" data-visible="false">ID</th>
                                             <th data-field="npp"  data-sortable="true">NPP</th>
                                             <th data-field="nama" data-sortable="true">Nama</th>
                                             <th class = "text-right" data-field="PPH21" data-sortable="true">PPH21</th>
	                                    </thead>
	                                    <tbody>
<?php 
		include 'koneksi.php';
		$no=0;
		$data = mysqli_query($koneksi,"select * from data_pegawai");
		while($d = mysqli_fetch_array($data)){			
		$no += 1;
?>
	                                        <tr
                                             <?php 
											if($no % 2 == 0)
											{
												echo ' class="warning"';
											}
											?>
                                            >
	                                        	<td><?php echo $no; ?></td>
	                                        	<td><?php echo $d['id']; ?></td>
                                                <td><?php echo $d['npp']; ?></td>
                                                <td><?php echo $d['nama']; ?></td>
                                                <td class = "text-right"><?php echo number_format($d['PPH21']); ?></td>
	                                        </tr>
<?php 
		}
?>
	                                        
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div><!--  end card  -->
	                    </div> <!-- end col-md-12 -->
	                </div> <!-- end row -->
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

		var $table = $('#bootstrap-table');

	        function operateFormatter(value, row, index) {
	            return [
					'<div class="table-icons">',
		                //'<a rel="tooltip" title="View" class="btn btn-simple btn-info btn-icon table-action view" href="javascript:void(0)">',
							//'<i class="ti-image"></i>',
						//'</a>',
		                '<a rel="tooltip" title="Edit" class="btn btn-simple btn-warning btn-icon table-action edit" href="javascript:void(0)">',
		                    '<i class="ti-pencil-alt"></i>',
		                '</a>',
		                //'<a rel="tooltip" title="Remove" class="btn btn-simple btn-danger btn-icon table-action remove" href="javascript:void(0)">',
		                    //'<i class="ti-close"></i>',
		                //'</a>',
					'</div>',
	            ].join('');
	        }

	        $().ready(function(){
	            window.operateEvents = {
	                'click .view': function (e, value, row, index) {
	                    info = JSON.stringify(row['id']).replaceAll('"','');

	                    swal('You click view icon, row: ', info);
	                    console.log(info);
	                },
	                'click .edit': function (e, value, row, index) {
//	                    info = JSON.stringify(row);

//	                    swal('You click edit icon, row: ', info);
//	                    console.log(info);
						info = JSON.stringify(row['id']).replaceAll('"','');
						window.open("editkehadiran.php?id=" + info,"_self");
	                },
	                'click .remove': function (e, value, row, index) {
	                    console.log(row);
	                    $table.bootstrapTable('remove', {
	                        field: 'id',
	                        values: [row.id]
	                    });
	                }
	            };

	            $table.bootstrapTable({
	                toolbar: ".toolbar",
	                clickToSelect: true,
	                showRefresh: true,
	                search: true,
	                showToggle: true,
	                showColumns: true,
	                pagination: true,
	                searchAlign: 'left',
	                pageSize: 8,
	                clickToSelect: false,
	                pageList: [8,10,25,50,100],

	                formatShowingRows: function(pageFrom, pageTo, totalRows){
	                    //do nothing here, we don't want to show the text "showing x of y from..."
	                },
	                formatRecordsPerPage: function(pageNumber){
	                    return pageNumber + " rows visible";
	                },
	                icons: {
	                    refresh: 'fa fa-refresh',
	                    toggle: 'fa fa-th-list',
	                    columns: 'fa fa-columns',
	                    detailOpen: 'fa fa-plus-circle',
	                    detailClose: 'ti-close'
	                }
	            });

	            //activate the tooltips after the data table is initialized
	            $('[rel="tooltip"]').tooltip();

	            $(window).resize(function () {
	                $table.bootstrapTable('resetView');
	            });
			});

	</script>

	<script type="text/javascript">
    	$(document).ready(function(){
			demo.initOverviewLaporan();
			demo.initCirclePercentage();

    	});
	</script>

</html>
