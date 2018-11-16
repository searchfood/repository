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
                
            </ul>
        </div>
    <?php } ?>
</nav>