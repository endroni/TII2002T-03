<?php
class Pessoa{
    private $nome;
    private $sobrenome;
    private $fone;

    public function __construct($n, $s, $f){
        $this->nome = $n;
        $this->sobrenome = $s;
        $this->fone = $f;
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
    public function getFone(){
        return $this->fone;
    }
    public function setFone($f){
        $this->fone = $f;
    }
}

class Fone{
    private $codigo;
    private $numero;
    private $celular;

    public function __construct($co, $nu, $ce){
        $this->codigo = $co;
        $this->numero = $nu;
        $this->celular = $ce;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($co){
        $this->codigo = $co;
    }
    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($nu){
        $this->numero = $nu;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($ce){
        $this->celular;
    }
}
?>