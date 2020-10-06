<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uni Help Desk</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

    <link rel="shortcut icon" href="./assets/img/support.png" type="image/x-icon">

    <style>
        .card-login{
            padding: 30px 0 0 0;
            width: 350px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
        <!-- Navbar content -->
        <a href="" class="navbar-brand">
            <img src="./assets/img/support.png" alt="" height="32" width="32" class="d-inline-block align-top"> Uni Help Desk
        </a>
    </nav>
    
    
    <div class="container">
        <div class="row">
            <div class="card-login">
            <?php if(isset($_GET['login']) && $_GET['login'] == 'logoff'){ ?>
                                <p class="text-success text-center" >
                                    Deslogado com sucesso
                            </p>
                            <?php }?>
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="POST" action="valida_login.php">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="e-mail">
                            </div>
                            <div class="form-group">
                                <input type="password" name="senha" id="senha" class="form-control" placeholder="senha">
                            </div>

                            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){ ?>
                                <p class="text-danger">
                                    Usuário ou senha inválido(s)!
                            </p>
                            <?php }?>
                            <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>
                                <p class="text-danger">
                                    Faça o login antes de entrar
                            </p>
                            <?php }?>
                            

                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>