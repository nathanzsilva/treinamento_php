<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>EXERCÍCIO 2</h1>
    <form>
        <label for="">Insera um valor para pesquisar cidade</label>
        <input type="number" name="value"><br>
        <input type="submit" value="Enviar">

    </form>

</body>
<?php
if (isset($_GET["value"])) {
    $valor = $_GET["value"];
    if ($valor <= 0 || $valor > 10) {
        echo 'Digite um valor maior que 0 e menor que 11.';
        return;
    }

    $array = [1 => "Jandira","Barueri","Cotia","Osasco","Ubatuba", "Rio de Janeiro","Alagoas","Acre","Natal","Santos"];

    echo "<br/> ", $array[$valor];
}
// print_r($array);

?>

</html>