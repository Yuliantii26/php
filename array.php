<?php
$a= array('Ahmad', 19 ,true ,3.19 );
// menampilkan array satu satu 
echo "Array menggunakan echo<br>";
echo $a[0] . "<br>";
echo $a[3] . "<br>";

echo "<br>";
echo "Array menggunakan looping for<br>";
for ($i=0; $i < count($a); $i++) { 
	echo "array - ".$a[$i] . "<br>";
}
echo "<br>";
?>