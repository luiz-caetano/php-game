<?php

namespace App\Model;

class Arma
{
    private string $nome;
    private int $dano;
    private string $tipo;

    public function __construct(string $nome, int $dano, string $tipo)
    {
        $this->nome = $nome;
        $this->dano = $dano;
        $this->tipo = $tipo;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getDano(): int {
        return $this->dano;
    }

    public function getTipo(): string {
        return $this->tipo;
    }

}