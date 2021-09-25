<?php

    class Conta {
        private $numconta;
        private $tipo;
        private $titular;
        private $saldo;
        private $status;
        private $dia;
        private $mes;
        private $deposito;
        private $ncttps;
        private $contatarifa;
        private $valorsacar;
        private $rendimento;

    public function __construct($num, $tip, $tit, $sal, $st, $d, $m, $dep, $nctt){
        $this->numconta = $num;
        $this->tipo = $tip;
        $this->titular = $tit;
        $this->saldo = $sal;
        $this->status = $st;
        $this->dia = $d;
        $this->mes = $m;
        $this->deposito = $dep;
        $this->ncttps = $nctt;
    } 

    public function getNumConta(){
        return $this->numconta;
    }

    public function setNumConta(){
        $this->numconta = $num;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo(){
        $this->tipo = $tip;
    }

    public function getTitular(){
        return $this->titular;
    }

    public function setTitular(){
        $this->titular = $tit;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo(){
        $this->saldo = $sal;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus(){
        $this->status = $st;
    }

    public function getDia(){
        return $this->dia;
    }

    public function setDia(){
        $this->dia = $d;
    }

    public function getMes(){
        return $this->mes;
    }

    public function setMes(){
        $this->mes = $m;
    }

    public function getDeposito(){
        return $this->deposito;
    }

    public function setDeposito(){
        $this->deposito = $dep;
    }

    public function getNcttps(){
        return $this->ncttps;
    }

    public function setNcttps(){
        $this->ncttps = $nctt;
    }




    public function AbrirContaPoupanca(){
        if($this->tipo = "poupança"){
        if(strlen($this->titular) == 0){
            echo "É necessário informar o nome do titular para criar conta Poupança<br>";
        } else
        if($this->deposito < 50.00){
            echo "A conta so pode ser criada com um deposito minimo de R$50.<br>";
        }
    }   
}
    
    public function AbrirContaCorrente(){
        if($this->tipo = "corrente"){
            if(strlen($this->titular) == 0){
                echo "É necessário informar o nome do titular para criar uma conta corrente<br>";
            } else
            if($this->deposito >= 200.00){
                echo "Conta criada com deposito de R$200 ou mais.<br>";
            } else
            if(strlen($this->ncttps) > 0){
                echo "Conta criada com vinculo empregatício.<br>";
            } else
            if(strlen($this->ncttps) == 0 or $this->deposito < 200.00){
                echo "A conta só pode ser criada com vinculo empregatício ou com um deposito de R$200 ou mais.<br>";
            }
        }
    }

    public function TarifaMensal(){
        if($this->tipo = "corrente"){
            if($this->saldo > 0){
                $this->saldo = $this->saldo - 29;
                echo "Foi cobrada a taxa mensal de R$29.<br>Seu Saldo é: R$". $this->saldo; 
            } else
            if($this->saldo <= 0){
                $this->contatarifa = 50 * 0.1;
                $this->saldo = $this->saldo - (50 + $this->contatarifa * $this->dia);
                echo "Se sua conta tiver menos de 0 reais será cobrado uma taxa de 50 reais + 0,1% ao dia<br>Você esta devendo R$ " . $this->saldo;
            }
        }
    }

    public function Sacar(){
        if($this->saldo > 0){
            $this->valorsacar = 34;
            if($this->valorsacar <= $this->saldo){
                $this->saldo = $this->saldo - $this->valorsacar;
                echo "Você sacou R$ " . $this->valorsacar . "<br> Seu saldo é: R$ " . $this->saldo;
            } else
            {
                echo "Você não pode sacar um valor maior do que tem na conta. Saldo Conta: R$ " . $this->saldo;
            }
        }
    }

    public function Depositar(){
        $this->deposito = 50;
        $this->saldo = $this->saldo + $this->deposito;
        echo "Você realizou um deposito de R$ " . $this->deposito . " Seu saldo é: R$ " . $this->saldo;
    }

    public function Rendimento(){
        if($this->tipo = "poupança"){
            if($this->saldo <= 0){
                echo "O saldo da conta não pode ser menor que R$ 0";
            } else
            if($this->saldo > 0){
                $this->rendimento =  (0.0049 / 100) * $this->saldo * $this->mes;
                $this->saldo = $this->saldo + $this->rendimento;
                echo "A conta poupança rende 0,0049% ao mês, sua conta ja rendeu: R$ " . $this->rendimento . " em " . $this->mes . " meses e seu saldo total é: R$ " . number_format($this->saldo, 2);
            }
        }
    }

    public function Situacao(){
        if($this->status){
            echo "A conta está aberta.<br>Seu saldo é de R$ " . $this->saldo;
        } else
        {
            echo "Sua conta está fechada";
        }
    }

    public function EncerrarConta(){
        if($this->saldo == 0){
            $this->status = false;
            echo "Sua conta foi fechada";
        } else
        if($this->saldo > 0){
            echo "Você deve retirar o dinheiro da conta antes de fecha-la";
        }
    }


}
?>