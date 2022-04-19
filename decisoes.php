<?php

$idade = 20;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais que 18 anos ou".PHP_EOL;
echo "a partir de 16 anos acompanhado.".PHP_EOL;

if ($idade >= 18) {
	echo "Você tem $idade anos. Pode entrar.";
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
	echo "Você tem $idade anos e está acompanhado. Então pode entrar.";
} else {
	echo "Você tem apenas $idade anos. Não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";
