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

$sql = "UPDATE data_pegawai set jumlahhari = $jumlahhari, jumlahhadir = $jumlahhadir WHERE id = $id";

//echo $sql;

mysqli_query($koneksi,$sql);
header("location:../kehadiran.php?berhasil=$berhasil");
	
?>