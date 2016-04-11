<?php
/* Smarty version 3.1.29, created on 2016-04-11 10:23:13
  from "/opt/lampp/htdocs/GitHub/RecordRoom/public/views/templates/partials/userList.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570b5ef1543e74_09441622',
  'file_dependency' => 
  array (
    '3328bb27b0585b0874db3b9ea4e52d495fbe59e8' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/RecordRoom/public/views/templates/partials/userList.tpl',
      1 => 1460362991,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_570b5ef1543e74_09441622 ($_smarty_tpl) {
?>
<!-- Registered Section -->
<section class="success" id="registered">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="bigTitles">Registrados</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="table-responsive">
                   <table class="table table-striped" id="registered">
                       <thead>
                           <tr>
                               <th>No.</th>
                               <th>Nombre</th>
                               <th>Apellido</th>
                               <th>Telefono</th>
                               <th>Correo</th>
                           </tr>
                       </thead>
                       <tbody>
                            <?php $_smarty_tpl->tpl_vars["numero"] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "numero", 0);?>

                            <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['numero']->value++;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['firstName'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['lastName'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['phone'];?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['email'];?>
</td>
                                </tr>
                            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
?>
                       </tbody>
                   </table>
               </div>
            </div>
        </div>
    </div>
</section><?php }
}
