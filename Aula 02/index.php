<?php

class Pessoa{
    public $nome;
    public $idade;

    public function Falar(){
        echo "$this->nome
         acabou de falar!";
    }
}

$gabriel = new Pessoa();
$gabriel->nome = "Gabriel";
$gabriel->idade = 27;

echo $gabriel->Falar();

?>