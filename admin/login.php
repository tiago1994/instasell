<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Painel Administrativo</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body class="gray-bg">

        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>
                    <h1 class="logo-name">IS</h1>
                </div>
                <form method="POST" action="valida.php">              
                    <div class="form-group text-left">
                        <label>E-mail</label>
                        <input type="text" name="txtloginemail" class="form-control" placeholder="E-mail" required value="<?=((isset($_GET['email']))?$_GET['email']:'')?>"/>
                    </div>
                    <div class="form-group text-left">
                        <label>Senha</label>
                        <input type="password" name="txtloginsenha" class="form-control" placeholder="****" required/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Acessar</button>
                    </div>
                    <?
                    if(isset($_GET['deslogado'])){
                      if($_GET['deslogado'] === '1'){
                        echo '<div class="alert alert-success" style="margin-top: 20px;">
                                    <strong>Logoff</strong> realizado com sucesso.
                                </div>';
                      }
                    }
                    if(isset($_GET['erro'])){
                      if($_GET['erro'] === '1'){
                        echo '<div class="alert alert-danger" style="margin-top: 20px;">
                                    <strong>Erro!</strong> Email ou Senha não conferem.
                                </div>';
                      }
                    }
                    ?>
                </form>
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="js/jquery-2.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function(){
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
    </body>
</html>      