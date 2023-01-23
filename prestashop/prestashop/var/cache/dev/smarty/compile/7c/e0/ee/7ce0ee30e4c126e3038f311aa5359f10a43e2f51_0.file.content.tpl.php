<?php
/* Smarty version 4.2.1, created on 2023-01-19 16:31:14
  from '/var/www/html/admin463axgkhbowgrw0kj9t/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c96242c25831_25936922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ce0ee30e4c126e3038f311aa5359f10a43e2f51' => 
    array (
      0 => '/var/www/html/admin463axgkhbowgrw0kj9t/themes/new-theme/template/content.tpl',
      1 => 1673448377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c96242c25831_25936922 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
