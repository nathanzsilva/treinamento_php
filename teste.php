<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios 5</title>
</head>

<body>
    <h1>Conversão de segundos</h1>
    <p>Escreva um Programa em PHP quedado um determinado valor em segundos, indique na saída quanto esse valor
        representa em horas, minutos e segundos, sabendo que:•1 hora = 3600segundos•1 minuto = 60 segundos;Exemplo:se
        for informado6543, o resultadoserá:-Horas: 1-Minutos: 49-Segundos: 3</p>
    <form action="" method="GET">
        <input type="number" name="valor"><br>
        <input type="hidden" name="array" id="array">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php
if (isset($_GET["valor"])) {
    $segundos = $_GET["valor"];

    $array = [];
    array_push($array, $segundos);
    

    var_dump($array);
}
?>