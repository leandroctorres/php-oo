<?php

function validaUsuario(array $usuario)
{
	if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade']))
	{
		throw new Exception("Campos obrigatórios não foram preenchidos!");
	}
	return true;
}

$usuario = [
	'codigo' => 1,
	'nome' => '',
	'idade' => 57,
];

try {
	$status = validaUsuario($usuario);
} catch (Exception $e) {
	echo $e->getMessage();
	die();
} finally {
	echo "Status da Operação: " . (int)$status; // cast
	die();
}



echo "\n ... executando ... \n";
