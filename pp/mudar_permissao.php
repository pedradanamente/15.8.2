<?php
session_start();
include("../config.php");
if(!isset($_SESSION["SGVXXXX"])){	header('location: '.$caminho.'login');	}else {
	include("../conexao.php");
	include("../banco.php");

	$id_usuario = check_input($_POST['id_usuario']);
	$permissao = check_input($_POST['permissao']);

	mudar_permissao($id_usuario,$permissao);
	header('location:'.$caminho.'ok');

}
?>