<?php

namespace App\Model;

class Monstro
{
    private string $nome;
    private int $pv;
    private string $tipo;

    public function __construct(string $nome, int $pv, string $tipo)
    {
        $this->nome = $nome;
        $this->pv = $pv;
        $this->tipo = tipo;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getPv(): int {
        return $this->pv;
    }

    public function getTipo(): string {
        return $this->tipo;
    }


}