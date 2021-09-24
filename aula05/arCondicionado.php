<?php
class ArCondicionado{
    private $temperatura;
    private $marca;
    private $modelo;
    private $tipo;
    private $status;

    public function __construct($tem, $mar, $mod, $tip){
        $this->temperatura = $tem;
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->tipo = $tip;
        $this->status = true;
    }

    public function getTemperatura(){
        return $this->temperatura;
    }
    public function setTemperatura($tem){
        $this->temperatura = $tem;
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

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tip){
        $this->tipo = $tip;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($sta){
        $this->status = $sta;
    }

    public function Ligar(){
       if($this->getStatus()){
           $this->Desligar();
       }else {
           echo "Ligando ar condicionado! <br> Temperatura: {$this->getTemperatura()} ºC";
       }
    }

    public function Desligar(){
        if($this->getStatus()){
            echo 'Desligando ar Condicionado';
        } else {
            $this->Ligar();
        }
    }

    public function Aumentar(){
        if($this->getStatus()){
            $this->temperatura++;
            echo "Temperatura: " . $this->getTemperatura() . " ºC";
        }        
    }

    public function Diminuir(){
        if($this->getStatus()){
            $this->temperatura--;
            echo "Temperatura: " . $this->getTemperatura() . " ºC";
        }        
    }
}
?>