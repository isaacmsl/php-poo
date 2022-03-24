<?php

/*require_once "Caneta.php";
require_once "Aluno.php";

$c = new Caneta("Bic Cristal", "Preta", 1.5, 90, true);
print_r($c);

echo "<br/>";

$a = new Aluno();
$a->setMatricula("2021004862");
$a->setNome("Kézia");
$a->gazear();   

echo "<h1>O aluno {$a->getNome()} possui {$a->getFaltas()} faltas.</h1>";*/

require_once "Conta.php";

$c = new Conta("111222", "Isaac");
$c->abrirConta("CC");
$c->sacar(5.5);
$c->depositar(5000);
$c->pagarMensal();
$c->pagarMensal();
$c->abrirConta("CP");
$c->fecharConta();
$c->sacar(5020.5);
$c->fecharConta();
$c->abrirConta("CP");

for ($i = 0; $i < 10; $i++) {
    $c->pagarMensal();
}

$c->fecharConta();
$c->depositar(50);
$c->fecharConta();  

echo strval($c);