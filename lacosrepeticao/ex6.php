<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço de repetição</title>
</head>

<body>
    <h1>Laços de repetição</h1>
    <h3>Programa que exibe todos os valores entre os números informados</h3>
    <a href="../lacosrepeticao">Voltar</a>
    <form action="" method="GET">
        <p>Informe um valor maior que 1:</p>
        <input type="text" name="num1">
        <input type="submit" value="ENVIAR">
    </form>
</body>

</html>
<?php
if (isset($_GET["num1"])) {
    $valor = $_GET["num1"];
    if ($valor <= 1 || $valor > 100) {
        echo 'Digite um valor maior que 1 e menor que 100';
        return;
    }

    for ($c = 0; $c <= $valor; $c++) {
        echo "<br/>Valor ", $c, " - Dobro ", $c * 2;
    }
}
?>