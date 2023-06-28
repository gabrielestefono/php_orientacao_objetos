<?php

class Login{
    private $email;
    private $senha;

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($e){
        $this->senha = $e;
    }


    public function Logar(){
        if($this->email == "teste@teste.com" and $this->senha == "123456"){
            echo "Logado com sucesso!";
        }else{
            echo "Dados inválidos!";
        }
    }
}

$logar = new Login('gabriel@mail.com', 'asdasd', 'asdasdas');
$logar->setEmail('teste()/@teste.com');
$logar->setSenha('123456');
$logar->logar();
echo "<br>";
echo $logar->getEmail(); 
echo "<br>";
echo $logar->getSenha();