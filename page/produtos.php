<?php	if(!isset($_SESSION["SGVXXXX"])){	session_destroy();	header('location: '.$caminho.'login');	}else {	?>
<div class="boxtop-subpage">
	<div class="submenu-subpage">
		<?php include("inc/menu_produtos.php"); ?>
	</div>
    <img alt="Produtos" title="Produtos" class="subpage-image fl" src="<?php echo $caminho; ?>images/produtos.png" width="50" height="50"/>
    <h3 class="box-subpage fl">Produtos</h3>
    <div style="clear:both;"></div>
</div>

<?php }	?> 