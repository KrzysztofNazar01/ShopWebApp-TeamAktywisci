<?php
/* Smarty version 4.2.1, created on 2023-01-19 16:31:27
  from 'module:pssupplierlistviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c9624fdeac21_17836430',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e98a1d231ad7587ed33d217eebc733ab1968889' => 
    array (
      0 => 'module:pssupplierlistviewstempla',
      1 => 1673448076,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars[\'supplier_display_type\']->value).".tpl' => 1,
  ),
),false)) {
function content_63c9624fdeac21_17836430 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '95979526763c9624fdc5ae9_08887657';
?>
<!-- begin /var/www/html/themes/classic/modules/ps_supplierlist/views/templates/hook/ps_supplierlist.tpl -->
<div id="search_filters_suppliers">
  <section class="facet">
    <?php if ($_smarty_tpl->tpl_vars['display_link_supplier']->value) {?>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="h6 text-uppercase facet-label" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      </a>
    <?php } else { ?>
      <p class="h6 text-uppercase facet-label">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      </p>
    <?php }?>

    <div>
      <?php if ($_smarty_tpl->tpl_vars['suppliers']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("module:ps_supplierlist/views/templates/_partials/".((string)$_smarty_tpl->tpl_vars['supplier_display_type']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('suppliers'=>$_smarty_tpl->tpl_vars['suppliers']->value), 0, true);
?>
      <?php } else { ?>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No supplier','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
      <?php }?>
    </div>
  </section>
</div>
<!-- end /var/www/html/themes/classic/modules/ps_supplierlist/views/templates/hook/ps_supplierlist.tpl --><?php }
}