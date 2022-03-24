<?php

class ControleRemoto implements Controlador {
    private int $volume;
    private bool $ligado;
    private bool $tocando;
    
    public function __construct() {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }
    
    private function getVolume(): int {
        return $this->volume;
    }

    private function isLigado(): bool {
        return $this->ligado;
    }

    private function isTocando(): bool {
        return $this->tocando;
    }

    private function setVolume(int $volume): void {
        $this->volume = $volume;
    }

    private function setLigado(bool $ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando(bool $tocando): void {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        echo "<p>----------------</p>";
        $txtLigado = ($this->isLigado())? "Ligado":"Desligado";
        echo "<p>$txtLigado</p>";
        echo "<p>Volume: {$this->getVolume()} ";
        
        for ($i = 0; $i < $this->getVolume(); $i+=10) {
            echo "|";
        }
        echo "</p>";
        
        $txtTocando = ($this->isTocando())? "Está tocando":"Não está tocando";
        echo "<p>$txtTocando</p>";
        echo "<p>----------------</p>";
    }

    public function desligar() {
        if ($this->isLigado()) {
            $this->setLigado(false);
            echo "<p>Desligado</p>";  
        } else {
            echo "<p>Já está desligado</p>";
        }
    }

    public function desligarMudo() {
        if ($this->isLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
            echo "<p>Mudo desativado</p>";
        } else if ($this->isLigado()) {
            echo "<p>Mudo já está desativado</p>";
        } else {
            echo "<p>Impossível desligador mudo pois está desligado</p>";   
        }
    }

    public function fecharMenu() {
        echo "<p>Menu fechado</p>";
    }

    public function ligar() {
        if (!($this->isLigado())) {
            $this->setLigado(true);
            echo "<p>Ligado</p>";  
        } else {
            echo "<p>Já está ligado</p>";
        }
    }

    public function ligarMudo() {
        if ($this->isLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
            echo "<p>Mudo ativado</p>";
        } else if ($this->isLigado()) {
            echo "<p>Já está mudo</p>";
        } else {
            echo "<p>Impossível ativar mudo pois está desligado</p>";
        }
    }

    public function maisVolume() {
        if ($this->isLigado()) {
            $this->setVolume($this->getVolume() + 5);
            echo "<p>Aumentou volume para: {$this->getVolume()}</p>";
        } else {
            echo "<p>Impossível aumentar pois está desligado</p>";
        }
    }

    public function menosVolume() {
        if ($this->isLigado()) {
            $this->setVolume($this->getVolume() - 5);
            echo "<p>Diminui volume para: {$this->getVolume()}";
        } else {
            echo "<p>Impossível diminuir pois está desligado</p>";
        }
    }

    public function pause() {
        if ($this->isLigado() && $this->isTocando()) {
            $this->setTocando(false);
            echo "<p>Pausado</p>";
        } else if ($this->isLigado()) {
            echo "<p>Já está pausado</p>";
        } else {
            echo "<p>Impossível pausar pois está desligado</p>";   
        }
    }

    public function play() {
        if ($this->isLigado() && !($this->isTocando())) {
            $this->setTocando(true);
            echo "<p>Tocando</p>";
        } else if ($this->isLigado()) {
            echo "<p>Já está tocando</p>";
        } else {
            echo "<p>Impossível tocar pois está desligado</p>";   
        }
    }

}
