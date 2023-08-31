<?php
$vetor = array(1, 2, 3, 4, 5);
foreach ($vetor as $v) {
    print("O valor atual do vetor é $v. <br>");
}

echo "<br/><br/><br/><br/><br/>";

$a = array("um" => 1, "dois" => 2, "três" => 3, "quarto" => 4);

foreach ($a as $chave => $valor) {
    print("\$a[$chave] => $valor.<br>");
}
?>