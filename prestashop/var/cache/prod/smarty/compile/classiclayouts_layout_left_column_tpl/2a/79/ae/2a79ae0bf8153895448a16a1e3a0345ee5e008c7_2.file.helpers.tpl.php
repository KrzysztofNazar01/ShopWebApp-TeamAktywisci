<?php
/* Smarty version 4.2.1, created on 2022-11-25 16:45:36
  from '/var/www/html/prestashop/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6380e320747df4_66134067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a79ae0bf8153895448a16a1e3a0345ee5e008c7' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/_partials/helpers.tpl',
      1 => 1666708672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6380e320747df4_66134067 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/var/www/html/prestashop/var/cache/prod/smarty/compile/classiclayouts_layout_left_column_tpl/2a/79/ae/2a79ae0bf8153895448a16a1e3a0345ee5e008c7_2.file.helpers.tpl.php',
    'uid' => '2a79ae0bf8153895448a16a1e3a0345ee5e008c7',
    'call_name' => 'smarty_template_function_renderLogo_955943756380e32073a396_51400162',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_955943756380e32073a396_51400162 */
if (!function_exists('smarty_template_function_renderLogo_955943756380e32073a396_51400162')) {
function smarty_template_function_renderLogo_955943756380e32073a396_51400162(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_955943756380e32073a396_51400162 */
}
