<<?php 
$str = "Everything i do ,i do it for YOU";
echo "<b>string asli</b> : $str";
echo "<br><b>strtolower()</b> : ".strtolower($str);
echo "<br><b>strtoupper()</b> :". strtoupper($str);
echo "<br><b>ucfirst() : </b> ".ucfirst($str);
echo "ucwords() : </b>" . ucwords($str);
echo "<br><b>strrev() : </b>" .strrev($str);
echo "<br><b>jumlah karakter</b> : " . strlen($str);
 ?>