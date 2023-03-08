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
mysqli_query($koneksi,"DELETE FROM data_pegawai");
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$npp     = $data->val($i, 1);
	$nama   = $data->val($i, 2);
	$jabatan  = $data->val($i, 3);
	$status     = $data->val($i, 4);
	$pendidikan   = $data->val($i, 5);
	$golongan  = $data->val($i, 6);
	$tanggal_kerja     = $data->val($i, 7);
	$Struktural   = $data->val($i, 8);
	$Fungsional  = $data->val($i, 9);
	$TKU     = $data->val($i, 10);
	$TunjanganKhusus   = $data->val($i, 11);
	$BPJSNaker  = $data->val($i, 12);
	$BPJSKes     = $data->val($i, 13);
	$Parkir   = $data->val($i, 14);
	$PPH21  = $data->val($i, 15);

	if($nama != "" && $jabatan != "" && $status != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into data_pegawai (npp,nama,jabatan,status,pendidikan,golongan,tanggal_kerja,Struktural,Fungsional,TKU,TunjanganKhusus,BPJSNaker,BPJSKes,Parkir,PPH21) values('$npp','$nama','$jabatan','$status','$pendidikan','$golongan','$tanggal_kerja','$Struktural','$Fungsional','$TKU','$TunjanganKhusus','$BPJSNaker','$BPJSKes','$Parkir','$PPH21')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>