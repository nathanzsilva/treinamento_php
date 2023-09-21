<?php
session_start();
if (isset($_GET['rota'])) {
    $rota = $_GET['rota'];
    switch ($rota) {
        case "deletar":
            if (isset($_GET['id'])) {
                unset($_SESSION['array'][$_GET['id']]);
                header("location: /treinamento_php/desafioPhp");
            }
            break;
        case "adicionar":
            if (isset($_POST["nome"]) && isset($_POST["descricao"]) && isset($_POST["data"]) && isset($_POST["prioridade"])) {
                $request = array(
                    "nome" => $_POST["nome"],
                    "descricao" => $_POST["descricao"],
                    "data" => $_POST["data"],
                    "prioridade" => $_POST["prioridade"]
                );
                array_push($_SESSION['array'], $request);
                header("location: /treinamento_php/desafioPhp");

            }
            break;

    }

}
?>