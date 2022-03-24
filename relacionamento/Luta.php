<?php

require_once "Lutador.php";

class Luta {
    private ?Lutador $desafiado;
    private ?Lutador $desafiante;
    private int $rounds;
    private bool $aprovada;
    
    public function __construct() {
        $this->aprovada = false;
    }
    public function marcarLuta(Lutador $l1, Lutador $l2): void {
        $diferentes = $l1 != $l2;
        $mesmaCategoria = $l1->getCategoria() == $l2->getCategoria();
        if ($diferentes && $mesmaCategoria) {
            $this->setAprovada(true);
            $this->setDesafiante($l1);
            $this->setDesafiado($l2);
            echo "<p>Luta marcada. {$l1->getNome()} vs {$l2->getNome()}";
        } else {
            $this->setAprovada(false);
            $this->desafiante = null;
            $this->desafiado = null;
            echo "<p>Luta não foi marcada. Categorias diferentes e/ou o desafiante e desafiado são o mesmo lutador.";
        }
    }
    public function lutar(): void {
        if ($this->isAprovada()) {
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0,2);
            
            switch ($vencedor) {
                case 0:
                    echo "<p>Empatou!</p>";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo "<p>{$this->desafiante->getNome()} é o vencedor!</p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    $this->desafiante->status();
                    break;
                case 2:
                    echo "<p>{$this->desafiado->getNome()} é o vencedor!</p>";
                    $this->desafiante->perderLuta();
                    $this->desafiado->ganharLuta();
                    $this->desafiado->status();
                    break;
            }
        } else {
            echo "<p>Luta não pode acontecer</p>";
        }
    }    
    
    public function getDesafiado(): Lutador {
        return $this->desafiado;
    }

    public function getDesafiante(): Lutador {
        return $this->desafiante;
    }

    public function getRounds(): int {
        return $this->rounds;
    }

    public function isAprovada(): bool {
        return $this->aprovada;
    }

    public function setDesafiado(Lutador $desafiado): void {
        $this->desafiado = $desafiado;
    }

    public function setDesafiante(Lutador $desafiante): void {
        $this->desafiante = $desafiante;
    }

    public function setRounds(int $rounds): void {
        $this->rounds = $rounds;
    }

    public function setAprovada(bool $aprovada): void {
        $this->aprovada = $aprovada;
    }
}

