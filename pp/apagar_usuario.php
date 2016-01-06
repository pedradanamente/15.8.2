<?php
session_start();
include("../config.php");
if(!isset($_SESSION["SGVXXXX"])){	header('location: '.$caminho.'login');	}else {
	include("../conexao.php");
	include("../banco.php");

	$id_usuario = check_input($_POST['id_usuario']);

	apagar_usuario($id_usuario);
    if ($id_usuario == $_SESSION['id_usuarioSGV']) {
        session_destroy();
		header('location:'.$caminho);
    }
    else {
		header('location:'.$caminho.'ok');
    }

}
?>