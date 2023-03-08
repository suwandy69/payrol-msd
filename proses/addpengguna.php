<?php 
include '../koneksi.php';
$id = '';
if(isset($_POST['id'])){
	$id = $_POST['id'];
}
$username = '';
if(isset($_POST['username'])){
	$username = $_POST['username'];
}
$password = '';
if(isset($_POST['password'])){
	$password = $_POST['password'];
}

if($id == '')
{	
$sql = "INSERT into data_pengguna (username,password) values('$username','$password')";
}
else
{
$sql = "UPDATE data_pengguna set `username` = '$username', `password` = '$password' WHERE username = '$id'";
}
//echo $sql;

mysqli_query($koneksi,$sql);
header("location:../pengguna.php?berhasil=$berhasil");
	
?>