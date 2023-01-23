<?php
/* Smarty version 4.2.1, created on 2023-01-19 16:29:59
  from '/var/www/html/admin463axgkhbowgrw0kj9t/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c961f7c69892_87406777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2911960b1e32597c87b8882c6cc256daed05e01f' => 
    array (
      0 => '/var/www/html/admin463axgkhbowgrw0kj9t/themes/default/template/content.tpl',
      1 => 1673448361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c961f7c69892_87406777 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
