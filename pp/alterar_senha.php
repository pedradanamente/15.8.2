<?php
session_start();
include("../config.php");
if(!isset($_SESSION["SGVXXXX"])){	header('location: '.$caminho.'login');	}else {
	include("../conexao.php");
	include("../banco.php");

	$id_usuario = $_SESSION["id_usuarioSGV"];
	$novasenha = check_input($_POST['senha']);

	alterar_senha($id_usuario,$novasenha);
	header('location:'.$caminho.'ok');

}
?>