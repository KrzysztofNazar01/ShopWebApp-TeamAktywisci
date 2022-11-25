<?php
/* Smarty version 4.2.1, created on 2022-11-25 16:57:38
  from '/var/www/html/prestashop/modules/blockreassurance/views/templates/admin/tabs/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6380e5f24d7d70_92053569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94d4647ecd5e53b617c9650a93e8e9787de46da4' => 
    array (
      0 => '/var/www/html/prestashop/modules/blockreassurance/views/templates/admin/tabs/content.tpl',
      1 => 1649431700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_6380e5f24d7d70_92053569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
