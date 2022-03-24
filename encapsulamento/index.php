<?php

require "Controlador.php";
require "ControleRemoto.php";

$c = new ControleRemoto();

$c->desligar();
$c->play();
$c->maisVolume();
$c->ligar();
$c->maisVolume();
$c->maisVolume();
$c->menosVolume();
$c->menosVolume();
$c->menosVolume();
$c->menosVolume();
$c->ligarMudo();
$c->ligarMudo();
$c->desligarMudo();
$c->play();
$c->play();
$c->pause();
$c->pause();

$c->abrirMenu();