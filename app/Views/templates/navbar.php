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
                    <?php if ($route->File == 'sobre' || $route->File == 'termos' || $route->File == 'privacidade') { ?>
                        <span style="cursor: pointer" class="nav-link active text-white">
                            Sobre
                        </span> 
                    <?php } else { ?>
                        <span style="cursor: pointer" class="nav-link">
                            Sobre
                        </span> 
                    <?php } ?>
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="sobre">Sobre o Search Food</a>
                        <a class="dropdown-item" href="termos">Termos de Uso</a>
                        <a class="dropdown-item" href="privacidade">Privacidade</a>
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
                    <?php if ($route->File == 'sobre' || $route->File == 'termos' || $route->File == 'privacidade') { ?>
                        <span style="cursor: pointer" class="nav-link active text-white">
                            Sobre
                        </span> 
                    <?php } else { ?>
                        <span style="cursor: pointer" class="nav-link">
                            Sobre
                        </span> 
                    <?php } ?>
                    <div class="dropdown-content text-center p-1">
                        <a class="dropdown-item" href="sobre">Sobre o Search Food</a>
                        <a class="dropdown-item" href="termos">Termos de Uso</a>
                        <a class="dropdown-item" href="privacidade">Privacidade</a>
                    </div>
            </ul>
        </div>
    <?php } ?>
</nav>