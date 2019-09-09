
<?php
 

//if
$gol =20;

if ($gol >= 10) {
	echo "mendali emas,dengan total cetak gol : " .$gol;
}
elseif ($gol <= 8 ) {
	echo "mendali perak,dengan total cetak gol : ".$gol;
}
elseif ($gol < 4) {
	echo "mendali perunggu,dengan total cetak gol :".$gol;
}
elseif ($gol > 4 ) {
	echo "mendali emas ngambang,dengan total cetak gol : ".$gol;
}
switch ($gol) {
	case '20':
		echo "mendapatkan bonus 100jta";
		break;
	case '9':
		echo "mendapatkan bonus 80jta";
		break;
		case '5':
			echo "mendapatkan bonus 50jta";
			break;
	default:
		echo "tidak mendapatkan bonus";
		break;
}
?>