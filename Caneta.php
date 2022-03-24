<?php

class Caneta {
    private string $modelo;
    private string $cor;
    private float $ponta;
    private int $carga;
    private bool $tampada;
    
    public function __construct(string $modelo, string $cor, float $ponta, int $carga, bool $tampada) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->carga = $carga;
        $this->tampada = $tampada;
    }
    public function tampar(): void {
        $this->tampada = true;
    }
    
    public function destampar(): void {
        $this->tampada = false;
    }
    
    public function getModelo(): string {
        return $this->modelo;
    }
    
    public function getCor(): string {
        return $this->cor;
    }
    
    public function getPonta(): float {
        return $this->ponta;
    }

    public function getCarga(): int {
        return $this->carga;
    }

    public function getTampada(): bool {
        return $this->tampada;
    }

    public function setCor($cor): void {
        $this->cor = $cor;
    }
    
    public function setPonta($ponta): void {
        $this->ponta = $ponta;
    }

    public function setCarga($carga): void {
        $this->carga = $carga;
    }

    public function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

}
