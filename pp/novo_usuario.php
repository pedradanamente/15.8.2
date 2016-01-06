<?php
session_start();
include("../config.php");
if(!isset($_SESSION["SGVXXXX"])){	header('location: '.$caminho.'login');	}else {
	include("../conexao.php");
	include("../banco.php");

	$nome = check_input($_POST['nome']);
	$email = check_input($_POST['email']);
	$senha = check_input($_POST['senha']);
	$permissao = check_input($_POST['permissao']);
	$data = date('Y-m-d H:i:s');

	novo_usuario($nome,$email,$senha,$permissao);
	enviar_saudacao($nome,$email,$senha);
	header('location:'.$caminho.'usuarios/novo/ok');

}
?>