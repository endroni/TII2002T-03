<?php
require_once "conexao.php";
class inserir{
if (isset ($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $cep = addslashes($_POST['cep']);
    $bairro = addslashes($_POST['bairro']);
    $rua = addslashes($_POST['rua']);
    $numero = addslashes($_POST['numero']);
    $email = addslashes($_POST['email']);
    $celular = addslashes($_POST['celular']);
    $fixo1 = addslashes($_POST['fixo1']);
    $complemento = addslashes($_POST['complemento']);
    $fixo2 = htmlspecialchars($_POST['fixo2']);

    public function __construct($n,$c,$f1,$f2,$e,$cep,$ba,$r,$num,$comp){
        $this->nome = $n;
        $this->celular = $c;
        $this->fixo1 = $f1;
        $this->fixo2 = $f2;
        $this->email = $e;
        $this->cep = $cep;
        $this->bairro = $ba;
        $this->rua = $r;
        $this->numero = $num;
        $this->complemento = $comp;
    }
    

    $inserir = $con->prepare("INSERT INTO pacientes(nome,celular,fixo1,fixo2,email,cep,bairro,rua,numero,complemento) values (:n,:c,:f1,:f2,:e,:cep,:ba,:r,:num,:comp)");
    $inserir->bindParam(":n",$n);
    $inserir->bindParam(":c",$c);
    $inserir->bindParam(":f1",$f1);
    $inserir->bindParam(":f2",$f2);
    $inserir->bindParam(":e",$e);
    $inserir->bindParam(":cep",$cep);
    $inserir->bindParam(":ba",$ba);
    $inserir->bindParam(":r",$r);
    $inserir->bindParam(":num",$num);
    $inserir->bindParam(":comp",$comp);
    $inserir->execute();
    
    header("location: cadastrar.php");
}

}

?>