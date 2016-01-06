<?php	if(!isset($_SESSION["SGVXXXX"])){	session_destroy();	header('location: '.$caminho.'login');	}else {	?>
<ol class="breadcrumb submenutitulo">
    <li class="fl"><img alt="Controle" style="margin-top:-2px;" title="Logs" src="<?php echo $caminho; ?>images/logs.png" width="20" height="20"/></li>
	<li class="fl" style="margin-top:0px;">Logs de autenticação</li>
<li style="clear:both;"></li>
</ol>
<!-- Button and dropdown subp -->


<?php
	$stmt = logs_de_autenticacao($_SESSION["permissaoSGV"],$_SESSION["emailSGV"]);
	$stmt->bind_result($nome,$email,$data,$sistema_operacional,$navegador,$ip,$app,$retorno);
	
	if ($stmt->num_rows < 1) {
		?><div style="margin-top:0px;font-size:14px;">Nenhum item foi encontrado</div><?php
	}
	else if ($stmt->num_rows > 0) {
	?>
	<table class="Tabelinha-Table" style="margin-top:-20px;">
	<tr class="TableListarFPEF-TR">
		<th style="width:3%"></th>
		<th style="width:8%">DATA</th>
		<th style="width:36%">USUÁRIO</th>
		<th style="width:18%">SISTEMA OPERACIONAL</th>
		<th style="width:11%">NAVEGADOR</th>
		<th style="width:14%">IP</th>
		<th style="width:5%">APP</th>
		<th style="width:3%"></th>
	</tr>
		<?php
		while ($stmt->fetch()) {
			$data_mysql = $data;
			$timestamp = strtotime($data_mysql); // Gera o timestamp de $data_mysql
			$data = date('d/m/Y', $timestamp); // Resultado: 12/03/2009
		?>
		<tr
		<?php
		if (isset($TR1)) { echo 'class="Tabelinha-TR1"'; unset($TR1);}
		else if (!isset($TR1)) { echo 'class="Tabelinha-TR2"'; $TR1 = TRUE; }
		?>
		>
			<td class="Tabelinha-TD" style="text-align:center;">
				<img src="<?php echo $caminho; ?>images/mailblank.png" alt="<?php echo $email; ?>" title="<?php echo $email; ?>" height="25"/>
			</td>
			<td class="Tabelinha-TD"<?php if ($nome == "Desconhecido") { ?> style="color:#848282;" <?php } ?>><div><?php echo $data; ?></div></td>
			<td class="Tabelinha-TD"<?php if ($nome == "Desconhecido") { ?> style="color:#848282;" <?php } ?> ><div><?php echo $nome; ?></div></td>
			<td class="Tabelinha-TD"<?php if ($nome == "Desconhecido") { ?> style="color:#848282;" <?php } ?>><div><?php echo $sistema_operacional; ?></div></td>
			<td class="Tabelinha-TD"<?php if ($nome == "Desconhecido") { ?> style="color:#848282;" <?php } ?>><div><?php echo $navegador; ?></div></td>
			<td class="Tabelinha-TD"<?php if ($nome == "Desconhecido") { ?> style="color:#848282;" <?php } ?>><div><?php echo $ip; ?></div></td>

			<td class="Tabelinha-TD" style="text-align:center;">
				<img src="<?php echo $caminho; ?>images/<?php echo $app; ?>.png" alt="<?php echo $app; ?>" title="<?php echo $app; ?>" height="25"/>
			</td>
			<td class="Tabelinha-TD" style="text-align:center;">
				<img src="<?php echo $caminho; ?>images/<?php echo $retorno; ?>.png" alt="<?php echo $retorno; ?>" title="<?php echo $retorno; ?>" height="25"/>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
	<p style="padding-top:15px;text-align:right;padding:15px;">Quantidade retornada: <?php echo $stmt->num_rows; ?> </p>
	<?php
		}
		$stmt->close();
	?>



</div>
<?php } ?>