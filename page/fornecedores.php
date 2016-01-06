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
		<?php include("inc/menu_fornecedores.php"); ?>
	</div>
    <img alt="Fornecedores" title="Fornecedores" class="subpage-image fl" style="margin-top:" src="<?php echo $caminho; ?>images/fornecedores.png" width="50" height="50"/>
    <h3 class="box-subpage fl">Fornecedores</h3>
    <div style="clear:both;"></div>
</div>
<?php
	if ((isset($_GET['msg']))&&($_GET['msg']=="ok")) {
		include("inc/msgok.php");
	}
	
	if ((!isset($subp))||((isset($subp))&&($subp=="listar_fornecedores"))) {
		include("subp/listar_fornecedores.php");
	}
	else {
		include("subp/".$subp.".php");
	}
}
?> 