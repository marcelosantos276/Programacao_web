<?php
$a = 10;
$b = 20;
$operador = 'soma';

function calcular($a, $b, $operador) {
    if($operador == 'soma') {
        return $a + $b;
    }
    return false;
}

echo calcular($a, $b, $operador);
?>