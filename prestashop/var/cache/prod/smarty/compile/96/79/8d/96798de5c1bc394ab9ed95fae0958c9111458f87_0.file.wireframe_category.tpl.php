<?php
/* Smarty version 4.2.1, created on 2022-11-23 22:37:43
  from '/var/www/html/prestashop/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_637e92a74f3120_40810353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96798de5c1bc394ab9ed95fae0958c9111458f87' => 
    array (
      0 => '/var/www/html/prestashop/modules/ps_themecusto/views/templates/admin/controllers/configuration/elem/wireframe_category.tpl',
      1 => 1611045660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_637e92a74f3120_40810353 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row no-gutter js-wireframe">
    <div class="col-xs-12 js-img-menu" data-module_name="menu">
        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/header.jpg"/>
        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/header-hover.jpg"/>
        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/header-selected.jpg"/>
    </div>
    <div class="col-xs-12">
        <div class="row no-gutter">
            <div class="col-xs-3 js-img-navigation_column" data-module_name="navigation_column">
                <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/navigation-column.jpg"/>
                <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/navigation-column-hover.jpg"/>
                <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/navigation-column-selected.jpg"/>
            </div>
            <div class="col-xs-9">
                <div class="row no-gutter">
                    <div class="col-xs-12 js-img-categories" data-module_name="categories">
                        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/category.jpg"/>
                        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/category-hover.jpg"/>
                        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/category-selected.jpg"/>
                    </div>
                    <div class="col-xs-12 js-img-content" data-module_name="content">
                        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/content.jpg"/>
                        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/content-hover.jpg"/>
                        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/category/content-selected.jpg"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 js-img-social_newsletter" data-module_name="social_newsletter">
        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/newsletter.jpg"/>
        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/newsletter-hover.jpg"/>
        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/newsletter-selected.jpg"/>
    </div>
    <div class="col-xs-12 js-img-footer" data-module_name="footer">
        <img class="out-element" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/footer.jpg"/>
        <img class="hover-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/footer-hover.jpg"/>
        <img class="active-element hide" src="<?php echo $_smarty_tpl->tpl_vars['moduleImgUri']->value;?>
/wireframe/commons/footer-selected.jpg"/>
    </div>
</div>
<?php }
}
