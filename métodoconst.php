<?php 

include("conta2.class.php");
/* Criamos o objeto em $conta1, e no momento de sua criação enviamos os parômetros que o construtor precisa para preencher os respectivos atributos. */

$conta1 = new conta ("Douglas Ribeiro", "0731", "987654-21", 400, "ativa");

//executaando os métodos 
$conta1-> Depositar (200);
$conta1-> Sacar (25);

//Imprimindo o valor do saldo 
echo 
"Favorecido:" . $conta1-> Cliente."</br>
      Conta:" . $conta1->Conta."</br>
         Ag:" . $conta1 -> Agencia ."</br>
      Saldo:" . $conta1-> ObterSaldo()."</br>";
    
?>