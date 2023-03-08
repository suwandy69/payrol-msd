<?php 
include '../koneksi.php';
$username=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($koneksi,"SELECT * FROM data_pengguna where username='$username' AND password='$pass'");
$cek = mysqli_num_rows($sql);
$row= mysqli_fetch_array($sql);
if($cek>0){
  session_start();
  $_SESSION['username'] = $username;
  header('Location: ../index.php');
}else {
  header('Location: ../login.php');
}
	
?>