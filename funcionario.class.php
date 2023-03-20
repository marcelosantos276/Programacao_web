<?php

    // modelo

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

?>