

<?php 
	echo "<h4> Tugas Nomor 1: buatlah sebuah kondisi untuk menentukan suatu variabel itu berisi huruf vokal (a,i,u,e,o) atau bukan ? </h4>";
	echo "<h2>Silahkan isi tabel berikut! </h2>";
?>
	<form method="POST">
		<div>
			<label for="masukan">Ketik apapun yang akan menjadi isi dalam variabel: </label>
			<input type="masukan" name="masukan" placeholder="Ketik..." required autocomplete="off"> 
		</div>	
		<br>
		<div>
			<button type="submit" name="submit">Submit</button>
			<button type="cobalagi" name=""><a href="http://localhost/tugas1.php">Ulangi</a></button>
		</div>
	</form>

<?php 
	if(isset($_POST['submit'])) {
		$masukan = @$_POST['masukan'];
		$arr1 = str_split(strtolower($masukan));
		$nomer = 1;
		$cek = 0;
		// for (jalan in masukan)
		echo "Dalam Variabel masukan yang berisi: <b>'".$masukan."'</b> <br>";
			foreach ($arr1 as $karakter){
				if ($karakter == "a" or $karakter == "i" or $karakter == "u" or $karakter == "e" or $karakter == "o"){
					//echo "dalam Variabel masukan yang berisi: [".var_export($arr1)."]";
					echo $nomer.". Terdapat huruf vokal dalam variabel yaitu huruf: <b>".$karakter."</b> <br>";
					$nomer += 1;
					$cek += 1;
				}

			}	
			if ($cek==0){
				echo "***TIDAK TERDAPAT HURUF VOKAL DALAM VARIABEL <b>'".$masukan."'</b> !!!***";
			}
	}
	if(isset($_POST['cobalagi'])) {
		header("http://localhost/tugas1.php");}

	//$masukan = "jalan";
	//$arr_masukan = explode("",$masukan);
	//var_dump ($arr_masukan);
?>