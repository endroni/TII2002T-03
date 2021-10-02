<?php
    class Especialidade {
        private $NomeEspecialidade; 
    

    public function __construct($ne){
        $this->NomeEspecialidade = $ne;
    }

    public function getNomeEspecialidade(){
        return $this->NomeEspecialidade;
    }

    public function setNomeEspecialidade($ne){
        $this->NomeEspecialidade = $ne;
    }

}

?>