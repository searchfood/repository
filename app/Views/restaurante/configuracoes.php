<!doctype html>
<html lang="en">
  <head>
        <title>Configurações</title>
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
    <style>.card {-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.10);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.10);box-shadow: 0 1px 2px rgba(0,0,0,.10);border: 1px solid rgba(0,0,0,.2);border-radius: 0;color: black;}.card-header{font-size: 20px;}#nav-tabContent .card .card-header{background-color: #fff;border-bottom: 2px solid #d20911;font-size: 18px}.list-group-item.active{background-color: #f1f2f7;color: black;border: 1px solid #d20911;border-left: 5px solid #d20911;border-radius: 0;}.form-control, .btn {border-radius: 2rem;}</style>    
    <body style="font-family: 'Niramit', sans-serif;background-color: #f1f2f7;" data-spy="scroll" data-target="#list-example">

        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5" id="topo">
            <div class="row">
                <div class="col-3 pr-0">
                    <div class="card" id="menu">
                        <div class="card-header py-2">
                            <i class="fas fa-bars"></i>
                            Menu
                        </div>
                        <div class="card-body p-0">
                            <div id="list-example" class="list-group">
                                <a class="list-group-item list-group-item-action scroll" href="#navbar">
                                    <img width="19" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPlSURBVGhD7ZhbiE1xFMZHSMatJLlELqNhysycmTPTmNQ8KAmFmFxTCuUBiQeKPBDKRJPIpTyIRyEP4oGR8qAITx4k44FyS8ilhvFb+6z/v3X2+R9iDLuZ/dXX3uf7vrX3Wvt29jklPRoNDQ3Ds9nspKQxk8mM0RZ/jZqamlO1tbWdSSX93WlsbByi7YZBcGq8MIlkmLXachiEZsaLEsrt2nIYTNoQKEoc6XObthxGRUXFYIIv44UJ43du/DptuTgIlTPxAQpOJI301cqTa5a22kvA1JOZfqeclQRyD1dMo7ZaHPX19UMZItH3CMN0MExGWw6D629GqDhpZJit2nIYhHrG9wiBhbGCRJIzckhbDoPAuVBh0kif7bTbJ9d1DJWVlYMIfXRh7pdV8sbpSHH8W3+19fncbH3y860vRHtv/Bbrsb9p6N+dDzdan/xs4wlnauv5ILjChVj/xKv8QLUisKM5ZiOdVVVVY9WKgLbA+mxjuloe6O+M36KyB9oT4+9X2QOt3fjHVM4HxiUTuqqyB/pO479R2YNB1zhfyFEsV8uDuucmc1plj1gP11T2QDtm/Fcs+6uVg/yQQvzqQnCLWh4UXjD+TZU98LcaXzheLQ8y9oheVNkDba/xX6vsgT7X+ZqZp1YOCOttoLq6ukItDzLPzAYKTiv6PucLOSPj1PKg7rHJ3FbZg7O61PidfEFPVCtCWVnZAPQPzmd7Z9TKAeGGMeWJkAceBCOdr5kNanmgxX9ZDlPLg8xD57P+SGUPOYCmXg7GYrU8qPNXBuvy8CiNDI7CGD58cyY8GRkG8RsdFjwx0M7HMgWDoD0w/kuVPZqamvqhf3EZGg3d8GudL5Sz6IzN1uAoLIsMA3R/oytDR9ufVWFzc3NftTzI3HI+6x0q5wHvvsvAKyp71NXVjTK+8HxkyOmzBjvYFBkG6JdtJn7tCtCf2gyP5wlqebBtf7MrQw8Eey8WXOb0K99ZdhuH1YqK18EjcAd8wbU6RS1pcAm0X1Syg+NqR0Bbbn3N5D0QQhl4VO0I1KwMZJarLegj+0aTH1oHWd/NMnePWCBGL40EPsPr8J58DhGvDe5i/Sy095jNyDa6mhHtrGRgm2q/fGnsMW+/6SD/mL18EG4y+Z0ir+m/TWpbWYa2uZ9lsMZRbnCWBbXwj8/Izwt/AprxPw8s0fNf+AIg92f9EEgHKYZ0EEAuHSQdpBjSQQC5dJCePQg77Y5XlP9yRv4600Fy7CWDZLPZTKCoW9iVQagt+KcnD4T6E7obL+wOdmGQt6G/owpAsFR2wjL4FPpbZB+jdZdFQW5ErGaR/EGndooEo6TkB4pLnXfKZUqYAAAAAElFTkSuQmCC">
                                    Dados do Restaurante
                                </a>
                                <a class="list-group-item list-group-item-action scroll" href="#access_data">
                                    <i class="fas fa-key"></i>
                                    Dados de Acesso
                                </a>
                                <a class="list-group-item list-group-item-action scroll" href="#operating_hours">
                                    <i class="fas fa-stopwatch"></i>
                                    Horário de Funcionamento
                                </a>
                                <a class="list-group-item list-group-item-action scroll" href="#payment_methods">
                                    <i class="far fa-credit-card"></i>
                                    Formas de Pagamento
                                </a>
                                <a class="list-group-item list-group-item-action scroll" href="#contributors">
                                    <img width="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKJSURBVGhD7Zm9SxxRFMVXFEIaLSRCgnYLsVpnPzPdIgSSENttFPwbTJVGglpoAvnoRP8ASwvFbIp0adJYC7FVsBDEIlFEo56b3JXh7nuzszNv3ii+Az9mfe/ec99RdnYHc073RbVarb9cLh8FoTXevjvCwQfAlWCAt++O6NAihAtiVKVSycdBVnH9HpGtSqXyPAitiRotPMvn8WYE0zfgEsjfcBjH3H4jWhM1nbhEmBluTybP88Zg+FcMiIKJIFcIclEsFgtsEV8w+qAaEAEjQQic4T1bxBdM1lTmETgDqwJaU9WGQmfg48RXgiDGcEGCckEM4oIElSQIevfAVwI/78v9qGQWhAO8RnvPf5d/6sHaBPa7DpRVkH08dwxze5vwnWsEngeKPi2ZBEH9FLdqhbpp2RdGFkF+5/P5B9yqle/7D+F7ouhXkkWQHW7rKKoVvVqsB0HtL27rKNTvyn4dWQS5qFarg9yqFdVQrcpDhfUgBOrfcatWqJuXfWFkEgScoecFt7cJD0kvqUb0hJJVEBp8Dj7hM+Mp29BfYRRrn2lP1neCzsA28UUmKvOooP+UUO1F5VYEMYH1IKilO9EPsIjXk2AclBl6TWtLVIPr7btroeYQ19kot96WPM97RD3cq/RtYSUI9jfoUFzetQqFwhA8mirvFjaCbDYajV4uja16vd5HXsL7hlSDYP0PeMxliYXPlyfwU36RTDtIk0uMCb7f5Bwi7SArXGJM5KmZlWqQZS4xJvLUzEr1zf4TvDUMebbNSjuINVyQoFwQgxgJAqMv0tg2CPKRjxNfMHkGs27/f2gSml3j4yQTwiwIc5vM8THMCI+tr2C6DrYtsU7P9zzeyckpkXK5a6Dy5QoRachwAAAAAElFTkSuQmCC">
                                    Funcionários
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div id="nav-tabContent">
                        <div id="restaurant" class="card mb-5">
                            <div class="card-header py-2">
                                <img width="25" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPlSURBVGhD7ZhbiE1xFMZHSMatJLlELqNhysycmTPTmNQ8KAmFmFxTCuUBiQeKPBDKRJPIpTyIRyEP4oGR8qAITx4k44FyS8ilhvFb+6z/v3X2+R9iDLuZ/dXX3uf7vrX3Wvt29jklPRoNDQ3Ds9nspKQxk8mM0RZ/jZqamlO1tbWdSSX93WlsbByi7YZBcGq8MIlkmLXachiEZsaLEsrt2nIYTNoQKEoc6XObthxGRUXFYIIv44UJ43du/DptuTgIlTPxAQpOJI301cqTa5a22kvA1JOZfqeclQRyD1dMo7ZaHPX19UMZItH3CMN0MExGWw6D629GqDhpZJit2nIYhHrG9wiBhbGCRJIzckhbDoPAuVBh0kif7bTbJ9d1DJWVlYMIfXRh7pdV8sbpSHH8W3+19fncbH3y860vRHtv/Bbrsb9p6N+dDzdan/xs4wlnauv5ILjChVj/xKv8QLUisKM5ZiOdVVVVY9WKgLbA+mxjuloe6O+M36KyB9oT4+9X2QOt3fjHVM4HxiUTuqqyB/pO479R2YNB1zhfyFEsV8uDuucmc1plj1gP11T2QDtm/Fcs+6uVg/yQQvzqQnCLWh4UXjD+TZU98LcaXzheLQ8y9oheVNkDba/xX6vsgT7X+ZqZp1YOCOttoLq6ukItDzLPzAYKTiv6PucLOSPj1PKg7rHJ3FbZg7O61PidfEFPVCtCWVnZAPQPzmd7Z9TKAeGGMeWJkAceBCOdr5kNanmgxX9ZDlPLg8xD57P+SGUPOYCmXg7GYrU8qPNXBuvy8CiNDI7CGD58cyY8GRkG8RsdFjwx0M7HMgWDoD0w/kuVPZqamvqhf3EZGg3d8GudL5Sz6IzN1uAoLIsMA3R/oytDR9ufVWFzc3NftTzI3HI+6x0q5wHvvsvAKyp71NXVjTK+8HxkyOmzBjvYFBkG6JdtJn7tCtCf2gyP5wlqebBtf7MrQw8Eey8WXOb0K99ZdhuH1YqK18EjcAd8wbU6RS1pcAm0X1Syg+NqR0Bbbn3N5D0QQhl4VO0I1KwMZJarLegj+0aTH1oHWd/NMnePWCBGL40EPsPr8J58DhGvDe5i/Sy095jNyDa6mhHtrGRgm2q/fGnsMW+/6SD/mL18EG4y+Z0ir+m/TWpbWYa2uZ9lsMZRbnCWBbXwj8/Izwt/AprxPw8s0fNf+AIg92f9EEgHKYZ0EEAuHSQdpBjSQQC5dJCePQg77Y5XlP9yRv4600Fy7CWDZLPZTKCoW9iVQagt+KcnD4T6E7obL+wOdmGQt6G/owpAsFR2wjL4FPpbZB+jdZdFQW5ErGaR/EGndooEo6TkB4pLnXfKZUqYAAAAAElFTkSuQmCC">
                                Dados do Restaurante
                            </div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" action="" method="post" id="form_restaurant">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label>Foto/Logo: <small>(Opicional)</small></label>
                                                <img class="img-fluid" id='img-upload'/>
                                                <div class="input-group">
                                                    <span class="btn btn-default btn-file btn-block">
                                                        <button class="btn btn-primary">
                                                            <i style="font-size: 20px" class="fas fa-cloud-upload-alt"></i>
                                                            Escolha um Arquivo
                                                            <input type="file" id="imgInp" name="profile_picture">
                                                        </button>
                                                        <small class="form-text text-muted text-center">Recomendação Minima (100 X 100)</small>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="restaurant_name">Nome do Restaurante:</label>
                                                <input type="text" name="restaurant_name" id="restaurant_name" class="form-control" placeholder="Nome do Restaurante" aria-describedby="error_restaurant_name">
                                                <small id="error_restaurant_name" class="text-muted"></small>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="access_data"></div>
                        <div style="top: 13px" class="card mb-5">
                            <div class="card-header py-2">
                                <i class="fas fa-key"></i>
                                Dados de Acesso
                            </div>
                            <div class="card-body">
                            
                            </div>
                        </div>
                        <div id="operating_hours"></div>
                        <div style="top: 13px" class="card mb-5">
                            <div class="card-header py-2">
                                <i class="fas fa-stopwatch"></i>
                                Horário de Funcionamento
                            </div>
                            <div class="card-body">
                            
                            </div>
                        </div>
                        <div id="payment_methods"></div>
                        <div style="top: 13px" class="card mb-5">
                            <div class="card-header py-2">
                                <i class="far fa-credit-card"></i>
                                Formas de Pagamento
                            </div>
                            <div class="card-body">
                            
                            </div>
                        </div>
                        <div id="contributors"></div>
                        <div style="top: 13px" class="card mb-5">
                            <div class="card-header py-2">
                                <img width="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAKJSURBVGhD7Zm9SxxRFMVXFEIaLSRCgnYLsVpnPzPdIgSSENttFPwbTJVGglpoAvnoRP8ASwvFbIp0adJYC7FVsBDEIlFEo56b3JXh7nuzszNv3ii+Az9mfe/ec99RdnYHc073RbVarb9cLh8FoTXevjvCwQfAlWCAt++O6NAihAtiVKVSycdBVnH9HpGtSqXyPAitiRotPMvn8WYE0zfgEsjfcBjH3H4jWhM1nbhEmBluTybP88Zg+FcMiIKJIFcIclEsFgtsEV8w+qAaEAEjQQic4T1bxBdM1lTmETgDqwJaU9WGQmfg48RXgiDGcEGCckEM4oIElSQIevfAVwI/78v9qGQWhAO8RnvPf5d/6sHaBPa7DpRVkH08dwxze5vwnWsEngeKPi2ZBEH9FLdqhbpp2RdGFkF+5/P5B9yqle/7D+F7ouhXkkWQHW7rKKoVvVqsB0HtL27rKNTvyn4dWQS5qFarg9yqFdVQrcpDhfUgBOrfcatWqJuXfWFkEgScoecFt7cJD0kvqUb0hJJVEBp8Dj7hM+Mp29BfYRRrn2lP1neCzsA28UUmKvOooP+UUO1F5VYEMYH1IKilO9EPsIjXk2AclBl6TWtLVIPr7btroeYQ19kot96WPM97RD3cq/RtYSUI9jfoUFzetQqFwhA8mirvFjaCbDYajV4uja16vd5HXsL7hlSDYP0PeMxliYXPlyfwU36RTDtIk0uMCb7f5Bwi7SArXGJM5KmZlWqQZS4xJvLUzEr1zf4TvDUMebbNSjuINVyQoFwQgxgJAqMv0tg2CPKRjxNfMHkGs27/f2gSml3j4yQTwiwIc5vM8THMCI+tr2C6DrYtsU7P9zzeyckpkXK5a6Dy5QoRachwAAAAAElFTkSuQmCC">
                                Funcionários
                            </div>
                            <div class="card-body">
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
        <!-- JS Files -->        
        <script src="<?=URL?>/public/js/min/scroll.min.js"></script>

        <!-- JS Code -->
        <script type="text/javascript">
            $("body").scrollspy({target:"#list-example"}),$(function(){var i=$("#menu");$(window).scroll(function(){$(this).scrollTop()>i.scrollTop()+180?i.css({position:"fixed",top:"2%",width:"20%"}):i.css({position:"",top:"",width:""})}),$(window).ready(function(){$(this).scrollTop()>i.scrollTop()+180?i.css({position:"fixed",top:"2%",width:"20%"}):i.css({position:"",top:"",width:""})})}),$(document).ready(function(){function i(i){if(i.files&&i.files[0]){var t=new FileReader;t.onload=function(i){$("#img-upload").attr("src",i.target.result)},t.readAsDataURL(i.files[0])}}$(document).on("change",".btn-file :file",function(){var i=$(this),t=i.val().replace(/\\/g,"/").replace(/.*\//,"");i.trigger("fileselect",[t])}),$(".btn-file :file").on("fileselect",function(i,t){var o=$(this).parents(".input-group").find(":text"),e=t;o.length&&o.val(e)}),$("#imgInp").change(function(){i(this)})});
        </script>
    </body>
</html>