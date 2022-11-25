<?php
/* Smarty version 4.2.1, created on 2022-11-24 20:58:09
  from '/var/www/html/prestashop/admin463axgkhbowgrw0kj9t/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637fccd1b1f011_72683341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e60fb3078094449d5b6f3d2419a9af0226d91e84' => 
    array (
      0 => '/var/www/html/prestashop/admin463axgkhbowgrw0kj9t/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1666787715,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637fccd1b1f011_72683341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1158870521637fccd1b1e537_55608765', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_1158870521637fccd1b1e537_55608765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1158870521637fccd1b1e537_55608765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
