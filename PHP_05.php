<?php

$n = 4;

for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $n; $j++) {
        if ($j == $i) {
            echo "$j ";
        } else {
            echo "* ";
        }
    }
    echo "<br>";
}

?>