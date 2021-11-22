<?php

$str = readline("Digite o nome do passageiro: ");

for ($a = 0; $a < strlen($str); $a++){
	if ($str[$a] == ' '){
		$index1 = $a;

		break;
	}
}

#pegando primeiro nome
$nome = substr($str, 0, $index1);
#maiuscula
$nome[0] = strtoupper($nome[0]);

for ($b = 0; $b < strlen($str); $b++){
	if($str[$b] == ' '){
		$index2 = $b;
	}
}

$sobrenome = substr($str, $index2 + 1);

for($b = 0; $b < strlen($sobrenome); $b++){
	$sobrenome[$b] = strtoupper($sobrenome[$b]);
}

echo $sobrenome . "/" . $nome;

?>
