<?php

$numero = 1;

echo "Números impares del 0 al 50:\n";
while ($numero <= 50) {
    if ($numero % 2 != 0) {
        echo $numero . "\n";
    }
    $numero++;
}


$num = 0;

while ($num < 30 || $num % 2 == 0) {
    $num += 3;
}

echo "El primer número impar mayor o igual a 30 es: $num";
