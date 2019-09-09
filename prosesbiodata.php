<?php
if (isset($_POST['Simpan'])) {
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $alamat = $_POST['alamat'];
 $hobi = $_POST['hobi'];
 echo "Nama   : <b>$nama</b><br>";
 echo "Kelas  : <b>$kelas</b><br>";
 echo "Alamat : <b>$alamat</b><br>";
 echo "Hobi   : <b>$hobi</b><br>";
}
?>