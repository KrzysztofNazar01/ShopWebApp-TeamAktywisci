<?php
/* Smarty version 4.2.1, created on 2022-11-24 19:42:35
  from '/var/www/html/prestashop/admin463axgkhbowgrw0kj9t/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637fbb1bb27ce2_71966665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f76c74c55b0255c5a763171509cb8a985cf5cdf' => 
    array (
      0 => '/var/www/html/prestashop/admin463axgkhbowgrw0kj9t/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1666787715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637fbb1bb27ce2_71966665 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
