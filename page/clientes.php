<?php
if(!isset($_SESSION["SGVXXXX"])){ 
    if (!empty($caminho)) {
        header('location: '.$caminho.'login');
    }
    else {
        header('location: ../login');
    }
}
else {
?>
<div class="boxtop-subpage">
	<div class="submenu-subpage">
		<?php include("inc/menu_clientes.php"); ?>
	</div>
    <img alt="Clientes" title="Clientes" class="subpage-image fl" style="margin-top:" src="<?php echo $caminho; ?>images/clientes.png" width="50" height="50"/>
    <h3 class="box-subpage fl">Clientes</h3>
    <div style="clear:both;"></div>
</div>
<?php
	if ((isset($_GET['msg']))&&($_GET['msg']=="ok")) {
		include("inc/msgok.php");
	}
	
	if ((!isset($subp))||((isset($subp))&&($subp=="listar_clientes"))) {
		include("subp/listar_clientes.php");
	}
	else {
		include("subp/".$subp.".php");
	}




}
?> 