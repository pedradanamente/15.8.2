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
<div style="display:block;" <?php if ((isset($subp))&&($subp == "novo")) { ?>} id="novo_clienteJS" <?php } ?> >
    <?php include("inc/novo_cliente.php"); ?>
</div>
<div style="display:none;" id="listar_clientesJS">
    <?php include("inc/listar_clientes.php"); ?>
</div>
<?php } ?>