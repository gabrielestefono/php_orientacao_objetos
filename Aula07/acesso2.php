<?php

use Veiculo as GlobalVeiculo;

class Veiculo{
    private $modelo;
    public $cor;
    public $ano;
    private function Andar(){
        echo "Andou" . PHP_EOL;
    }
    public function Parar(){
        echo "Parou" . PHP_EOL;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }

    public function getModelo(){
        return $this->modelo;
    }
}

class Carro extends Veiculo{
    public $portas;
    public function LigarLimpador(){
        echo "Ligando o limpador" . PHP_EOL;
    }
}

class Moto extends Veiculo{
    public function DarGrau(){
        echo "Dando grau" . PHP_EOL;
    }
}

$carro = new GlobalVeiculo;
$carro->Andar();

?>