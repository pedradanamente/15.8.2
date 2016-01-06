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
    <li class="fl"><img alt="Controle" style="margin-top:-2px;" title="Logs" src="<?php echo $caminho; ?>images/senha2.png" width="20" height="20"/></li>
    <li class="fl" style="margin-top:0px;">Alterar senha</li>
<li style="clear:both;"></li>
</ol>
<!-- Button and dropdown subp -->

<div class="col-md-6" >
    <form action="<?php echo $caminho; ?>pp/alterar_senha.php" method="post">
        <div class="form-group">
            <label style="float:left;color:#3F79CF;" for="senha"><img style="margin-top:-2px;" src="<?php echo $caminho; ?>images/editar.png" width="18"/> Nova Senha</label>
            <input style="clear:both;" type="text" class="form-control" name="senha" id="senha" placeholder="nova senha">
        </div>
        <button type="submit" class="btn btn-default" style="float:right;">Cadastrar</button>
    </form>
</div>
<div style="clear:both;"></div>


<?php } ?>