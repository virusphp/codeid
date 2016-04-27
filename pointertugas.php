 <!DOCTYPE html>
 <!-- 
	Tanggal 	: 26 April 2016
	Autor 		: phpclass.com
	Modified	: Gandi N3 a.k.a Genzol N3 Alias Dnet-C
	Thanks		: For All Google inc Is my inspiration
 -->
<html>
	<head>
	<meta charset="UTF-8">
	<title>
		POINTER TESTING 2
	</title>
</head> 
<body>
	<?php
		echo "<center>** POINT PROGRAM SEDERHANA ** <br /><br />"; 
		$citacita=array(
			"visi" => "Menciptakan dunia yang Baik dan tetap pada hakikatnya",
		  	"misi" => "Menciptkan generai yang berguna bagi smua orang");
		echo"</pre><b>"; 
		print_r($citacita); //menampilkan isi dari array 
		echo"</b><br />";  
		$misi = end($citacita);//menunjuk isi terakhir dari array 
		$visi = prev($citacita);//menunjuk isi sebelum $misi dari array 
		echo("$misi");//menampilkan pointer akhir 
		echo(" adalah $visi <br /><br /></center>");//menampilkan pointer sebelumnya 
	?> 
</body> 
</html>
