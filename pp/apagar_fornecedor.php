<?php
session_start();
include("../config.php");
if(!isset($_SESSION["SGVXXXX"])){	header('location: '.$caminho.'login');	}else {
	include("../conexao.php");
	include("../banco.php");

	$id_fornecedor = check_input($_POST['id_fornecedor']);

	apagar_fornecedor($id_fornecedor);
	header('location:'.$caminho.'fornecedores/ok');

}
?>