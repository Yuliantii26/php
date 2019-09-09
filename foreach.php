<?php
$array = array('saya<br>',10);
$aso = [
[
'Nama' => 'Yulianti',
'Kelas'=> 'informatika',
] ,
[
'Nama'=> 'Yulianti 2',
'Kelas'=> 'informatika',
] ,
];
foreach ($aso as $value) {
	echo $value['Nama'] . "<br>";
	echo $value["Kelas"] . "<br>";
}
echo "<hr>";
$countaso = count($aso);
for ($i=0; $i < $countaso; $i++){ 
	echo $aso[$i]["Nama"] . "<br>";
	echo $aso[$i]["Kelas"] . "<br>";
}
 ?>