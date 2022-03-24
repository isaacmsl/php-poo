<?php

require_once "Pessoa.php";

// Herança por diferença
class Aluno extends Pessoa{
    private string $matricula;
    private string $curso;
    
    public function __construct(string $matricula, string $curso, string $nome, int $idade, string $sexo) {
        $this->matricula = $matricula;
        $this->curso = $curso;
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }
    
    public function pagarMensalidade() {
        echo "<p>{$this->getNome()} pagou a mensalidade de R$ 1.000,00</p>";
    }
    
    public function getMatricula(): string {
        return $this->matricula;
    }

    public function getCurso(): string {
        return $this->curso;
    }

    public function setMatricula(string $matricula): void {
        $this->matricula = $matricula;
    }

    public function setCurso(string $curso): void {
        $this->curso = $curso;
    }
    
}
