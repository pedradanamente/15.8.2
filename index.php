<?php
session_start();
include("config.php");
if(!isset($_SESSION["SGVXXXX"])){   header('location: '.$caminho.'login');    }else {
    include("conexao.php");
    include("banco.php");
    if (isset($_GET['p'])) { $page = stripcslashes($_GET['p']); }
    $_SESSION['server'] = $_SERVER['SERVER_NAME'];
    $_SESSION['endereco'] = $_SERVER ['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="ISO 8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/foxicon.png">
    <title><?php if ((isset($page)) && (file_exists("page/$page.php"))) { echo ucfirst($page)." | "; } echo $titulo; ?></title>
    <meta name="description" content="">
    <meta name="author" content="Scripting Studios Art - Desenvolvimento de Sistemas Web | Solu��o, Tecnologia e Cria��o de Sites">
    <META NAME="Keywords" CONTENT="Cria��o de Sites, Cachoeira do Sul, Desenvolvimento de Sistemas Web, Santa Maria, Porto Alegre, Solu��o, Tecnologia e Cria��o, Webdesign, Criar, Site, Inform�tica, Ag�ncia Digital, Empresa, Comprar, Valor, Empresariais, Otimiza��o, Rodrigo Machado, Andr� Machado, Guacimar Mello, Tecnologia, T�cnico, Informa��o, Informatica, Melhor, Barato, Rede de Computadores, Or�amento, Contato, Telefone, Equipe, Programa��o, Criacao, Empresa, Freelance, Desenvolver, Criar Site">
    <META NAME="Description" CONTENT="Cria��o de Sites, Cachoeira do Sul, Santa Maria, Porto Alegre, Desenvolvimento de Sistemas Web, Ferramentas, Loja Virtual, e Site Institucional para Empresas, Solu��o, Tecnologia e Cria��o, Sistema para Veterin�rias e Petshops, Site Gerenci�vel de Imobili�ria, Tenha um site para sua empresa">
    
    <META NAME="Subject" CONTENT="Solu��o, Tecnologia e Cria��o de Sites em Cachoeira do Sul, Santa Maria, Porto Alegre, Scripting Studios Art | Desenvolvimento de Sistemas Web">
    <META NAME="Classification" CONTENT="Computers/Internet">
    <META NAME="Abstract" CONTENT="Solu��o, Tecnologia e Cria��o de Sites em Cachoeira do Sul, Santa Maria, Porto Alegre - Scripting Studios Art | Desenvolvimento de Sistemas Web">
    <META NAME="Copyright" CONTENT="� Desenvolvimento de Sistemas Web | Solu��o, Tecnologia e Cria��o de Sites - Scripting Studios Art">
    <META NAME="Contact" CONTENT="contato@scripting.com.br">
    <META NAME="Publisher" CONTENT="Scripting Studios Art - Desenvolvimento de Sistemas Web | Solu��o, Tecnologia e Cria��o de Sites">
    <META NAME="Robots" CONTENT="NO-INDEX,NO-FOLLOW">
    <link rel="alternate" hreflang="pt-BR" href="http://scripting.com.br/" />

    <link href="<?php echo $framework; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="<?php echo $framework; ?>css/lightbox.css" rel="stylesheet">
    <link href="<?php echo $framework; ?>css/font-opensans.css" rel="stylesheet"/>
    <link href="<?php echo $caminho; ?>css/andremachado.css" rel="stylesheet"/>

    <?php include("css/media.php"); ?>
</head>
<body >
    <!-- Inicio do Container -->
    <div class="container">
        <!-- Inicio do Conte�do Header -->
        <header class="row"><!--  style="background-color:#38C;" -->

            <?php include("inc/menu.php"); ?>

        <!-- Fim do Conte�do Header -->
        </header>
        <div id="loader" class="loader">
            <img src="<?php echo $framework; ?>loader/loading3.gif" title="Loading" alt="Loading"/>
        </div>
        <div id="hidden" style="display: none;">
            <!-- Inicio da Linha -->
            <div class="row" >
                <!-- Inicio da Tag Main com 12 C -->
                <div role="main" class="col-md-12" >
                  <!-- Inicio do Tab Content -->
                    <div class="tab-content">

                        <?php
                        if ((isset($page)) && (file_exists("page/$page.php"))){

                            //P. Din�mica
                            include("page/$page.php");
                        }
                        else if ((isset($page)) && (!file_exists("page/$page.php"))) {

                            //P. Not found
                            include("page/404.php");

                        }
                        else if (!isset($page)) {

                            //P. Est�tica
                            include("inc/paginasdomenu.php");
                        }
                        ?>

                    <!-- Fim do Tab Content -->
                    </div>

                <!-- Fim da tag Main com 12 C -->
                </div>
            <!-- Fim da Linha -->
            </div>

            <!-- Inicio do Footer -->
            <footer class="row">
            <?php include("inc/footer.php"); ?>
            </footer>

        </div>
    <!-- Fim do Conainer -->
    </div>


    <script src="<?php echo $caminho; ?>js/andremachado.js"></script>
    <script src="<?php echo $framework; ?>js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo $framework; ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo $framework; ?>js/lightbox.js"></script>

    <script>document.getElementById('hidden').style.display = "block";  document.getElementById('loader').style.display = "none";</script>
</body>
</html>
<?php
$conexao->close();
}
?>