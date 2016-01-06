<?php
session_start();
include("../config.php");
if(!isset($_SESSION["SGVXXXX"])){	header('location: '.$caminho.'login');	}else {
	include("../conexao.php");
	include("../banco.php");

	$id_cliente = check_input($_POST['id_cliente']);

	apagar_cliente($id_cliente);
	header('location:'.$caminho.'clientes/ok');

}
?>