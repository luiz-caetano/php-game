<?php

namespace App\Model;

class Batalha {
    private $heroi;
    private $monstro;
    private $resultado;
    private $turno;

    public function __construct(Heroi $heroi, Monstro $monstro) {
        $this->heroi = $heroi;
        $this->monstro = $monstro;
        $this->resultado = new Resultado();
        $this->turno = 1;
    }

    public function iniciarBatalha(): Resultado {
        $this->resultado->addLog("Batalha iniciada entre {$this->heroi->getNome()} e {$this->monstro->getNome()}!");

        while ($this->monstro->getPontosVida() > 0) {
            // Sorteio de quem ataca
            $atacante = rand(0, 1) === 0 ? 'heroi' : 'monstro';

            if ($atacante === 'heroi') {
                $dano = $this->heroi->atacar();
                $this->monstro->setPontosVida($this->monstro->getPontosVida() - $dano);
                $this->resultado->addLog("Turno {$this->turno}: {$this->heroi->getNome()} causou $dano de dano ao {$this->monstro->getNome()}. Vida do monstro: {$this->monstro->getPontosVida()}");
            } else {
                $dano = $this->monstro->atacar();
                $this->resultado->addLog("Turno {$this->turno}: {$this->monstro->getNome()} causou $dano de dano ao {$this->heroi->getNome()}.");
            }

            // Verifica se o monstro foi derrotado
            if ($this->monstro->getPontosVida() <= 0) {
                $this->resultado->setVencedor($this->heroi->getNome());
                $this->resultado->addLog("{$this->heroi->getNome()} venceu a batalha!");
                break;
            }

            $this->turno++;
        }

        return $this->resultado;
    }
}