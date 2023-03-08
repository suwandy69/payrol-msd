<?php 
include '../koneksi.php';
$id = '';
if(isset($_POST['id'])){
	$id = $_POST['id'];
}
$id_jabatan = '';
if(isset($_POST['id_jabatan'])){
	$id_jabatan = $_POST['id_jabatan'];
}
$nama = '';
if(isset($_POST['nama'])){
	$nama = $_POST['nama'];
}

if($id == '')
{	
$sql = "INSERT into data_jabatan (id_jabatan,nama_jabatan) values('$id_jabatan','$nama')";
}
else
{
$sql = "UPDATE data_jabatan set id_jabatan = '$id_jabatan', nama_jabatan = '$nama' WHERE id_jabatan = '$id'";
}
//echo $sql;

mysqli_query($koneksi,$sql);
header("location:../jabatan.php?berhasil=$berhasil");
	
?>