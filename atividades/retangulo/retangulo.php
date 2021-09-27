<?php
class Retangulo {
    // ATributos
    private $largura;
    private $altura;

    // Construtor
    public function __construct($l, $a){
        $this->largura = $l;
        $this->altura = $a;
    }

    // Métodos mágicos
    public function getLargura(){
        return $this->largura;
    }
    public function setLargura($lar){
        $this->largura = $lar;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setAltura($alt){
        $this->altura = $alt;
    }
    
    // Métodos próprios
    public function area(){        
        return $this->getAltura() * $this->getLargura();
    }
    public function perimetro(){
        return 2 * ($this->altura +$this->largura);
    }
    public function diagonal(){
        return round(sqrt((pow($this->getLargura(), 2) + pow($this->getAltura(), 2))),4);
    }

}
?>