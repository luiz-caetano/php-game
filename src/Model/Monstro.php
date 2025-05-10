<?php

namespace App\Model;

class Monstro {
    private $nome;
    private $pontosVida;
    private $tipo;

    public function __construct(string $nome, int $pontosVida, string $tipo) {
        $this->nome = $nome;
        $this->pontosVida = $pontosVida;
        $this->tipo = $tipo;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getPontosVida(): int {
        return $this->pontosVida;
    }

    public function setPontosVida(int $pontosVida): void {
        $this->pontosVida = $pontosVida;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

    public function atacar(): int {
        return rand(5, 15); // Monstro causa dano aleatório
    }
}