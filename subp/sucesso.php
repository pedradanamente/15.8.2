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
<ol class="breadcrumb submenutitulo">
    <li class="fl"><img alt="Controle" style="margin-top:-2px;" title="Logs" src="<?php echo $caminho; ?>images/sucessfull.png" width="20" height="20"/></li>
    <li class="fl" style="margin-top:0px;">Sucessfull</li>
<li style="clear:both;"></li>
</ol>
<!-- Button and dropdown subp -->

<div class="alert alert-success" role="alert">Sua requisição foi efetuada com sucesso!</div>


<?php } ?>