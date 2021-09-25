<?php

    class Aluno {
       private $nome;
       private $email;
       private $cidade;
       private $status;

       public function __construct($n, $e, $c, $s){
        $this->nome = $n;
        $this->email = $e;
        $this->cidade = $c;
        $this->status = $s;
       }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(){
        $this->nome = $n;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail(){
        $this->email = $e;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade(){
        $this->cidade = $c;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus(){
        $this->status = $s;
    }

    public function Aluno(){
        if(strlen($this->email) == 0){
            echo "O email não pode ser nulo.";
        }

        if(strlen($this->cidade) == 0 or strlen($this->cidade) < 5){
            echo "Cidade não pode ter um campo vazio ou com menos de 5 caracteres.";
        }
    }
    }

?>