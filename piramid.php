<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<FORM ACTION="" METHOD="POST" NAME="input">
 Masukan Bilangan : <input type="number" name="angka"require>
 <input type="submit" name="Pilih" value="Input angka">
</body>
</html>
<br>
<?php 
if (isset($_POST['Pilih'])) {
	$a = $_POST['angka'];
	echo "Total Bilangan : $a<br>";
for ($x=1; $x <$a; $x++) { 
	for ($z=1; $z <$x; $z++) { 
		echo "";
		echo "*";
	}
	echo "<br>";
}
}
 ?>