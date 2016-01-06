<?php if(!isset($_SESSION["SGVXXXX"])){   header('location: '.$caminho.'login');    }else { ?>
<?php if (isset($_GET['subp'])) { $subp = stripcslashes($_GET['subp']); } ?>
<div class="menu-subp">
<!-- Button and dropdown subp -->
	<ol class="breadcrumb">
  <li><a onclick="novo_cliente()" href="#" <?php if ((isset($subp))&&($subp=="novo_cliente")) { ?> class="active" <?php } ?>>Novo</a></li>
<li><a href="<?php echo $caminho; ?>clientes" <?php if ((!isset($subp))||((isset($subp))&&($subp=="listar_clientes"))) { ?> class="active" <?php } ?>>Lista completa</a></li>
	</ol>
</div>
<?php } ?>