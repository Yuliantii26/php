<?php

$a = [
['Nama'=>'ujang','kelas'=>'XI RPL 1','Alamat'=>'jln rancamanyar'],
['Nama'=>'mahmud','kelas'=>'XI RPL 2','Alamat'=>'jln cibaduyut'],
['Nama'=>'ucok','kelas'=>'XI RPL 3','Alamat'=>'margahayu']
];
echo "<pre>";
print_r ($a);
echo "</pre>";

$mode = current($a[2]);
echo $mode."<br>";
$mode = current($a[1]);
echo $mode."<br>";
next($a);
$mode = key ($a);
echo $mode."<br>";
reset($a);
$mode =current($a[1]);
echo $mode."<br>";
?>