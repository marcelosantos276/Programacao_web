<?php

    // modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        //metodos
        function resumirCadFunc() {
            return 'esse é o resumo do cadstro do funcionário';
        }

        function modificarNumFilhos() {
            //afetar um atributo do objeto

        }
    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();

?>