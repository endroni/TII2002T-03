<?php
class Produto{
    // Atributos
    private $nome;
    private $preco;
    private $quantidade;

    // Método construtor
    public function __construct($n, $p, $q){
        $this->nome = $n;
        $this->preco = $p; 
        $this->quantidade = $q;
    }

    // Métodos mágicos
    public function getNome(){      // Acessar o atributo nome
        return $this->nome;
    }
    public function setNome($n){    // Atualizar o atributo nome
        $this->nome = $n;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco($p){
        $this->preco = $p;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($q){
        $this->quantidade = $q;
    }

    // Métodos próprios
    public function valorTotalEmEstoque(){
        return $this->getPreco * $this->quantidade;
    }
    public function adicionarProdutos($quantidade){
        $this->setQuantidade($this->getQuantidade() + $quantidade);        
    }
    public function removerProdutos($quantidade){
        $this->setQuantidade($this->getQuantidade() - $quantidade);
    }

}
?>