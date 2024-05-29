<?php

$angka1 = 2;
$angka2 = 5;

$hasil = [];
for ($i=$angka1; $i <= $angka2; $i++) { 
	if ($i % 2 != 0) {
		$hasil[] = $i;
	}
}
echo implode(",", $hasil);

?>