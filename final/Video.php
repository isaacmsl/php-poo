<?php

class Video implements AcoesVideo {
    private string $titulo;
    private int $avaliacao;
    private int $views;
    private int $curtidas;
    private bool $reproduzindo;
    
    public function __construct(string $titulo, int $avaliacao, int $views, int $curtidas, bool $reproduzindo) {
        $this->titulo = $titulo;
        $this->views = $views;
        $this->setAvaliacao($avaliacao);
        $this->curtidas = $curtidas;
        $this->reproduzindo = $reproduzindo;
    }
    
    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getAvaliacao(): int {
        return $this->avaliacao;
    }

    public function getViews(): int {
        return $this->views;
    }

    public function getCurtidas(): int {
        return $this->curtidas;
    }

    public function getReproduzindo(): bool {
        return $this->reproduzindo;
    }

    public function setTitulo(string $titulo): void {
        $this->titulo = $titulo;
    }

    public function setAvaliacao(int $avaliacao): void {
        $nova = ($this->avaliacao)/($this->views);
        $this->avaliacao = $nova;
    }

    public function setViews(int $views): void {
        $this->views = $views;
    }

    public function setCurtidas(int $curtidas): void {
        $this->curtidas = $curtidas;
    }

    public function setReproduzindo(bool $reproduzindo): void {
        $this->reproduzindo = $reproduzindo;
    }

    public function like() {
        $this->curtidas++;
        echo "<p>Vídeo {$this->getNome()} tem agora {$this->curtidas} curtidas</p>";
    }

    public function pause() {
        $this->setReproduzindo(false);
        echo "<p>Pause</p>";
    }

    public function play() {
        $this->setReproduzindo(true);
        echo "<p>Play</p>";
    }

}
