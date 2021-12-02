<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="<?php echo URL;?>assets/css/style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="<?php echo URL;?>assets/js/login.js"></script>
    <title>Document</title>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Cadastrar</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="login-form" action="" method="post" role="form" style="display: block;">
                                <div class="form-group">
                                    <input type="hidden" name="id" tabindex="1" class="form-control" placeholder="" value="">

                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" id="username" tabindex="1" class="form-control" placeholder="E-mail" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="senha" id="password" tabindex="2" class="form-control" placeholder="Senha" required>
                                </div>
                                <div class="form-group text-center">
                                    <label for=""> Faça seu Login!</label>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="UserLogin" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Entrar">

                                        </div>
                                    </div>
                                </div>

                            </form>
                            <form id="register-form" action="" method="post" role="form" style="display: none;" >

                                <div class="form-group">
                                    <input type="text" name="nome" tabindex="1" class="form-control" placeholder="Digite seu nome" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="cpf" id="nome" class="form-control" placeholder="Digite seu CPF" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Digite seu E-mail" value="" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="senha" tabindex="2" class="form-control" placeholder="Digite uma senha" required>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="CadUserCadastro" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cadastrar">

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<!------ Include the above in your HEAD tag ---------->

