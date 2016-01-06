<?php   if(!isset($_SESSION["SGVXXXX"])){  session_destroy();  header('location: '.$caminho.'login');   }else { ?>
<div class="boxtop-subpage">

    <div class="submenu-subpage">
        <?php include("inc/menu_{$page}.php"); ?>
    </div>
    <img alt="<?php echo $page; ?>" title="<?php echo $page; ?>" class="subpage-image fl" src="<?php echo $caminho; ?>images/<?php echo $page; ?>.png" width="50" height="50"/>
    <h3 class="box-subpage fl"><?php echo $page; ?></h3>
    <div style="clear:both;"></div>
</div>



<div class="row linhasuperior">
    <div class="col-sm-12">
<?php

	$stmt = listar_usuarios();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($email,$nome);
        while ($stmt->fetch()) {
        	$x=rand(1,14);
        	//captura

?>
        <h3 class="portfolio-p"><?php echo $nome; ?></h3>
        <div class="portfolio-box">
        	<div style="float:left;">
		        <a href="images/usuario<?php echo $x; ?>.thumbnail.png" data-lightbox="<?php echo $nome; ?>" title="Imagem 1">
		            <img class="portfolio-thumbnail" src="images/usuario<?php echo $x; ?>.thumbnail.png" alt=""/>
		        </a>
            </div>
            <div class="portfolio-url"><?php echo $email; ?></div>
            <div style="clear:both;"></div>
        </div>
<?php

        }
    }

?>

    </div>
</div>

<?php }	?> 