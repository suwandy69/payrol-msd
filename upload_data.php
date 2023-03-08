<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$npp     = $data->val($i, 1);
	$jumlahhari   = $data->val($i, 2);
	$jumlahhadir  = $data->val($i, 3);
	$lainlain     = $data->val($i, 4);
	$dplk   = $data->val($i, 5);
	$zamrud  = $data->val($i, 6);
	$savingplan     = $data->val($i, 7);
	$obat   = $data->val($i, 8);
	$ppni  = $data->val($i, 9);
	$koperasi     = $data->val($i, 10);
	$lain2   = $data->val($i, 11);


		$sql = "UPDATE data_pegawai set jumlahhari = $jumlahhari, jumlahhadir = $jumlahhadir, lainlain = $lainlain, dplk = $dplk, zamrud = $zamrud, savingplan = $savingplan, obat = $obat, ppni = $ppni, koperasi = $koperasi, lain2 = $lain2 WHERE npp = '$npp'";
		mysqli_query($koneksi,$sql);
		$berhasil++;
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:data.php?berhasil=$berhasil");
?>