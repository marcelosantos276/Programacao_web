<?php

class calculadora {
    public $a = 10;
    public $b = 20;
    public $operador = 'soma';

    public function calcular() {
        if($this->operador == 'soma') {
            return $this->a + $this->b;
        }
        return false;
    }
}

$calcular = new calculadora();
echo $calcular->calcular();