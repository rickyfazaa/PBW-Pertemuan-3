

<?php 
	echo "<h4> Tugas Nomor 3: menggunakan switch buatlah kode untuk menentukan hari berdasarkan case number ( 1 – 7) yang missal jika case itu 1 maka hari senin ! </h4>";
	echo "<h2>Silahkan isi tabel berikut! </h2>";
?>
	<form method="POST">
		<div>
			<label for="masukan">Ketik Number antara 1 - 7: </label>
			<input type="masukan" name="masukan" placeholder="Ketik..." required autocomplete="off"> 
		</div>	
		<br>
		<div>
			<button type="submit" name="submit">Submit</button>
			<button type="cobalagi" name=""><a href="http://localhost/tugas3.php">Ulangi</a></button>
		</div>
	</form>

<?php 
	if(isset($_POST['submit'])) {
		$masukan = @$_POST['masukan'];
		if (ctype_digit($masukan)) {
			if ($masukan < 8 and $masukan > 0) {
				switch ($masukan) {
					case '1':
						echo "<h2> Hari Senin </h2>";
						break;
					case '2':
						echo "<h2> Hari Selasa </h2>";
						break;
					case '3':
						echo "<h2> Hari Rabu </h2>";
						break;
					case '4':
						echo "<h2> Hari Kamis </h2>";
						break;
					case '5':
						echo "<h2> Hari Jum'at </h2>";
						break;
					case '6':
						echo "<h2> Hari Sabtu </h2>";
						break;
					case '7':
						echo "<h2> Hari Minggu </h2>";
						break;					
					default:
						break;
					}
				}
			else{
				echo "Anda menginput di luar jarak interval antara 1 sampai 7, Coba Input ulang sesuai dengan interval (1 - 7)";
			}
			}
		else{
			echo "Coba Input ulang dengan Angka(Integer) di interval 1 - 7";
		}
	}
	if(isset($_POST['cobalagi'])) {
	 header("http://localhost/tugas1.php");}
?>