<?php
/* Smarty version 3.1.29, created on 2016-04-10 18:50:35
  from "/opt/lampp/htdocs/GitHub/RecordRoom/public/views/templates/layouts/front_layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570a845b682802_41771450',
  'file_dependency' => 
  array (
    '7300d5eb888d2a6ba3473a57702fb9864ba5a98f' => 
    array (
      0 => '/opt/lampp/htdocs/GitHub/RecordRoom/public/views/templates/layouts/front_layout.tpl',
      1 => 1460306957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/head.tpl' => 1,
    'file:partials/nav.tpl' => 1,
    'file:partials/header.tpl' => 1,
    'file:partials/userList.tpl' => 1,
    'file:partials/footer.tpl' => 1,
    'file:partials/scripts.tpl' => 1,
  ),
),false)) {
function content_570a845b682802_41771450 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:partials/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body id="page-top" class="index">

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:partials/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_202019614570a845b653564_80645667',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:partials/userList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:partials/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>

</html>
<?php }
/* {block 'content'}  file:layouts/front_layout.tpl */
function block_202019614570a845b653564_80645667($_smarty_tpl, $_blockParentStack) {
?>

    
    <?php
}
/* {/block 'content'} */
}
