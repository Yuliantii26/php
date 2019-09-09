<?php
function lingkaran($jari = 8)
{
	echo "Jari-jari lingkaran : $jari<br>";
	$luas = 3.14 * ($jari * $jari);
	$kel = 2 * (3.14 * $jari );
	echo "Luas lingkaran : $luas<br>";
	echo "keliling lingkaran : $kel <br>";
}
$a = 10;
lingkaran($a)
?>