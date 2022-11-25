<?php
/* Smarty version 4.2.1, created on 2022-11-23 22:37:02
  from '/var/www/html/prestashop/admin463axgkhbowgrw0kj9t/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637e927e2f2853_36655189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd32d8baa35bb9ca58532d2b6ca273e2d8f8f617' => 
    array (
      0 => '/var/www/html/prestashop/admin463axgkhbowgrw0kj9t/themes/default/template/controllers/cart_rules/helpers/list/list_header.tpl',
      1 => 1666787715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637e927e2f2853_36655189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_243204241637e927e2ef970_74408303', 'override_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'override_header'} */
class Block_243204241637e927e2ef970_74408303 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'override_header' => 
  array (
    0 => 'Block_243204241637e927e2ef970_74408303',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['submit_form_ajax']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		$('#voucher', window.parent.document).val('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['new_cart_rule']->value->code,'html','UTF-8' ));?>
');
		parent.add_cart_rule(<?php echo intval($_smarty_tpl->tpl_vars['new_cart_rule']->value->id);?>
);
		parent.$.fancybox.close();
	<?php echo '</script'; ?>
>
<?php }
}
}
/* {/block 'override_header'} */
}
