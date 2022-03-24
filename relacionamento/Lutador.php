<?php

class Lutador {
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $altura;
    private float $peso;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;
    
    public function __construct(string $nome, string $nacionalidade, int $idade, float $altura, float $peso, int $vitorias, int $derrotas, int $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    public function apresentar() {
        echo "<p>----------------------------------</p>";
        echo "<p>Lutador: {$this->getNome()}</p>";
        echo "<p>Nacionalidade: {$this->getNacionalidade()}</p>";
        echo "<p>Idade: {$this->getIdade()}</p>";
        echo "<p>Altura: {$this->getAltura()}</p>";
        echo "<p>Peso: {$this->getPeso()}</p>";
        echo "<p>Categoria: {$this->getCategoria()}</p>";
        echo "<p>Vitórias: {$this->getVitorias()}</p>";
        echo "<p>Derrotas: {$this->getDerrotas()}</p>";
        echo "<p>Empates: {$this->getEmpates()}</p>";
        echo "<p>----------------------------------</p>";
    }
    
    public function status() {
        echo "<p>{$this->getNome()} é de categoria {$this->getCategoria()}. Já ganhou {$this->getVitorias()}, perdeu {$this->getDerrotas()} e empatou {$this->getEmpates()} vezes.</p>";
    }
    
    public function ganharLuta(): void {
        $this->vitorias++;
    }
    
    public function perderLuta(): void {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta(): void {
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    public function getNome(): string {
        return $this->nome;
    }

    public function getNacionalidade(): string {
        return $this->nacionalidade;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getAltura(): float {
        return $this->altura;
    }

    public function getPeso(): float {
        return $this->peso;
    }

    public function getCategoria(): string {
        return $this->categoria;
    }

    public function getVitorias(): int {
        return $this->vitorias;
    }

    public function getDerrotas(): int {
        return $this->derrotas;
    }

    public function getEmpates(): int {
        return $this->empates;
    }

    public function setNome(string $nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade(string $nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade(int $idade): void {
        $this->idade = $idade;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
    }

    public function setPeso(float $peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setCategoria(): void {
        if ($this->peso > 52.2 && $this->peso <= 70.3) {
            $this->categoria = "Leve";
        } else if ($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } else if ($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválida";
        }
    }

    public function setVitorias(int $vitorias): void {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas(int $derrotas): void {
        $this->derrotas = $derrotas;
    }

    public function setEmpates(int $empates): void {
        $this->empates = $empates;
    }
}
