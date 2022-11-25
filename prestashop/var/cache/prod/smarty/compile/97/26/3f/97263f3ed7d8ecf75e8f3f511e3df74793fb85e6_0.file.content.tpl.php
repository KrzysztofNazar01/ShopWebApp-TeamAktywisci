<?php
/* Smarty version 4.2.1, created on 2022-11-23 22:37:28
  from '/var/www/html/prestashop/admin463axgkhbowgrw0kj9t/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637e9298372f80_08823167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97263f3ed7d8ecf75e8f3f511e3df74793fb85e6' => 
    array (
      0 => '/var/www/html/prestashop/admin463axgkhbowgrw0kj9t/themes/new-theme/template/content.tpl',
      1 => 1666787715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637e9298372f80_08823167 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
