<?php
/* Smarty version 3.1.29, created on 2016-04-10 18:50:35
  from "/opt/lampp/htdocs/GitHub/RecordRoom/public/views/templates/home/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570a845b6033a9_58270259',
  'file_dependency' => 
  array (
    'e2dc25ba57d797acebf3a404995ffad8dbf639d9' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/RecordRoom/public/views/templates/home/index.tpl',
      1 => 1460307033,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layouts/front_layout.tpl' => 1,
  ),
),false)) {
function content_570a845b6033a9_58270259 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_503400475570a845b5d0977_56682516',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:layouts/front_layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'}  file:home/index.tpl */
function block_503400475570a845b5d0977_56682516($_smarty_tpl, $_blockParentStack) {
?>


<!-- Sing In Section -->
    <section id="signin">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="record">Registro</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" action="functions/call.Functions.Register.php" method="POST" enctype="multipart/form-data">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombres</label>
                                <input type="text" name="name" class="form-control" placeholder="Nombres" id="name" autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helpname"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Apellidos</label>
                                <input type="text" name="lastname" class="form-control" placeholder="Apellidos" id="lastname" autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helplast"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Correo Electronico</label>
                                <input type="text" name="email" class="form-control" placeholder="Correo Electronico" id="email" autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helpemail"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Telefono</label>
                                <input type="tel" name="phone" class="form-control" placeholder="Telefono" id="phone"  autocomplete="off">
                                <p class="help-block text-danger animated bounceIn retraso-2" id="helpphone"></p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="button" class="btn btn-success btn-lg" id="buttone">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php
}
/* {/block 'content'} */
}
