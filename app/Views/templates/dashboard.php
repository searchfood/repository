<!--Estrutura do Template-->
<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1 mr-0">
        <img height="55" src="<?=URL?>/public/img/logo/logo.png" alt="">
        <span id="logo-text">Search Food</span>
    </span>
    <ul class="nav justify-content-center">
        <h4 class="text-white">
            <i class="fas fa-home"></i>
            Nome do restaurante
        </h4>
    </ul>
    <ul class="nav justify-content-end">

        <?php include 'app/Views/templates/notification.php' ?>

        <div class="border ml-3"></div>
        <div class="dropdown nav-item">
            <span class="nav-link text-white">
                <i class="fas fa-ban"></i>
                Status da Conta
            </span> 
        </div>
        <div class="border"></div>
        <div class="dropdown nav-item">
            <span style="cursor: pointer" class="nav-link text-white">
                <i class="fas fa-user-alt"></i>
                Nível: Usuário
                <i class="fas fa-caret-down"></i>
            </span> 
            <div class="dropdown-content dropdown-menu-right text-center p-1">
                <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#logoutModal">
                    Sair <i class="fas fa-sign-out-alt"></i> 
                </a>
            </div>
        </div>                
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