<?php
function cetak_ganjil () {
	for ($i=1; $i <100 ; $i++) { 
		if ($i&2 == 1) {
			echo "$i";
		}
	}
}
//pemanggilan fungsi
cetak_ganjil();
?>