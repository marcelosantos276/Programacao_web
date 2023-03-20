<?php

    // modelo
    class Funcionario {

        //atributos
        public $nome = 'Marcelo';
        public $telefone = '11 - 99999-9998';
        public $numFilhos = 4;

        //metodos
        function resumirCadFunc() {
            return "$this->nome possui $this->numFilhos filhos";
        }

        function modificarNumFilhos($numFilhos) {
            //afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();
    echo "<br>";
    $y->modificarNumFilhos(2);
    echo $y->resumirCadFunc();
?>