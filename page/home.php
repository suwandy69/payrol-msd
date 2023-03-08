                <div class="container-fluid">					
					<div class="row">
						<div class="col-lg-3 col-sm-6">
	                        <div class="card" data-background-color="green">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-9">
	                                        <div class="category">
	                                            <p>Total Pembayaran</p>
	                                        </div>
	                                        <div class="description"> 
												<p>Rp.                                                
                                                
<?php 
		include 'koneksi.php';
		include 'hitungan.php';
		$total=0;
		$no=0;
		$data = mysqli_query($koneksi,"select * from data_pegawai");
		while($d = mysqli_fetch_array($data)){			
		//$total += nilaiupahakhir(nilaiupahbruto(nilaiupahonoff(nilaiupah(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']),totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus'])),$d['jumlahhari'],$d['jumlahhadir']), $d['lainlain'],$d['dplk'],$d['zamrud'] ),nilaitotalpotongan($d['dplk'],$d['savingplan'],$d['BPJSNaker'],$d['BPJSKes'],$d['obat'],$d['ppni'],$d['koperasi'],$d['Parkir'],$d['lain2'],$d['PPH21']));  
		
        $now = new DateTime();
        $date = new DateTime($d['tanggal_masuk']);
        $selisih = $date->diff($now)->format("%y");
        $total += nilaitakehome(nilaigaji($d['pendidikan'],$selisih,$d['golongan']), $d['Struktural'], $d['lembur'], $d['tanggal_merah'], 
        $d['hari_raya'], $d['Fungsional'], 
        $d['on_call'], $d['rujuk'], $d['rekom_sip'], $d['jasmed'], $d['lainlain'], $d['BPJSNaker'], $d['BPJSKes'], 
        $d['obat'], $d['pinjaman'], $d['izin'], $d['keterlambatan'], $d['lain2'] ); 
        $no += 1; 
		}
		   echo  number_format($total);
		 
?>                         
                                                
												</p>
											</div>
	                                    </div>
	                                    <div class="col-xs-2">
	                                        <div class="icon-big icon-success text-center">
	                                            <i class="ti-wallet"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-lg-3 col-sm-6">
	                        <div class="card" data-background-color="blue">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-9">
	                                        <div class="category">
	                                            <p>Total Cuti</p>
<?php 
		include 'koneksi.php';
		$jlh = 0;
		$data = mysqli_query($koneksi,"select COALESCE(SUM(jumlah_cuti),0) as jlh from data_cuti ");
		while($d = mysqli_fetch_array($data)){	
		$jlh = $d['jlh'];		
		}
?>
                                               
	                                        </div>
	                                        <div class="description">
	                                            <p><?php echo $jlh;	?> Hari<p>
											</div>
	                                    </div>
	                                    <div class="col-xs-2">
	                                        <div class="icon-big icon-warning text-center">
	                                            <i class="ti-calendar"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>	
						<div class="col-lg-3 col-sm-6">
	                        <div class="card" data-background-color="purple">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-9">
	                                        <div class="category">
	                                            <p>Total Lembur</p>
<?php 
		include 'koneksi.php';
		$jlh = 0;
		$data = mysqli_query($koneksi,"select COALESCE(SUM(jumlah_lembur),0) as jlh from data_lembur ");
		while($d = mysqli_fetch_array($data)){	
		$jlh = $d['jlh'];		
		}
?>
                                               
	                                        </div>
	                                        <div class="description">
	                                            <p><?php echo $jlh;	?> Jam<p>
											</div>
	                                    </div>
	                                    <div class="col-xs-2">
	                                        <div class="icon-big icon-warning text-center">
	                                            <i class="ti-timer"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>	
						<div class="col-lg-3 col-sm-6">
	                        <div class="card" data-background-color="orange">
	                            <div class="card-content">
	                                <div class="row">
	                                    <div class="col-xs-9">
	                                        <div class="description">
	                                            <p>Total Karyawan</p>
<?php 
		include 'koneksi.php';
		$jlh = 0;
		$data = mysqli_query($koneksi,"select count(*) as jlh from data_pegawai ");
		while($d = mysqli_fetch_array($data)){	
		$jlh = $d['jlh'];		
		}
?>
                                               
	                                        </div>
	                                        <div class="description">
	                                            <p><?php echo $jlh;	?><p>
											</div>
	                                    </div>
	                                    <div class="col-xs-2">
	                                        <div class="icon-big icon-warning text-center">
	                                            <i class="ti-user"></i>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>	                    
                	</div>
					<div class="row">
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content text-center" style="background:#9FC;">
									<h6 class="big-title">Jumlah Karyawan S1</h6>
                                    <?php 
		include 'koneksi.php';
		$jlh = 0;
		$data = mysqli_query($koneksi,"select count(*) as jlh from data_pegawai where pendidikan = 'S1' ");
		while($d = mysqli_fetch_array($data)){	
		$jlh = $d['jlh'];		
		}
?>
									<div id="chartNewVisitors" class="chart-circle" data-percent="100"><?php echo $jlh;	?></div>
								</div>
								<div class="card-footer">
									<hr>
									<div class="footer-title">Data Karyawan</div>
									<div class="pull-right">
                                    <form action="karyawan.php">
										<button class="btn btn-info btn-fill btn-icon btn-sm">
											<i class="ti-plus"></i>
										</button>
                                    </form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content text-center" style="background:#FCC;">
									<h6 class="big-title">Jumlah Karyawan D3</h6>
                                    <?php 
		include 'koneksi.php';
		$jlh = 0;
		$data = mysqli_query($koneksi,"select count(*) as jlh from data_pegawai where pendidikan = 'D3' ");
		while($d = mysqli_fetch_array($data)){	
		$jlh = $d['jlh'];		
		}
?>
									<div id="chartNewVisitors" class="chart-circle" data-percent="100"><?php echo $jlh;	?></div>
								</div>
								<div class="card-footer">
									<hr>
									<div class="footer-title">Data Karyawan</div>
									<div class="pull-right">
                                    <form action="karyawan.php">
										<button class="btn btn-info btn-fill btn-icon btn-sm">
											<i class="ti-plus"></i>
										</button>
                                    </form>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="card">
								<div class="card-content text-center" style="background:#FC0;">
									<h6 class="big-title">Jumlah Karyawan D1</h6>
                                    <?php 
		include 'koneksi.php';
		$jlh = 0;
		$data = mysqli_query($koneksi,"select count(*) as jlh from data_pegawai where pendidikan = 'D1' ");
		while($d = mysqli_fetch_array($data)){	
		$jlh = $d['jlh'];		
		}
?>
									<div id="chartNewVisitors" class="chart-circle" data-percent="100"><?php echo $jlh;	?></div>
								</div>
								<div class="card-footer">
									<hr>
									<div class="footer-title">Data Karyawan</div>
									<div class="pull-right">
                                    <form action="karyawan.php">
										<button class="btn btn-info btn-fill btn-icon btn-sm">
											<i class="ti-plus"></i>
										</button>
                                    </form>
									</div>
								</div>
							</div>
						</div>
					</div>                    
                </div>