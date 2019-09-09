<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1><center><b>TUGAS</b></h1></center>

<pre><b><FORM ACTION="prosestugas.php" METHOD="POST" NAME="input">Nama  <input type="text" name="nama"></b></pre>
<pre><b>NIS   <input type="number" name="nis"></b></pre>
<pre><b>Alamat <textarea name="alamat" cols="25"rows="5"></textarea></pre>
<b>Jenis Kelamin<input type="radio" name="kelamin" value="TI" checked>Laki-laki</b>
<b><input type="radio" name="kelamin" value="TI" checked>Perempuan</b><br>
<b>Agama<select name="agama">
 <option value="islam">Islam</option>
 <option value="hindu">Hindu</option>
 <option value="hindu">Budha</option><select><br><br></select>
<b>Asal Sekolah  <input type="text" name="asal"></b><br><br>
<b>Nama Orang Tua/Wali          <input type="text" name="orangtua"></b><br><br>
<b>Mata pelajaran yang disukai <br> 
<input type="checkbox" name="mtk" value="MTK"checked>matematika</b>
<input type="checkbox" name="ipa" value="IPA"checked>IPA</b>
<input type="checkbox" name="ips" value="IPS"checked>IPS</b>
<b><input type="checkbox" name="pai" value="PAI"checked>PAI<b>  
<input type="checkbox" name="indo" value="B.INDO"checked>Bahasa Indonesia<br><br>
<b>Total Nilai Ijasah Smk  <input type="number" name="total"></b><br><br>
<b>Email                   <input type="email" name="email"></b><br><br>
<input type="submit" name="Input" value="Input">
</FORM>
</body>
</html>