<!doctype html>
<html lang="pt-BR">
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
    <style>.card {-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.10);-moz-box-shadow: 0 1px 2px rgba(0,0,0,.10);box-shadow: 0 1px 2px rgba(0,0,0,.10);border: 1px solid rgba(0,0,0,.2);border-radius: 0;color: black;}.card-header{font-size: 22px;border-bottom: 2px solid #d20911;}#category_menu{border-bottom: none}.card-footer{border-top: 2px solid #d20911;}.form-control, .btn {border-radius: 2rem;}.list-group .active {background-color: #fff;color: black;border: 1px solid #FF0000;border-left: 5px solid #FF0000;border-radius: 0}            
        #nav-tab .nav-link {
            color: #000;
            border-bottom: 2px solid #d20911;
            background-color: #e6dcdc;
        }
        #nav-tab .active {
            color: #d20911;
            border: 2px solid #d20911;
            border-bottom: transparent;
            background-color: #fff;
        }
    </style>
    <body style="font-family: 'Niramit', sans-serif;background-color: #ecedf1;">

        <?php include 'app/Views/templates/dashboard.php'?>

        <div class="container mt-5 mb-5">           
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header" id="category_menu">
                            <i class="fas fa-tags"></i>
                            Categorias
                            <button type="button" data-toggle="modal" data-target="#addCategory" class="btn btn-sm btn-success" style="float: right" data-tooltip="tooltip" data-placement="top" title="Adicionar Nova Categoria">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <?php if ($category->Select($_SESSION['restaurant'])) { ?>
                        <div class="card-body p-0">
                            <?php $categories = $category->Select($_SESSION['restaurant']); ?>
                            <div class="list-group" id="list-tab" role="tablist">
                                <?php for ($i=0; $i < mysqli_num_rows($categories); $i++) { ?>
                                    <?php $row_category = mysqli_fetch_assoc($categories); ?>
                                    <?php if($i == 0) {?>
                                        <a class="list-group-item list-group-item-action active" id="list-category<?= $row_category['id'] ?>-list" data-toggle="list" href="#list-category<?= $row_category['id'] ?>" role="tab" aria-controls="category<?= $row_category['id'] ?>">
                                            <i style="-writing-mode:tb-rl;-webkit-transform:rotate(270deg); //tente 90 no lugar de 270-moz-transform:rotate(270deg);-o-transform: rotate(270deg);" class="exchange fas"></i>
                                            <?= $row_category['category_name'] ?>
                                            <?php $num_itens = $menu->Select($row_category['id']) ?>
                                            <?php if ($num_itens == 1) { ?>
                                                <span style="float: right" data-tooltip="tooltip" data-placement="right" title="<?=$num_itens?> Item" class="badge badge-danger badge-pill">
                                                    <?=$num_itens?> 
                                                </span> 
                                            <?php } else if ($num_itens > 1) { ?>
                                                <span style="float: right" data-tooltip="tooltip" data-placement="right" title="<?=$num_itens?> Itens" class="badge badge-danger badge-pill">
                                                    <?=$num_itens?> 
                                                </span> 
                                            <?php } else { ?>
                                                <span style="float: right" data-tooltip="tooltip" data-placement="right" title="0 Item" class="badge badge-danger badge-pill">
                                                    0 
                                                </span> 
                                            <?php } ?>
                                        </a>
                                    <?php } else { ?>
                                        <a class="list-group-item list-group-item-action"id="list-category<?= $row_category['id'] ?>-list" data-toggle="list" href="#list-category<?= $row_category['id'] ?>" role="tab" aria-controls="category<?= $row_category['id'] ?>">
                                            <i style="-writing-mode:tb-rl;-webkit-transform:rotate(270deg); //tente 90 no lugar de 270-moz-transform:rotate(270deg);-o-transform: rotate(270deg);" class="exchange fas"></i>
                                            <?= $row_category['category_name'] ?>
                                            <?php $num_itens = $menu->Select($row_category['id']) ?>
                                            <?php if ($num_itens == 1) { ?>
                                                <span style="float: right" data-tooltip="tooltip" data-placement="right" title="<?=$num_itens?> Item" class="badge badge-danger badge-pill">
                                                    <?=$num_itens?> 
                                                </span> 
                                            <?php } else if ($num_itens > 1) { ?>
                                                <span style="float: right" data-tooltip="tooltip" data-placement="right" title="<?=$num_itens?> Itens" class="badge badge-danger badge-pill">
                                                    <?=$num_itens?> 
                                                </span> 
                                            <?php } else { ?>
                                                <span style="float: right" data-tooltip="tooltip" data-placement="right" title="0 Item" class="badge badge-danger badge-pill">
                                                    0 
                                                </span> 
                                            <?php } ?>
                                        </a>
                                    <?php } ?>                                        
                                <?php } ?>
                            </div>
                        </div>
                        <?php } else { ?>
                            <div class="card-body" style="border-top: 2px solid #d20911">
                                <p class="text-center text-muted mb-0">
                                    "Não há nenhuma Categoria cadastrada.
                                    Click do icone <i class="fa fa-plus-circle text-success"></i>
                                    para adicionar uma nova Categoria."
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                        <?php if ($category->Select($_SESSION['restaurant'])) { ?>                      
                            <?php $categories = $category->Select($_SESSION['restaurant']); ?>    
                            <?php for ($i = 0; $i < mysqli_num_rows($categories); $i++) {  ?>                                 
                                <?php $row_category = $categories->fetch_assoc(); ?> 
                                <?php if ($i == 0) { ?>                                                                                                                            
                                    <div class="tab-pane fade show active" id="list-category<?= $row_category['id'] ?>" role="tabpanel" aria-labelledby="list-category<?= $row_category['id'] ?>-list">
                                        <div class="card mb-5">
                                            <div class="card-header">
                                                <i class="fas fa-tag"></i>
                                                <?= $row_category['category_name'] ?>
                                                <button data-id="<?=$row_category['id']?>" data-name="<?=$row_category['category_name']?>" type="button" data-toggle="modal" data-target="#addMenu" class="btn btn-success btn-sm" style="float: right" data-tooltip="tooltip" data-placement="top" title="Adicionar Novo Item">
                                                    <i class="fas fa-plus"></i>
                                                    Adicionar Novo Item
                                                </button>
                                            </div>
                                            <?php $num_itens = $menu->Select($row_category['id']) ?>
                                            <?php if ($num_itens > 0) { ?>
                                                <div class="card-body">
                                                    
                                                </div>
                                            <?php } else { ?>
                                                <div class="card-body">
                                                    <p class="text-center text-muted mb-0 px-5">
                                                        "Não há nenhum Item na categoria 
                                                        <strong><?= $row_category['category_name'] ?></strong>.
                                                        Click no botão do canto superior direito
                                                        para adicionar um novo item nessa Categoria."                                                        
                                                    </p>
                                                </div>
                                            <?php } ?>
                                            <div class="card-footer text-right">
                                                <button data-category-name="<?=$row_category['category_name']?>" data-category-id="<?=$row_category['id']?>" data-toggle="modal" data-target="#updateCategory" class="btn btn-info btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Editar Categoria">
                                                    Editar Categoria
                                                    <i class="fas fa-pen ml-1"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Excluir Categoria">
                                                    Excluir Categoria
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>                                  
                                    <div class="tab-pane fade" id="list-category<?= $row_category['id'] ?>" role="tabpanel" aria-labelledby="list-category<?= $row_category['id'] ?>-list">
                                        <div class="card mb-5">
                                            <div class="card-header">
                                                <i class="fas fa-tag"></i>
                                                <?= $row_category['category_name'] ?>
                                                <button data-id="<?=$row_category['id']?>" data-name="<?=$row_category['category_name']?>" type="button" data-toggle="modal" data-target="#addMenu" class="btn btn-success btn-sm" style="float: right" data-tooltip="tooltip" data-placement="top" title="Adicionar Novo Item">
                                                    <i class="fas fa-plus"></i>
                                                    Adicionar Novo Item
                                                </button>
                                            </div>
                                            <?php $num_itens = $menu->Select($row_category['id']) ?>
                                            <?php if ($num_itens > 0) { ?>
                                                <div class="card-body">
                                                
                                                </div>
                                            <?php } else { ?>
                                                <div class="card-body">
                                                    <p class="text-center text-muted mb-0 px-5">
                                                        "Não há nenhum Item na categoria 
                                                        <strong><?= $row_category['category_name'] ?></strong>.
                                                        Click no botão do canto superior direito
                                                        para adicionar um novo item nessa Categoria."                                                        
                                                    </p>
                                                </div>
                                            <?php } ?>
                                            <div class="card-footer text-right">
                                                <button data-category-name="<?=$row_category['category_name']?>" data-category-id="<?=$row_category['id']?>" data-toggle="modal" data-target="#updateCategory" class="btn btn-info btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Editar Categoria">
                                                    Editar Categoria
                                                    <i class="fas fa-pen ml-1"></i>
                                                </button>
                                                <button class="btn btn-danger btn-sm" data-tooltip="tooltip" data-placement="bottom" title="Excluir Categoria">
                                                    Excluir Categoria
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>                 
                                <?php } ?>                  
                            <?php } ?>                  
                        <?php } ?>                        
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
                        <input type="hidden" name="restaurant_id" value="<?=$_SESSION['restaurant']?>">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button id="btn-insert-category" type="button" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modal Editar nova Categoria -->
        <div class="modal fade" id="updateCategory" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: 2px solid #d20911">
                        <h5 class="modal-title">Editar Categoria</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">                            
                            <div class="form-group">
                                <label for="category_name_update">Nome da Categoria:</label>
                                <input type="text" name="category_name_update" id="category_name_update" class="form-control" placeholder="Nome da Categoria" aria-describedby="error_category_name">
                                <small id="error_category_name_update" class="text-danger" style="float: right"></small>
                            </div>                            
                        </div>
                        <input type="hidden" name="category_action" value="update">
                        <input type="hidden" name="category_id" id="category_id" value="">
                        <input type="hidden" name="restaurant_id" value="<?=$_SESSION['restaurant']?>">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button id="btn-update-category" type="button" class="btn btn-success">Salvar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Modal Adicionar novo Item -->
        <div class="modal fade" id="addMenu" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <form enctype="multipart/form-data" action="" method="post">
                        <div class="modal-body p-0">                            
                            <nav>
                                <div class="nav nav-tabs text-center" id="nav-tab" role="tablist">
                                    <a class="col h5 nav-item nav-link active" id="nav-item-tab" data-toggle="tab" href="#nav-item" role="tab" aria-controls="nav-item" aria-selected="true">
                                        Informações do Item
                                    </a>
                                    <a class="col h5 nav-item nav-link" id="nav-variacao-tab" data-toggle="tab" href="#nav-variacao" role="tab" aria-controls="nav-profile" aria-selected="false">
                                        Variações
                                    </a>                                    
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-item" role="tabpanel" aria-labelledby="nav-item-tab">                                    
                                    <div class="row px-4 pt-2">
                                        <div class="col-5">
                                            <div class="form-group">
                                                <label>Foto/Logo: <small>(Opicional)</small></label>                                                    
                                                <img class="img-fluid" id='img-upload'/>                                                                                                      
                                                <div class="input-group">
                                                    <span class="btn btn-default btn-file btn-block">
                                                        <button class="btn btn-primary">
                                                            <i style="font-size: 20px" class="fas fa-cloud-upload-alt"></i>
                                                            Escolha um Arquivo
                                                            <input type="file" id="imgInp" name="product_photo">
                                                        </button>
                                                        <!-- <small class="form-text text-muted text-center">Recomendação Minima (100 X 100)</small> -->
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="product_name">Nome do Item:</label>
                                                <input type="text" name="product_name" id="product_name" class="form-control" placeholder="Nome do Item" aria-describedby="error_procuct_name">
                                                <small id="error_procuct_name" class="text-danger"></small>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="product_price">Preço:</label>
                                                        <input type="text" name="product_price" id="product_price" class="form-control text-right" placeholder="0,00" aria-describedby="error_procuct_price">
                                                        <small id="error_procuct_price" class="text-danger"></small>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="promotional_price">Preço Promocional:</label>
                                                        <input type="text" name="promotional_price" id="promotional_price" class="form-control text-right" placeholder="0,00" aria-describedby="error_promotional_price">
                                                        <small id="error_promotional_price" class="text-danger"></small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-7">
                                                    <div class="form-group">
                                                        <label for="category_name">Categoria:</label>
                                                        <input value="" readonly type="text" name="category_name" id="category_name" class="form-control">
                                                    </div>
                                                    <input type="hidden" name="category_id" id="category_id">
                                                </div>
                                                <div class="col">                                                                                                        
                                                    <div class="form-group">
                                                        <label for="product_status">Status:</label>
                                                        <select data-html="true" class="custom-select form-control" name="product_status" id="product_status">                                                                                                                                
                                                            <option class="text-success" value="1">                                                                                                                                
                                                                Disponível
                                                            </option>
                                                            <option class="text-danger" value="2">
                                                                Em Falta
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="product_description">Descrição:</label>
                                                <textarea class="form-control" name="product_description" id="product_description" rows="6" placeholder=""></textarea>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="tab-pane fade" id="nav-variacao" role="tabpanel" aria-labelledby="nav-variacao-tab">
                                    <div class="form-group mb-3 mt-1 p-4">
                                        <label for="variation_name">Nome da Variação:</label>
                                        <div class="row pl-3">                                        
                                            <input type="text" name="variation_name" id="variation_name" class="form-control col-8" placeholder="Nome da Variação">
                                            <button type="button" class="btn btn-primary col-3 ml-5">Adicionar</button>
                                        </div>
                                        <small class="text-danger mb-0 pb-0" id="error_variation_name"></small>
                                    </div> 
                                </div>                                
                            </div>          
                        </div>
                        <input type="hidden" name="menu_action" value="insert">
                        <input type="hidden" name="restaurant_id" value="<?=$_SESSION['restaurant']?>">
                        <div class="modal-footer" style="border-top: 2px solid #d20911">
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
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
        <script>$(function () {$('[data-tooltip="tooltip"]').tooltip()})</script>
        <script src="<?=URL?>/public/js/to-top.js"></script>
        <script src="<?=URL?>/public/js/valida-categoria.js"></script>

        <script>
            $(document).ready(function(){function i(i){if(i.files&&i.files[0]){var t=new FileReader;t.onload=function(i){$("#img-upload").attr("src",i.target.result)},t.readAsDataURL(i.files[0])}}$(document).on("change",".btn-file :file",function(){var i=$(this),t=i.val().replace(/\\/g,"/").replace(/.*\//,"");i.trigger("fileselect",[t])}),$(".btn-file :file").on("fileselect",function(i,t){var o=$(this).parents(".input-group").find(":text"),e=t;o.length&&o.val(e)}),$("#imgInp").change(function(){i(this)})});
            $('#updateCategory').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) 
                var category_name = button.data('category-name') 
                var category_id = button.data('category-id') 
                
                var modal = $(this)
                modal.find('#category_name_update').val(category_name)
                modal.find('#category_id').val(category_id)
            })

            $('#addMenu').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) 
                var category_name = button.data('name') 
                var category_id = button.data('id') 
                
                var modal = $(this)
                modal.find('#category_name').val(category_name)
                modal.find('#category_id').val(category_id)
            })

            // $(document).ready(function () {
            //     $('#list-tab').soetable( update: function () {
            //         var current_order = $(this).sortable('serealize');
            //         alert(current_order);
            //     })
            // })
        </script>
    </body>
</html>