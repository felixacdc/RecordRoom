<?php
/* Smarty version 3.1.29, created on 2016-04-11 10:31:14
  from "/opt/lampp/htdocs/GitHub/RecordRoom/public/views/templates/partials/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b60d2976b76_06710268',
  'file_dependency' => 
  array (
    '214402d7f539da69a45a3db27f7ff8b93b30dfe7' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/RecordRoom/public/views/templates/partials/header.tpl',
      1 => 1460363473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b60d2976b76_06710268 ($_smarty_tpl) {
?>
<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                
                <?php if (isset($_GET['good']) && $_GET['good'] == 'yes') {?>
                    <div class="alert alert-info alert-dismissible animated bounceIn" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Muy bien!</strong> Te has registrado correctamente.
                    </div>
                <?php }?>
                
                <?php if (isset($_GET['good']) && $_GET['good'] == 'no') {?>
                    <div class="alert alert-danger alert-dismissible animated bounceIn" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <strong>Oops!</strong> No se pudo realizar el registro.
                    </div>
                <?php }?>
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
</header><?php }
}
