<?php

declare(strict_types=1);

namespace App\Model;
    class heroi {
        private string $name;
        private int $nivel;
        private Arma $armas;


        public function __construct(string $name, int $nivel) {
            $this->name = $name;
            $this->nivel = $nivel;
        }

        public function getName(): string {
            return this->name;
        }

        public function getNivel(): int {
            return this->nivel;
        }

        public function getArmas(): array {
            return this->armas;
        }

    }
