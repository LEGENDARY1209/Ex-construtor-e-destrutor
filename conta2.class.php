<?php 
 class Conta{

    public $Cliente;
    public $Agencia;
    public $Conta;
    public $Saldo;
    public $Status;

    /* Método construtor - Inicializa as propriedades */
    function __construct($Titular, $Agencia, $Conta, $Saldo, $Status){
    $this->Cliente = $Titular;
    $this->Agencia = $Agencia;
    $this->Conta = $Conta;
    $this->Saldo = $Saldo;
    $this->Cancelada = $Status;
    }

    /* Método Destrutor - Finaliza os objetos */
    function __destruct(){
    echo "<br/><small>O objeto foi destruído.</small>";
    }

    /* Método Sacar() Diminui o saldo em quantia */
    function Sacar($quantia){
        if( $quantia > 0){
            $this->Saldo -= $quantia;  
        }
    }

    /* Método ObterSaldo() Deposita em uma quantia, acrescendo o saldo */
    function Depositar($quantia){
        if( $quantia > 0){
            $this->Saldo += $quantia;  
        }
    }

     /* Método ObterSaldo() Retorna o saldo da conta */
     function ObterSaldo(){
           return $this->Saldo;
        }
    }
?>