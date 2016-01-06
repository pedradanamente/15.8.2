<?php
$db_servidor="xxxx";
$db_usuario="xxxx";
$db_senha="xxxx";
$meubanquinho="xxxx";

$conexao = new mysqli($db_servidor, $db_usuario, $db_senha, $meubanquinho);
if (mysqli_connect_errno()) {trigger_error(mysqli_connect_error());
}
?>