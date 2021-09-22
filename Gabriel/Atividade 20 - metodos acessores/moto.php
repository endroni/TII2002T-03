<?php

    class Moto{
        private $marca;
        private $nome;
        private $cilindrada;
    

    public function __construct($m, $n, $c) {
        $this->marca = $m;
        $this->nome = $n;
        $this->cilindrada = $c;
    } 


    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($m){
        $this->marca = $m;
    }

    public function getNome(){
        return $this->nome;
    }
    public function setNome(){
        $this->nome = $n;
    }

    public function getCilindrada(){
        return $this->cilindrada;
    }
    public function setCilindrada(){
        $this->cilindrada = $c;
    }


    public function __destruct(){
        echo "Conexão encerrada";
    }
 }
?>