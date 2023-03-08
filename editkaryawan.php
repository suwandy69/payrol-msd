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
	                <li class="active">
	                    <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
	                        <i class="ti-user"></i>
	                        <p>Personalia
                                <b class="caret"></b>
                            </p>
	                    </a>
						<div class="collapse in" id="dashboardOverview">
							<ul class="nav">
								<li>
									<a href="index.php">
										<span class="sidebar-mini">DP</span>
										<span class="sidebar-normal">Dashboard Personalia</span>
									</a>
								</li>
								<li class="active">
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
					<li>
	                    <a data-toggle="collapse" href="#laporanOverview">
	                        <i class="ti-clipboard"></i>
	                        <p>Laporan
                                <b class="caret"></b>
                            </p>
	                    </a>
						<div class="collapse" id="laporanOverview">
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
							Data Karyawan
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
	                    <div class="col-md-6">
	                        <div class="card">
<?php 
		$id = '';
		if(isset($_GET['id'])){
			$id = $_GET['id'];
		}
		$npp = '';
		$nama = '';
		$jabatan = '';
		$status = '';
		$pendidikan = '';
		$golongan = '';
		$tanggal_masuk = '';
		$tanggal_kerja = '';
		$Struktural = '';
		$Fungsional = '';
		$TKU = '';
		$TunjanganKhusus = '';
		$BPJSNaker = '';
		$BPJSKes = '';
		$Parkir = '';
		$PPH21 = '';
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from data_pegawai WHERE id = " .$id );
		if($data)
		{
		while($d = mysqli_fetch_array($data)){	
		$npp = $d['npp'];
		$nama = $d['nama'];
		$jabatan = $d['jabatan'];
		$status = $d['status'];
		$pendidikan = $d['pendidikan'];
		$golongan = $d['golongan'];
		$tanggal_masuk= date('m/d/y', strtotime($d['tanggal_masuk']));
		$tanggal_kerja = $d['tanggal_kerja'];
		$Struktural = $d['Struktural'];
		$Fungsional = $d['Fungsional'];
		$TKU = $d['TKU'];
		$TunjanganKhusus = $d['TunjanganKhusus'];
		$BPJSNaker = $d['BPJSNaker'];
		$BPJSKes = $d['BPJSKes'];
		$Parkir = $d['Parkir'];
		$PPH21 = $d['PPH21'];		
		}
		}
?>
							    <form method="post" enctype="multipart/form-data" action="proses/addkaryawan.php">
		                            <div class="card-header">
									    <h4 class="card-title">
											Data Karyawan
										</h4>
									</div>
		                            <div class="card-content">
                                    	<div class="form-group">
	                                        <label>ID</label>
	                                        <input type="text" readonly placeholder="id" name = "id" class="form-control" value="<?php echo $id; ?>">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>NPP</label>
	                                        <input type="text" placeholder="NPP" name="npp"class="form-control" value="<?php echo $npp; ?>">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Nama</label>
	                                        <input type="text" placeholder="Nama" name="nama" class="form-control" value="<?php echo $nama; ?>">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Jabatan</label>
											<select class="selectpicker" data-style="btn btn-block" title="Pilih Jabatan" data-size="7" name="jabatan">
<?php 
		include 'koneksi.php';
		$no=0;
		$data = mysqli_query($koneksi,"select * from data_jabatan");
		while($d = mysqli_fetch_array($data)){	
		$no += 1;		
?>
        										<option value="<?php echo $d['id_jabatan']; ?>"<?php if($jabatan==$d['id_jabatan']){echo "selected";}?>  ><?php echo $d['nama_jabatan']; ?></option>
<?php 
		}
?>
											</select>
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Status</label>
											<select class="selectpicker" data-style="btn btn-block" title="Pilih Status" data-size="7" name="status">
<?php 
		include 'koneksi.php';
		$no=0;
		$data = mysqli_query($koneksi,"select * from data_golongan");
		while($d = mysqli_fetch_array($data)){	
		$no += 1;		
?>
        										<option value="<?php echo $d['id_golongan']; ?>"<?php if($status==$d['id_golongan']){echo "selected";}?>  ><?php echo $d['nama_golongan']; ?></option>
<?php 
		}
?>
											</select>
										</select>
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Pendidikan</label>
											<select class="selectpicker" data-style="btn btn-block" title="Pilih Pendidikan" data-size="7" name="pendidikan">
												<option value="D1" <?php if($pendidikan=='D1'){echo "selected";}?>>D1</option>
												<option value="D3" <?php if($pendidikan=='D3'){echo "selected";}?>>D3</option>
												<option value="S1" <?php if($pendidikan=='S1'){echo "selected";}?>>S1</option>
											</select>
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Golongan</label>
											<select class="selectpicker" data-style="btn btn-block" title="Pilih Golongan" data-size="7" name="golongan">
												<option value="A" <?php if($golongan=='A'){echo "selected";}?>>A</option>
												<option value="B" <?php if($golongan=='B'){echo "selected";}?>>B</option>
												<option value="C" <?php if($golongan=='C'){echo "selected";}?>>C</option>
												<option value="D" <?php if($golongan=='D'){echo "selected";}?>>D</option>
											</select>
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Tanggal Masuk</label>
	                                        <!--<input type="text" placeholder="tanggal_kerja" name="tanggal_kerja" class="form-control" value="<?php echo $tanggal_kerja; ?>">-->
		                                	<input type="text" class="form-control datepicker" placeholder="Date Picker Here"  name="tanggal_masuk" value="<?php echo $tanggal_masuk; ?>"/>
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Tunjangan</label>
	                                        <input type="text" placeholder="Tunjangan" name="Struktural" class="form-control" value="<?php echo $Struktural; ?>">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Koor</label>
	                                        <input type="text" placeholder="Koor" name="Fungsional" class="form-control" value="<?php echo $Fungsional; ?>">
	                                    </div>
	                                    <!--<div class="form-group">
	                                        <label>TKU</label>
	                                        <input type="text" placeholder="TKU" name="TKU" class="form-control" value="<?php echo $TKU; ?>">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>Tunjangan Khusus</label>
	                                        <input type="text" placeholder="TunjanganKhusus" name="TunjanganKhusus" class="form-control" value="<?php echo $TunjanganKhusus; ?>">
	                                    </div>-->
	                                    <div class="form-group">
	                                        <label>BPJS Naker</label>
	                                        <input type="text" placeholder="BPJSNaker" name="BPJSNaker" class="form-control" value="<?php echo $BPJSNaker; ?>">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>BPJS Kes</label>
	                                        <input type="text" placeholder="BPJSKes" name="BPJSKes" class="form-control" value="<?php echo $BPJSKes; ?>">
	                                    </div>
	                                    <!--<div class="form-group">
	                                        <label>Parkir</label>
	                                        <input type="text" placeholder="Parkir" name="Parkir" class="form-control" value="<?php echo $Parkir; ?>">
	                                    </div>
	                                    <div class="form-group">
	                                        <label>PPH21</label>
	                                        <input type="text" placeholder="PPH21" name="PPH21" class="form-control" value="<?php echo $PPH21; ?>">
	                                    </div>-->
	                                    <button type="submit" class="btn btn-fill btn-info">Submit</button>
		                            </div>
							    </form>

	                        </div> <!-- end card -->
	                    </div> <!--  end col-md-6  -->
	                </div> <!-- end row -->
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
        $().ready(function(){
			// Init Sliders
            //demo.initFormExtendedSliders();
            // Init DatetimePicker
            demo.initFormExtendedDatetimepickers();
        });
    </script>
	
</html>
