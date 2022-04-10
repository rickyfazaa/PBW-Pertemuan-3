<?php 
	//NOMOR 4A (numberik array)
	echo "<h3> 4a. Tampilkan numberik array (mobil1) menggunakan for – loop dan while – loop! </h3>";
	$mobil1 = array("Toyota","Mitsubishi","Tesla","Honda");

	echo "<h4> Menggunakan for - loop </h4>";
	for ($i=0; $i < count($mobil1) ; $i++) {
		echo $mobil1[$i]." ";
	}

	echo "<h4> Menggunakan while - loop </h4>";
	$kondisi = 0;
	while ($kondisi < count($mobil1)) {
		echo $mobil1[$kondisi]." ";
		$kondisi += 1;
	}

	//NOMOR 4B (associative array)
	echo "<h3> 4b. Tampilkan associative array (mobil2) menggunakan foreach – loop ! </h3>";
	$mobil2 = array("satu" => "Toyota","dua" => "Mitsubishi","tiga" => "Tesla","empat"=>"Honda");

	echo "<h4> Menggunakan foreach - loop </h3>";
	foreach ($mobil2 as $tampil_key => $tampil_value) {
		echo "Key = ".$tampil_key.", Value = ".$tampil_value."<br>";
	}

?>