<!DOCTYPE html>
<html>
  <head>
    <meta charset="ISO 8859-1">
    <title>Login | SGV</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo $framework; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $framework; ?>css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $framework; ?>LTE2.2.0/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $framework; ?>LTE2.2.0/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-box-body">
        <p class="login-box-msg">
                    <div class="panel-title text-center"><img src="<?php echo $caminho; ?>images/logomark.png" width="56"/></div></p>
        <form action="<?php echo $caminho; ?>pp/senha.php" method="post">
          <div class="form-group has-feedback">
            <input type="email"  name="email" class="form-control" placeholder="E-mail" autofocus/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="senha" class="form-control" placeholder="Senha" value="" autocomplete="off"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" name="signin" class="btn btn-primary btn-block btn-flat">Iniciar</button>
            </div><!-- /.col -->
          </div>
        </form>


        <a href="#">Eu esqueci minha senha</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <?php if (isset($_GET['error'])) { include("inc/tryagain.php"); } ?>

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo $framework; ?>LTE2.2.0/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo $framework; ?>LTE2.2.0/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo $framework; ?>LTE2.2.0/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
