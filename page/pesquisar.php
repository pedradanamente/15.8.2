<?php	if(!isset($_SESSION["SGVXXXX"])){	session_destroy();	header('location: '.$caminho.'login');	}else {	?>
<div class="boxtop-subpage">
	<div class="submenu-subpage">
		<?php include("inc/menu_pesquisar.php"); ?>
	</div>
    <img alt="Pesquisar" title="Pesquisar" class="subpage-image fl" style="margin-top:" src="<?php echo $caminho; ?>images/pesquisar.png" width="50" height="50"/>
    <h3 class="box-subpage fl">Pesquisar</h3>
    <div style="clear:both;"></div>
</div>
<?php
	if ((!isset($subp))||((isset($subp))&&($subp=="pesquisar_produtos"))) {
		include("subp/pesquisar_produtos.php");
	}
	else {
		include("subp/pesquisar_".$subp.".php");
	}




}
?> 