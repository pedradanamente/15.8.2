<div style="text-align:right;">
    <span><a href="<?php echo $caminho; ?>"><strong>Sistema de Gestão de Vendas</strong></a></span>
    / 
    <span><a href="<?php echo $caminho."../15.8.1"; ?>">Ferramenta de RMA</a></span>
</div>
<div style="text-align:right;padding:0px;margin-top:30px;float:right">
	<?php
	if (fullscreen()===0) {
	?>
		<a href="<?php echo $caminho; ?>pp/trocar_resolucao.php"><img src='<?php echo $caminho; ?>images/aumentar_resolucao.png' width='30' /></a>
	<?php
	}
	else if (fullscreen()===1) {
	?>
		<a href="<?php echo $caminho; ?>pp/trocar_resolucao.php"><img src='<?php echo $caminho; ?>images/diminuir_resolucao.png' width='30' /></a>
	<?php
	}
	?>
</div>
<!-- Inicio do Copyright -->
<div  class="copyright fl" style="margin-top:50px;">Copyright © <a href="http://www.scripting.com.br" target="_blank">Scripting Studios Art </a></div>
<!-- Fim do Copyright -->