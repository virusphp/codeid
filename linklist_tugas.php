<!DOCTYPE html>
 <!-- 
	Tanggal 	: 26 April 2016
	Autor 		: phpclass.com
	Modified	: Gandi N3 a.k.a Genzol N3 Alias Dnet-C
	Thanks		: For All Google inc Is my inspiration
 -->
<html>
<head>
	<title>LINKED LIST TUGAS 2</title>
</head>
<body>
<?php 
	class Tugas {
		public $fungsi;
		public $berikut;

		function __construct($funsi){
			$this->fungsi = $funsi;
			$this->berikut = NULL;
		}
	}

	class Linkedlist
	{
		public $kepala;
		function __construct()
		{
			$this->kepala = NULL;
		}

		public function insert($fungsi)
		{
			$link = new Tugas($fungsi);
			$link->berikut = $this->kepala;
			$this->kepala = &$link;
		}
	}
	// variable baru untuk memanggil
	$m = new Linkedlist();
	// menyisipkan fungsi office boy dalam linked list
	$m->insert('Office Boy');
	// menyisipkan sungsi staff dalam linked list
	$m->insert('Staff');
	// menyisipkan fungsi supervisor dalam linkedlist
	$m->insert('Supervisor');
	// menyisipkan funsi manager dalam linked list
	$m->insert('Manager');
	// menyisipkan funsi direktur dalam linked list
	$m->insert('Direktur');
	// menyisipkan funsi presiden direktur dalam linked list
	$m->insert('Presiden Direktur');

	echo "<center>";
	echo "******************* DAFTAR FUNGSI TUGAS ***********************";
	echo "<br>";
	echo $m->kepala->fungsi;  //keluaran presiden direktur
	echo "&nbsp; =>";
	echo $m->kepala->berikut->fungsi; //keluaran Direktur
	echo "&nbsp; =>";
	echo $m->kepala->berikut->berikut->fungsi; // keluaran manager
	echo "&nbsp; =>";
	echo $m->kepala->berikut->berikut->berikut->fungsi; // keluaran supervisor
	echo "&nbsp; =>";
	echo $m->kepala->berikut->berikut->berikut->berikut->fungsi; // keluaran staff
	echo "&nbsp; =>";
	echo $m->kepala->berikut->berikut->berikut->berikut->berikut->fungsi; // keluaran office boy
	echo "<hr>";
	echo "<p style='text-align:center;'>Ke halaman</p><a href='index.php'><p style='text-align:center;'>back</p></a><a href='menghitunghari.php'><p style='text-align:center;'>next</p></a>";
 ?>
</body>
</html>
