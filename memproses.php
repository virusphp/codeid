<!DOCTYPE html>
<!-- 
	Tanggal 	: 26 April 2016
	Autor 		: Github.com/xdan
	Modified	: Gandi N3 a.k.a Genzol N3 Alias Dnet-C
	Thanks		: For All Google inc Is my inspiration
 -->
<html>
<head>
	<title>Hasil Perhitungan hari</title>
</head>
<body>
<?php
	include "class/tgl.php";
	if(isset($_POST['tgl1']) && isset($_POST['tgl2'])){
	$tgl1=$_POST['tgl1'];
	$tgl2=$_POST['tgl2'];
	$tgl=new tgl();
	$tgl=$tgl->datediff($tgl1,$tgl2);
	echo "<script language=\"Javascript\">\n";
	echo "confirmed = window.confirm('Selisih dari ".$tgl1." dan ".$tgl2." Adalah : ".abs($tgl['years'])." Tahun - ".$tgl['months']." Bulan - ".$tgl['days']." Hari ');";
	echo "if (confirmed)";
	echo "{";
	echo "window.alert('Anda menekan tombol OK');";
	echo "document.location.href='menghitunghari.php'";
	echo "}";
	echo "else ";
	echo "{";
	echo "window.alert('Anda menekan tombol CANCEL');";
	echo "document.location.href='menghitunghari.php'";
	echo "}";
	echo "</script>";
	}
	else{
		echo "Masukan tanggal";
	}
?>
</body>
</html>
