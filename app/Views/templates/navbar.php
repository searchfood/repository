<nav class="navbar navbar-expand-lg navbar-dark bg-template">
    <?php if ($route->Path == 'restaurante') { ?>
        <a class="navbar-brand" href="<?=URL?>">
            <img height="55" src="<?=URL?>/public/img/logo/logo.png" alt="Logo">
            <span id="logo-text">Search Food</span>
        </a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <div class="dropdown nav-item">
                    <span style="cursor: pointer" class="nav-link text-white">
                        Sobre
                    </span> 
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="<?=URL?>/sobre">Sobre o Search Food</a>
                        <a class="dropdown-item" href="<?=URL?>/termos">Termos de Uso</a>
                        <a class="dropdown-item" href="<?=URL?>/privacidade">Privacidade</a>
                    </div>
                </div> 
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?=URL?>/contato">Contato</a>                                                 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?=URL?>/entrar">Entrar ou Cadastrar</a>                                                 
                </li>
                <div id="donos-restaurante" class="dropdown nav-item">
                    <span style="cursor: pointer" class="nav-link text-white">
                        Donos de Restaurante
                    </span>                                    
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="<?=URL?>/restaurante/cadastro">Cadastrar Restaurante</a>
                        <a class="dropdown-item" href="<?=URL?>/restaurante/login">Acessar Painel</a>
                    </div>
                </div>
            </ul>
        </div>
    <?php } else { ?>
        <a class="navbar-brand" href="<?=URL?>">
            <img height="55" src="<?=URL?>/public/img/logo/logo.png" alt="Logo">
            <span id="logo-text">Search Food</span>
        </a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <div class="dropdown nav-item">
                    <span style="cursor: pointer" class="nav-link text-white">
                            Sobre
                        </span> 
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="sobre">Sobre o Search Food</a>
                        <a class="dropdown-item" href="termos">Termos de Uso</a>
                        <a class="dropdown-item" href="privacidade">Privacidade</a>
                    </div>
                </div> 
                <li class="nav-item">
                    <a class="nav-link text-white" href="contato">Contato</a>                                                 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="entrar">Entrar ou Cadastrar</a>                                                 
                </li>
                <div id="donos-restaurante" class="dropdown nav-item">
                    <span style="cursor: pointer" class="nav-link text-white">
                        Donos de Restaurante
                    </span>                                    
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="restaurante/cadastro">Cadastrar Restaurante</a>
                        <a class="dropdown-item" href="restaurante/login">Acessar Painel</a>
                    </div>
                </div>
            </ul>
        </div>
    <?php } ?>
</nav>