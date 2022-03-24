<?php

class Gafanhoto extends Pessoa {
    private string $login;
    private int $totAssistido;
    
    public function __construct(string $login, int $totAssistido, string $nome, int $idade, string $sexo, int $experiencia) {
        $this->login = $login;
        $this->totAssistido = $totAssistido;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->Sexo = $sexo;
        $this->experiencia = $experiencia;
    }

    public function ganharExp() {}
    
    public function viuMaisUm() {
        $this->totAssistido++;
    }
    
    public function getLogin(): string {
        return $this->login;
    }

    public function getTotAssistido(): int {
        return $this->totAssistido;
    }

    public function setLogin(string $login): void {
        $this->login = $login;
    }

    public function setTotAssistido(int $totAssistido): void {
        $this->totAssistido = $totAssistido;
    }

}
