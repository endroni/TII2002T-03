<?php

    class Produto {
        private $nome;
        private $preco;
        private $estoque;

        public function __construct($n, $p, $e){
        $this->nome = $n;
        $this->preco = $p;
        $this->estoque = $e;
    }


    public function getNome(){
        return $this->nome;
    }
    
    public function setNome(){
        $this->nome = $n;
    }


    public function getPreco(){
        return $this->preco;
    }
    
    public function setPreco(){
        $this->preco = $p;
    }

    public function getEstoque(){
        return $this->estoque;
    }

    public function setEstoque(){
        $this->estoque = $e;
    }


    public function AddProd(){
        $this->estoque++;
        echo $this->estoque;
    }

    public function DelProd(){
        $this->estoque--;
        echo $this->estoque;
    }

    }

?>