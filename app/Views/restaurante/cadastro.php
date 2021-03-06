<!doctype html>
<html lang="pt-BR">
    <head>
        <title>Cadastrar Restaurante</title>
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

        <!-- CSS Template and Others -->
        <link rel="stylesheet" href="<?=URL?>/public/css/template.css">
        <link rel="stylesheet" href="<?=URL?>/public/css/cadastro.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <style>
        .container-fluid{background:url('<?=URL?>/public/img/bg/bg-cadastro.jpg')no-repeat center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}.card {background: #fff;padding: 45px 0px;margin-top: -100px;z-index: 22;position: relative;border-radius: 20%;border: none;}
    </style>
    <body style="font-family: 'Niramit', sans-serif;">

        <!-- Navbar -->
        <?php include 'app/Views/templates/navbar.php' ?>
        <div class="container-fluid px-0">
        <div style="background: rgba(0,0,0,0.6)" class="container-fluid pt-3">
            <h1 class="text-center pt-5 text-white">                
                Faça parte do Search Food e
                <p>aumente <span id="writer"></span></p>                
            </h1>
        </div>
        </div>

        <div class="container">
            <div class="card mx-5">
                <div class="card-body">
                
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include 'app/Views/templates/footer.php' ?>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </body>
</html>