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
								<li>
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
								<li class="active">
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
									<a href="logout.php">
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
							Payroll
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
                                             <th data-field="No"  data-sortable="true">No</th>
                                             <th data-field="NPP"  data-sortable="true">NPP</th>
                                             <th data-field="Nama"  data-sortable="true">Nama</th>
                                             <th data-field="Jabatan"  data-sortable="true">Jabatan</th>
                                             <th class = "text-center" data-field="Status"  data-sortable="true">Status</th>
                                             <th class = "text-center" data-field="Pendidikan"  data-sortable="true">Pendidikan</th>
                                             <th class = "text-center" data-field="Golongan"  data-sortable="true">Golongan</th>
                                             <th class = "text-center" data-field="TahunKerja"  data-sortable="true">Tahun Kerja</th>
                                             <th class = "text-right" data-field="Gaji"  data-sortable="true">Gaji</th>
                                             <th class = "text-right" data-field="Gapok"  data-sortable="true">Gapok</th>
                                             <th class = "text-right" data-field="TunjanganTetap"  data-sortable="true">Tunjangan Tetap</th>
                                             <th class = "text-right" data-field="Struktural"  data-sortable="true">Struktural</th>
                                             <th class = "text-right" data-field="Fungsional"  data-sortable="true">Fungsional</th>
                                             <th class = "text-right" data-field="TKU"  data-sortable="true">TKU</th>
                                             <th class = "text-right" data-field="TunjanganKhusus"  data-sortable="true">Tunjangan Khusus</th>
                                             <th class = "text-right" data-field="TotalTunjangan"  data-sortable="true">Total Tunjangan</th>
                                             <th class = "text-right" data-field="Upah"  data-sortable="true">Upah</th>
                                             <th class = "text-right" data-field="Kehadiran"  data-sortable="true">Kehadiran</th>
                                             <th class = "text-right" data-field="UpahONOFF"  data-sortable="true">Upah ON/OFF</th>
                                             <th class = "text-right" data-field="LainLain"  data-sortable="true">Lain-Lain</th>
                                             <th class = "text-right" data-field="DPLK"  data-sortable="true">DPLK</th>
                                             <th class = "text-right" data-field="Zamrud"  data-sortable="true">Zamrud</th>
                                             <th class = "text-right" data-field="UpahBruto"  data-sortable="true">Upah Bruto</th>
                                             <th class = "text-right" data-field="DPLK"  data-sortable="true">DPLK</th>
                                             <th class = "text-right" data-field="SavingPlan"  data-sortable="true">Saving Plan</th>
                                             <th class = "text-right" data-field="BPJSNaker"  data-sortable="true">BPJSNaker</th>
                                             <th class = "text-right" data-field="BPJSKes"  data-sortable="true">BPJSKes</th>
                                             <th class = "text-right" data-field="Obat"  data-sortable="true">Obat</th>
                                             <th class = "text-right" data-field="PPNI"  data-sortable="true">PPNI</th>
                                             <th class = "text-right" data-field="Koperasi"  data-sortable="true">Koperasi</th>
                                             <th class = "text-right" data-field="Parkir"  data-sortable="true">Parkir</th>
                                             <th class = "text-right" data-field="Lain2"  data-sortable="true">Lain2</th>
                                             <th class = "text-right" data-field="PPH21"  data-sortable="true">PPH21</th>
                                             <th class = "text-right" data-field="TotalPotongan"  data-sortable="true">Total Potongan</th>
                                             <th class = "text-right" data-field="Upah"  data-sortable="true">Upah</th>
                                            
	                                    </thead>
	                                    <tbody>
<?php 
		include 'koneksi.php';
		include 'hitungan.php';
		$no=1;
		$data = mysqli_query($koneksi,"select * from data_pegawai");
		while($d = mysqli_fetch_array($data)){			
?>
	                                        <tr  
											<?php 
											if($no % 2 == 0)
											{
												echo ' class="warning"';
											}
											?>>
	                                        	<td><?php echo $no++; ?></td>
                                                <td><?php echo $d['npp']; ?></td>
                                                <td><?php echo $d['nama']; ?></td>
                                                <td><?php echo $d['jabatan']; ?></td>
                                                <td class = "text-center"><?php echo $d['status']; ?></td>
                                                <td class = "text-center"><?php echo $d['pendidikan']; ?></td>
                                                <td class = "text-center"><?php echo $d['golongan']; ?></td>
                                                <td class = "text-center"><?php echo $d['tanggal_kerja']; ?></td>
                                                <td class = "text-right" ><?php echo number_format(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan'])); ?></td>  
                                                <td class = "text-right"><?php echo number_format(nilaigapok(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']))); ?></td>  
                                                <td class = "text-right"><?php echo number_format(nilaitunjangantetap(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']))); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['Struktural']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['Fungsional']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['TKU']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['TunjanganKhusus']); ?></td>
                                                <td class = "text-right"><?php echo number_format(totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus'])); ?></td>
                                                <td class = "text-right"><?php echo number_format(nilaiupah(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']),totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus']))); ?></td>
                                                <td class = "text-right"><?php echo $d['jumlahhadir']; ?></td>
                                                <td class = "text-right"><?php echo number_format(nilaiupahonoff(nilaiupah(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']),totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus'])),$d['jumlahhari'],$d['jumlahhadir'])); ?></td>
                                                <td class = "text-right"><?php echo $d['lainlain']; ?></td>
                                                <td class = "text-right"><?php echo $d['dplk']; ?></td>
                                                <td class = "text-right"><?php echo $d['zamrud']; ?></td>
                                                <td class = "text-right"><?php echo number_format(nilaiupahbruto(nilaiupahonoff(nilaiupah(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']),totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus'])),$d['jumlahhari'],$d['jumlahhadir']), $d['lainlain'],$d['dplk'],$d['zamrud'] )); ?></td>                
                                                <td class = "text-right"><?php echo number_format($d['dplk']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['savingplan']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['BPJSNaker']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['BPJSKes']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['obat']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['ppni']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['koperasi']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['Parkir']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['lain2']); ?></td>
                                                <td class = "text-right"><?php echo number_format($d['PPH21']); ?></td>
                                                <td class = "text-right"><?php echo number_format(nilaitotalpotongan($d['dplk'],$d['savingplan'],$d['BPJSNaker'],$d['BPJSKes'],$d['obat'],$d['ppni'],$d['koperasi'],$d['Parkir'],$d['lain2'],$d['PPH21'])); ?></td>
                                                <td class = "text-right"><?php echo number_format(nilaiupahakhir(nilaiupahbruto(nilaiupahonoff(nilaiupah(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']),totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus'])),$d['jumlahhari'],$d['jumlahhadir']), $d['lainlain'],$d['dplk'],$d['zamrud'] ),nilaitotalpotongan($d['dplk'],$d['savingplan'],$d['BPJSNaker'],$d['BPJSKes'],$d['obat'],$d['ppni'],$d['koperasi'],$d['Parkir'],$d['lain2'],$d['PPH21']))); ?></td> 
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
						window.open("editdata.php?id=" + info,"_self");
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
			demo.initOverviewDashboard();
			demo.initCirclePercentage();

    	});
	</script>

</html>
