<?php 
include '../koneksi.php';
$id = '';
if(isset($_POST['id'])){
	$id = $_POST['id'];
}
$jumlahhari = '';
if(isset($_POST['jumlahhari'])){
	$jumlahhari = $_POST['jumlahhari'];
}
$jumlahhadir = '';
if(isset($_POST['jumlahhadir'])){
	$jumlahhadir = $_POST['jumlahhadir'];
}
$lainlain = '';
if(isset($_POST['lainlain'])){
	$lainlain = $_POST['lainlain'];
}
$dplk = '';
if(isset($_POST['dplk'])){
	$dplk = $_POST['dplk'];
}
$zamrud = '';
if(isset($_POST['zamrud'])){
	$zamrud = $_POST['zamrud'];
}
$savingplan = '';
if(isset($_POST['savingplan'])){
	$savingplan = $_POST['savingplan'];
}
$obat = '';
if(isset($_POST['obat'])){
	$obat = $_POST['obat'];
}
$ppni = '';
if(isset($_POST['ppni'])){
	$ppni = $_POST['ppni'];
}
$koperasi = '';
if(isset($_POST['koperasi'])){
	$koperasi = $_POST['koperasi'];
}
$lain2 = '';
if(isset($_POST['lain2'])){
	$lain2 = $_POST['lain2'];
}

$sql = "UPDATE data_pegawai set jumlahhari = $jumlahhari, jumlahhadir = $jumlahhadir, lainlain = $lainlain, dplk = $dplk, zamrud = $zamrud, savingplan = $savingplan, obat = $obat, ppni = $ppni, koperasi = $koperasi, lain2 = $lain2 WHERE id = $id";

//echo $sql;

mysqli_query($koneksi,$sql);
header("location:../data.php?berhasil=$berhasil");
	
?>