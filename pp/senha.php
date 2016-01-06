<?php
session_start();
include("../config.php");
if(!isset($_SESSION["SGVXXXX"])){
	include("../conexao.php");
	include("../banco.php");
	// CLICOU NO BOTAO DE FAZER SIGN IN
	if ((isset($_POST["signin"]))OR(isset($_POST["signinautomatico"]))){
		$email=check_input($_POST["email"]);
		$senha=check_input($_POST["senha"]);
		SignIn($email,$senha);
	}
}
else {
	header('location:'.$caminho.'inicio');
}
?>