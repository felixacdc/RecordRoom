<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                
                {if isset($smarty.get.good) and $smarty.get.good == 'yes'}
                    <div class="alert alert-info alert-dismissible animated bounceIn" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Muy bien!</strong> Te has registrado correctamente.
                    </div>
                {/if}
                
                {if isset($smarty.get.good) and $smarty.get.good == 'no'}
                    <div class="alert alert-danger alert-dismissible animated bounceIn" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Oops!</strong> No se pudo realizar el registro.
                    </div>
                {/if}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img class="img-responsive" src="public/views/img/logo.png" alt="">
                <div class="intro-text">
                    <span class="name">Registro 2016</span>
                    <hr class="star-light">
                    <span class="skills">Salón y Spá Marbella</span>
                </div>
            </div>
        </div>
    </div>
</header>