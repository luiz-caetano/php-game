<?php

namespace App\Model;

class Resultado {
    private $log;
    private $vencedor;

    public function __construct() {
        $this->log = [];
        $this->vencedor = null;
    }

    public function addLog(string $acao): void {
        $this->log[] = $acao;
    }

    public function setVencedor(string $vencedor): void {
        $this->vencedor = $vencedor;
    }

    public function getVencedor(): ?string {
        return $this->vencedor;
    }

    public function getLog(): array {
        return $this->log;
    }
}