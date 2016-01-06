<?php	if(!isset($_SESSION["SGVXXXX"])){	session_destroy();	header('location: '.$caminho.'login');	}else {	?> 
	<div class="boxtop-subpage">
    <img alt="Minhas Anotações" title="Minhas Anotações" class="subpage-image fl" src="images/anotacao.png" width="50" height="50"/>
    <h3 class="box-subpage fl">Minhas anotações</h3>
    <div style="clear:both;"></div>
</div>   
<?php
$anotacao = mostrar_anotacao($_SESSION["emailSGV"]);?>
<p id="resultado" style="display:none;"></p>
<form method="post" action="pp/salvar_anotacao.php">
	<textarea class="anotacao" rows="20" onkeyup="salvar_anotacao();" id="anotacao"><?php if (!empty($anotacao)) { echo $anotacao; } ?></textarea>
	<input type="text" id="em" value="<?php echo $_SESSION["emailSGV"]; ?>" style="display:none;"/>
</form>
<?php } ?>