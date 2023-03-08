<?php 
include '../koneksi.php';
$id = '';
if(isset($_POST['id'])){
	$id = $_POST['id'];
}
$id_golongan = '';
if(isset($_POST['id_golongan'])){
	$id_golongan = $_POST['id_golongan'];
}
$nama = '';
if(isset($_POST['nama'])){
	$nama = $_POST['nama'];
}

if($id == '')
{	
$sql = "INSERT into data_golongan (id_golongan,nama_golongan) values('$id_golongan','$nama')";
}
else
{
$sql = "UPDATE data_golongan set id_golongan = '$id_golongan', nama_golongan = '$nama' WHERE id_golongan = '$id'";
}
//echo $sql;

mysqli_query($koneksi,$sql);
header("location:../status.php?berhasil=$berhasil");
	
?>