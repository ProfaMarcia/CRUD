<?php

$servidor = "localhost";
$banco = "crud";
$usuariobd = "root";
$senhabd = "";

$conect = new mysqli($servidor,$usuariobd,$senhabd, $banco);
if ($conect->connect_errno) {
	die("Falha ao conectar: ".$conect->connect_error);
}
?> 