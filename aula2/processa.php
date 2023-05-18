<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $avaliacao = $_POST["avaliacao"];
    $secao = $_POST["secao"];
    $outra = $_POST["outra"];
    $comentarios = $_POST["comentarios"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $fone = $_POST["fone"];
    $novidades = isset($_POST["novidades"]);
    
    echo $avaliacao,"<br>",$secao,"<br>",$outra,"<br>",$comentarios,"<br>",$nome,"<br>",$email,"<br>",$fone,"<br>",$novidades,"<br>"
 ?>
</body>

</html>