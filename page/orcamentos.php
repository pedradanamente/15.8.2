<?php	if(!isset($_SESSION["SGVXXXX"])){	session_destroy();	header('location: '.$caminho.'login');	}else {	?>
<div class="boxtop-subpage">
	<div class="submenu-subpage">
		<?php include("inc/menu_orcamentos.php"); ?>
	</div>
    <img alt="Or�amentos" title="Or�amentos" class="subpage-image fl" style="margin-top:" src="<?php echo $caminho; ?>images/orcamentos.png" width="50" height="50"/>
    <h3 class="box-subpage fl">Or�amentos</h3>
    <div style="clear:both;"></div>
</div>


<?php }	?> 