<?php

class Pessoa{
<<<<<<< HEAD
    var $nome;
    var $telefone;
    var $fala;
=======
    public $nome;
    protected $telefone = "(31)97412-5487";
    private $fala;

    function falar(){
        $mensagem = "Ola";
        echo "$mensagem $this->nome, seu telefone é $this->telefone";
    }
>>>>>>> 9ce37fc1ce31d67f173465b1775162dd7a6347f6
}
?>