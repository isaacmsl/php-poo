<?php

abstract class Pessoa {
    private string $nome;
    private int $idade;
    private string $sexo;
    
    public final function fazerAniv() {
        $this->idade++;
    }
    
    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function setSexo(string $sexo): void {
        $this->sexo = $sexo;
    }

}
