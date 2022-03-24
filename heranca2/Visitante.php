<?php

require_once "Pessoa.php";

// Herança de implementação

class Visitante extends Pessoa {
    public function __construct(string $nome, int $idade, string $sexo) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
}
