<?php

class Moto {
    public $nome;
    protected $cilindrada = "900";
    private $tanque = "20";

    function descricao(){
        echo "A moto $this->nome, tem $this->cilindrada cilindradas, e seu tanque tem capacidade de $this->tanque Litros.";
    }
}

?>