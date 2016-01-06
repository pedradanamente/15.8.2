<?php	if(!isset($_SESSION["SGVXXXX"])){	session_destroy();	header('location: '.$caminho.'login');	}else {	?>
<div class="boxtop-subpage">
	<div class="submenu-subpage">
		<?php include("inc/menu_controle.php"); ?>
	</div>
    <img alt="Controle" title="Controle" class="subpage-image fl" style="margin-top:" src="<?php echo $caminho; ?>images/controle.png" width="50" height="50"/>
    <h3 class="box-subpage fl">Controle</h3>
    <div style="clear:both;"></div>
</div>
<?php
	if ((!isset($subp))||((isset($subp))&&($subp=="logs"))) {
		include("subp/logs.php");
	}
	else {
		include("subp/".$subp.".php");
	}




}
?> 