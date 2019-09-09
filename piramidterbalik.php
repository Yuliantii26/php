<!DOCTYPE html>
<html>
<head>
	<title>piramid terbalik</title>
</head>
<body>
<form action="" method="POST" name="input">
	Masukan Bilangan :<input type="number" name="blng">
	<input type="submit" name="simpan" value="simpan">
</body>
</html>
<?php 
if (isset($_POST['simpan'])) {
	$blng = $_POST['blng'];
	echo "<br>";
	for ($i=1; $i <=$blng ; $i++) { 
		for ($b=1; $b <=$i ; $b++) { 
			echo "&nbsp;";
		}
		for ($c=$blng; $c >= $i; $c--) { 
			echo "*";
		}
		echo "<br>";
	}
	echo "<br>";
	echo "Total Bintang : $blng";
}