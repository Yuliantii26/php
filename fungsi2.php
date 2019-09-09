<?php
function cetak_ganjil ($awal,$akhir){
	for ($i= $awal; $i< $akhir; $i++) { 
		if ($i%2 == 1) {
			echo "$i<br>";
		}
	}
}
//pemanggilan fungsi
$a =10;
$b =50;
echo "<b>Bilangin ganjil dari $a sampai $b : </b><br>";
cetak_ganjil($a,$b);
// parameter basic
function perkenalan($nama,$kls)
{
	echo "Nama : $nama<br>";
	echo "Kelas : $kls";
}
$a = "Yulianti";
$b = "XI RPL 2";
perkenalan($a,$b);
//optional parameter
function perkenalan2($nama = "Yuli")
{
	echo "Nama Saya : $nama";
}
echo "<hr>";
$c ="Yulianti";
perkenalan2($c);
?>