<?php


class Veiculo{
    public $modelo;
    public $cor;
    public $ano;
    public function Andar(){
        echo "Andou" . PHP_EOL;
    }
    public function Parar(){
        echo "Parou" . PHP_EOL;
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

$carro = new Carro;
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->Andar();
$carro->LigarLimpador();

$moto = new Moto;
$moto->modelo = "Honda Bis";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->Parar();
$moto->DarGrau();

?>