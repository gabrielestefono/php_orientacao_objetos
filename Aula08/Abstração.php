<?php

abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function setSaldo($s){
        $this->saldo = $s;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    abstract protected function Sacar($s);

    abstract protected function Depositar($d);
}

class Itau extends Banco{

    public function Sacar($s){
        $this->saldo = $this->saldo - $s;
        echo "Você sacou $s e seu saldo atual é de: $this->saldo!" . PHP_EOL;
    }

    public function Depositar($d){
        $this->saldo += $d;
        echo "Você depositou $d e seu saldo atual é de: $this->saldo!" . PHP_EOL;
    }
}

class Bradesco extends Banco{
    public function Sacar($s){
        $this->saldo = $this->saldo - $s;
        echo "Você sacou $s e seu saldo atual é de: $this->saldo!" . PHP_EOL;
    }
    public function Depositar($d){
        $this->saldo += $d;
        echo "Você depositou $d e seu saldo atual é de: $this->saldo!" . PHP_EOL;
    }
}

$fernando = new Itau;
$fernando->setSaldo(1000);
$fernando->Sacar(500);
$fernando->depositar(1300);

/* Não é possível acessar a classe Banco */

$itau = new Itau();