<?php

abstract class Pessoa {
    protected string $nome;
    protected int $idade;
    protected string $sexo;
    protected int $experiencia;
    
    public abstract function ganharExp();
    
    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getSexo(): string {
        return $this->sexo;
    }

    public function getExperiencia(): int {
        return $this->experiencia;
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

    public function setExperiencia(int $experiencia): void {
        $this->experiencia = $experiencia;
    }

}
