<?php if(!isset($_SESSION["SGVXXXX"])){   header('location: '.$caminho.'login');    }else { ?>
<ul class="nav nav-tabs sans">

    <li <?php if (isset($page) && ($page == "pesquisar")) { ?> class="active" <?php } ?>>
        <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>pesquisar" <?php } else { ?> href="#pesquisar" data-toggle="tab"<?php } ?>>
            Pesquisar
        </a>
    </li>
    <li <?php if (isset($page) && ($page == "orcamentos")) { ?> class="active" <?php } ?>>
        <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>orcamentos" <?php } else { ?> href="#orcamentos" data-toggle="tab" <?php } ?>>
            Orçamentos
        </a>
    </li>
    <li <?php if (isset($page) && ($page == "pedidos")) { ?> class="active" <?php } ?>>
        <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>pedidos" <?php } else { ?> href="#pedidos" data-toggle="tab" <?php } ?>>
            Pedidos
        </a>
    </li>

    <li <?php if (isset($page) && ($page == "produtos")) { ?> class="active" <?php } ?>>
        <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>produtos" <?php } else { ?> href="#produtos" data-toggle="tab" <?php } ?>>
            Produtos
        </a>
    </li>
    <li <?php if (isset($page) && ($page == "fornecedores")) { ?> class="active" <?php } ?>>
        <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>fornecedores" <?php } else { ?> href="#fornecedores" data-toggle="tab" <?php } ?>>
            Fornecedores
        </a>
    </li>

    <li <?php if (isset($page) && ($page == "clientes")) { ?> class="active" <?php } ?>>
        <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>clientes" <?php } else { ?> href="#clientes" data-toggle="tab" <?php } ?>>
            Clientes
        </a>
    </li>

    <!-- Começa o menu -->
    <li class="dropdown <?php if (isset($page) && ($page == "menu")) { ?> active <?php } ?>">
        <a class="dropdown-toggle iniciocolor" data-toggle="dropdown" href="<?php if (!isset($page)) { echo "#"; } ?>">
            <img src="<?php echo $caminho; ?>images/menu.png" alt="..." title="..." height="22" style="padding:2px;"/> <b class="caret"></b>
        </a>
        <!-- Começa o Sub-menu -->
        <ul class="dropdown-menu" style="color:#FFF;">
        <!-- links -->

            <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>relatorios" <?php } else { ?> href="#relatorios" data-toggle="tab"<?php } ?>>
                <li class="lidropdown menuz">Relatórios</li>
            </a>
            <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>mensageiro" <?php } else { ?> href="#mensageiro" data-toggle="tab"<?php } ?>>
                <li class="lidropdown ">Mensageiro</li>
            </a>
            <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>anotacoes" <?php } else { ?> href="#anotacoes" data-toggle="tab"<?php } ?>>
                <li class="lidropdown menuz">Anotações</li>
            </a>
            <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>controle" <?php } else { ?> href="#controle" data-toggle="tab"<?php } ?>>
                <li class="lidropdown ">Controle</li>
            </a>
            <a <?php if (isset($page)) { ?> href="<?php echo $caminho; ?>configuracao" <?php } else { ?> href="#configuracao" data-toggle="tab"<?php } ?>>
                <li class="lidropdown menuz">Configuração</li>
            </a>
            <a href="logout">
                <li class="lidropdown menuLogout">Logout</li></a>
        <!-- Termina o Sub-menu -->
        </ul>
        <!-- Termina o menu -->
    </li>





</ul>
<?php } ?>