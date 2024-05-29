<?php

function check($arr) {
	$angkaDuplikat = array();
    
    for ($i = 0; $i < count($arr); $i++) {
        if (!isset($angkaDuplikat[$arr[$i]])) {
            $angkaDuplikat[$arr[$i]] = 1;
        } else {
            $angkaDuplikat[$arr[$i]]++;
        }
    }
	
	$duplikat = array();
    
    foreach ($angkaDuplikat as $angka => $jumlah) {
        if ($jumlah > 1) {
            $duplikat[] = $angka;
        }
    }

    echo implode(", ", $duplikat);
}

$arr = [790, 483, 281, 224, 483, 60, 698, 483, 790, 168];
check($arr);

?>