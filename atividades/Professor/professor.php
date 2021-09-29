<?php
class Professor {
    protected $nome;
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
    public function setNome($n){
        echo "O {$this->getNome()} não pode ser atualizado para {$n}";
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function setSobrenome($s){
        echo "O sobrenome {$this->getSobrenome()} não pode ser atualizado para {$s}";
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($t){
        $this->telefone = $t;
    }
    public function getOculos(){
        return $this->oculos;
    }
    // public function setOculos($o){
    //     if(is_bool($o)){
    //         $this->oculos = $o;
    //     } else {
    //         echo "Apenas valores booleanos";
    //     }
    // }
    public function setOculos($o){
        if($o === true || $o === false){
            $this->oculos = $o;
        } else {
            echo "Apenas valores booleanos";
        }
    }
}
?>