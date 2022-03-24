<?php

class Visualizacao {
    private Gafanhoto $espectador;
    private Video $filme;
    
    public function __construct(Gafanhoto $espectador, Video $filme) {
        $this->espectador = $espectador;
        $this->filme = $filme;
        $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
        $this->filme->setViews($this->filme->getViews() + 1);
    }

    public function avaliar() {
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota(int $nota) {
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc(float $porc) {
        $nota = 3;
        
        if ($porc > 20 && $porc <= 50) {
            $nota = 5;
        } else if ($porc <= 90) {
            $nota = 8;
        } else { 
            $nota = 10;
        }
        
        $this->filme->setAvaliacao($nota);
    }
}
