<!DOCTYPE html>
<html>
<head>
	<title>bintang belah ketupat</title>
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
	for ($i=1; $i <=$blng ; $i++) { 
		for ($b=1; $b <=$blng-$i; $b++) { 
			echo "&nbsp;&nbsp";
		}
		
		for ($c=1; $c <= $i; $c++) { 
			echo "*&nbsp;&nbsp";
		}
		echo "<br>";
	}
	


	for ($i=1; $i <=$blng ; $i++) { 
		for ($b=1; $b <=$blng ; $b++) { 
			echo "&nbsp;&nbsp;";
		}
		for ($c=1; $c <= $blng - $i; $c++) { 
			echo "*&nbsp;&nbsp";
		}
		echo "<br>";
	
	echo "<br>";
	echo "Total Bintang : $blng";
}
}
 ?>