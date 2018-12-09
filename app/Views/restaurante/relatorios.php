<!doctype html>
<html lang="pt-BR">
  <head>
        <title>Relatórios</title>
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
    <style>.card {-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.10);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.10);box-shadow: 0 1px 2px rgba(0,0,0,.10);border: 1px solid rgba(0,0,0,.2);border-radius: 0;color: black;}.card-header{font-size: 22px;border-bottom: 2px solid #d20911;}.card-footer{border-top: 2px solid #d20911;}.col-md-3 .card .card-footer{background-color: #fff;border-top: 2px solid;font-size: 18px}.form-control, .btn {border-radius: 2rem;}</style>    
    <body style="font-family: 'Niramit', sans-serif;background-color: #f1f2f7;">

        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5 mb-5">
            <section class="row">
                <div class="col-md-3">
                    <div class="card text-success">
                        <div class="card-body p-2">                    
                            
                        </div>
                        <div class="card-footer text-center border-success">
                            Alguma Coisa
                        </div>
                    </div>
                </div>                                                
                <div class="col-md-3">
                    <div class="card text-success">
                        <div class="card-body p-2">                    
                            
                        </div>
                        <div class="card-footer text-center border-success">
                            Alguma Coisa
                        </div>
                    </div>
                </div>                                                
                <div class="col-md-3">
                    <div class="card text-success">
                        <div class="card-body p-2">                    
                            
                        </div>
                        <div class="card-footer text-center border-success">
                            Alguma Coisa
                        </div>
                    </div>
                </div>                                                
                <div class="col-md-3">
                    <div class="card text-success">
                        <div class="card-body p-2">                    
                            
                        </div>
                        <div class="card-footer text-center border-success">
                            Alguma Coisa
                        </div>
                    </div>
                </div>                                                
            </section>

            <div class="card mt-5">
                <div class="card-header">
                    <i class="fas fa-chart-line"></i>
                    Relatório Geral de Vendas
                </div>
                <div class="card-body">
                    <canvas style="" id="myChart"></canvas>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-info" type="button">
                        Exportar Relatório
                        <i class="fas fa-file-export"></i>
                    </button>                    
                </div>
            </div>

            <div class="row mt-5">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <div class="card-body">
                            <!-- <canvas style="" id="myChart"></canvas> -->
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-info" type="button">
                                Exportar Relatório
                                <i class="fas fa-file-export"></i>
                            </button>                    
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <div class="card-body"></div>
                        <div class="card-footer text-right">
                            <button class="btn btn-info" type="button">
                                Exportar Relatório
                                <i class="fas fa-file-export"></i>
                            </button>                    
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
        <script src="<?=URL?>/public/js/to-top.js"></script>
        
        <!-- Charts JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: [],
                    datasets: [{
                        label: "My First dataset",
                        backgroundColor: 'transparent',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [],
                    }]
                },

                // Configuration options go here
                options: {}
            });
        </script>
    </body>
</html>