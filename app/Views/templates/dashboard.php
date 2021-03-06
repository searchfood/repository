<?php
    use app\Controllers\RestaurantsController;
    use app\Controllers\CategoriesController;
    use app\Controllers\MenusController;
    use app\Controllers\AlertsController;

    $restaurant = new RestaurantsController();
    $category = new CategoriesController();
    $menu = new MenusController();
    $alert = new AlertsController();

    if (!isset($_SESSION['restaurant']) && !isset($_SESSION['contributors'])){
        $restaurant->redirect(URL.'/restaurante/login');       
    } else {
        if (isset($route->Link) && $route->Link == 'logout'){
            $restaurant->close_session();
        }
    }
?>
<!--Estrutura do Template-->
<nav id="navbar" class="navbar navbar-dark bg-dark py-0">
    <span class="navbar-brand mb-0 h1 mr-0 py-2">
        <img height="55" src="<?=URL?>/public/img/logo/logo.png" alt="">
        <span id="logo-text">Search Food</span>
    </span>
    <ul style="padding-top: 10px" class="nav justify-content-center">
        <h4 class="text-white">           
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAaCAYAAACpSkzOAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHzSURBVEhL7ZU9SBxRFIU3whIViYhVinS2CwEbCUIqKxGrJGAX2EY0NhLQKlWwCqQREVFQsEhvpzZJIaRI0EJUkhCVJIVoLIzmz12/8+Y4uxOi+DMsCB443HvOve/dYee92UxFUSwWbxQKhUViamC/Q9jnEREwbrmeKth32iNKwJyHOylyCz729iXwAFnYkCLrvXUJmFVM/0RMGwMeEQGjPvLTBQ+ffEcY9134Bj8qWm9bf7H+bi3qVP0q08r/lukDuOIRETBGvFGTdbd1l3Wb9ZC0gNxFf7Y8Pkx/YI31mNaA5tBAksXUCfkQDEA+rg5izvqR9fPQAMg34J6l9Ev3tFh3WL84bmi3MRwMQP4O/sbOWj9RD4hfLt66DOJN67x1j3UN3Ieb2FUyptzQqQbSanL9BEvSAvkz9YDyQasyiLet71lPhAZAPiMPtErk4RwcdPGhKkQdiLryBcRJ60a4Zy88ILHLeoWgO6kr8wpq7zvqiY83xjo8VC5YJ76B6Lfwq6W0fp7X8KcteWtwGSaPN7XK3CO8eBBFvZ/ZU7jgVvXqXv1bf+/y6YPAru3/gsU592mjN7Zj4IVTLFwPSuDqDaL4g/DgJFLvJwZcatB5cJFBtZiFqHx2nGFQ+GQlgNkLR8/Jp14eAy/nmv7j7tquFDKZIzbppCuIhbJDAAAAAElFTkSuQmCC">
            <?= $restaurant->Select('restaurant_name') ?>            
        </h4>
    </ul>
    <ul class="nav justify-content-end">

        <?php include 'app/Views/templates/notification.php' ?>

        <div class="ml-2" style="height: 70px;border: 1px solid #5a626b"></div>
        <div style="padding-top: 17px" class="nav-item" data-html="true" data-tooltip="tooltip" data-placement="bottom" title="Status de Delivery">
            <span class="nav-link">                
                <?php $status = $restaurant->Select('delivery_status') ?>
                <?php switch ($status) {
                    case '1': ?>
                        <i class="fas fa-circle" style="color: #FF0000"></i>            
                        Desativado
                    <?php break;
                    case '2': ?>
                        <i class="fas fa-circle" style="color: yellowgreen"></i>            
                        Ativo
                    <?php break;
                    case '3': ?>
                        <i class="fas fa-ban" style="color: #FF0000"></i>            
                        Bloqueado
                    <?php break;
                    
                    default:                        
                        break;
                } ?>
            </span> 
        </div>
        <div style="height: 70px;border: 1px solid #5a626b"></div>
        <div style="padding-top: 17px" class="dropdown nav-item">
            <span style="cursor: pointer" class="nav-link text-white">
                <i class="fas fa-user-alt"></i>
                <?php $owner_name = $restaurant->Select('owner_name') ?>
                <?php $vetor = explode(' ', $owner_name) ?>
                Admin: <?= $vetor['0'] ?>
                <i class="fas fa-caret-down"></i>
            </span> 
            <div class="dropdown-content dropdown-menu-right text-center p-1">
                <?php $status = $restaurant->Select('delivery_status') ?>
                <?php switch ($status) {
                    case '1': ?>
                        <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#">
                            <i class="fas fa-circle text-success"></i>
                            Ativar Delivery
                        </a>
                    <?php break;
                    case '2': ?>
                        <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#">
                            <i class="fas fa-circle text-danger"></i>
                            Desativar Delivery
                        </a>
                    <?php break;                    
                    case '3': ?>
                        <a class="dropdown-item disabled" href="logout" data-toggle="modal" data-target="#">
                            <i class="fas fa-circle text-secondary"></i>
                            Ativar Delivery
                        </a>
                    <?php break;                    
                    default:                        
                        break;
                } ?>
                <hr class="m-0">
                <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#logoutModal">
                    Sair <i class="fas fa-sign-out-alt"></i> 
                </a>
            </div>
        </div>                
    </ul>
</nav>
<nav class="navbar navbar-danger p-0">
    <span></span>
    <ul class="nav justify-content-center">
        <li class="nav-item py-1">
            <a class="nav-link" href="<?=URL?>/restaurante/dashboard">
                <i class="fas fa-desktop"></i>
                Dasboard
            </a>
        </li>      
        <li class="nav-item" style="border: 1px solid #dc4c52"></li>      
        <li class="nav-item py-1">
            <a class="nav-link" href="<?=URL?>/restaurante/balcao">
                <i class="fas fa-chalkboard"></i>
                Balcão
            </a>
        </li>
        <li class="nav-item py-1">
            <a class="nav-link" href="<?=URL?>/restaurante/pedidos">
                <i class="fas fa-concierge-bell"></i>
                Pedidos
            </a>
        </li>
        <li class="nav-item py-1">
            <a class="nav-link" href="<?=URL?>/restaurante/cardapio">
                <i class="far fa-list-alt"></i>
                Cardápio
            </a>
        </li>
        <li class="nav-item" style="border: 1px solid #dc4c52"></li>
        <li class="nav-item py-1">
            <a class="nav-link" href="<?=URL?>/restaurante/configuracoes">
                <i class="fas fa-wrench"></i>
                Configurações
            </a>
        </li>
        <li class="nav-item py-1">
            <a class="nav-link" href="<?=URL?>/restaurante/relatorios">
                <i class="fas fa-chart-bar"></i>
                Relatórios
            </a>
        </li>        
        <li class="nav-item py-1">
            <a class="nav-link" href="<?=URL?>/restaurante/extensoes">
                <i class="fas fa-puzzle-piece"></i>
                Extensões
            </a>
        </li>
        <li class="nav-item" style="border: 1px solid #dc4c52"></li>
        <li class="nav-item py-1">
            <a class="nav-link" href="<?=URL?>/restaurante/ajuda">
                <i class="fas fa-question-circle"></i>
                Ajuda
            </a>
        </li>
    </ul>
    <span></span>
</nav>

<!-- <span title="Ir para o Topo" data-tooltip="tooltip" data-placement="top" class="btn text-white toTop fixed">
    <i style="font-size: 30px" class="fas fa-angle-double-up"></i>
</span> -->

<!-- Modal Sair-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Tem certeza que deseja sair?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <a href="<?=$_SERVER['REQUEST_URI']?>/logout" class="btn btn-danger">Sair</a>
        </div>
        </div>
    </div>
</div>