<?php   if(!isset($_SESSION["SGVXXXX"])){   header('location: '.$caminho.'login');   }else { ?>
<div class="alert alert-success msg-ok" role="alert">Sua requisi��o foi efetuada com sucesso!</div>
<?php } ?>