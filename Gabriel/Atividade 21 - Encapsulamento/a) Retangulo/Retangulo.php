<?php


    class Retangulo {
        private $base;
        private $altura;
        private $area;
        private $perimetro;
        private $diagonal;

        public function __construct($b, $al){
            $this->base = $b;
            $this->altura = $al;
        }

        public function getBase(){
            return $this->base;
        }
        public function setBase(){
            $this->base = $b;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function setAltura(){
            $this->altura = $al;
        }


        public function area(){
           $area = $this->getBase() * $this->getAltura();
           echo $area;
        }

        public function perimetro(){
            $perimetro = 2 * ($this->getBase() + $this->getAltura());
            echo $perimetro;
        }

        public function diagonal(){
            $diagonal = ($this->getBase() * $this->getBase()) + ($this->getAltura() * $this->getAltura());
            echo $diagonal;
        }
    }

?>