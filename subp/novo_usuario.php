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
    <li class="fl"><img alt="Controle" style="margin-top:-2px;" title="Logs" src="<?php echo $caminho; ?>images/novo_usuario.png" width="20" height="20"/></li>
    <li class="fl" style="margin-top:0px;">Novo usuário</li>
<li style="clear:both;"></li>
</ol>
<!-- Button and dropdown subp -->


<div class="col-md-6" >
    <form action="<?php echo $caminho; ?>pp/novo_usuario.php" method="post">
        <div class="form-group">
            <label style="float:left;color:#3F79CF;" for="nome"><img style="margin-top:-2px;" src="<?php echo $caminho; ?>images/nome.png" width="18"/> Quem você quer cadastrar?</label>
            <input style="clear:both;" type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" required>
        </div   >
        <div class="form-group">
            <label style="float:left;color:#3F79CF;" for="email">E-mail</label>
            <input style="clear:both;" type="email" class="form-control" name="email" id="email" placeholder="Email" required>
        </div   >
        <div class="form-group">
            <label style="float:left;color:#3F79CF;" for="senha">Senha</label>
            <input style="clear:both;" type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
        </div>
        <div class="form-group">
            <label style="float:left;color:#3F79CF;" for="permissao">Permissão</label>
            <select  style="clear:both;" class="form-control" name="permissao" id="permissao" required>
                <option value="-1">Negado</option>
                <option value="0">Baixa</option>
                <option value="1" selected>Normal</option>
                <option value="3">Máxima</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default" style="float:right;">Cadastrar</button>
    </form>
</div>
<div style="clear:both;"></div>
<?php } ?>