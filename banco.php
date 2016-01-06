<?php
/* APAGAR CLIENTE */
function apagar_cliente($id) {
    global $conexao;

    $comandoSql = "DELETE FROM cliente WHERE id_cliente = ?";
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error); 
    $stmt->bind_param('i',$id); 
    $stmt->execute();
}
/* CADASTRA NOVO CLIENTE */
function novo_clienteSGV($nome,$representante,$rgie,$cpfcnpj,$email,$fone,$fone2,$cep,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$observacao,$data) {
    global $conexao;
    
    $comandoSql="INSERT INTO cliente (nome,representante,rgie,cpfcnpj,email,fone,fone2,cep,logradouro,numero,complemento,bairro,cidade,uf,observacaoSGV,data_de_cadastro)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('ssssssssssssssss',$nome,$representante,$rgie,$cpfcnpj,$email,$fone,$fone2,$cep,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$observacao,$data);
    $stmt->execute();
    return $stmt->insert_id;
    $stmt->close();
}
/* LISTAR CLIENTE */
function listar_clientesSGV() {
    global $conexao;

    $comandoSql="SELECT id_cliente,nome,representante,rgie,cpfcnpj,email,fone,fone2,cep,logradouro,numero,complemento,bairro,cidade,uf,observacaoSGV,data_de_cadastro FROM cliente ORDER BY nome ASC"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->execute();
    $stmt->store_result();

    return $stmt;
    $stmt->close();

}
/* CADASTRA NOVO FORNECEDOR */
function novo_fornecedorSGV($nome,$representante,$rgie,$cpfcnpj,$email,$email2,$fone,$fone2,$cep,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$site,$observacao,$data) {
    global $conexao;
    
    $comandoSql="INSERT INTO fornecedor (nome,representante,rgie,cpfcnpj,email,email2,fone,fone2,cep,logradouro,numero,complemento,bairro,cidade,uf,site,observacaoSGV,data_de_cadastro)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('ssssssssssssssssss',$nome,$representante,$rgie,$cpfcnpj,$email,$email2,$fone,$fone2,$cep,$logradouro,$numero,$complemento,$bairro,$cidade,$uf,$site,$observacao,$data);
    $stmt->execute();
    $stmt->close();
}
/* APAGAR FORNECEDOR */
function apagar_fornecedor($id) {
    global $conexao;

    $comandoSql = "DELETE FROM fornecedor WHERE id_fornecedor = ?";
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error); 
    $stmt->bind_param('i',$id); 
    $stmt->execute();
}
/* LISTAR FORNECEDOR */
function listar_fornecedoresSGV() {
    global $conexao;

    $comandoSql="SELECT id_fornecedor,nome,representante,rgie,cpfcnpj,email,email2,fone,fone2,cep,logradouro,numero,complemento,bairro,cidade,uf,site,observacaoSGV,data_de_cadastro FROM fornecedor ORDER BY nome ASC"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->execute();
    $stmt->store_result();

    return $stmt;
    $stmt->close();

}
/* VERIFICAR SE É UM IP SEGURO */
function ipseguro($ip) {
    global $conexao;

    $comandoSql = "SELECT ip FROM ipseguro WHERE ip = ?";
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('s',$ip); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($ip);
        while ($stmt->fetch()) {
            //captura dados
        }
        $x = $ip;
    }
    else {
        $x = False;
    }
    return $x;
}

/* VER NOME DO FORNECEDOR PELO ID */
function Ver_nome_do_fornecedor($id_fornecedor) {
    global $conexao;


    $comandoSql="SELECT nome FROM fornecedor WHERE id_fornecedor = ?"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('i',$id_fornecedor); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($nome);
        while ($stmt->fetch()) {
            //captura dados
        }
        return $nome;
    }
    else {
        return "N/A";
    }

    $stmt->close();

}
/* VER NOME DO CLIENTE PELO ID */
function Ver_nome_do_cli($id_cliente) {
    global $conexao;


    $comandoSql="SELECT nome FROM cliente WHERE id_cliente = ?"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('i',$id_cliente); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($nome);
        while ($stmt->fetch()) {
            //captura dados
        }
        return $nome;
    }
    else {
        return "N/A";
    }

    $stmt->close();

}
/* VER NOME PELO ID */
function Ver_nome($id_usuario) {
    global $conexao;


    $comandoSql="SELECT nome FROM usuario WHERE id_usuario = ?"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('i',$id_usuario); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($nome);
        while ($stmt->fetch()) {
            //captura dados
        }
        return $nome;
    }
    else {
        return "N/A";
    }

    $stmt->close();

}
/* CHECK PERMISSAO */
function Ver_permissao($id_usuario) {
    global $conexao;


    $comandoSql="SELECT id_usuario,permissao FROM usuario WHERE id_usuario = ?"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('s',$id_usuario); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id_usuario,$permissao);
        while ($stmt->fetch()) {
            //captura dados
        }
        return $permissao;
    }
    else {
        return "N/A";
    }

    $stmt->close();

}
/* LISTAR LOGS DE AUTENTICAÇÃO */
function logs_de_autenticacao($permissao,$email) {
    global $conexao;
    
    $email = $_SESSION["emailSGV"];
    if ($permissao != "/") {
        $comandoSql="SELECT nome,email,data,sistema_operacional,navegador,ip,app,retorno FROM log WHERE email = ? ORDER BY data DESC LIMIT 30"; 
    }
    else {
        $comandoSql="SELECT nome,email,data,sistema_operacional,navegador,ip,app,retorno FROM log ORDER BY data DESC LIMIT 150";
    }
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    if ($permissao != "/") {
        $stmt->bind_param('s',$email);
    }
    $stmt->execute();
    $stmt->store_result();
    return $stmt;

    $stmt->close();

}
/* FAZER LOGIN */
function SignIn($email,$senha) {
    global $conexao;
    global $caminho;

    $email = check_input($email);
    $senha = sha1(check_input($senha));

    $comandoSql="SELECT id_usuario,nome,email,senha,quantidade_login,ultimo_login,permissao FROM usuario WHERE email = ? AND senha = ?"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('ss',$email,$senha); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id_usuario,$nome,$email,$senha,$quantidade_login,$ultimo_login,$permissao);
        while ($stmt->fetch()) {
            //captura dados
        }
        if (Ver_permissao($id_usuario) == -1) {
            registra_tentativa($email,$nome,"bloqueado");

            unset($_SESSION["SGVXXXX"]);
            unset($_SESSION["emailSGV"]);
            unset($_SESSION["nomeSGV"]);
            unset($_SESSION["id_usuarioSGV"]);
            unset($_SESSION["permissaoSGV"]);
            
            header('location: '.$caminho.'login');

        }
        else {
            $quantidade_login+=1;
            $ultimo_login = date('Y-m-d');

            $comandoSql = "UPDATE usuario SET quantidade_login = ?, ultimo_login = ? WHERE email = ?";
            $stmt = $conexao->prepare($comandoSql);
            $stmt->bind_param('iss',$quantidade_login,$ultimo_login,$email);
            $stmt->execute();

            $_SESSION["SGVXXXX"]=1;
            $_SESSION["emailSGV"]=$email;
            $_SESSION["nomeSGV"]=$nome;
            $_SESSION["id_usuarioSGV"]=$id_usuario;
            $_SESSION["permissaoSGV"]=$permissao;

            registra_tentativa($email,$nome,"permitido");

            header('location: '.$caminho.'inicio');
        }
    }
    else {

        $comandoSql="SELECT email,nome FROM usuario WHERE email = ?"; 
        $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
        $stmt->bind_param('s',$email); 
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 1) {
            $stmt->bind_result($email,$nome);
            while ($stmt->fetch()) {
                //captura dados
            }
            registra_tentativa($email,$nome,"negado");

            unset($_SESSION["SGVXXXX"]);
            unset($_SESSION["emailSGV"]);
            unset($_SESSION["nomeSGV"]);
            unset($_SESSION["id_usuarioSGV"]);
            unset($_SESSION["permissaoSGV"]);
            
            header('location:' .$caminho.'login/tryagain');
        }
        else {
            registra_tentativa($email,"Desconhecido","negado");

            unset($_SESSION["SGVXXXX"]);
            unset($_SESSION["emailSGV"]);
            unset($_SESSION["nomeSGV"]);
            unset($_SESSION["id_usuarioSGV"]);
            unset($_SESSION["permissaoSGV"]);

            header('location: '.$caminho.'login');
        }

    }
}
/* VERIFICAR SISTEMA OPERACIONAL */
function SistemaOperacional() {

    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
    $symbian =  strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
    $linux =  strpos($_SERVER['HTTP_USER_AGENT'],"Linux");

    if ($iphone == true) { $sistemaoperacional = "iPhone"; }
    else if ($ipad == true) { $sistemaoperacional = "iPad"; }
    else if ($android == true) { $sistemaoperacional = "Android"; }
    else if ($palmpre == true) { $sistemaoperacional = "BlackBerry"; }
    else if ($ipod == true) { $sistemaoperacional = "iPod"; }
    else if ($berry == true) { $sistemaoperacional = "BlackBerry"; } 
    else if ($symbian == true) { $sistemaoperacional = "Symbian"; }
    else if ($linux == true) { $sistemaoperacional = "Linux"; }
    else { $sistemaoperacional = "Windows"; }

    return $sistemaoperacional;

}
/* VERIFICAR NAVEGADOR */
function Navegador() {

    $MSIE = strpos($_SERVER['HTTP_USER_AGENT'],"MSIE");
    $Firefox = strpos($_SERVER['HTTP_USER_AGENT'],"Firefox");
    $Chrome = strpos($_SERVER['HTTP_USER_AGENT'],"Chrome");
    $Chromium = strpos($_SERVER['HTTP_USER_AGENT'],"Chromium");
    $Safari = strpos($_SERVER['HTTP_USER_AGENT'],"Safari");
    $Opera = strpos($_SERVER['HTTP_USER_AGENT'],"Opera");

    if ($MSIE == true) { $navegador = "IE"; }
    else if ($Firefox == true) { $navegador = "Firefox"; }
    else if ($Chrome == true) { $navegador = "Chrome"; }
    else if ($Chromium == true) { $navegador = "Chromium"; }
    else if ($Safari == true) { $navegador = "Safari"; }
    else if ($Opera == true) { $navegador = "Opera"; } 
    else { $navegador = $_SERVER['HTTP_USER_AGENT']; }

    return $navegador;
}
/* REGISTRA TENTATIVA DE LOGIN */
function registra_tentativa($email,$nome,$retorno) {
    global $conexao;

    $email = check_input($email);
    $data = date('Y-m-d H:i:s');
    $sistema_operacional = SistemaOperacional();
    $ip=$_SERVER["REMOTE_ADDR"];
    $app="SGV";
    if ($ip == "::1") { $ip = "localhost"; }
    $navegador = Navegador();

    $comandoSql="INSERT INTO log (email,nome,data,sistema_operacional,ip,navegador,app,retorno)
        VALUES (?,?,?,?,?,?,?,?)";
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('ssssssss',$email,$nome,$data,$sistema_operacional,$ip,$navegador,$app,$retorno);
    $stmt->execute();
    $stmt->close();
}
/* RETORNA RESOLUCAO SE ÉSTA CONFIGURADO PARA FULLSCREEN */
function fullscreen() {
    global $conexao;

    $email = $_SESSION["emailSGV"];
    $comandoSql="SELECT resolucao FROM usuario WHERE email = ?"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('s',$email); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($resolucao);
        while ($stmt->fetch()) {
            //captura dados
        }
    }
    
    return $resolucao;
    $stmt->close();

}
/* TROCAR RESOLUCAO */
function trocar_resolucao() {
    global $conexao;

    $email = $_SESSION["emailSGV"];
    if (fullscreen()===1) {
        $nova_resolucao = 0;
    }
    else {
        $nova_resolucao = 1;
    }
    $sql = $conexao->prepare("UPDATE usuario SET resolucao = ? WHERE email = ?");
    $sql->bind_param('is',$nova_resolucao,$email);
    $sql->execute();
    $sql->close();
}
/* CARREGA ANOTACAO */
function mostrar_anotacao($email) {
    global $conexao;

    $comandoSql="SELECT anotacao FROM usuario WHERE email = ?"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('s',$email); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($anotacao);
        while ($stmt->fetch()) {
            $anotacao = stripcslashes($anotacao);
        }
    }
    
    return $anotacao;
    $stmt->close();

}
/* SALVA ANOTAÇÃO */
function salvar_anotacao($anotacao,$em) {
    global $conexao;

    $sql = $conexao->prepare("UPDATE usuario SET anotacao = ? WHERE email = ?");
    $sql->bind_param('ss',$anotacao,$em);
    $sql->execute();
    $sql->close();
}

/* CADASTRA NOVO USUÁRIO */
function novo_usuario($nome,$email,$senha,$permissao) {
    global $conexao;
    
    $senha = sha1($senha);
    $comandoSql="INSERT INTO usuario (email,nome,senha,permissao)
        VALUES (?,?,?,?)";
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('ssss',$email,$nome,$senha,$permissao);
    $stmt->execute();
    $stmt->close();
}
function listar_usuarios() {
    global $conexao;

    $comandoSql="SELECT id_usuario,nome,email,quantidade_login,ultimo_login,permissao FROM usuario ORDER BY nome ASC"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->execute();
    $stmt->store_result();

    return $stmt;
    $stmt->close();

}
/* APAGAR USUÁRIO */
function apagar_usuario($id_usuario) {
    global $conexao;
    $comandoSql = "DELETE FROM usuario WHERE id_usuario = ?";
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error); 
    $stmt->bind_param('i',$id_usuario); 
    $stmt->execute();
}

/* MUDAR PERMISSAO */
function mudar_permissao($id_usuario,$permissao){
    global $conexao;

    $comandoSql = "UPDATE usuario SET permissao = ? WHERE id_usuario = ?";
    $stmt = $conexao->prepare($comandoSql);
    $stmt->bind_param('si',$permissao,$id_usuario);
    $stmt->execute();

}
/* RESETAR SENHA */
function resetar_senha($id_usuario,$novasenha) {
    global $conexao;
    $novasenha = sha1($novasenha);

    $comandoSql = "UPDATE usuario SET senha = ? WHERE id_usuario = ?";
    $stmt = $conexao->prepare($comandoSql);
    $stmt->bind_param('si',$novasenha,$id_usuario);
    $stmt->execute();
}
/* ALTERAR SENHA */
function alterar_senha($id_usuario,$novasenha) {
    global $conexao;
    $novasenha = sha1($novasenha);

    $comandoSql = "UPDATE usuario SET senha = ? WHERE id_usuario = ?";
    $stmt = $conexao->prepare($comandoSql);
    $stmt->bind_param('si',$novasenha,$id_usuario);
    $stmt->execute();
}


function enviar_saudacao($nome,$email,$senha) {

    global $titulo;
    global $caminho;

    $destinatario=$email;
    $emailsender="naoresponda@scripting.com.br";
    $subject="Saudação! Você foi cadastrado no: $titulo";
    /* INICIO DA MENSAGEM DO EMAIL */
    $mensagemHTML = "
        <div style='border:1px solid gray;padding:15px;'>
            <h3 style='padding-top:0px;margin-top:0px;font-family:Verdana;'>$titulo</h3>
            <hr/>
            <p style='font-family:Verdana;color:red;font-weight:bold;'>Saudação! Você foi cadastrado</p>
            <hr/>
            <p style='font-family:Verdana;'>Nome: $nome</p>
            <p style='font-family:Verdana;'>E-mail: $email</p>
            <p style='font-family:Verdana;'>Senha: $senha</p>
            <p style='font-family:Verdana;'>Quem te cadastrou: {$_SESSION['nomeSGV']}</p>
            <hr/>
            <p style='font-family:Arial;'>Faça login pelo endereço: <a href='$caminho'>$caminho</a></p>
        </div>
    ";
    /* FIM DA MENSAGEM DO E-MAIL */

    $headers   = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=iso-8859-1";
    $headers[] = "From: $emailsender";
    $headers[] = "Reply-To: ".str_replace(" ","_",$_SESSION['nomeSGV'])."<{$_SESSION['emailSGV']}>";
    $headers[] = "Subject: $subject";

    if (mail($destinatario, $subject, $mensagemHTML, implode("\r\n", $headers), "-r". $emailsender)){
        //sent
    }
}

function enviar_senha($id_usuario,$novasenha) {
    global $conexao;

    global $titulo;
    global $caminho;

    $comandoSql="SELECT nome,email FROM usuario WHERE id_usuario = ?"; 
    $stmt = $conexao->prepare($comandoSql) or trigger_error("triggererror ".$conexao->error);
    $stmt->bind_param('i',$id_usuario); 
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($nome,$email);
        while ($stmt->fetch()) {
            //captura dados
        }
    }

    $destinatario=$email;
    $emailsender="naoresponda@scripting.com.br";
    $subject="Saudação! Sua senha foi resetada no: $titulo";
    /* INICIO DA MENSAGEM DO EMAIL */
    $mensagemHTML = "
        <div style='border:1px solid gray;padding:15px;'>
            <h3 style='padding-top:0px;margin-top:0px;font-family:Verdana;'>$titulo</h3>
            <hr/>
            <p style='font-family:Verdana;color:red;font-weight:bold;'>Saudação! Sua senha foi resetada</p>
            <hr/>
            <p style='font-family:Verdana;'>Nome: $nome</p>
            <p style='font-family:Verdana;'>E-mail: $email</p>
            <p style='font-family:Verdana;'>Nova senha: $novasenha</p>
            <p style='font-family:Verdana;'>Quem resetou sua senha: {$_SESSION['nomeSGV']}</p>
            <hr/>
            <p style='font-family:Arial;'>Faça login pelo endereço: <a href='$caminho'>$caminho</a></p>
        </div>
    ";
    /* FIM DA MENSAGEM DO E-MAIL */

    $headers   = array();
    $headers[] = "MIME-Version: 1.0";
    $headers[] = "Content-type: text/html; charset=iso-8859-1";
    $headers[] = "From: $emailsender";
    $headers[] = "Reply-To: ".str_replace(" ","_",$_SESSION['nomeSGV'])."<{$_SESSION['emailSGV']}>";
    $headers[] = "Subject: $subject";

    if (mail($destinatario, $subject, $mensagemHTML, implode("\r\n", $headers), "-r". $emailsender)){
        //sent
    }
}











/* ================================================================================================================ */
/* ================================================================================================================ */
/* ================================================================================================================ */
/* ================================================================================================================ */
/* ================================================================================================================ */
/* ================================================================================================================ */
/* V 2.0 */



/* FIR 1.0 */

function check_input($data, $problem='') {
    global $conexao;
    
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
        show_error($problem);
    return $data;
}
?>