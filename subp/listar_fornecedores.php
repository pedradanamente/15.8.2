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
<div style="display:none;" id="novo_fornecedorJS">
    <?php include("inc/novo_fornecedor.php"); ?>
</div>
<div style="display:block;" id="listar_fornecedoresJS">
    <ol class="breadcrumb submenutitulo">
        <li class="fl"><img alt="Fornecedores" style="margin-top:-2px;" title="Fornecedores" src="<?php echo $caminho; ?>images/lista.png" width="20" height="20"/></li>
        <li class="fl" style="margin-top:0px;">LISTA COMPLETA</li>
    <li style="clear:both;"></li>
    </ol>
    <!-- Button and dropdown subp -->

    <?php
        $stmt = listar_fornecedoresSGV();
        $stmt->bind_result($id_fornecedor,$nome,$representante,$rgie,$cpfcnpj,$email,$email2,$fone,$fone2,$cep,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$www,$observacao,$data);
        
        if ($stmt->num_rows < 1) {
            ?><div style="margin-top:0px;font-size:14px;">Nenhum item foi encontrado</div><?php
        }
        else if ($stmt->num_rows > 0) {
        ?>
        <table class="Tabelinha-Table" style="margin-top:-20px;">
        <tr class="TableListarFPEF-TR">
            <th style="width:3%"></th>
            <th style="width:3%"></th>
            <th style="width:16%">Nome</th>
            <th style="width:11%">Fone</th>
            <th style="width:11%">Fone / 2</th>
            <th style="width:13%">Bairro</th>
            <th style="width:13%">Cidade</th>
            <th style="width:3%">UF</th>
            <th style="width:3%">Web</th>
            <th style="width:3%">R</th>
            <th style="width:6%" colspan="2">Ação</th>
        </tr>
            <?php
            while ($stmt->fetch()) {
                $www = str_replace("http://", "", $www);
            ?>
            <tr
            <?php
            if (isset($TR1)) { echo 'class="Tabelinha-TR1"'; unset($TR1);}
            else if (!isset($TR1)) { echo 'class="Tabelinha-TR2"'; $TR1 = TRUE; }
            ?>
            >
                <td class="Tabelinha-TD">
                    <?php if (!empty($email)) { ?><img src="<?php echo $caminho; ?>images/mailblank.png" alt="<?php echo $email; ?>" title="<?php echo $email; ?>" height="25"/> <?php } ?>
                </td>
                <td class="Tabelinha-TD">
                    <?php if (!empty($email2)) { ?><img src="<?php echo $caminho; ?>images/mailblank.png" alt="<?php echo $email2; ?>" title="<?php echo $email2; ?>" height="25"/> <?php } ?>
                </td>
                <td class="Tabelinha-TD"><div><?php echo $nome; ?></div></td>
                <td class="Tabelinha-TD"><div><?php echo $fone; ?></div></td>
                <td class="Tabelinha-TD"><div><?php echo $fone2; ?></div></td>
                <td class="Tabelinha-TD"><div><?php echo $bairro; ?></div></td>
                <td class="Tabelinha-TD"><div><?php echo $cidade; ?></div></td>
                <td class="Tabelinha-TD"><div><?php echo $uf; ?></div></td>

                <td class="Tabelinha-TD">
                    <a href="<?php if(strpos("http://",$www) === true) { echo $www; } else { echo "http://".$www; } ?>" target="_blank"><div><?php if (!empty($www)) { ?><img src="<?php echo $caminho; ?>images/www.png" alt="<?php echo $www; ?>" title="<?php echo $www; ?>" height="25"/> <?php } ?></div></a>
                </td>
                <td class="Tabelinha-TD">
                    <?php if (!empty($representante)) { ?><img src="<?php echo $caminho; ?>images/representante.png" alt="<?php echo $representante; ?>" title="<?php echo $representante; ?>" height="25"/> <?php } ?>
                </td>
                <td class="Tabelinha-TD">
                    <a href="<?php echo $caminho; ?>acao/apagar_fornecedor/<?php echo $id_fornecedor; ?>">
                        <img src="<?php echo $caminho; ?>images/apagar.png" alt="Apagar" title="Apagar" height="25"/>
                    </a>
                </td>
                <td class="Tabelinha-TD">
                    <a href="<?php echo $caminho; ?>acao/ver_fornecedor/<?php echo $id_fornecedor; ?>">
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