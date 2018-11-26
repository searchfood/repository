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
    <style>.card {-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.10);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.10);box-shadow: 0 1px 2px rgba(0,0,0,.10);border: 1px solid rgba(0,0,0,.2);border-radius: 0;color: black;}.card-header{font-size: 20px;}#nav-tabContent .card .card-header{border-bottom: 2px solid #d20911;font-size: 22px}.list-group-item.active{background-color: #f1f2f7;color: black;border: 1px solid #d20911;border-left: 5px solid #d20911;border-radius: 0;}.form-control, .btn {border-radius: 2rem;}</style>    
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
                                <a class="list-group-item list-group-item-action scroll" href="#owner_data">
                                    <i class="fas fa-user-tie"></i>
                                    Dados do Proprietário
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
                                    <img width="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAL/SURBVGhD7Zo9iBNBFMdz5xcW4ic2Nn6kCiZhc0kMUQiHNiKWsbRSRDgtvEKwuE4sBCshXmeh4AdaiGJhZSEiCOKBJ4iFIiLeITZ34IF3+pv1JeQm426STWait3/4scnMe2/eP7uB2U0SsUKUy+VG4dnIyMgCx1mOk6VSaYtM/xui8SPwk+Z/NcPYq1QqtVbCBl5DNPxeGp/gLKzP5/O7ef9SxsYlbrCVzWZ3yhn4DNtghuZrnucdlfHHEupO1Wp1VTqd3hwEje5XDdP8FKY28XoaLsIBNQ7PTXnNlMvlDbJkb1UoFLbSwC2am5dmQlFGJN0XY3UjbUH+Jzgh6b0Rhe/oC4UR1YiwxCV5UEpEU6VSWU3BH9oC7fCm+XLhC3/YEBMKH0hNWokmim3Ui9sEIzellWiiWGykF8RGdFEsNkITar/1FRaaxzvBtZE5OKX2WVJmmPdjNPWxKaYtXBsZk/RlUtt45tQezJRjxKmRTCazXdJbxPxVPT4Ip0bU5lLSW8T8ZT0+CKdGWHyPpLeI+et6fBCujYxKeouYmzLl/A2nRtQmUdJbxPxtPT4I12fktKQvkzLI/Ds9PginRuB7MplcJyUaoqmzhthAXBtRDVyQEr7UbS9jb02xQTg3Ak+lhC/ed3OHOBBn5K6U8MUd4l7Gl/S4MFwaWYQHXEo7pERDNHUSvmjxgbgwMseiVzzPS0qqUcStIe4YvNDyjdg2Ml0sFndJSrsaIu+8VqcFq0Y4C3kJ71g0+tBUs441Iyw0zxf5ULeQXzPVrWP1jPST2Iguiq0oI69Z8EmXfDPUa8C8tS/7bNAdYZioUdVrNmPTiHrkcwZUQ91wH4y1FdaM9BurRlhMbTfUbyidcg/UAzxjXYVNIzOEDf+J7lzkq8vLVNfHppFFFhvnqF/7oZCnNo+PeG2q62PTSF+Jjeii2P9hRP3mbVrAIjekleiiWEdP0HsJZ2RC2oguCh4HdS9uXKyPfOj5P4r4ZPbBJYpP9hvWucbxnHoWJsuvFCUSvwEX+K25n66sTQAAAABJRU5ErkJggg==">
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
                                <img width="25" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAL7SURBVGhD7dlLqE1RHMfxKyTvkuQReSSPMjBQyExJKIQ8UwplgMSAIgNCEUnkUQZiKGQgBh4pA0UYGUgYUF4JeZTX93e7/9v//O9qH517L6tz968+A+u/1j5nnX3X3mtvDfWefhiZocH465zC74zdRW8UZixSg3OzGoWZhtTA3GxFYSYjNTA3W1CYXniN1OBc/MIkVM0Y7MOJDB3GdHSsjMJ26KzkZhemomr6IPc18gMTUZgpSA3OzWYUpm7uI/OQGpibgyjMOaQG5uY5OiGZnvgM67wCfucZ7/or4euL4Otz4OvyEVY/0NRmxkE3O6uvh6/PgNVEyyCZZbBOX9AdPjPhDzQEPnPh6xMQ8wFW10RinsLqe9UQojNh9WNqSOUSrNNVNYTo3mL1d2oIWQWri3YIMS9h9dNqCPHf4ZoaQvTlrf4GXVERPUh9h3XahJgLsPotNYTokmh1GYYY/4teVEPIblj9rRpCZsHqMhsVWQvfYTxiXsDqqdO6B/4YQxHzBFa/o4aQxfDHGAGfbvgEq59BRW7AivrVYgbA6rIOMfHJsi9iHsHqj9UQoh/QH2MBYvxfhi4ePdAYPQf/hBVPIiYu9NQV4zx8n9REHsLq2grFdME3WJ/UgtfTodVFZ7ExG+ELSxDjF7qkvqQ/q9IZMbdhde2ZUnkA63NFDSEDYXXRD9gYnT5f2ICYy/B94t+u8gy+z3DE+MUuqQuCX4upP3PdU/wxDqE5a3AE2/AKo2FZCH+jkuPwWQpfl3hBSPU5Cp/liH00zqK7uT5bD1n7sRPNa8THNo1fcR33m/6dchM7cBZ+jXk6Rmv7qE019dFnqq3qprFudr/lRP6xciJ6TtE2vRZ6hZM6pm52qf6eFnhqbM0TqTqwIP7xwGux4Uuk5u9TTqQg5URIOZFyIgUpJ0LKidT9RNpji/JfJtIeyomg40xE/6WVGtgeWjOR1Jueiuil8D2kBre1WifyHqnXUS2i1yv6kNQVqC0NQrX0hx8zH3pBVybzNDT8AYAY+K28HEPJAAAAAElFTkSuQmCC">
                                Dados do Restaurante
                            </div>
                            <div class="card-body p-0">
                                <form enctype="multipart/form-data" action="" method="post" id="form_restaurant">
                                    <div class="row p-3">
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
                                                        <!-- <small class="form-text text-muted text-center">Recomendação Minima (100 X 100)</small> -->
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="restaurant_name">Nome do Restaurante:</label>
                                                <input type="text" name="restaurant_name" id="restaurant_name" class="form-control" placeholder="Nome do Restaurante" aria-describedby="error_restaurant_name">
                                                <small id="error_restaurant_name" class="text-danger"></small>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="cnpj">CNPJ:</label>
                                                        <input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ" aria-describedby="error_cnpj">
                                                        <small id="error_cnpj" class="text-danger"></small>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="restaurant_phone">Telefone do Restaurante:</label>
                                                        <input type="text" name="restaurant_phone" id="restaurant_phone" class="form-control" placeholder="Telefone do Restaurante" aria-describedby="error_restaurant_phone">
                                                        <small id="error_restaurant_phone" class="text-danger"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="form-group">
                                                        <label for="address">Endereço:</label>
                                                        <input type="text" name="address" id="address" class="form-control" placeholder="Endereço" aria-describedby="error_address">
                                                        <small id="error_address" class="text-danger"></small>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="neighborhood">Bairro:</label>
                                                        <input type="text" name="neighborhood" id="neighborhood" class="form-control" placeholder="Bairro" aria-describedby="error_neighborhood">
                                                        <small id="error_neighborhood" class="text-danger"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-3">
                                                    <div class="form-group">
                                                        <label for="cep">CEP:</label>
                                                        <input type="text" name="cep" id="cep" class="form-control" placeholder="CEP" aria-describedby="error_cep">
                                                        <small id="error_cep" class="text-danger"></small>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="state">Estado:</label>
                                                        <select class="form-control" name="state" id="state">
                                                            <option value=""></option>
                                                        </select>
                                                        <small id="error_state" class="text-danger"></small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="city">Cidade:</label>
                                                        <select class="form-control" name="city" id="city">
                                                            <option value=""></option>
                                                        </select>
                                                        <small id="error_city" class="text-danger"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-success" type="button">                                            
                                            Salvar Dados do Restaurante
                                            <i class="fas fa-paper-plane"></i>
                                        </button>                                    
                                    </div>                                    
                                </form>
                            </div>
                        </div>
                        <div id="owner_data"></div>
                        <div style="top: 13px" class="card mb-5">
                            <div class="card-header py-2">
                                <i class="fas fa-user-tie"></i>
                                Dados do Proprietário
                                <span style="float: right">
                                    <a style="text-decoretion: none;cursor: pointer" tabindex="0" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" title="Informativo" data-content="Os dados do Proprietário são apenas para contato. Nenhuma das suas informações ficará visivel para os clientes.">
                                        <i class="fas fa-info-circle text-info"></i>
                                    </a>                                    
                                </span>                    
                            </div>
                            <div class="card-body p-0">
                                <form action="" method="post" id="form-owner">
                                    <div class="row px-3 pt-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="owner_name">Nome do Proprietário:</label>
                                                <input type="text" name="owner_name" id="owner_name" class="form-control" placeholder="Nome do Proprietário" aria-describedby="error_owner_name">
                                                <small id="error_owner_name" class="text-danger"></small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="owner_email">Email do Proprietário:</label>
                                                <input type="email" name="owner_email" id="owner_email" class="form-control" placeholder="Email do Proprietário" aria-describedby="error_owner_email">
                                                <small id="error_owner_email" class="text-danger"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row px-3 pb-3">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="cpf">CPF:</label>
                                                <input type="text" name="cpf" id="cpf" class="form-control" placeholder="CPF" aria-describedby="error_cpf">
                                                <small id="error_cpf" class="text-danger"></small>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="owner_phone">Telefone do Proprietário:</label>
                                                <input type="text" name="owner_phone" id="owner_phone" class="form-control" placeholder="Telefone do Proprietário" aria-describedby="error_owner_phone">
                                                <small id="error_owner_phone" class="text-danger"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-success" type="button">                                            
                                            Salvar Dados do Proprietário
                                            <i class="fas fa-paper-plane"></i>
                                        </button> 
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
                                <img width="20" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAJZSURBVGhD7do9aBRBGMbx8xuLoEaxSWPU0jJgoY1oI2KppZUigWihRSCFnaQQUglqZ2FADVqIYmFlISIEREGFkCIiQRIRmwgG/Po/kIFleGdvb29uhiP7wK+57MzuA7dhdvZaTdrnGF5hFd9wB4Poq5zCb/zzvMVW9EU2YB668GvYjv2YXfvsKvoi+6ALXsQeLOMWTkOfP0f2bMKuNo5AF/weO/ER13EU+vw1rHFFA+hJduM+fkIXU4WKFOOKVPUF5xE1D2GdrEy3ReQvjiNKNuMXrBOV+YDi1+UkrOPa0f0VJTtgnSCVaURJUySSpoifpgi03lqCFo7W36vIWmQFF6F1lrIRY/gM6/gyWYvooq1oGa81mDUmJGuRvQjlJqwxIVmLaHEZyg1YY0KyFjmAUO7CGhOStYgec0PRYtIaE5K1iBaJoTyANSYka5FRWFHBOVhjQrIW+YFt8HMZ1vFlshaRCRSjx95PsI4tk73ISxRT5wlRsheZQTGHoEdX69gy2Yr8wRMMwc8FfIU1LiR5ES0Up3AQZdmCs3gDax5f0iLauxpGJ9GO5Dis+YqSFhlB3TyFNaeTrIg27U50Qds91rxOtps9tqaIn3VV5B1e1PQd1pxOsiJ6rVb2RNguZ2DN6yQroi2fS9AF1fEY1rxOc4/4qVJEyw29Q+nUI2gDz5rTSVZE7wi1AVc3+npZ8zrJimi1qze1/ne/Ci0en8Ga12nuET9NkUiiFdE7b+sEqdxDtHS6gx6TfgYSLeeg/07WiXppAdF/UXQYk9DPlXrtNq5Ae2HrKa3Wf2AXjLMiK+1oAAAAAElFTkSuQmCC">
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
            $(function () {
                $('[data-toggle="popover"]').popover()
            })
        </script>
    </body>
</html>