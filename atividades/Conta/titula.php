<?php
class Titular{
    private $nome;
    private $sobrenome;
    
    public function Titular($nome, $sobrenome){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($sob){
        $this->sobrenome = $sob;
    }
}
?>