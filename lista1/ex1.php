<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão entre milímetros e polegadas</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: rgb(216, 140, 27);
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .conteudo {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 20px;
            font-size: larger;
            padding: 5% 20px;
            margin: 80px;
            width: 600px;
            background-color: white;
            border-radius: 25px;
            box-shadow: 20px 20px 50px;
            margin-bottom: 10px;
        }

        .conteudo input {
            height: 30px;
        }

        input {
            border-radius: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="conteudo">
            <h1>Conversão entre milímetros e polegadas</h1>
            <p>Elabore um programa em PHP que dada a entrada de um valor em milímetros calcule a conversão entre
                milímetros e polegadas, sabendo que: 25,4 mm = 1” (pol).</p>
            <form action="" method="GET">
                <p>Informe um valor para ser convertido</p>
                <br>
                <input type="text" name="valor">
            </form>

        </div>

    </div>
    <script src="script.js"></script>
</body>

</html>

<?php
if (isset($_GET["valor"])) {
    $mm = $_GET["valor"];

    $polegadas = $mm / 25.4;
    echo "<script>alert('O valor em milimetros " . $mm . " em polegadas é " . $polegadas . "')</script>";
}
?>