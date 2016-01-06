<?php	if(!isset($_SESSION["SGVXXXX"])){	session_destroy();	header('location: '.$caminho.'login');	}else {	?>
<div class="boxtop-subpage">

	<div class="submenu-subpage">
		<?php include("inc/menu_relatorios.php"); ?>
	</div>
    <img alt="Relatórios" title="Relatórios" class="subpage-image fl" src="<?php echo $caminho; ?>images/relatorios.png" width="50" height="50"/>
    <h3 class="box-subpage fl">Relatórios</h3>
    <div style="clear:both;"></div>
</div>


<?php }	?> 