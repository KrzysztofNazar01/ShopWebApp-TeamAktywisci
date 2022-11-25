<?php
/* Smarty version 4.2.1, created on 2022-11-25 17:23:28
  from '/var/www/html/prestashop/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6380ec000f3d01_87230941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c57d521f48c9387410c4fbec3d93de882f8a3e57' => 
    array (
      0 => '/var/www/html/prestashop/themes/classic/templates/page.tpl',
      1 => 1666708672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6380ec000f3d01_87230941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17581328656380ec000f0480_98686460', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_20977537696380ec000f0e22_09121596 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_4048942276380ec000f08b0_67593676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20977537696380ec000f0e22_09121596', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_5999923426380ec000f1f94_37287689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_9436331736380ec000f2544_20081780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_13085842656380ec000f1b79_35915675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5999923426380ec000f1f94_37287689', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9436331736380ec000f2544_20081780', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4695814056380ec000f31e4_76005626 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_20775351366380ec000f2e12_20092280 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4695814056380ec000f31e4_76005626', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_17581328656380ec000f0480_98686460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17581328656380ec000f0480_98686460',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_4048942276380ec000f08b0_67593676',
  ),
  'page_title' => 
  array (
    0 => 'Block_20977537696380ec000f0e22_09121596',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_13085842656380ec000f1b79_35915675',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5999923426380ec000f1f94_37287689',
  ),
  'page_content' => 
  array (
    0 => 'Block_9436331736380ec000f2544_20081780',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_20775351366380ec000f2e12_20092280',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4695814056380ec000f31e4_76005626',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4048942276380ec000f08b0_67593676', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13085842656380ec000f1b79_35915675', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20775351366380ec000f2e12_20092280', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
