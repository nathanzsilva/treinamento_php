<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações básicas</title>
</head>

<body>
    <p>fiquei com preguiça de fazer bonito</p>
    <h1>Operações básicas</h1>
    <form action="" method="GET">
        <input type="number" name="valor"><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php
if (isset($_GET["valor"])) {
    $valor = $_GET["valor"];
    
    $hora = floor($valor / 3600);
    $minseg = $valor % 3600;
    $minutos = floor($minseg / 60);
    $segundos = $minseg % 60;
    
    echo "As horas são $hora <br>" . 
    "Os minutos são $minutos<br>" .
    "Os segundos é $segundos<br>";
}
?>