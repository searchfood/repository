<!doctype html>
<html lang="en">
  <head>
        <title>Cardápio</title>
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

        <!-- CSS Files -->
        <link rel="stylesheet" href="<?=URL?>/public/css/dashboard.css">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <style>.card {-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.10);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.10);box-shadow: 0 1px 2px rgba(0,0,0,.10);border: 1px solid rgba(0,0,0,.2);border-radius: 0;color: black;}.card-header{font-size: 22px;border-bottom: 2px solid #d20911;}#category_menu{border-bottom: none}.card-footer{background-color: #fff;}.form-control, .btn {border-radius: 2rem;}.list-group .active {background-color: #fff;color: black;border: 1px solid #FF0000;border-left: 5px solid #FF0000;border-radius: 0}</style>
    <body style="font-family: 'Niramit', sans-serif;background-color: #f1f2f7;">

        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header" id="category_menu">
                            <i class="fas fa-tags"></i>
                            Categorias
                            <button type="button" data-toggle="modal" data-target="#addCategory" class="btn btn-sm btn-success" style="float: right">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group" id="myList" role="tablist">
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">
                                 
                                </a>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="tab-content">
                        <div class="tab-pane active" id="home" role="tabpanel">
                            <div class="card">
                                <div class="card-header">
                                    <i class="fas fa-tag"></i>
                                </div>
                                <div class="card-body">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Adicionar nova Categoria -->
        <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: 2px solid #d20911">
                        <h5 class="modal-title">Adicionar Nova Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">                            
                            <div class="form-group">
                                <label for="category_name">Nome da Categoria:</label>
                                <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Nome da Categoria" aria-describedby="error_category_name">
                                <small id="error_category_name" class="text-danger" style="float: right"></small>
                            </div>                            
                        </div>
                        <input type="hidden" name="category_action" value="insert">
                        <input type="hidden" name="restaurant_id" value="2">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>$(function () {$('[data-tooltip="tooltip"]').tooltip()})</script>
    </body>
</html>