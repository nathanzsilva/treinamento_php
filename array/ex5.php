<?php
$arrayAlunos = array(
    array("nome" => "Nathan1", "nota" => 9.5),
    array("nome" => "Nathan2", "nota" => 8.0),
    array("nome" => "Nathan3", "nota" => 7.2),
    array("nome" => "Nathan4", "nota" => 6.8),
    array("nome" => "Nathan5", "nota" => 9.0)
);

print_r($arrayAlunos);

foreach($arrayAlunos as $item){
    echo "<br>", $item["nome"], " - ", $item["nota"];
}
?>