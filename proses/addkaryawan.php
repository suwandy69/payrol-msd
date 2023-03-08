<?php 
include '../koneksi.php';
$id = '';
if(isset($_POST['id'])){
	$id = $_POST['id'];
}
$npp = '';
if(isset($_POST['npp'])){
	$npp = $_POST['npp'];
}
$nama = '';
if(isset($_POST['nama'])){
	$nama = $_POST['nama'];
}
$jabatan = '';
if(isset($_POST['jabatan'])){
	$jabatan = $_POST['jabatan'];
}
$status = '';
if(isset($_POST['status'])){
	$status = $_POST['status'];
}
$pendidikan = '';
if(isset($_POST['pendidikan'])){
	$pendidikan = $_POST['pendidikan'];
}
$golongan = '';
if(isset($_POST['golongan'])){
	$golongan = $_POST['golongan'];
}
$tanggal_kerja = '';
if(isset($_POST['tanggal_kerja'])){
	$tanggal_kerja = $_POST['tanggal_kerja'];
}
$tanggal_masuk = '';
if(isset($_POST['tanggal_masuk'])){
	//$tanggal_masuk = $_POST['tanggal_masuk'];
	$tanggal_masuk= date('Y-m-d', strtotime($_POST['tanggal_masuk']));
}
$Struktural = '';
if(isset($_POST['Struktural'])){
	$Struktural = $_POST['Struktural'];
}
$Fungsional = '';
if(isset($_POST['Fungsional'])){
	$Fungsional = $_POST['Fungsional'];
}
$TKU = '0';
if(isset($_POST['TKU'])){
	$TKU = $_POST['TKU'];
}
$TunjanganKhusus = '0';
if(isset($_POST['TunjanganKhusus'])){
	$TunjanganKhusus = $_POST['TunjanganKhusus'];
}
$BPJSNaker = '';
if(isset($_POST['BPJSNaker'])){
	$BPJSNaker = $_POST['BPJSNaker'];
}
$BPJSKes = '';
if(isset($_POST['BPJSKes'])){
	$BPJSKes = $_POST['BPJSKes'];
}
$Parkir = '0';
if(isset($_POST['Parkir'])){
	$Parkir = $_POST['Parkir'];
}
$PPH21 = '0';
if(isset($_POST['PPH21'])){
	$PPH21 = $_POST['PPH21'];
}

if($id == '')
{	
$sql = "INSERT into data_pegawai (npp,nama,jabatan,status,pendidikan,golongan,tanggal_kerja,tanggal_masuk,Struktural,Fungsional,TKU,TunjanganKhusus,BPJSNaker,BPJSKes,Parkir,PPH21) values('$npp','$nama','$jabatan','$status','$pendidikan','$golongan','$tanggal_kerja','$tanggal_masuk','$Struktural','$Fungsional','$TKU','$TunjanganKhusus','$BPJSNaker','$BPJSKes','$Parkir','$PPH21')";
}
else
{
$sql = "UPDATE data_pegawai set npp = '$npp', nama = '$nama', jabatan = '$jabatan', status = '$status', pendidikan = '$pendidikan', golongan = '$golongan', tanggal_masuk = '$tanggal_masuk', Struktural = $Struktural, Fungsional = $Fungsional, TKU = $TKU, TunjanganKhusus = $TunjanganKhusus, BPJSNaker = $BPJSNaker, BPJSKes = $BPJSKes, Parkir = $Parkir, PPH21 = $PPH21 WHERE id = $id";
}
//echo $sql;

mysqli_query($koneksi,$sql);
header("location:../karyawan.php?berhasil=$berhasil");
	
?>