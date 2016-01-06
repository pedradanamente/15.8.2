<?php
session_start();
include("../config.php");
	if(!isset($_SESSION["SGVXXXX"])){	session_destroy();	header('location: '.$caminho.'login');	}else {
	$anotacao= stripslashes($_POST['anotacao']);
	$em=stripslashes($_POST['em']);
	include("../conexao.php");
	include("../banco.php");
	salvar_anotacao($anotacao,$em);
}
?>

