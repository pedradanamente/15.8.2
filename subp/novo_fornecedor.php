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
<div style="display:block;" <?php if ((isset($subp))&&($subp == "novo")) { ?>} id="novo_fornecedorJS" <?php } ?> >
    <?php include("inc/novo_fornecedor.php"); ?>
</div>
<div style="display:none;" id="listar_fornecedoresJS">
    <?php include("inc/listar_fornecedores.php"); ?>
</div>
<?php } ?>