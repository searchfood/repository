<!doctype html>
<html lang="en">
  <head>
        <title>Pedidos</title>
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
    <style>.card {-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.10);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.10);box-shadow: 0 1px 2px rgba(0,0,0,.10);border: 1px solid rgba(0,0,0,.2);border-radius: 0;color: black;}.card-header{font-size: 22px;border-bottom: 2px solid #d20911;}.card-footer{background-color: #fff;}</style>
    <body style="font-family: 'Niramit', sans-serif;background-color: #f1f2f7;">

        <?php include 'app/Views/templates/dashboard.php'?>
        
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-5 pr-0">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-shopping-basket"></i>
                            Pedidos em Aberto   
                            <h1 style="float: right;font-size: 20px;margin-bottom: 0" class="badge badge-success badge-pill">0</h1>                         
                        </div>
                        <div class="card-body p-0">
                            <!-- <div class="list-group" id="myList" role="tablist">
                                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Home</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Profile</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Messages</a>
                                <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Settings</a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-file-alt"></i>
                            Detalhes do Pedido
                        </div>
                        <div class="card-body">
                            <!-- <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">1</div>
                                <div class="tab-pane" id="profile" role="tabpanel">2</div>
                                <div class="tab-pane" id="messages" role="tabpanel">3</div>
                                <div class="tab-pane" id="settings" role="tabpanel">4</div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>