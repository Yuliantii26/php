<?php
$nim = "0411500400";
$nama = 'chotimatul musyarofah';
$umur = 23;
$nilai = 82.25;
$status = TRUE;

echo "NIM  : " . $nim . "<br>";
echo "Nama : $nama<br>";
print "umur : " . $umur; print"<br>";
printf("Nilai : %.3f<br>",$nilai);
if ($status)
	echo "status : Aktif";
else 
	echo "status : Tidak Aktif";
?>