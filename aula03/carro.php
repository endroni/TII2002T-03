<?php

class Carro{
    private $marca;
    private $modelo;
    private $cor;
    private $ano;
    private $status;

    public function __construct($mar, $mod, $cor, $ano, $status){
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->status = $status;    
    }













    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($mar){
        $this->marca = $mar;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($mod){
        $this->modelo = $mod;
    }
    








    public function Ligar(){
      if(!$this->status){
        echo 'Ligar Carro!';
      }else {
          echo 'O carro já está ligado!';
      }    
    }
    public function Desligar(){
        if($this->status) {
            echo 'Desligar Carro!';
        } else {
            echo 'O carro já está desligado!';
        }
    }
}

?>