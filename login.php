<?php
session_start();
include("config.php");
if(!isset($_SESSION["SGVXXXX"])){
	include("conexao.php");
	include("banco.php");
		?>
			<?php
			if ((isset($_GET["page"]))&&($_GET["page"]=="signup")) {
				// SIGN UP
				include("inc/signup.php");
			}
			else {
				// SIGN IN AUTOMATICO
				if(ipseguro($_SERVER['REMOTE_ADDR'])==True) {
					
					include('inc/signin_automatico.php');

				}else {
					//SIGN IN

					include("inc/signin_padrao.php");
				}
			}
		?>
	<?php
	}
	else {
		header('location:'.$caminho.'inicio');
	}
?>
