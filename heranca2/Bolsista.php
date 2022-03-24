<?php

require_once "Aluno.php";

class Bolsista extends Aluno {
    private int $bolsa;
    
    public function __construct(int $bolsa, string $matricula, string $curso, string $nome, int $idade, string $sexo) {
        parent::__construct($matricula, $curso, $nome, $idade, $sexo);
        $this->bolsa = $bolsa;
    }
    
    public function getBolsa(): int {
        return $this->bolsa;
    }

    public function setBolsa(int $bolsa): void {
        $this->bolsa = $bolsa;
    }
    
    public function pagarMensalidade() {
        echo "<p>Bolsista paga com desconto! {$this->getNome()} pagou R$ 900,00</p>";
    }

}
