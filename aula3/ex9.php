<?php
$nota = 8;
if($nota >= 6)
{
    echo "Você passou por média!";
}
else
{
    echo "Você ficou de recuperação...!";
}
    echo "<BR><BR> Mesma verificação usano o operador ternário<BR><BR>";
    echo ($nota>=6) ? "Você passou por média!" : "Você ficou de recuperação...!";
?>