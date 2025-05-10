<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

require 'vendor/autoload.php';

use App\Model\Heroi;
use App\Model\Arma;
use App\Model\Monstro;
use App\Model\Batalha;

// Criação do herói
$heroi = new Heroi("Aragorn", 10);

// Adicionando armas ao herói
$espada = new Arma("Andúril", 20, "Espada");
$arco = new Arma("Arco Élfico", 15, "Arco");
$heroi->addArma($espada);
$heroi->addArma($arco);

// Criação do monstro
$monstro = new Monstro("Orc", 50, "Guerreiro");

// Iniciar batalha
$batalha = new Batalha($heroi, $monstro);
$resultado = $batalha->iniciarBatalha();

// Exibir resultado no terminal
echo "Resultado da Batalha:\n";
echo "Vencedor: " . $resultado->getVencedor() . "\n";
echo "Log de Ações:\n";
foreach ($resultado->getLog() as $log) {
    echo $log . "\n";
}