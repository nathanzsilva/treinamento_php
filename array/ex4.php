<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>EXERCÍCIO 3</h1>
    <form>
        <label for="">Insera um valor para pesquisar Usuários</label>
        <input type="number" name="value"><br>
        <input type="submit" value="Enviar">
    </form>

</body>
<?php
if (isset($_GET["value"])) {
    $valor = $_GET["value"];
    if ($valor <= 0 || $valor > 5) {
        echo 'Digite um valor maior que 0 e menor que 6.';
        return;
    }

    $arrayEmail = [1 => "nathan.silva26@gmail.com", "nathan2.silva26@gmail.com", "nathan3.silva26@gmail.com", "nathan4.silva26@gmail.com", "nathan5.silva26@gmail.com"];
    $arrayPassword = [1 => "1", "2", "3", "4", "5",];

    echo "<br/> ", $arrayEmail[$valor], "<br/> ", $arrayPassword[$valor];
}
// print_r($array);

?>

</html>