<?php
$arrayNama = array("Ajeng" => 90,"Mamat" => 70, "Ucup" => 85,"aang" => 95,"Syahrul" => 75);
foreach ($arrayNama as $nama => $nilai) {
	echo "<pre>";
	if ($nilai > 85) {
		echo "Nama : $nama, Nilai : $nilai , Grade A<br>";
	}
	elseif ($nilai > 75) {
		echo "Nama : $nama, Nilai : $nilai , Grade B<br>";
	}
	elseif ($nilai > 65) {
		echo "Nama : $nama, Nilai : $nilai , Grade C<br>";
	}
	echo "</pre>";
}
?>