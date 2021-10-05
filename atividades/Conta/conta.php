<?php
    require_once 'titular.php';
    
class Conta{
    private $numConta;
    protected $tipo;
    protected $titular;
    protected $saldo;
    protected $status;
    protected $cttps;

    public function Conta($n, $tipo, $tit, $saldo, $cttps){
        $this->numConta = $n;
        $this->tipo = $tipo;
        $this->titular = $tit;
        $this->saldo = $saldo;
        $this->status = false;
        $this->cttps = $cttps;
    }

    public function getNumConta(){
        return $this->numConta;
    } // Pela regra de negócio, o número da conta não pode ser alterada
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getTitular(){
        return $this->titular;
    } // Pela regra de negócio, o titular não pode ser alterado
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($valor){
        $this->saldo = $valor;
    }

    public function abrirConta(){
        if($this->tipo === 'cp' && $this->saldo >= 50){
            $this->status = true;            
            echo "<p>Conta aberta</p>";
        } elseif($this->tipo === 'cc') {
            if($this->saldo >= 200 || !empty($this->cttps)){
                $this->status = true;
                echo "<p>Conta aberta</p>";
            } else {
                echo "Saldo precisa ser de R$ 200 ou ter vínculo empregatício";
            }
        } else {
            echo "Valor mínimo de R$ 50,00 para abertura de conta poupança";
        } 

    }
    public function encerrarConta(){
        if($this->saldo == 0){
            $this->status = false;
            echo "Conta encerrada";
        } else {
            echo "A conta precisa estar zerada para ser encerrada!";
        }
    }
    public function depositar($valor){
        if($this->status){
            echo "<p>Saldo anterior R$ {$this->getSaldo()}</p>";
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Novo saldo R$ {$this->getSaldo()}</p>";
        } else {
            echo "A conta precisa estar aberta!";
        }
    }
    public function sacar($valor){
        if($this->status){
            echo "<p>Saldo anterior R$ {$this->getSaldo()}</p>";
            $this->setSaldo($this->getSaldo() - $valor);
            echo "<p>Novo saldo R$ {$this->getSaldo()}</p>";
        } else {
            echo "A conta precisa estar aberta!";
        }
    }
    public function tarifaMensal(){

    }    
}

class ContaCorrente extends Conta{
    public function tarifaMensal(){
        if ($this->tipo === 'cc'){
            $this->saldo = $this->saldo - 29.9;
            echo "<p>Novo saldo R$ {$this->getSaldo()}</p>";
        }        
    }
}

class ContaPoupanca extends Conta{
    public function tarifaMensal(){
        if($this->tipo === 'cp'){
            $this->saldo = $this->saldo + ($this->saldo * 0.0049);
            echo "<p>Novo saldo R$ {$this->getSaldo()}</p>";
        }
    } 
}
?>