<?php
if(!isset($_SESSION["SGVXXXX"])){   header('location: '.$caminho.'login');   }else {
    $id = check_input($_GET['id']);
?>
<ol class="breadcrumb submenutitulo">
    <li class="fl"><img alt="Controle" style="margin-top:-2px;" title="Logs" src="<?php echo $caminho; ?>images/senha2.png" width="20" height="20"/></li>
    <li class="fl" style="margin-top:0px;">Resetar senha</li>
<li style="clear:both;"></li>
</ol>
<!-- Button and dropdown subp -->

<div class="col-md-6" >
    <form action="<?php echo $caminho; ?>pp/resetar_senha.php" method="post">
        <div class="form-group">
            <input style="display:none;" type="text" class="form-control" value="<?php echo $id; ?>" name="id_usuario">
            <div style="font-weight:bold;float:left;color:#3F79CF;"><img style="margin-top:-2px;" src="<?php echo $caminho; ?>images/editar.png" width="18"/>
                Tem certeza que deseja resetar a senha de <?php echo Ver_nome($id); ?> ?
            </div>
        </div>
        <button type="submit" class="btn btn-default" style="float:left;margin-top:15px;">RESETAR</button>
    </form>
</div>
<div style="clear:both;"></div>
<?php } ?>