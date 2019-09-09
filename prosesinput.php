<?php
if(isset($_POST['Simpan'])){
	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$mapel1 = $_POST['mapel1'];
	$mapel2 = $_POST['mapel2'];
	echo "Nama : <b>$nama</b><br>";
	echo "Mapel1 : <b>$mapel1</b><br>";
	echo "Mapel2 : <b>$mapel2</b><br>";
	$nilai = ($mapel1+$mapel2)/2;
	echo "Rata-rata : ".$nilai."<br>";
}
if ($nilai > 75) {
	echo "Status : Lulus";
}else{
	echo "Status : Tidak Lulus";
}
?>