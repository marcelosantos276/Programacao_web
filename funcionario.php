<?php

include_once "funcionario.class.php";

$func1 = new Funcionario();
$func1->nome = "João";
$func1->telefone = '11-9000-8989';
$func1->numFilhos = 5;
echo $func1->resumirCadFunc();
echo "<br><hr>";
$func2 = new Funcionario();
$func2->nome = "Marcelo";
$func2->telefone="11-9000-7878";
$func2->numFilhos = 2;
echo $func2->resumirCadFunc();
echo "<br><hr>";
$func2->modificarnumFilhos(6);
echo $func2->resumirCadFunc();

?>