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
?><div style="display:none;" id="novo_clienteJS">
    <?php include("inc/novo_cliente.php"); ?>
</div>
<div style="display:block;" id="listar_clientesJS">
    <ol class="breadcrumb submenutitulo">
        <li class="fl"><img alt="Clientes" style="margin-top:-2px;" title="Clientes" src="<?php echo $caminho; ?>images/lista.png" width="20" height="20"/></li>
        <li class="fl" style="margin-top:0px;">LISTA COMPLETA</li>
    <li style="clear:both;"></li>
    </ol>
<!-- Button and dropdown subp -->

<?php
    $stmt = listar_clientesSGV();
    $stmt->bind_result($id_cliente,$nome,$representante,$rgie,$cpfcnpj,$email,$fone,$fone2,$cep,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$observacao,$data);
    
    if ($stmt->num_rows < 1) {
        ?><div style="margin-top:0px;font-size:14px;">Nenhum item foi encontrado</div><?php
    }
    else if ($stmt->num_rows > 0) {
    ?>
    <table class="Tabelinha-Table" style="margin-top:-20px;">
    <tr class="TableListarFPEF-TR">
        <th style="width:5%"></th>
        <th style="width:25%">Nome</th>
        <th style="width:20%">RAMO DE NEGÓCIO</th>
        <th style="width:12%">Fone</th>
        <th style="width:12%">Fone / 2</th>
        <th style="width:15%">Cidade</th>
        <th style="width:3%">UF</th>
        <th style="width:6%" colspan="2">Ação</th>
    </tr>
        <?php
        while ($stmt->fetch()) {
        ?>
        <tr
        <?php
        if (isset($TR1)) { echo 'class="Tabelinha-TR1"'; unset($TR1); }
        else if (!isset($TR1)) { echo 'class="Tabelinha-TR2"'; $TR1 = TRUE; }
        ?>
        >
            <td class="Tabelinha-TD">
                <?php if (!empty($email)) { ?><img src="<?php echo $caminho; ?>images/mailblank.png" alt="<?php echo $email; ?>" title="<?php echo $email; ?>" height="25"/> <?php } ?>
            </td>
            <td class="Tabelinha-TD"><div><?php echo $nome; ?></div></td>
            <td class="Tabelinha-TD"><div><?php echo ""; ?></div></td>
            <td class="Tabelinha-TD"><div><?php echo $fone; ?></div></td>
            <td class="Tabelinha-TD"><div><?php echo $fone2; ?></div></td>
            <td class="Tabelinha-TD"><div><?php echo $cidade; ?></div></td>
            <td class="Tabelinha-TD"><div><?php echo $uf; ?></div></td>

            <td class="Tabelinha-TD">
                <a href="<?php echo $caminho; ?>acao/apagar_cliente/<?php echo $id_cliente; ?>">
                    <img src="<?php echo $caminho; ?>images/apagar.png" alt="Apagar" title="Apagar" height="25"/>
                </a>
            </td>
            <td class="Tabelinha-TD">
                <a href="<?php echo $caminho; ?>acao/ver_cliente/<?php echo $id_cliente; ?>">
                    <img src="<?php echo $caminho; ?>images/ver.png" alt="Ver" title="Ver" height="25"/>
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
    <p style="padding-top:15px;text-align:right;padding:15px;">Quantidade retornada: <?php echo $stmt->num_rows; ?> </p>
    <?php
        }
        $stmt->close();
    ?>
</div>


<?php } ?>