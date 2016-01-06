<?php	if(!isset($_SESSION["SGVXXXX"])){	session_destroy();	header('location: '.$caminho.'login');	}else {	?>
<div class="boxtop-subpage">
    <img alt="Logout" title="Logout" class="subpage-image fl" src="images/logout.png" width="50" height="50"/>
    <h3 class="box-subpage fl">Logout</h3>
    <div style="clear:both;"></div>
</div>
<div style="text-align:left;padding:15px;">
	<h4>Volte sempre!</h4>
	<p><a href="login">Clique aqui</a> para entrar novamente</p>
</div>

<?php
	session_destroy();
}
?> 