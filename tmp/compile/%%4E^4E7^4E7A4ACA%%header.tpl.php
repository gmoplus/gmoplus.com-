<?php /* Smarty version 2.6.31, created on 2025-10-11 16:52:35
         compiled from /home/gmoplus/public_html/templates/general_sunny/tpl/header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/home/gmoplus/public_html/templates/general_sunny/tpl/header.tpl', 20, false),array('modifier', 'cat', '/home/gmoplus/public_html/templates/general_sunny/tpl/header.tpl', 21, false),array('modifier', 'explode', '/home/gmoplus/public_html/templates/general_sunny/tpl/header.tpl', 61, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'head.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => '../img/gallery.svg', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="main-wrapper d-flex flex-column<?php if ($this->_tpl_vars['pageInfo']['Key'] == 'home' && ! $this->_tpl_vars['home_slides']): ?> no-slides<?php endif; ?>">
    <header class="page-header<?php if ($this->_tpl_vars['pageInfo']['Key'] == 'home' && ! $this->_tpl_vars['config']['main_menu_home_page']): ?> main-menu-hidden<?php endif; ?><?php if ($this->_tpl_vars['pageInfo']['Key'] == 'search_on_map'): ?> fixed-menu<?php endif; ?>">
        <div class="top-header">
            <div class="point1 mx-auto">
                <div class="d-flex">
                    <span class="circle mr-md-auto mr-auto mr-md-0 ml-0" id="theme-switcher">
                        <span class="default pl-0">
                            <span class="theme">
                                <?php if ($_COOKIE['colorTheme']): ?>
                                    <?php if ($_COOKIE['colorTheme'] == 'dark'): ?><?php echo $this->_tpl_vars['lang']['sunny_theme_light']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['sunny_theme_dark']; ?>
<?php endif; ?>
                                <?php endif; ?>
                            </span>
                        </span>
                    </span>

                    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplHeaderUserNav'), $this);?>

                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'lang_selector.tpl') : smarty_modifier_cat($_tmp, 'lang_selector.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                </div>
            </div>
        </div>
        <div class="point1 clearfix">
            <div class="top-navigation content-padding">
                <div class="point1 mx-auto">
                    <div class="d-flex flex-wrap align-items-center position-relative justify-content-between">
                        <div class="mr-auto mr-md-3 pl-0 col-auto order-1" id="logo">
                            <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
" title="<?php echo $this->_tpl_vars['config']['site_name']; ?>
">
                                <img alt="<?php echo $this->_tpl_vars['config']['site_name']; ?>
" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/logo.svg?rev=<?php echo $this->_tpl_vars['config']['static_files_revision']; ?>
" />
                            </a>
                        </div>
                        <?php if ($this->_tpl_vars['pageInfo']['Key'] != 'search_on_map'): ?>
                        <div class="d-flex col-12 col-md ml-md-4 mr-md-4 order-5 order-md-2">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'blocks/smart_search.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>
                        <?php endif; ?>
                        <div class="col-auto d-flex justify-content-end user-navbar pr-0 order-3">
                            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplHeaderUserArea'), $this);?>


                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'user_navbar.tpl') : smarty_modifier_cat($_tmp, 'user_navbar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </div>

                        <nav class="main-menu col-auto col-md-12 order-4 d-flex flex-wrap">
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='menus')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'category_menu.tpl') : smarty_modifier_cat($_tmp, 'category_menu.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='menus')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'main_menu.tpl') : smarty_modifier_cat($_tmp, 'main_menu.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        </nav>

                        <div class="col-12 order-last d-flex d-md-none">
                            <div class="category-menu__button w-100 btn user-select-none mt-3 justify-content-start">
                                <span class="category-menu__button-icon"><span></span></span>

                                <?php echo $this->_tpl_vars['lang']['all_categores']; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $this->assign('page_menu', ((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['pageInfo']['Menus']) : explode($_tmp, $this->_tpl_vars['pageInfo']['Menus']))); ?>

        <?php if ($this->_tpl_vars['pageInfo']['Key'] == 'home'): ?>
        <section class="header-nav d-flex flex-column">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'home_content.tpl') : smarty_modifier_cat($_tmp, 'home_content.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </section>
        <?php endif; ?>
    </header>