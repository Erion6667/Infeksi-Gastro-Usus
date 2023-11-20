<?php

// Membuat array untuk menampung pilihan dan perhitungan
$gejala = array();
$gejalaBool = array();
$gejalaKlinis = array();
$gejalaKlinisMaks = array();
$gejalaKlinisString = array();
$infeksi = array();
$infeksiMaks = array();
$infeksiString = array();
$gejalaString = array();

// Inisialisasi 19 gejala awal
for ($i = 0; $i <= 18; $i++) {
	$gejala[$i] = 0;
}

//Inisialisasi gejala awal string
$gejalaString[0] = "anda sering mengalami buang air besar (lebih dari 2 kali)";
$gejalaString[1] = "anda mengalami berak encer";
$gejalaString[2] = "anda mengalami berak berdarah";
$gejalaString[3] = "anda merasa lesu dan tidak bergairah";
$gejalaString[4] = "anda tidak selera makan";
$gejalaString[5] = "anda merasa mual dan sering muntah (lebih dari 1 kali)";
$gejalaString[6] = "anda merasa sakit di bagian perut";
$gejalaString[7] = "tekanan darah anda rendah";
$gejalaString[8] = "anda merasa pusing";
$gejalaString[9] = "anda mengalami pingsan";
$gejalaString[10] = "suhu badan anda tinggi";
$gejalaString[11] = "anda mengalami luka di bagian tertentu";
$gejalaString[12] = "anda tidak dapat menggerakkan anggota badan tertentu";
$gejalaString[13] = "anda pernah memakan sesuatu";
$gejalaString[14] = "anda memakan daging";
$gejalaString[15] = "anda memakan jamur";
$gejalaString[16] = "anda memakan makanan kaleng";
$gejalaString[17] = "anda membeli susu";
$gejalaString[18] = "anda meminum susu"; 

//Inisialisasi gejala lanjut (klinis)
for ($i = 0; $i <= 12; $i++) {
	$gejalaKlinis[$i] = 0;
}

//Inisialisasi gejala lanjut (klinis, banyak isi dari gejala)
$gejalaKlinisMaks[0] = 4;
$gejalaKlinisMaks[1] = 3;
$gejalaKlinisMaks[2] = 2;
$gejalaKlinisMaks[3] = 3;
$gejalaKlinisMaks[4] = 2;
$gejalaKlinisMaks[5] = 4;
$gejalaKlinisMaks[6] = 4;
$gejalaKlinisMaks[7] = 2;
$gejalaKlinisMaks[8] = 5;
$gejalaKlinisMaks[9] = 2;
$gejalaKlinisMaks[10] = 2;
$gejalaKlinisMaks[11] = 2;
$gejalaKlinisMaks[12] = 2;

//Inisialisasi gejala lanjut (klinis) string
$gejalaKlinisString[0] = "Mencret";
$gejalaKlinisString[1] = "Muntah";
$gejalaKlinisString[2] = "Sakit perut";
$gejalaKlinisString[3] = "Darah rendah";
$gejalaKlinisString[4] = "Koma";
$gejalaKlinisString[5] = "Demam";
$gejalaKlinisString[6] = "Septicaemia";
$gejalaKlinisString[7] = "Lumpuh";
$gejalaKlinisString[8] = "Mencret berdarah";
$gejalaKlinisString[9] = "Makan daging";
$gejalaKlinisString[10] = "Makan jamur";
$gejalaKlinisString[11] = "Makan makanan kaleng";
$gejalaKlinisString[12] = "Minum susu";

//Inisialisasi infeksi (diagnosis)
for ($i = 0; $i <= 4; $i++) {
	$infeksi[$i] = 0;
}

//Inisialisasi infeksi (diagnosis, banyak isi dari gejala lanjut)
$infeksiMaks[0] = 5;
$infeksiMaks[1] = 5;
$infeksiMaks[2] = 6;
$infeksiMaks[3] = 3;
$infeksiMaks[4] = 4;

//Inisialisasi infeksi (diagnosis)
$infeksiString[0] = "Keracunan Staphylococcus aureus"; 
$infeksiString[1] = "Keracunan Jamur beracun";
$infeksiString[2] = "Keracunan Salmonellae";
$infeksiString[3] = "Keracunan Clostridium botulinum";
$infeksiString[4] = "Keracunan Campylobacter";

?>


<!--Membuat tampilan checkbox dan input threshold dari inisialisasi php di atas dengan html-->
<html>
<head>
	<title>Formulir Diagnosis Infeksi Gastro Usus</title>
<style>
	form {
		font-family: Arial, sans-serif;
		background-color: #F0FFFF;
		padding: 10px;
		border-radius: 10px;
		margin-left: 15px;
		}
		
	input[type="checkbox"]{
		margin-right: 10px;
		color: red;
		}

	label {
		font-weight: bold;
		margin-left: -10px;
		}
	
	input[type="text"] {
		padding: 4.5px 9px;
		border-radius: 5px;
		margin-right: 10px;
		border-style: solid;
		}
	
	button[type="submit"] {
		background-color: #4682B4;
		color: white;
		border: none;
		padding: 4.5px 9px;
		border-radius: 5px;
		cursor: pointer;
		margin-top: 10px;
		font-weight: bold;
		}
		
	.output-box {
		background-color: #4682B4;
		display: flex;
		color: white;
		padding: 4px 8px;
		border: none;
		border-radius: 5px;
		margin: auto;
		align-items: center;
		justify-content: center;
	}
	*,html{
		padding: 5px;
		margin: 5px;
		max-width: 100%;
	}
</style>
</head>
<body>
    <header>
	<img src="headerusus.png" alt="Header Formulir Diagnosis Infeksi Gastro Usus" 
	style="width: 100%; height: auto; justify-content: center; align-items: center; margin: auto;">
	</header>
		<form action="" method="post"> <!--method yang digunakan adalah post-->
		<b>Petunjuk Pengisian: Pilih daftar pertanyaan dibawah sesuai kondisi yang dialami dan tentukan thresholdnya </b><br></br>
			<?php foreach ($gejalaString as $key => $value): ?>
				<input type="checkbox" name="gejala[]" value="<?= $key ?>">
				Apakah <?= $value ?> ?
				<br>
			<?php endforeach; ?>
			</br>
			<label for="threshold"><b>Threshold</b> : </label>
			<input type="text" id="threshold" name="threshold"> %
			<button type="submit" name="submit">Submit</button>
		
		<?php 
		// Membuat server dengan php dari action html di atas
		if (isset($_POST['submit']) && isset($_POST['gejala']) && isset($_POST['threshold'])) {
			$gejalaChecked = $_POST['gejala'];
			$threshold = $_POST['threshold'];
			
			if ($gejalaChecked == null):
				echo('Kosong');
			else:
				foreach($gejalaChecked as $value):
					$gejala[$value] = 1;
				endforeach;

				//Hitung persentase untuk infeksi
				$gejalaKlinis[0] = ($gejala[0] + $gejala[1] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[0];
				$gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
				$gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
				$gejalaKlinis[3] = ($gejala[3] + $gejala[7] + $gejala[8]) / $gejalaKlinisMaks[3];
				$gejalaKlinis[9] = ($gejala[13] + $gejala[14]) / $gejalaKlinisMaks[9];
				$infeksi[0] = ($gejalaKlinis[0] + $gejalaKlinis[1] + $gejalaKlinis[2] + $gejalaKlinis[3] + $gejalaKlinis[9]) / $infeksiMaks[0] * 100;

				$gejalaKlinis[0] = ($gejala[0] + $gejala[1] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[0];
				$gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
				$gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
				$gejalaKlinis[4] = ($gejala[7] + $gejala[9]) / $gejalaKlinisMaks[4];
				$gejalaKlinis[10] = ($gejala[13] + $gejala[15]) / $gejalaKlinisMaks[10];
				$infeksi[1] = ($gejalaKlinis[0] + $gejalaKlinis[1] + $gejalaKlinis[2] + $gejalaKlinis[4] + $gejalaKlinis[10]) / $infeksiMaks[1] * 100;

				$gejalaKlinis[0] = ($gejala[0] + $gejala[1] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[0];
				$gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
				$gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
				$gejalaKlinis[5] = ($gejala[3] + $gejala[4] + $gejala[8] + $gejala[10]) / $gejalaKlinisMaks[5];
				$gejalaKlinis[6] = ($gejala[3] + $gejala[7] + $gejala[10] + $gejala[11]) / $gejalaKlinisMaks[6];
				$gejalaKlinis[9] = ($gejala[13] + $gejala[14]) / $gejalaKlinisMaks[9];
				$infeksi[2] = ($gejalaKlinis[0] + $gejalaKlinis[1] + $gejalaKlinis[2] + $gejalaKlinis[5] + $gejalaKlinis[6] + $gejalaKlinis[9]) / $infeksiMaks[2] * 100;

				$gejalaKlinis[1] = ($gejala[3] + $gejala[4] + $gejala[5]) / $gejalaKlinisMaks[1];
				$gejalaKlinis[7] = ($gejala[3] + $gejala[12]) / $gejalaKlinisMaks[7];
				$gejalaKlinis[11] = ($gejala[13] + $gejala[16]) / $gejalaKlinisMaks[11];
				$infeksi[3] = ($gejalaKlinis[1] + $gejalaKlinis[7] + $gejalaKlinis[11]) / $infeksiMaks[3] * 100;

				$gejalaKlinis[8] = ($gejala[0] + $gejala[1] + $gejala[2] + $gejala[3] + $gejala[4]) / $gejalaKlinisMaks[8];
				$gejalaKlinis[2] = ($gejala[3] + $gejala[6]) / $gejalaKlinisMaks[2];
				$gejalaKlinis[5] = ($gejala[3] + $gejala[4] + $gejala[8] + $gejala[10]) / $gejalaKlinisMaks[5];
				$gejalaKlinis[12] = ($gejala[17] + $gejala[18]) / $gejalaKlinisMaks[12];
				$infeksi[4] = ($gejalaKlinis[8] + $gejalaKlinis[2] + $gejalaKlinis[5] + $gejalaKlinis[12]) / $infeksiMaks[4] * 100;
				
				// Tampilkan persentase dari infeksi berdasarkan threshold yang ditentukan
				echo("<br>");
				echo("<br><b>Hasil persentase infeksi: </b><br>");
				echo "<table align='center'; table style='border: 1px solid black';>";
				echo "<tr><th>Jenis Infeksi</th><th>Persentase</th></tr>";
				for($i=0; $i<=4; $i++){
					echo "<tr><td style='text-align: left; border: 1px solid black'>".$infeksiString[$i]."
					</td><td style='text-align: center; border: 1px solid black'>".number_format($infeksi[$i], 0)."%</td></tr>";
					}
					echo "</table>";
				?>
				<div class = "output-box">
				<?php
				echo("<br>");
				//  Ambil persentase infeksi tertinggi berdasarkan threshold yang ditentukan
				echo("<b>Anda terinfeksi: <b>");
				$maxIndex = 0;
				$maxValue = $infeksi[0];
				for($i=0; $i<=4; $i++){
					if($infeksi[$i] >= $threshold && $infeksi[$i] > $maxValue){
						$maxIndex = $i;
						$maxValue = number_format($infeksi[$i], 0);
					}
				}
				if ($maxValue >= $threshold){
					echo("$infeksiString[$maxIndex] dengan persentase sebesar $maxValue % <br>");
				}else{
					echo("Tidak terinfeksi berdasarkan threshold yang ditetapkan sebesar $threshold % <br>");
				}
			endif;
		}?></div>
		</form>
</body>
</html>