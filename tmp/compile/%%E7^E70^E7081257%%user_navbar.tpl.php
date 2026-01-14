<?php /* Smarty version 2.6.31, created on 2025-04-14 18:38:26
         compiled from /home/gmoplus/public_html/templates/general_sunny/tpl/blocks/user_navbar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pageUrl', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/user_navbar.tpl', 12, false),)), $this); ?>
<!-- user navigation bar -->

<span class="d-none d-md-flex circle<?php if ($this->_tpl_vars['isLogin']): ?> logged-in<?php endif; ?><?php if ($this->_tpl_vars['new_messages']): ?> notify<?php endif; ?>" id="user-navbar">
    <span class="default">
        <svg viewBox="0 0 22 22" class="header-usernav-icon-fill">
            <use xlink:href="#user-icon"></use>
        </svg>
    </span>
    <span class="content <?php if ($this->_tpl_vars['isLogin']): ?>a-menu<?php endif; ?> hide">
        <?php if ($this->_tpl_vars['isLogin']): ?>
            <div class="account-name d-flex align-items-center">
                <a href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'my_profile'), $this);?>
">
                <?php if ($this->_tpl_vars['account_info']['Photo']): ?>
                    <img class="mr-2"
                         src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['account_info']['Photo']; ?>
"
                         <?php if ($this->_tpl_vars['account_info']['Photo_x2']): ?>srcset="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['account_info']['Photo_x2']; ?>
 2x"<?php endif; ?> />
                <?php endif; ?>
                <?php echo $this->_tpl_vars['isLogin']; ?>

                </a>
            </div>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'menus/user_navbar_menu.tpl', 'smarty_include_vars' => array()));
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
    </span>
</span>

<!-- user navigation bar end -->