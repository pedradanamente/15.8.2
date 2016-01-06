<?php
session_start();
include("../config.php");
if(!isset($_SESSION["SGVXXXX"])){	header('location: '.$caminho.'login');	}else {
	include("../conexao.php");
	include("../banco.php");

	$id_usuario = check_input($_POST['id_usuario']);
	$novasenha = "@".rand(1000,9999);

	resetar_senha($id_usuario,$novasenha);
	enviar_senha($id_usuario,$novasenha);
	header('location:'.$caminho.'ok');

}
?>