<?php 
include '../koneksi.php';
$id = '';
if(isset($_POST['id'])){
	$id = $_POST['id'];
}
$lembur = '';
if(isset($_POST['lembur'])){
	$lembur = $_POST['lembur'];
}
$tanggal_merah = '';
if(isset($_POST['tanggal_merah'])){
	$tanggal_merah = $_POST['tanggal_merah'];
}
$hari_raya = '';
if(isset($_POST['hari_raya'])){
	$hari_raya = $_POST['hari_raya'];
}
$on_call = '';
if(isset($_POST['on_call'])){
	$on_call = $_POST['on_call'];
}
$rujuk = '';
if(isset($_POST['rujuk'])){
	$rujuk = $_POST['rujuk'];
}
$rekom_sip = '';
if(isset($_POST['rekom_sip'])){
	$rekom_sip = $_POST['rekom_sip'];
}
$jasmed = '';
if(isset($_POST['jasmed'])){
	$jasmed = $_POST['jasmed'];
}
$lainlain = '';
if(isset($_POST['lainlain'])){
	$lainlain = $_POST['lainlain'];
}
$obat = '';
if(isset($_POST['obat'])){
	$obat = $_POST['obat'];
}
$pinjaman = '';
if(isset($_POST['pinjaman'])){
	$pinjaman = $_POST['pinjaman'];
}
$izin = '';
if(isset($_POST['izin'])){
	$izin = $_POST['izin'];
}
$keterlambatan = '';
if(isset($_POST['keterlambatan'])){
	$keterlambatan = $_POST['keterlambatan'];
}
$lain2 = '';
if(isset($_POST['lain2'])){
	$lain2 = $_POST['lain2'];
}

$sql = "UPDATE data_pegawai set lembur = $lembur, tanggal_merah = $tanggal_merah, hari_raya = $hari_raya, on_call = $on_call, rujuk = $rujuk, rekom_sip = $rekom_sip, jasmed = $jasmed, lainlain = $lainlain, obat = $obat, pinjaman = $pinjaman, izin = $izin,keterlambatan = $keterlambatan, lain2 = $lain2 WHERE id = $id";

//echo $sql;

mysqli_query($koneksi,$sql);
header("location:../data.php?berhasil=$berhasil");
	
?>