<?php
$total = 0;
$valoranterior = 1;
for($c = 1 ; $c <= 31; $c++){
    $valoranterior = $valoranterior * $c;
    $total += $valoranterior;
}
echo $total;
?>