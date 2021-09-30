<?php
class aluno{
    public $nome;
    public $email;
    public $cidade;   
    public $status;

    public function __construct($n,$e,$c,$s){
        $this->nome = $n;
        $this->email = $e;
        $this->cidade = $c;
        $this->status = $s;
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    
    public function getEmail(){
        return $this->email;
    }

     
    public function setEmail($e){
        if ($e == null){
         echo "<u>Email não pode ser atualizado</u>";
     } else{
         $this->email = $e;
        }
    }
    
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($c){
        if ($c == null or strlen($c) < 5){
            echo "<br><u>Cidade não pode ser atualizada</u>";
        } else{
            $this->cidade = $c;
        }
    }
    
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($s){
        if (is_bool($s)){
            $this->status = $s;   
        } else {
            echo "<br><u>O status não pode ser atualizado</u>";
        }
        
    }
    
}

?>