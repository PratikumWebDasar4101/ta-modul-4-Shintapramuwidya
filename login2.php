<?php
session_start();
if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$akses = $_POST['akses'];
	$iduser = "";
	$_SESSION ['nama'] = $nama;
	$_SESSION ['akses'] = $akses;
	$_SESSION ['iduser'] = $iduser;
	//print_r($_SESSION);
}
include 'login.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="formawal.html">Silahkan masuk</a>
</body>
</html>
