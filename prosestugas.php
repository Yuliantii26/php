<<?php 
if (isset($_POST['Input'])) {
	$nama =$_POST['nama'];
    $nis =$_POST['nis'];
    $alamat =$_POST['alamat'];
	$kelamin =$_POST['kelamin'];
	$agama =$_POST['agama'];
	$asal =$_POST['asal'];
	$orangtua =$_POST['orangtua']; 
	$total =$_POST['total'];
	$email =$_POST['email'];
	echo "Nama                        : <b>$nama</b><br>";
    echo "Nis                         : <b>$nis</b><br>";
    echo "Alamat                      : <b>$alamat</b><br>";
    echo "Kelamin                     : <b>$kelamin</b><br>";
    echo "Agama                       : <b>$agama</b><br>";
    echo "Asal Sekolah                : <b>$asal</b><br>";
    echo "Nama Orang Tua/Wali         : <b>$orangtua</b><br>";
    echo "Mata pelajaran yang disukai : <br>";
    if (isset($_POST['mtk'])) {
    echo "-" .$_POST['mtk'] . "<br>";
    }
    if (isset($_POST['ipa'])) {
    echo "-" .$_POST['ipa'] . "<br>";
    }
    if (isset($_POST['ips'])) {
    echo "-" .$_POST['ips'] . "<br>";
    }
    if (isset($_POST['pai'])) {
    echo "-" .$_POST['pai'] . "<br>";
    }
    if (isset($_POST['indo'])) {
    echo "-" .$_POST['indo'] . "<br>";
    }
    echo "Total Nilai Ijasah Smk        : <b>$total</b><br>";
    echo "Email                         : <b>$email</b><br>";
    if ($total) {
        echo "<h3>Selamat! Anda Diterima Karena Nilai Anda$total</h3>";
    }else
    echo "<h3>Maaf Anda Tidak Diterima Karena Nilai Anda $total";



}
 ?>