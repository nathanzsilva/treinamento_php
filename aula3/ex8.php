<?php
$soma = ($valor1 = 4) + 5;
//$soma é igual a 9 agora e $valor1 foi configurado como 4.
echo $soma . "<br>";
$valor2 = 20;
$valor3 = 30;
$soma += 1;
echo $soma . "<br>";
// $soma fica com 10
$soma += $valor2;
echo $soma . "<br>";
// $soma fica com 10 + 20 = 30 
$soma *= $valor3;
echo $soma . "<br>";
// $soma fica com 30 * 30 = 900  
$soma %= 100;
echo $soma . "<br>";
// $soma fica resto da divisão 0 
$saudacao = "Bom";
$saudacao .= "Dia!";
//configura $saudacao para"BomDia!",como em $saudacao = $saudacao. "Dia!";
echo $saudacao . "Hoje vai ter " . $soma . "% tristeza!";
?>