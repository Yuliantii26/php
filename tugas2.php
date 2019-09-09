<!DOCTYPE html>
<html>
<head>
	<title>tugas form</title>
</head>
<body>
	<FORM ACTION="" METHOD="POST" NAME="input">
 Masukan Bilangan : <input type="number" name="bintang"require>
 <input type="submit" name="Input" value="Input">
</body>
</html>
<?php
if (isset($_POST['Input'])) {
 	$bintang= $_POST['bintang'];
 	echo "<br>Total Bintang : $bintang<br>";
 	for ($i=0; $i <$bintang ; $i++) {
 	
 	 	echo "*";
 	}
 } 
 ?>