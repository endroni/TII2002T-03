<?php

    class Professor{
        private $nome;
        private $sobrenome;
        private $telefone;
        private $oculos;

        public function __construct($n, $s, $t, $o){
            $this->nome = $n;
            $this->sobrenome = $s;
            $this->telefone = $t;
            $this->oculos = $o;
        }

    
        public function getNome(){
            return $this->nome;
        }

        public function setNome(){
            $this->nome = $n;   
        }

        public function getSobrenome(){
            return $this->sobrenome;
        }

        public function setSobrenome(){
            $this->sobrenome = $s;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setTelefone(){
            $this->telefone = $t;
        }

        public function getOculos(){
            return $this->oculos;
        }

        public function setOculos(){
            $this->oculos = $o;
        }


        public function Oculos(){
            if($this->oculos){
                echo "O professor usa óculos";
            }
            else
            {
                echo "O professor não usa óculos";
            }
        }
    }

?>