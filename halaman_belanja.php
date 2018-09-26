<?php
session_start();
$hrgapngrman;
$totalhrg;
$tgl=date('d-m-Y');

$pengiriman = $_POST["pengiriman"];
$belanja 	= $_POST["belanja"];
$alamat 	= $_POST["alamat"];	

 echo "Tanggal Pembeliaan : $tgl <br><br>";
 echo "Alamat : $alamat";
 echo "<p>Barang yang dibeli: </p>";

 foreach ($belanja as $i) {
	echo "- $i <br />";
}

$ttlBiaya = 0;

if ($pengiriman=="JNE") {
	$hrgapngrman = 10000;
}elseif ($pengiriman=="TiKi") {
	$hrgapngrman = 12000;
}elseif ($pengiriman=="J&T"){
	$hrgapngrman = 8000;
}

for ($x = 0; $x < count($belanja); $x++) { 
	if ($belanja[$x] == "TV") {
		$harga = 2000000;
	} elseif($belanja[$x] == "Mesin Cuci"){
		$harga = 3000000;
	} else {
		$harga = 500000;
	}

	$ttlBiaya = $ttlBiaya + $harga;
}
error_reporting(0);
echo "<br>Harga Pengiriman $pengiriman : Rp. ". number_format($hrgapngrman)."<br>";
$ttlBiaya = $ttlBiaya + $hrgapngrman;
$baris = count($_SESSION['daftarbelanja']);
$_SESSION['daftarbelanja'][$baris] = array(
	"belanja" => $belanja, "pengiriman" => $pengiriman, "alamat" => $alamat, "totalBiaya" => $ttlBiaya
);
$daftarbelanjaan = $_SESSION['daftarbelanja'];
echo "<br>Total Harga = Rp." . number_format($daftarbelanjaan[0]['totalBiaya']);

?>
<br><br>
<a href="logout.php">Logout</a>
