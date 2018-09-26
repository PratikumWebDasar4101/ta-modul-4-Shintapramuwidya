
<?php
//$hobi =count($_POST['hobi']);
$hobbi = array($_POST['hobi']);
foreach ($_POST['hobi'] as $hobbi) {
	echo "Hobi: ".$hobbi.",";
}

echo "<br>";

$films = array($_POST['film']);
foreach ($_POST['film'] as $films) {
	echo $films.",";
}

echo "<br>";

$tem_wis = array($_POST['tw']);
foreach ($_POST['tw'] as $tem_wis) {
	echo $tem_wis.",";
}

echo "<br>";

$file = $_FILES["dokumen"];
$nama_file = $file["name"];
$nama_tmp = $file["tmp_name"];
$upload_dir = "upload/";
move_uploaded_file($nama_tmp, $upload_dir.$nama_file);
echo "file berhasil diunggah";
?>
<img src="upload/<?php echo $nama_file; ?>">

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login.php" method="POST">
<input type="Submit" name="logout" value="logout">

		</form>
	</body>
</html>
