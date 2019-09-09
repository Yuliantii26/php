<?php
$array = array('saya<br>',10);
$aso = [
[
'Judul' => '<h1>Belajar PHP & MySQL untuk pemula</h1>',
'Penulis'=> 'Admin SMK',
] ,
[
'Judul' => '<h1>Tutorial PHP dari nol hingga mahir</h1> ',
'Penulis'=> 'Admin SMK',
] ,
[
'Judul' => '<h1>Membuat Aplikasi Web Dengan PHP</h1>',
'Penulis'=> 'SMK Assalaam',
] ,
];
foreach ($aso as $value) {
	echo $value['Judul'] . "<br>";
	echo $value["Penulis"] . "<br>";
	echo "<hr>";
	
}  
 ?>