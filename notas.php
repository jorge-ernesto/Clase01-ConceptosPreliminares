<?php

$a = $_POST['txtn1'];
$b = $_POST['txtn2'];

$prom = ($a + $b) / 2;

echo "Tu promedio es $prom <br>";

/*
if ($prom > 15) {
    echo "Viajas a Mancora";
} else {
    echo "Te quedas en casa";
}
*/

echo ($prom > 15) ? "Viajas a mancora" : "Te quedas en casa";