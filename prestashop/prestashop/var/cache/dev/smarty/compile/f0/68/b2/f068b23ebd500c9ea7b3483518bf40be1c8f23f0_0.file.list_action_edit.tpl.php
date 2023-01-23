<?php
/* Smarty version 4.2.1, created on 2023-01-23 02:18:41
  from '/var/www/html/admin463axgkhbowgrw0kj9t/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63cde071b854b9_70268026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f068b23ebd500c9ea7b3483518bf40be1c8f23f0' => 
    array (
      0 => '/var/www/html/admin463axgkhbowgrw0kj9t/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1673448365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63cde071b854b9_70268026 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
