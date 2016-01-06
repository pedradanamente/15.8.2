<?php   if(!isset($_SESSION["SGVXXXX"])){   header('location: '.$caminho.'login');   }else { ?>
<?php   if ((isset($_GET['msg']))&&($_GET['msg']=="ok")) { include("inc/msgok.php"); } ?>
<ol class="breadcrumb submenutitulo">
    <li class="fl"><img alt="Novo fornecedor" style="margin-top:-2px;" title="Logs" src="<?php echo $caminho; ?>images/novo_fornecedor.png" width="20" height="20"/></li>
    <li class="fl" style="margin-top:0px;">Novo fornecedor</li>
<li style="clear:both;"></li>
</ol>
<!-- Button and dropdown subp -->

<form action="<?php echo $caminho; ?>pp/novo_fornecedor.php" method="post" role="form">
    <div class="col-md-4" >
            <div class="form-group">
                <label class="formLabel" for="nome"><img style="margin-top:-2px;" src="<?php echo $caminho; ?>images/nome.png" width="18"/> Quem você quer cadastrar?</label>
                <input type="text" class="form-control formInput" name="nome" id="nome" placeholder="Nome, Razão Social ou Nome Fantasia" required>
            </div>
            <div class="form-group">
                <label class="formLabel" for="representante">Representante</label>
                <input type="text" class="form-control formInput" name="representante" id="representante" >
            </div   >
            <div class="form-group">
                <label class="formLabel" for="fone">Fone</label>
                <input type="text" class="form-control formInput" name="fone" id="fone" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="fone2">Fone / 2</label>
                <input type="text" class="form-control formInput" name="fone2" id="fone2" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="email">E-mail</label>
                <input type="email" class="form-control formInput" name="email" id="email" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="email2">E-mail / 2</label>
                <input type="email" class="form-control formInput" name="email2" id="email2" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="cpfcnpj">CPF / CNPJ</label>
                <input type="text" class="form-control formInput" name="cpfcnpj" id="cpfcnpj" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="rgie">RG / IE</label>
                <input type="text" class="form-control formInput" name="rgie" id="rgie" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="site">WWW</label>
                <input type="text" class="form-control formInput" name="site" id="site" >
            </div>

    </div>
    <div class="col-md-4" >
            <div class="form-group">
                <label class="formLabel" for="cep">CEP</label>
                <input type="text" class="form-control formInput" name="cep" id="cep" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="logradouro">Logradouro</label>
                <input type="text" class="form-control formInput" name="logradouro" id="logradouro" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="numero">Nº</label>
                <input type="text" class="form-control formInput" style="width:75px;" name="numero" id="numero" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="complemento">Complemento</label>
                <input type="text" class="form-control formInput" name="complemento" id="complemento" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="bairro">Bairro</label>
                <input type="text" class="form-control formInput" name="bairro" id="bairro" >
            </div>
            <div class="form-group">
                <label class="formLabel" for="cidade">Cidade</label>
                <input type="text" class="form-control formInput" name="cidade" id="cidade" required>
            </div>
            <div class="form-group">
                <label class="formLabel" for="uf">UF</label>
                <input type="text" class="form-control formInput" style="width:75px;" name="uf" id="uf" required>
            </div>
    </div>
    <div class="col-md-4" >

    </div>
    <div style="clear:both;height:15px;"></div>
    <div class="col-md-8" >
        <div class="form-group">
            <label class="formLabelTextArea" for="observacao">Informação adicional</label>
            <textarea class="form-control formInputTextArea" rows="5" name="observacao" id="observacao"></textarea>
        </div>
        <button type="submit" class="btn btn-default formButtonCadastrar2">Cadastrar</button>
        <div style="clear:both;height:15px;"></div>
    </div>
    <div class="col-md-4" >
    
    </div>
</form>
        <div style="clear:both;height:15px;"> </div>

<?php } ?>