<?php
function nilaigaji($pendidikan, $tahun, $golongan)
{
	$gajid3 = 2893074;
	$nilaikenaikand1 = 1.008;
	$nilaikenaikand3 = 1.012;
	$nilaikenaikands1 = 1.018;
	$gajid3a1 = round($gajid3 / $nilaikenaikand3);
	$gajid3b1 = round($gajid3);
	$gajid3c1 = round($gajid3 * $nilaikenaikand3);
	$gajid3d1 = round($gajid3c1 * $nilaikenaikand3);
	if ($pendidikan == 'D3')
	{
		$perkalian = round(($tahun-1) / 2);
		if ($golongan == 'A')
		{
		$gaji = $gajid3a1;
		}
		elseif ($golongan == 'B')
		{
		$gaji = $gajid3b1;
		}
		elseif ($golongan == 'C')
		{
		$gaji = $gajid3c1;
		}
		elseif ($golongan == 'D')
		{
		$gaji = $gajid3d1;
		}
		for ($i = 1; $i <= $perkalian; $i++)
		{
			$gaji *= $nilaikenaikand3;
		}
	}
	
	$gajid3a0 =  round($gajid3a1 / $nilaikenaikand3);
	$gajid1d6 = round($gajid3a0 * 92 /100);
	$nilaibagi = $gajid1d6 / $gajid3a1;
	
	$gajid1d1 = round($gajid1d6 / $nilaikenaikand1 / $nilaikenaikand1 / $nilaikenaikand1);
	$gajid1c1 = round($gajid1d1/ $nilaikenaikand1);
	$gajid1a1 = round($gajid1c1 * $nilaibagi);
	$gajid1b1 = round($gajid1c1/ $nilaikenaikand1);
	
	if ($pendidikan == 'D1')
	{
		$perkalian = round(($tahun-1) / 2);
		if ($golongan == 'A')
		{
		$gaji = $gajid1a1;
		}
		elseif ($golongan == 'B')
		{
		$gaji = $gajid1b1;
		}
		elseif ($golongan == 'C')
		{
		$gaji = $gajid1c1;
		}
		elseif ($golongan == 'D')
		{
		$gaji = $gajid1d1;
		}
		for ($i = 1; $i <= $perkalian; $i++)
		{
			$gaji *= $nilaikenaikand1;
		}
	}
	
	
	
	$gajis1a1 = round($gajid3a1 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikands1);
	$gajis1b1 = $gajis1a1 * $nilaikenaikands1;
	$gajis1c1 = $gajis1b1 * $nilaikenaikands1;
	$gajis1d1 = $gajis1c1 * $nilaikenaikands1;
	
	if ($pendidikan == 'S1')
	{
		$perkalian = round(($tahun-1) / 2);
		if ($golongan == 'A')
		{
		$gaji = $gajis1a1;
		}
		elseif ($golongan == 'B')
		{
		$gaji = $gajis1b1;
		}
		elseif ($golongan == 'C')
		{
		$gaji = $gajis1c1;
		}
		elseif ($golongan == 'D')
		{
		$gaji = $gajis1d1;
		}
		for ($i = 1; $i <= $perkalian; $i++)
		{
			$gaji *= $nilaikenaikands1;
		}
	}
	return round($gaji);
}
function nilaigapok($gaji)
{
	$gapok = $gaji * 75 / 100;
	return round($gapok);
}
function nilaitunjangantetap($gaji)
{
	$tunjangan = $gaji * 25 / 100;
	return round($tunjangan);	
}

function totaltunjangan($struktural, $fungsional, $tku, $tunjangankhusus)
{
	$totaltunjangan = $struktural + $fungsional + $tku + $tunjangankhusus;
	return round($totaltunjangan);
}

function nilaiupah($gaji, $totaltunjangan)
{
	$upah = $gaji + $totaltunjangan;
	return round($upah);
}
function nilaiupahonoff($upah, $jumlahhari, $kehadiran)
{
	if($jumlahhari==0)
	{
	$upahonoff = 0;
	}
	else
	{
	$upahonoff = $kehadiran * $upah / $jumlahhari;
	}
	return round($upahonoff);
}
function nilaiupahbruto($upahonoff, $lainlain, $dplk, $zamrud)
{
	$upahbruto = $upahonoff + $lainlain + $dplk + $zamrud;
	return round($upahbruto);
}
function nilaitotalpotongan($dplk, $savingplan, $bpjsnaker, $bpjskes, $obat, $ppni, $koperasi, $parkir, $lain2, $pph21)
{
	$totalpotongan = $dplk + $savingplan + $bpjsnaker + $bpjskes + $obat + $ppni + $koperasi + $parkir + $lain2 + $pph21;
	return round($totalpotongan);
}
function nilaiupahakhir($upahbruto, $totalpotongan)
{
	$upahakhir = $upahbruto - $totalpotongan;
	return round($upahakhir);
}
function nilaitakehome($gajipokok, $tunjangan, $lembur, $tgl_merah, $hari_raya, $koor, $on_call, $rujuk, $rekom_sip, $jasmed, $lainlain, $bpjsker, $bpjsnaker, $obat, $pinjaman, $izin, $keterlambatan, $lain2)
{
	$upahakhir = $gajipokok + $tunjangan + $lembur + $tgl_merah + $hari_raya + $koor + $on_call + $rujuk + $rekom_sip + $jasmed + $lainlain - $bpjsker - $bpjsnaker - $obat - $pinjaman - $izin - $keterlambatan - $lain2;
	return round($upahakhir);
}

if(isset($_GET['hitung'])) {
if(isset($_GET['pendidikan'])) {
    $pendidikan = $_GET['pendidikan'];
} else {
    $pendidikan = 'D3';
}
echo 'Pendidikan : ' . $pendidikan. '<br>';

if(isset($_GET['tahun'])) {
    $tahun = $_GET['tahun'];
} else {
    $tahun = '1';
}
echo 'Tahun : ' . $tahun. '<br>';

if(isset($_GET['golongan'])) {
    $golongan = $_GET['golongan'];
} else {
    $golongan = 'A';
}
echo 'Golongan : ' . $golongan. '<br>';

$gajid3 = 2893074;
//echo $gajid3 . '<br>';
$nilaikenaikand1 = 1.008;
//echo $nilaikenaikand1 . '<br>';
$nilaikenaikand3 = 1.012;
//echo $nilaikenaikand3 . '<br>';
$nilaikenaikands1 = 1.018;
//echo $nilaikenaikands1 . '<br>';
$gajid3a1 = round($gajid3 / $nilaikenaikand3);
$gajid3b1 = round($gajid3);
$gajid3c1 = round($gajid3 * $nilaikenaikand3);
$gajid3d1 = round($gajid3c1 * $nilaikenaikand3);
//echo '1-' . $gajid3a1 . '-' . $gajid3b1 . '-'. $gajid3c1 . '-'. $gajid3d1 . '<br>';
//$gajid3a2 = round($gajid3a1 * $nilaikenaikand3);
//$gajid3b2 = round($gajid3b1 * $nilaikenaikand3);
//$gajid3c2 = round($gajid3c1 * $nilaikenaikand3);
//$gajid3d2 = round($gajid3d1 * $nilaikenaikand3);
//echo $gajid3a2 . '-' . $gajid3b2 . '-'. $gajid3c2 . '-'. $gajid3d2 . '<br>';

/*for ($x = 0; $x <= 39 ; $x++) {
	$perkalian = round($x / 2);
	//echo($perkalian . "<br>");
	$gajia = $gajid3a1;
	$gajib = $gajid3b1;
	$gajic = $gajid3c1;
	$gajid = $gajid3d1;
	for ($i = 1; $i <= $perkalian; $i++)
	{
		$gajia *= $nilaikenaikand3;
		$gajib *= $nilaikenaikand3;
		$gajic *= $nilaikenaikand3;
		$gajid *= $nilaikenaikand3;
}
	
//echo $x+1 . '-' . round($gajia) . '-' . round($gajib) . '-'. round($gajic) . '-'. round($gajid) . '<br>';
}*/

if ($pendidikan == 'D3')
{
	$perkalian = round(($tahun-1) / 2);
	if ($golongan == 'A')
	{
	$gaji = $gajid3a1;
	}
	elseif ($golongan == 'B')
	{
	$gaji = $gajid3b1;
	}
	elseif ($golongan == 'C')
	{
	$gaji = $gajid3c1;
	}
	elseif ($golongan == 'D')
	{
	$gaji = $gajid3d1;
	}
	for ($i = 1; $i <= $perkalian; $i++)
	{
		$gaji *= $nilaikenaikand3;
	}
	echo 'Nilai Matrix : ' . number_format(round($gaji));
	echo '<br>';
	echo '<br>';
}




$gajid3a0 =  round($gajid3a1 / $nilaikenaikand3);
//echo $gajid3a0. '<br>';
$gajid1d6 = round($gajid3a0 * 92 /100);
//echo $gajid1d6. '<br>';
$nilaibagi = $gajid1d6 / $gajid3a1;
//echo $nilaibagi. '<br>';

$gajid1d1 = round($gajid1d6 / $nilaikenaikand1 / $nilaikenaikand1 / $nilaikenaikand1);
$gajid1c1 = round($gajid1d1/ $nilaikenaikand1);
$gajid1a1 = round($gajid1c1 * $nilaibagi);
//$gajid1b1 = round($gajid1a1 * 105 / 100);
$gajid1b1 = round($gajid1c1/ $nilaikenaikand1);

//echo $gajid1a1 . '-' . $gajid1b1 . '-'. $gajid1c1 . '-' . $gajid1d1. '<br>';

/*for ($x0 = 0; $x0 <= 39 ; $x0++) {
	$perkalian0 = round($x0 / 2);
	if($x0 == 1)
	{
	}
	//echo $perkalian0;
	$gajia0 = $gajid1b1 / $nilaikenaikand1;
	$gajib0 = $gajid1b1;
	$gajic0 = $gajid1c1;
	$gajid0 = $gajid1d1;
	
	for ($i0 = 1; $i0 <= $perkalian0; $i0++)
	{
		//echo $i0;
		$gajia0 *= $nilaikenaikand1;
		$gajib0 *= $nilaikenaikand1;
		$gajic0 *= $nilaikenaikand1;
		$gajid0 *= $nilaikenaikand1;
	}
	
	
//echo $x0+1 . '-' . round($gajia0) . '-' . round($gajib0) . '-'. round($gajic0) . '-'. round($gajid0) . '<br>';
}*/

if ($pendidikan == 'D1')
{
	$perkalian = round(($tahun-1) / 2);
	if ($golongan == 'A')
	{
	$gaji = $gajid1a1;
	}
	elseif ($golongan == 'B')
	{
	$gaji = $gajid1b1;
	}
	elseif ($golongan == 'C')
	{
	$gaji = $gajid1c1;
	}
	elseif ($golongan == 'D')
	{
	$gaji = $gajid1d1;
	}
	for ($i = 1; $i <= $perkalian; $i++)
	{
		$gaji *= $nilaikenaikand1;
	}
	echo round($gaji);
	echo '<br>';
	echo '<br>';
}



$gajis1a1 = round($gajid3a1 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikand3 * $nilaikenaikands1);
$gajis1b1 = $gajis1a1 * $nilaikenaikands1;
$gajis1c1 = $gajis1b1 * $nilaikenaikands1;
$gajis1d1 = $gajis1c1 * $nilaikenaikands1;

/*for ($x1 = 0; $x1 <= 39 ; $x1++) {
	$perkalian1 = round($x1 / 2);
	
	$gajia1 = $gajis1a1;
	$gajib1 = $gajis1b1;
	$gajic1 = $gajis1c1;
	$gajid1 = $gajis1d1;
	
	for ($i1 = 1; $i1 <= $perkalian1; $i1++)
	{
		//echo $i0;
		$gajia1 *= $nilaikenaikands1;
		$gajib1 *= $nilaikenaikands1;
		$gajic1 *= $nilaikenaikands1;
		$gajid1 *= $nilaikenaikands1;
	}
	
	
//echo $x1+1 . '-' . round($gajia1) . '-' . round($gajib1) . '-'. round($gajic1) . '-'. round($gajid1) . '<br>';
}*/


if ($pendidikan == 'S1')
{
	$perkalian = round(($tahun-1) / 2);
	if ($golongan == 'A')
	{
	$gaji = $gajis1a1;
	}
	elseif ($golongan == 'B')
	{
	$gaji = $gajis1b1;
	}
	elseif ($golongan == 'C')
	{
	$gaji = $gajis1c1;
	}
	elseif ($golongan == 'D')
	{
	$gaji = $gajis1d1;
	}
	for ($i = 1; $i <= $perkalian; $i++)
	{
		$gaji *= $nilaikenaikands1;
	}
	echo round($gaji);
	echo '<br>';
	echo '<br>';
}

$gapok = $gaji * 75 / 100;
	echo 'Nilai Gapok : ' . number_format(round($gapok));
	echo '<br>';
	
$tunjangan = $gaji * 25 / 100;

	echo 'Nilai Tunjangan Tetap : ' . number_format(round($tunjangan));
	echo '<br>';
	
if(isset($_GET['struktural'])) {
    $struktural = $_GET['struktural'];
} else {
    $struktural = 0;
}
echo 'Struktural : ' . number_format($struktural). '<br>';

if(isset($_GET['fungsional'])) {
    $fungsional = $_GET['fungsional'];
} else {
    $fungsional = 0;
}
echo 'Fungsional : ' . number_format($fungsional). '<br>';

if(isset($_GET['tku'])) {
    $tku = $_GET['tku'];
} else {
    $tku = 0;
}
echo 'TKU : ' . number_format($tku). '<br>';

if(isset($_GET['tunjangankhusus'])) {
    $tunjangankhusus = $_GET['tunjangankhusus'];
} else {
    $tunjangankhusus = 0;
}
echo 'Tunjangan Khusus : ' . number_format($tunjangankhusus). '<br>';


$totaltunjangan = $struktural + $fungsional + $tku + $tunjangankhusus;

echo 'Total Tunjangan : ' . number_format($totaltunjangan). '<br>';

$upah = $gapok + $tunjangan + $totaltunjangan;

echo 'Upah : ' . number_format($upah). '<br>';

if(isset($_GET['jumlahhari'])) {
    $jumlahhari = $_GET['jumlahhari'];
} else {
    $jumlahhari = 25;
}
echo 'Jumlah Hari : ' . number_format($jumlahhari). '<br>';

if(isset($_GET['kehadiran'])) {
    $kehadiran = $_GET['kehadiran'];
} else {
    $kehadiran = 25;
}
echo 'Jumlah Hadir : ' . number_format($kehadiran). '<br>';

$upahonoff = $kehadiran * $upah / $jumlahhari;
echo 'Upah ON / OFF : ' . number_format(round($upahonoff)). '<br>';

if(isset($_GET['lainlain'])) {
    $lainlain = $_GET['lainlain'];
} else {
    $lainlain = 0;
}
echo 'Lain-Lain : ' . number_format($lainlain). '<br>';

if(isset($_GET['dplk'])) {
    $dplk = $_GET['dplk'];
} else {
    $dplk = 0;
}
echo 'DPLK : ' . number_format($dplk). '<br>';


if(isset($_GET['zamrud'])) {
    $zamrud = $_GET['zamrud'];
} else {
    $zamrud = 0;
}
echo 'Zamrud : ' . number_format($zamrud). '<br>';

$upahbruto = $upahonoff + $dplk + $lainlain + $zamrud;
echo 'Upah bruto + DPLK : ' . number_format($upahbruto). '<br>';

echo 'DPLK : ' . number_format($dplk). '<br>';

if(isset($_GET['savingplan'])) {
    $savingplan = $_GET['savingplan'];
} else {
    $savingplan = 0;
}
echo 'Saving Plan : ' . number_format($savingplan). '<br>';

if(isset($_GET['bpjsnaker'])) {
    $bpjsnaker = $_GET['bpjsnaker'];
} else {
    $bpjsnaker = 0;
}
echo 'BPJS Naker : ' . number_format($bpjsnaker). '<br>';

if(isset($_GET['bpjskes'])) {
    $bpjskes = $_GET['bpjskes'];
} else {
    $bpjskes = 0;
}
echo 'BPJS Kes : ' . number_format($bpjskes). '<br>';

if(isset($_GET['obat'])) {
    $obat = $_GET['obat'];
} else {
    $obat = 0;
}
echo 'Obat : ' . number_format($obat). '<br>';

if(isset($_GET['ppni'])) {
    $ppni = $_GET['ppni'];
} else {
    $ppni = 0;
}
echo 'PPNI : ' . number_format($ppni). '<br>';

if(isset($_GET['koperasi'])) {
    $koperasi = $_GET['koperasi'];
} else {
    $koperasi = 0;
}
echo 'Koperasi : ' . number_format($koperasi). '<br>';

if(isset($_GET['parkir'])) {
    $parkir = $_GET['parkir'];
} else {
    $parkir = 0;
}
echo 'Parkir : ' . number_format($parkir). '<br>';

if(isset($_GET['lain2'])) {
    $lain2 = $_GET['lain2'];
} else {
    $lain2 = 0;
}
echo 'Lain2 : ' . number_format($lain2). '<br>';

if(isset($_GET['pph21'])) {
    $pph21 = $_GET['pph21'];
} else {
    $pph21 = 0;
}
echo 'PPH21 : ' . number_format($pph21). '<br>';

$totalpotongan = $dplk + $savingplan + $bpjsnaker + $bpjskes + $obat + $ppni + $koperasi + $parkir + $lain2 + $pph21;
echo 'Total Potongan : ' . number_format($totalpotongan). '<br>';

$upahakhir = $upahbruto - $totalpotongan;
echo 'Upah : ' . number_format($upahakhir). '<br>';
}
?>