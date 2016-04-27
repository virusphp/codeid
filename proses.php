<!DOCTYPE html>
<!-- 
	Tanggal 	: 26 April 2016
	Autor 		: codesaya.com
	Modified	: Gandi N3 a.k.a Genzol N3 Alias Dnet-C
	Thanks		: For All Google inc Is my inspiration
 -->
<html>
<head>
	<title>Hasil</title>
	<link rel="stylesheet" type="text/css" href="css/dnet.css">
</head>
<body>
 <h1 align="center">Hasil Looping Terbalik</h1>
<?php 
	$x = $_POST['nilai'];
	$y = strlen($x);
	echo "<hr>";
	echo "<center class='besar'><b>Inputan = </b>" .$x."</center>";
	echo "<hr>";
	echo "<center class='besar'><b >Outputan = </b>";

	for($i=$y; $i>=0; $i--){
		$hasil = substr($x, $i, 1);
		echo $hasil; //menampilkan hasil
	}
	echo "</center>";
	echo "<hr>";
	echo "<p style='text-align:center;'>Kembali ke halaman utama</p><a href='index.php'><p style='text-align:center;'>back</p></a>";
	echo "<p style='text-align:center;'>Halaman berikutnya</p><a href='linklist_tugas.php'><p style='text-align:center;'>next</p></a>";
 ?>
</body>
</html>
