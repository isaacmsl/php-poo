<?php

class Aluno {
    private string $matricula;
    private string $nome;
    private int $faltas;
    
    public function __construct() {
       $this->faltas = 0;
    }
    
    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }
    
    public function getMatricula(): string {
        return $this->matricula;
    }
    
    public function setNome($nome): void {
        $this->nome = $nome;
    }
    
    public function getNome(): string {
        return $this->nome;
    }
    
    public function getFaltas(): int {
        return $this->faltas;
    }
    
    public function gazear(): void {
        $this->faltas += 3;
    }
}
