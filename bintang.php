<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST" name="input">
	Masukan Bilangan :<input type="number" name="blng">
	<input type="submit" name="simpan" value="simpan">
</form>
</body>
</html>
<?php 
if (isset($_POST['simpan'])) {
	$bilangan = $_POST['blng'];
	for ($i=1; $i <=$bilangan ; $i++) { 
		for ($b=1; $b <=$bilangan-$i; $b++) { 
			echo "&nbsp;&nbsp";
		}
		for ($c=1; $c <= $i; $c++) { 
			echo "*&nbsp;&nbsp";
		}
		echo "<br>";
	}
	echo "<br>";
	echo "Total Bintang : $bilangan";
}
 ?>