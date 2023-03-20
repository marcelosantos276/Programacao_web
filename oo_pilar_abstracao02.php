<?php

    // modelo

use Funcionario as GlobalFuncionario;

    class Funcionario {

        //atributos
        public $nome;
        public $telefone;
        public $numFilhos;

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
    $y->nome = "João";
    $y->telefone = '11-9000-8989';
    $y->numFilhos = 5;

    $x = new Funcionario();
    $x->nome = "Fabiana";
    $x->telefone = '11-9090-9090';
    $x->numFilhos = 2;

    echo $y->resumirCadFunc();
    echo "<br>";
    $y->modificarNumFilhos(3);    
    echo "<br>";
    echo $y->resumirCadFunc();
    echo "<br>";
    echo $x->resumirCadFunc();
    echo "<br>";
?>