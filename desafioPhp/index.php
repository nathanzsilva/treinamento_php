<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="processamento.php?rota=adicionar">
        <label for="nome">Nome da tarefa</label>
        <input type="text" name="nome" /><br />
        <label for="descricao">Descrição da tarefa</label>
        <textarea name="descricao"></textarea><br />
        <label for="data">Data de entrega</label>
        <input type="datetime-local" name="data" /><br />
        <input type="radio" value="0" name="prioridade"><label>Urgente</label><br/>
        <input type="radio" value="1" name="prioridade"><label>Normal</label><br/>
        <input type="radio" value="2" name="prioridade"><label>Desnecessário</label><br/>
        <button type="submit">Enviar</button>
    </form>

    <?php
    session_start();

    if ($_SESSION['array'] == null) {
        $_SESSION['array'] = [];
    }

    echo "<table border='2px solid black'>";
    echo "<tr>
        <th>nome</th>
        <th>descricao</th>
        <th>data</th>
        <th>prioridade</th>
        <th>Ações</th></tr>";
    foreach ($_SESSION['array'] as $i => $item) {
        //    for ($i = 0; $i < count($_SESSION['array']); $i++) {        
            $nome = $item["nome"];
            $descricao = $item["descricao"];
            $data = new Datetime($item["data"]);
            $data = $data->format('d/m/Y H:i:s');
            $prioridade = $item["prioridade"];
            switch ($prioridade){
                case 0:
                    $prioridade = 'Urgente';
                    break;
                case 1:
                    $prioridade = 'Normal';
                    break;
                case 2:
                    $prioridade = 'Desnecessário';
                    break;

            }
        echo "<tr>
        <td>$nome</td>
        <td>$descricao</td>
        <td>$data</td>
        <td>$prioridade</td>
        <td><button onclick='deletarItem($i)'>Apagar
        </button></td></tr>";
    }
    echo "</table>";    
    ?>
    <script>
        function deletarItem(id) {
            window.location.href = `./processamento.php/?rota=deletar&id=${id}`;
        }
    </script>
</body>

</html>