<?php

require_once "Lutador.php";
require_once "Luta.php";

$lutadores = array(
    new Lutador("Pretty Boy","França",31,1.75,68.9,11,3,1),
    new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3),
    new Lutador("Snapshadow","EUA",35,1.65,80.9,12,2,1),
    new Lutador("Dead Code","Austrália",28,1.93,81.6,13,0,2),
);

$pretty = new Lutador("Pretty Boy","França",31,1.75,68.9,11,3,1);

$luta = new Luta();
$luta->lutar();
$luta->marcarLuta($lutadores[2], $pretty);
$luta->lutar();