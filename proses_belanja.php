<?php
session_start();
$nama = $_POST['nama'] ;
$password = $_POST['password'];

$_SESSION['nama'] 	= isset($_POST['nama']) ? $_POST["nama"]:$_SESSION["nama"];
$_SESSION['password']	= isset($_POST['password']) ? $_POST["password"]:$_SESSION["password"];
$_SESSION['iduser'] = 670117;

if(isset($_GET['ancur'])){
	session_destroy();
	header("Location: login.html");
}

$user = array(
			array( "nama" =>"Widya" ,
				"password" =>"123"),

			array(  "nama" =>"Shinta",
				"password"=>"670"),

     		 array( "nama" =>"Rama",
       			"password" =>"117"));

if ($nama == $user[1]["nama"] && $password == $user[1]['password']||
	$nama == $user[2]["nama"] && $password == $user[2]['password']||
 	 $nama == $user[0]["nama"] && $password == $user[0]['password']) {
	echo "<h><b>Belanja Online</b><h1>";
}else{
	header("location: login.html");
}
?>
<form action="keluaran.php" method="post" enctype="multipart/form-data">
  <table>
    <tr>
  		<td>Daftar Barang Belanja</td>
      <td><input type="checkbox" name="belanja[]" value="Sampo">Sampo</td>
  		<td><input type="checkbox" name="belanja[]" value="Sabun">Sabun</td>
  		<td><input type="checkbox" name="belanja[]" value="Kopi">Kopi</td>
    </tr>

    <tr>
    	<td>Jenis Pengiriman</td>
    	<td><input type="radio" name="pengiriman" value="JNE">JNE</td>
    	<td><input type="radio" name="pengiriman" value="Tiki">Tiki</td>	
  		<td><input type="radio" name="pengiriman" value="J&T">J&T</td>
  	</tr>

  	<tr>
    	<td>Alamat</td>
      	<td>:</td>
    	<td><input type="text" name="alamat"></td>
    </tr>

     <tr>
      <td><input type="submit" name="" value="Kirim"></td>
    </tr>
	</table>
</form>
<?php 

 ?>
