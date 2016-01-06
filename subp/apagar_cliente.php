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
    <?php   $id = check_input($_GET['id']); ?>
<ol class="breadcrumb submenutitulo">
    <li class="fl"><img alt="Controle" style="margin-top:-2px;" title="Logs" src="<?php echo $caminho; ?>images/confirm.png" width="20" height="20"/></li>
    <li class="fl" style="margin-top:0px;">Apagar cliente</li>
<li style="clear:both;"></li>
</ol>
<!-- Button and dropdown subp -->

<div class="col-md-6" >
    <form action="<?php echo $caminho; ?>pp/apagar_cliente.php" method="post">
        <div class="form-group">
            <input style="display:none;" type="text" class="form-control" value="<?php echo $id; ?>" name="id_cliente">
            <div style="font-weight:bold;float:left;color:#3F79CF;"><img style="margin-top:-2px;" src="<?php echo $caminho; ?>images/apagar.png" width="18"/>
                Tem certeza que deseja apagar o cliente <?php echo Ver_nome_do_cli($id); ?> ?
            </div>
        </div>
        <button type="submit" class="btn btn-default" style="float:left;clear:both;margin-top:15px;">APAGAR</button>
    </form>
</div>
<div style="clear:both;"></div>


<?php } ?>