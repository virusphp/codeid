<?php 
class tgl{
   function datediff($tgl1, $tgl2){
		 $tgl1 = (is_string($tgl1) ? strtotime($tgl1) : $tgl1);
		 $tgl2 = (is_string($tgl2) ? strtotime($tgl2) : $tgl2);

		 if($tgl1<$tgl2){
		 	$a=$tgl2;
		 	$b=$tgl1;
		 }
		 else{
		 	$a=$tgl1;
		 	$b=$tgl2;
		 }

		 $diff_secs = $a - $b;
		 $base_year = min(date("Y", $a), date("Y", $b));
		 $diff = mktime(0, 0, $diff_secs, 1, 1, $base_year);
		 
		 return array( "years" => date("Y", $diff) - $base_year,
						"months_total" => (date("Y", $diff) - $base_year) * 12 + date("n", $diff) - 1,
						"months" => date("n", $diff) - 1,
						"days_total" => floor($diff_secs / (3600 * 24)),
						"days" => date("j", $diff) - 1,
						"hours_total" => floor($diff_secs / 3600),
						"hours" => date("G", $diff),
						"minutes_total" => floor($diff_secs / 60),
						"minutes" => (int) date("i", $diff),
						"seconds_total" => $diff_secs,
						"seconds" => (int) date("s", $diff)  );
 	}
}

 ?>