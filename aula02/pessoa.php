<?php

class Pessoa{
    public $nome;
    protected $telefone = "(31)97412-5487";
    private $fala;

    function falar(){
        $mensagem = "Ola";
        echo "$mensagem $this->nome, seu telefone é $this->telefone";
    }
}
?>