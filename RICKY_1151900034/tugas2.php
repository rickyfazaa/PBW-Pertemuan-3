

<?php 
	echo "<h4> Tugas Nomor 2: buatlah sebuah kondisi untuk menentukan suatu variabel berisi bilangan negative atau bilangan positif ! </h4>";
	echo "<h2>Silahkan isi tabel berikut! </h2>";
?>
	<form method="POST">
		<div>
			<label for="masukan">Ketik bilangan yang akan dimasukan ke dalam variabel: </label>
			<input type="masukan" name="masukan" placeholder="Ketik..." required autocomplete="off"> 
		</div>	
		<br>
		<div>
			<button type="submit" name="submit">Submit</button>
			<button type="cobalagi" name=""><a href="http://localhost/tugas2.php">Ulangi</a></button>
		</div>
	</form>

<?php 
	if(isset($_POST['submit'])) {
		$masukan = @$_POST['masukan'];
		if (ctype_alpha($masukan)){
			echo "'<b>".$masukan."</b>' bukanlah sebuah bilangan(integer), melainkan sebuah string(alphabet). Silahkan ulangi dengan menginput sebuah ANGKA!";
		}
		else{
			if ($masukan > 0){
				echo "Isi bilangan dalam variabel tersebut: (".$masukan.") adalah Bilangan Positif!";
		//		$masukan = "";
			}
			else{
				if ($masukan < 0) {
				echo "Isi bilangan dalam variabel tersebut: (".$masukan.") adalah Bilangan Negatif!";
				$masukan = "";
			}
				else{
					echo "Isi bilangan dalam variabel tersebut: (".$masukan.") adalah Nol";
				}
		
		}

	}
}
	if(isset($_POST['cobalagi'])) {
		header("http://localhost/tugas2.php");}

?>