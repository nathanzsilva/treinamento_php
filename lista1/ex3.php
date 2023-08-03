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
        <input type="number" name="valor1"><br>
        <input type="number" name="valor2"><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php
if (isset($_GET["valor1"]) && isset($_GET["valor2"])) {
    $valor1 = $_GET["valor1"];
    $valor2 = $_GET["valor2"];

    $soma = $valor1 + $valor2;
    $subtracao = $valor1 - $valor2;
    $multiplicacao = $valor1 * $valor2;
    $divisao = $valor1 / $valor2;
    echo "O valor da soma é $soma <br>" .
        "O valor da subtração é $subtracao <br>" .
        "O valor da divisão é $divisao <br>" .
        "O valor da multiplicação é $multiplicacao <br>";
}
?>