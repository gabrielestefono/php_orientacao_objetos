<?php

class Pessoa{
    const nome = "Rodrigo" . PHP_EOL;
    public function exibirNome(){
        echo self::nome . PHP_EOL;
    }
}

$pessoa = new Pessoa;
$pessoa->exibirNome();

class Rodrigo extends Pessoa{
    const nome = "Oliveira" . PHP_EOL;
    public function exibirNome(){
        echo self::nome . PHP_EOL;
        echo parent::nome . PHP_EOL;
    }
}

$rodrigo = new Rodrigo;
$rodrigo->exibirNome();