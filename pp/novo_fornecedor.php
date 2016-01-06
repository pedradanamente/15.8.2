<?php
session_start();
include("../config.php");
if(!isset($_SESSION["SGVXXXX"])){	header('location: '.$caminho.'login');	}else {
	include("../conexao.php");
	include("../banco.php");

	$nome = check_input($_POST['nome']);
	$representante = check_input($_POST['representante']);
	$rgie = check_input($_POST['rgie']);
	$cpfcnpj = check_input($_POST['cpfcnpj']);
	$email = check_input($_POST['email']);
	$email2 = check_input($_POST['email2']);
	$fone = check_input($_POST['fone']);
	$fone2 = check_input($_POST['fone2']);
	$cep = check_input($_POST['cep']);
	$logradouro = check_input($_POST['logradouro']);
	$numero = check_input($_POST['numero']);
	$complemento = check_input($_POST['complemento']);
	$bairro = check_input($_POST['bairro']);
	$cidade = check_input($_POST['cidade']);
	$uf = check_input($_POST['uf']);

    $www = str_replace("http://", "", check_input($_POST['site']));
	$observacao = check_input($_POST['observacao']);

	$data = date('Y-m-d');

	novo_fornecedorSGV($nome,$representante,$rgie,$cpfcnpj,$email,$email2,$fone,$fone2,$cep,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$www,$observacao,$data);

	header('location:'.$caminho.'fornecedores/novo/ok');

}
?>