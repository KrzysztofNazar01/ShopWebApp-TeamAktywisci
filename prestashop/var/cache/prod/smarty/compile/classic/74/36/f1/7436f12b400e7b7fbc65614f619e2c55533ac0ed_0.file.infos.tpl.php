<?php
/* Smarty version 4.2.1, created on 2022-11-24 20:31:38
  from '/var/www/html/prestashop/modules/ps_wirepayment/views/templates/hook/infos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637fc69a7abb31_28473769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7436f12b400e7b7fbc65614f619e2c55533ac0ed' => 
    array (
      0 => '/var/www/html/prestashop/modules/ps_wirepayment/views/templates/hook/infos.tpl',
      1 => 1652973222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637fc69a7abb31_28473769 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="alert alert-info">
  <img src="../modules/ps_wirepayment/logo.png" style="float:left; margin-right:15px;" height="60">
  <p><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"This module allows you to accept secure payments by bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</strong></p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl ) );?>
</p>
</div>
<?php }
}
