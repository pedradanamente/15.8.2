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
    <li class="fl"><img alt="Controle" style="margin-top:-2px;" title="Logs" src="<?php echo $caminho; ?>images/senha2.png" width="20" height="20"/></li>
    <li class="fl" style="margin-top:0px;">Mudar permissão</li>
<li style="clear:both;"></li>
</ol>
<!-- Button and dropdown subp -->

<div class="col-md-6" >
    <form action="<?php echo $caminho; ?>pp/mudar_permissao.php" method="post">
        <div class="form-group">
            <input style="display:none;" type="text" class="form-control" value="<?php echo $id; ?>" name="id_usuario">
            <label style="float:left;color:#3F79CF;" for="permissao"><img style="margin-top:-2px;" src="<?php echo $caminho; ?>images/editar.png" width="18"/>
                Qual a nova permissão para <?php echo Ver_nome($id); ?> ?
            </label>
            <div class="form-group">
                <select  style="clear:both;" class="form-control" name="permissao" id="permissao" required>
                    <option value="-1">Negado</option>
                    <option value="0">Baixa</option>
                    <option value="1" selected>Normal</option>
                    <option value="3">Máxima</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-default" style="float:left;margin-top:15px;">MUDAR</button>
    </form>
</div>
<div style="clear:both;"></div>


<?php } ?>