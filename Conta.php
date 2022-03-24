<?php

class Conta {
    public $num;
    protected $tipo;
    private $dono;
    private $saldo;
    private $aberta;
    
    public function __construct(string $num, string $dono) {
        $this->num = $num;
        $this->dono = $dono;
    }
    
    public function __toString(): string {
        $saldoFormat = number_format($this->getSaldo(), 2, ".");
        $result = "----------------<br/>Conta: {$this->getNum()} {$this->getTipo()}</br>";
        $result .= "Dono: {$this->getDono()}<br/>";
        $result .= "Saldo: R$ $saldoFormat<br/>";
        $result .= "Status: " . ($this->isAberta() ? "Aberta":"Fechada");
        $result .= "<br/>----------------<br/>";
        
        return $result;
    }
    
    public function abrirConta($tipoConta): void {
        if (!$this->isAberta()) {
            $podeAbrir = $tipoConta === "CC" || $tipoConta === "CP";
            
            if ($podeAbrir) {
                $this->setAberta(true);
                $this->setTipo($tipoConta);
                
                $saldoInicial = ($tipoConta === "CC")? 50:150;
                $this->setSaldo($saldoInicial);
                
                // pq n consegui por que eu não consegui {number_format(...)} na str?
                echo "<p>{$this->getTipo()} aberta com saldo inicial de R$ " . number_format($saldoInicial, 2, ".", "") . "</p>";
            } else {
                echo "<p>Não foi possível abrir a conta.</p>";
            }
        } else {
            echo "<p>Conta já está aberta.</p>";
        }
    }
    
    public function fecharConta(): void {
        if ($this->getSaldo() > 0) {
            echo "<p>Não foi possível pois conta possui saldo.</p>";
        } else if ($this->getSaldo() < 0) {
            echo "<p>Não foi possível fechar a conta pois está em débito.</p>";
        } else if ($this->isAberta()) {
            $this->setAberta(false);
            echo "<p>Conta fechada.</p>";
        } else {
            echo "<p>A conta ainda não foi aberta.</p>";
        }
    }
    
    public function depositar($quantia): void {
        if ($this->isAberta()) {
            $this->setSaldo($this->getSaldo() + $quantia);
            echo "<p>R$ {$quantia} depositado.</p>";
        } else {
            echo "<p>Conta não está ativa.</p>";
        }
    }
    
    public function sacar($quantia): void {
        $novoSaldo = $this->getSaldo() - $quantia;
        $novoSaldoFormat = number_format($novoSaldo, 2, ".");
        if ($this->isAberta() && $novoSaldo >= 0) {
            $this->setSaldo($novoSaldo);
            echo "<p>R$ {$quantia} sacado.</p>";
        } else if ($this->isAberta()) {
            echo "<p>Saldo insuficiente.</p>";
        } else {
            echo "<p>Conta não está ativa.</p>";
        }
    }
    
    public function pagarMensal(): void {
        if ($this->isAberta()) {
            $mensalidade = ($this->getTipo() === "CC")? 12:20;
            $mensalidadeFormat = number_format($mensalidade, 2, ".", "");
            $this->setSaldo($this->getSaldo() - $mensalidade);
            echo "<p>R$ {$mensalidadeFormat} pago de mensalidade.</p>";
        } else {
            echo "<p>A conta não está aberta para pagar mensalidade.</p>";
        }
    }
    
    public function getNum() {
        return $this->num;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function isAberta() {
        return $this->aberta;
    }

    public function setNum($num): void {
        $this->num = $num;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    private function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    private function setAberta($aberta): void {
        $this->aberta = $aberta;
    }

}
