<?php if(!isset($_SESSION["SGVXXXX"])){   header('location: '.$caminho.'login');    }else { ?>
<?php if (isset($_GET['subp'])) { $subp = stripcslashes($_GET['subp']); } ?>
<div class="menu-subp">
<!-- Button and dropdown subp -->
	<ol class="breadcrumb">
	  <li><a href="<?php echo $caminho; ?>logs" <?php if ((!isset($subp))||((isset($subp))&&($subp=="logs"))) { ?> class="active" <?php } ?>>Logs</a></li>
	  <li><a href="<?php echo $caminho; ?>senha" <?php if ((isset($subp))&&($subp=="senha")) { ?> class="active" <?php } ?>>Alterar senha</a></li>
	  <li><a href="<?php echo $caminho; ?>usuarios/novo" <?php if ((isset($subp))&&($subp=="novo_usuario")) { ?> class="active" <?php } ?>>Novo usuário</a></li>
	  <li><a href="<?php echo $caminho; ?>usuarios" <?php if ((isset($subp))&&($subp=="usuarios")) { ?> class="active" <?php } ?>>Usuários</a></li>
	</ol>
</div>
<?php } ?>