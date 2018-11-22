<!--Estrutura do Template-->
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1 mr-0">
        <img height="55" src="<?=URL?>/public/img/logo/logo.png" alt="">
        <span id="logo-text">Search Food</span>
    </span>
    <ul class="nav justify-content-center">
        <h3 class="text-white">
            Nome do restaurante
        </h3>
    </ul>
    <ul class="nav justify-content-end">
        <?php include 'app/Views/templates/notification.php' ?>
        
        <span class="nav-item">
            <button style="border: none" type="button" class="nav-link btn btn-link" data-toggle="modal" data-target="#logoutModal">
                <span style="font-size: 18px" id="logout" class="mx-4">
                    Sair
                    <i class="fa fa-sign-out"></i>                
                </span>
            </button>
        </span>
    </ul>
</nav>
<nav class="navbar navbar-danger">
    <span></span>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="<?=URL?>/restaurante/dashboard">Dasboard</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=URL?>/restaurante/pedidos">Pedidos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=URL?>/restaurante/cardapio">Cardápio</a>
        </li>
        <li class="nav-item border">
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=URL?>/restaurante/configuracoes">Configurações</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=URL?>/restaurante/relatorios">Relatórios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=URL?>/restaurante/ajuda">Ajuda</a>
        </li>
    </ul>
    <span></span>
</nav>

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