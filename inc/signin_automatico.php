<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="ISO 8859-1">
    <title>Login | SGV</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="<?php echo $framework; ?>jQuery.mobile/jquery.mobile-1.4.5.css" type="text/css" rel="stylesheet"/>
    <link href="<?php echo $framework; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo $caminho; ?>css/andremachado.css" rel="stylesheet"/>
</head>
<body>
	<div id="loader" class="loader"><img src="<?php echo $caminho; ?>images/loading.gif"/></div>
	<div id="hidden" style="display: none;">
		<form action="<?php echo $caminho; ?>pp/senha.php" method="post" data-ajax="false" >
			<div style="width:300px;margin:20px auto;" class="panel panel-default">
		            <div class="panel-heading">
		                <div class="panel-title text-center"><img src="<?php echo $caminho; ?>images/logomark.png" width="56"/></div>
		            </div>     
				<div>
				<div class="panel-body" style="text-align:center;">
					<input type="password" name="senha" placeholder="digite sua senha" autocomplete="off" value="" autofocus/>
				</div>
				<div class="ui-bt ui-mini" style="width:140px;margin:-1px 0px 0px 6px;padding:0px;float:left;">
				<select name="email" id="select-custom-21" data-native-menu="false" required>

					<option value="" data-placeholder="true">USUÁRIO</option>

		<?php
		$stmt=listar_usuarios();
		$stmt->bind_result($id_usuario,$nome,$email,$quantidade_login,$ultimo_login,$permissao);
		if ($stmt->num_rows > 0) {
			while ($stmt->fetch()) {
		?>
					<option value="<?php echo $email; ?>"><?php echo $nome; ?></option>
		<?php
			}
		}
		?>

				</select>
				</div>
					<button class="ui-btn ui-corner-all ui-mini fl" style="width:140px;" name="signin">ENTRAR</button>
					<div style="clear:both;"></div>
				</div>
			</div>
		</form>
		<?php if (isset($_GET['error'])) { include("inc/tryagain.php"); } ?>
	</div>
	<script>document.getElementById('hidden').style.display = "block";	document.getElementById('loader').style.display = "none";</script>
	
	<script src="<?php echo $framework; ?>js/jquery-2.1.3.min.js"></script>
	<script src="<?php echo $framework; ?>jQuery.mobile/jquery.mobile-1.4.5.min.js"></script>
</body>
</html>