<?php
class Pessoa{
    private $nome;    
    private $cidade;
    
    public function __construct(){
        $this->setCidade('BH');    
    }
    // public function __destruct(){
    //     echo "Sessão encerrada!";
    // }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($no){
        $this->nome = $no;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cid){
        $this->cidade = $cid;
    }
    public function Tarefa($tar){
        echo "A função do pai é $tar";
    }
}

class Filho extends Pessoa{
    public function Brincar(){
        echo "<br>Será?";
    }
}

?>