<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Acessar Painel</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?=URL?>/public/img/icon/SF.ico" type="image/x-icon">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Copse" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Niramit" rel="stylesheet">

        <!-- Fontawesome 5 -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- CSS Template and Others-->
        <link rel="stylesheet" href="<?=URL?>/public/css/template.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <style>
        body{background:url('<?=URL?>/public/img/bg/bg-login.jpg')no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
        #right{float: right;}.card{border-radius: 0;height: 87.8vh;}#form-login{padding-top: 25px;}
    </style>
    <body style="font-family: 'Niramit', sans-serif;font-size: 17px">

        <?php include 'app/Views/templates/navbar.php' ?>

        <div id="right" class="col-4 p-0">
            <div class="card bg-light">
                <div class="card-body">
                    <h3 class="text-center pt-4 text-danger">
                        <i class="fas fa-lock"></i>
                        Esqueci minha Senha
                    </h3>
                    <div class="text-center mt-4 mx-4">
                        <span>Informe seu email e aguarde o link para refazer sua senha</span>
                    </div>
                    <form action="" method="post" id="form-login" class="mx-4">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control form-template" placeholder="Seu Email" aria-describedby="error_email">
                            <small style="float: right" id="error_email" class="text-danger"></small>
                        </div>
                        <input type="hidden" name="action" value="esqueci-senha">
                        <div class="form-group">
                            <button type="button" name="btn-login" id="btn-login" class="btn btn-primary btn-lg btn-block btn-template">
                                Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>