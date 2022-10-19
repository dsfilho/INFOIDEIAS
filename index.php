<?php 
use SRC\Funcoes;
include("src/funcoes.php");

$funcoes=new Funcoes();
echo "Século: " . $funcoes->SeculoAno(2000) ."<br>";

echo "Número Primo Anterior: ". $funcoes->PrimoAnterior(523) . "<br>";

echo "Segundo Maior Número: " .$funcoes->SegundoMaior(array([25,22,18],[10,15,13],[24,5,2],[80,17,15])) ."<br>";


echo $funcoes->SequenciaCrescente([10, 1, 2, 3, 4, 5]) ?  "Resultado: Verdadeiro" : "Resultado: Falso";
?>