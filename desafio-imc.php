<?php

$altura = 1.58;
$peso = 75;
$imc = $peso / ($altura ** 2);

echo "Seu IMC é de $imc. Ele está ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado.";

?>
