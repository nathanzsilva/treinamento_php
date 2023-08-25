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
        <label for="">Selecione uma sigla</label>
        <select name="value">
            <option value="BRA">BRA</option>
            <option value="ING">ING</option>
            <option value="EUA">EUA</option>
        </select>
        <input type="submit" value="Enviar">

    </form>

</body>
<?php
if (isset($_GET["value"])) {
    $valor = $_GET["value"];

    $array = ["BRA" => "BRASIL","ING" => "INGLATERRA","EUA" => "ESTADOS UNIDOS",];

    echo "<br/> ", $array[$valor];
}
// print_r($array);

?>

</html>