<?php
class Titular{
    private $nome;
    private $sobrenome;
    private $cttps;

    public function Titular($n, $s, $c){
        $this->nome = $n;
        $this->sobrenome = $s;
        $this->cttps = $c;
    }

    public function getNome(){
        return $this->nome;        
    }
    public function setNome($n){
        $this->nome = $n;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($s){
        $this->sobrenome = $s;
    }
    public function getCttps(){
        return $this->cttps;
    }
    public function setCttps($c){
        $this->cttps = $c;
    }
}
?>