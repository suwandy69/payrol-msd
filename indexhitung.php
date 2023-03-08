<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../../assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard PRO by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


     <!-- Bootstrap core CSS     -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="../../assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="../../assets/css/themify-icons.css" rel="stylesheet">
</head>
<body>
	<style type="text/css">
		body{
			font-family: sans-serif;
			font-size:12px;
		}

		p{
			color: green;
		}
	</style>

	<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>

	<a href="upload.php">IMPORT DATA</a>
	<table border="1">
		<tr>
			<th>No</th>
			 <th>NPP</th>
			 <th>Nama</th>
			 <th>Jabatan</th>
			 <th>Status</th>
			 <th>Pendidikan</th>
			 <th>Golongan</th>
			 <th>Tahun Kerja</th>
			 <th>Gaji</th>
			 <th>Gapok</th>
			 <th>Tunjangan Tetap</th>
			 <th>Struktural</th>
			 <th>Fungsional</th>
			 <th>TKU</th>
			 <th>Tunjangan Khusus</th>
			 <th>Total Tunjangan</th>
			 <th>Upah</th>
			 <th>Kehadiran</th>
			 <th>Upah ON/OFF</th>
			 <th>Lain-Lain</th>
			 <th>DPLK</th>
			 <th>Zamrud</th>
			 <th>Upah Bruto</th>
			 <th>DPLK</th>
			 <th>Saving Plan</th>
			 <th>BPJSNaker</th>
			 <th>BPJSKes</th>
			 <th>Obat</th>
			 <th>PPNI</th>
			 <th>Koperasi</th>
			 <th>Parkir</th>
			 <th>Lain2</th>
			 <th>PPH21</th>
			 <th>Total Potongan</th>
			 <th>Upah</th>
		</tr>
		<?php 
		include 'koneksi.php';
		include 'hitungan.php';
		$no=1;
		$data = mysqli_query($koneksi,"select * from data_pegawai");
		while($d = mysqli_fetch_array($data)){
			
			?>
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $d['npp']; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['jabatan']; ?></th>
				<th><?php echo $d['status']; ?></th>
				<th><?php echo $d['pendidikan']; ?></th>
				<th><?php echo $d['golongan']; ?></th>
				<th><?php echo $d['tanggal_kerja']; ?></th>
				<th><?php echo number_format(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan'])); ?></th>  
				<th><?php echo number_format(nilaigapok(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']))); ?></th>  
				<th><?php echo number_format(nilaitunjangantetap(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']))); ?></th>
				<th><?php echo number_format($d['Struktural']); ?></th>
				<th><?php echo number_format($d['Fungsional']); ?></th>
				<th><?php echo number_format($d['TKU']); ?></th>
				<th><?php echo number_format($d['TunjanganKhusus']); ?></th>
				<th><?php echo number_format(totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus'])); ?></th>
				<th><?php echo number_format(nilaiupah(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']),totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus']))); ?></th>
				<th><?php echo $d['jumlahhadir']; ?></th>
				<th><?php echo number_format(nilaiupahonoff(nilaiupah(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']),totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus'])),$d['jumlahhari'],$d['jumlahhadir'])); ?></th>
				<th><?php echo $d['lainlain']; ?></th>
				<th><?php echo $d['dplk']; ?></th>
				<th><?php echo $d['zamrud']; ?></th>
				<th><?php echo number_format(nilaiupahbruto(nilaiupahonoff(nilaiupah(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']),totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus'])),$d['jumlahhari'],$d['jumlahhadir']), $d['lainlain'],$d['dplk'],$d['zamrud'] )); ?></th>                
				<th><?php echo number_format($d['dplk']); ?></th>
				<th><?php echo number_format($d['savingplan']); ?></th>
				<th><?php echo number_format($d['BPJSNaker']); ?></th>
				<th><?php echo number_format($d['BPJSKes']); ?></th>
				<th><?php echo number_format($d['obat']); ?></th>
				<th><?php echo number_format($d['ppni']); ?></th>
				<th><?php echo number_format($d['koperasi']); ?></th>
				<th><?php echo number_format($d['Parkir']); ?></th>
				<th><?php echo number_format($d['lain2']); ?></th>
				<th><?php echo number_format($d['PPH21']); ?></th>
				<th><?php echo number_format(nilaitotalpotongan($d['dplk'],$d['savingplan'],$d['BPJSNaker'],$d['BPJSKes'],$d['obat'],$d['ppni'],$d['koperasi'],$d['Parkir'],$d['lain2'],$d['PPH21'])); ?></th>
				<th><?php echo number_format(nilaiupahakhir(nilaiupahbruto(nilaiupahonoff(nilaiupah(nilaigaji($d['pendidikan'],$d['tanggal_kerja'],$d['golongan']),totaltunjangan($d['Struktural'],$d['Fungsional'],$d['TKU'],$d['TunjanganKhusus'])),$d['jumlahhari'],$d['jumlahhadir']), $d['lainlain'],$d['dplk'],$d['zamrud'] ),nilaitotalpotongan($d['dplk'],$d['savingplan'],$d['BPJSNaker'],$d['BPJSKes'],$d['obat'],$d['ppni'],$d['koperasi'],$d['Parkir'],$d['lain2'],$d['PPH21']))); ?></th> 
			</tr>
			<?php 
		}
		?>

	</table>


</body>
</html>