<?php

$liczby = array(5, 2, 8, 12, 3, 7, 1, 9, 4, 6);


$najmniejszy = $liczby[0];

for ($x = 1; $x < count($liczby); $x++) {
    if ($liczby[$x] < $najmniejszy) {
        $najmniejszy = $liczby[$x];
    }
}

echo "Najmniejszy element w tablicy to: $najmniejszy";
?>