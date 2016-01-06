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
    <li class="fl"><img alt="Controle" style="margin-top:-2px;" title="Logs" src="<?php echo $caminho; ?>images/usuarios.png" width="20" height="20"/></li>
    <li class="fl" style="margin-top:0px;">Usuários</li>
<li style="clear:both;"></li>
</ol>
<!-- Button and dropdown subp -->

<?php
    $stmt = listar_usuarios();
    $stmt->bind_result($id_usuario,$nome,$email,$quantidade_login,$ultimo_login,$permissao);
    
    if ($stmt->num_rows < 1) {
        ?><div style="margin-top:0px;font-size:14px;">Nenhum item foi encontrado</div><?php
    }
    else if ($stmt->num_rows > 0) {
    ?>
    <table class="Tabelinha-Table">
    <tr class="TableListarFPEF-TR">
        <th style="width:2%"></th>
        <th style="width:25%">Nome</th>
        <th style="width:27%">E-mail</th>
        <th style="width:10%">Quantidade</th>
        <th style="width:15%">Último login</th>
        <th style="width:15%">Permissão</th>
        <th style="width:6%" colspan="3">Ação</th>
    </tr>
        <?php
        while ($stmt->fetch()) {
            $ultimo_login = implode( '/', array_reverse( explode( '-', $ultimo_login ) ) );
        ?>
        <tr
        <?php
        if (isset($TR1)) { echo 'class="Tabelinha-TR1"'; unset($TR1);}
        else if (!isset($TR1)) { echo 'class="Tabelinha-TR2"'; $TR1 = TRUE; }
        ?>
        >
            <td class="Tabelinha-TD" style="text-align:right;">
                <img src="<?php
                    if ($id_usuario == "Mercado Livre") { echo "../images/pedidos.png"; }
                    else { echo "../images/produtos.png"; }
                    ?>" alt="<?php echo $id_usuario; ?>" title="<?php if (!empty($id_usuario)) { echo "$id_usuario: $id_usuario"; } else { echo $id_usuario; } ?>" height="25"/>
            </td>
            <td class="Tabelinha-TD"><div><?php echo $nome; ?></div></td>
            <td class="Tabelinha-TD"><div><?php echo $email; ?></div></td>
            <td class="Tabelinha-TD"><div><?php echo $quantidade_login; ?></div></td>
            <td class="Tabelinha-TD"><div><?php echo $ultimo_login; ?></div></td>
            <td class="Tabelinha-TD"><div><?php echo $permissao; ?></div></td>

            <td class="Tabelinha-TD" style="text-align:right;">
                <a href="acao/apagar_usuario/<?php echo $id_usuario; ?>">
                    <img src="../images/xred.png" alt="Apagar" title="Apagar" height="25"/>
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