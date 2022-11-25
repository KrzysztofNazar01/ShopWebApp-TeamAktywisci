<?php
/* Smarty version 4.2.1, created on 2022-11-24 19:38:04
  from '/var/www/html/prestashop/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637fba0c23e534_12057831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2ec845035306bd0a8acd0c8f1f744850894226' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/index.tpl',
      1 => 1666708672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637fba0c23e534_12057831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1187288284637fba0c23c3c7_22531093', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1839065550637fba0c23c906_20659531 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_737789557637fba0c23d528_46458346 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1413687815637fba0c23d017_10050581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_737789557637fba0c23d528_46458346', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1187288284637fba0c23c3c7_22531093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1187288284637fba0c23c3c7_22531093',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1839065550637fba0c23c906_20659531',
  ),
  'page_content' => 
  array (
    0 => 'Block_1413687815637fba0c23d017_10050581',
  ),
  'hook_home' => 
  array (
    0 => 'Block_737789557637fba0c23d528_46458346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1839065550637fba0c23c906_20659531', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1413687815637fba0c23d017_10050581', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
