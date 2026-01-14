<?php /* Smarty version 2.6.31, created on 2025-04-14 18:38:26
         compiled from /home/gmoplus/public_html/templates/general_sunny/tpl/menus/main_menu.tpl */ ?>
<!-- main menu block -->

<div class="menu d-none d-md-flex h-100 flex-grow-1 flex-shrink-1 flex-basis-0 shrink-fix justify-content-between">
    <span class="mobile-menu-header d-none align-items-center order-1">
        <span class="mobile-menu-header-title"><?php echo $this->_tpl_vars['lang']['menu']; ?>
</span>
        <svg viewBox="0 0 12 12" class="mobile-close-icon">
            <use xlink:href="#close-icon"></use>
        </svg>
    </span>

    <div class="flex-fill d-flex d-md-none justify-content-center order-2 ml-3 mr-3" id="mobile-left-usernav"></div>

    <div class="menu-content pt-3 pb-3 pt-md-0 pb-md-0 order-3 order-md-2 shrink-fix flex-wrap">
    <?php $_from = $this->_tpl_vars['main_menu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['mMenu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['mMenu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menu_item']):
        $this->_foreach['mMenu']['iteration']++;
?>
        <?php if ($this->_tpl_vars['menu_item']['Key'] == 'add_listing'): ?><?php $this->assign('add_listing_button', $this->_tpl_vars['menu_item']); ?><?php continue; ?><?php endif; ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menus/menu_item.tpl', 'smarty_include_vars' => array('menuItem' => $this->_tpl_vars['menu_item'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endforeach; endif; unset($_from); ?>
    </div>

    <?php if ($this->_tpl_vars['add_listing_button']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menus/menu_item.tpl', 'smarty_include_vars' => array('menuItem' => $this->_tpl_vars['add_listing_button'],'itemClass' => 'button ml-md-4 add-property order-2 order-md-3 flex-shrink-0')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <div class="menu-content h-100 order-4 d-block d-md-none pb-2 mt-3 mt-md-0">
        <div class="content <?php if ($this->_tpl_vars['isLogin']): ?>a-menu<?php endif; ?>">
            <?php if ($this->_tpl_vars['isLogin']): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menus/account_menu.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php else: ?>
                <span class="user-navbar-container">
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/login_modal.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </span>
            <?php endif; ?>
        </div>
    </div>
</div>

<span class="menu-button pl-2 d-flex d-md-none align-items-center" title="<?php echo $this->_tpl_vars['lang']['menu']; ?>
">
    <svg viewBox="0 0 20 14">
        <use xlink:href="#mobile-menu"></use>
    </svg>
</span>

<!-- main menu block end -->