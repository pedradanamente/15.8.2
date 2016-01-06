<?php if (isset($_GET['subp'])) { $subp = stripcslashes($_GET['subp']); } ?>
<div class="menu-subp">
<!-- Button and dropdown subp -->
	<ol class="breadcrumb">
	  <li><a href="<?php echo $caminho; ?>pesquisar/produtos" <?php if ((!isset($subp))||((isset($subp))&&($subp=="produtos"))) { ?> class="active" <?php } ?>>Produto</a></li>
	  <li><a href="<?php echo $caminho; ?>pesquisar/clientes" <?php if ((isset($subp))&&($subp=="clientes")) { ?> class="active" <?php } ?>>Cliente</a></li>
	  <li><a href="<?php echo $caminho; ?>pesquisar/orcamentos" <?php if ((isset($subp))&&($subp=="orcamentos")) { ?> class="active" <?php } ?>>Orçamento</a></li>
	  <li><a href="<?php echo $caminho; ?>pesquisar/pedidos" <?php if ((isset($subp))&&($subp=="pedidos")) { ?> class="active" <?php } ?>>Pedido</a></li>
	</ol>
</div>