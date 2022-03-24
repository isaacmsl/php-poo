<?php

require_once "Pessoa.php";
require_once "Visitante.php";
require_once "Aluno.php";
require_once "Bolsista.php";

//$p = new Pessoa(); // abstract class!!!
$v = new Visitante("Isaac", 20, "Masculino");

$v->fazerAniv();
print_r($v);

$a = new Aluno("20171114010047", "INFO", "Isaac", 20, "Masculino");

$a->pagarMensalidade();
print_r($a);

$b = new Bolsista(500, "20171114010047", "INFO", "Isaac", 20, "Masculino");

$b->pagarMensalidade();
print_r($b);
