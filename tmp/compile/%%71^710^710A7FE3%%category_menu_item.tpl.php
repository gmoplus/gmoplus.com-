<?php /* Smarty version 2.6.31, created on 2025-04-20 20:31:38
         compiled from /home/gmoplus/public_html/templates/general_sunny/tpl/menus/category_menu_item.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'categoryUrl', '/home/gmoplus/public_html/templates/general_sunny/tpl/menus/category_menu_item.tpl', 12, false),array('function', 'fetch', '/home/gmoplus/public_html/templates/general_sunny/tpl/menus/category_menu_item.tpl', 17, false),array('modifier', 'cat', '/home/gmoplus/public_html/templates/general_sunny/tpl/menus/category_menu_item.tpl', 17, false),)), $this); ?>
<?php if ($this->_tpl_vars['item']['sub_categories'] || isset ( $this->_tpl_vars['item']['Links_type'] )): ?>
    <?php $this->assign('tag', 'div'); ?>
<?php else: ?>
    <?php $this->assign('tag', 'a'); ?>
<?php endif; ?>

<<?php echo $this->_tpl_vars['tag']; ?>

    <?php if ($this->_tpl_vars['tag'] == 'div'): ?>
    data-id="<?php echo $this->_tpl_vars['id']; ?>
"
    data-type="<?php echo $this->_tpl_vars['typeKey']; ?>
"
    <?php else: ?>
    href="<?php echo $this->_plugins['function']['categoryUrl'][0][0]->categoryUrl(array('category' => $this->_tpl_vars['item']), $this);?>
"
    <?php endif; ?>
    class="d-flex align-items-center category-menu__category-item">
    <div class="category-menu__category-icon mr-2 flex-shrink-0">
        <?php if ($this->_tpl_vars['item']['Menu_icon']): ?>
            <?php echo smarty_function_fetch(array('file' => ((is_array($_tmp=((is_array($_tmp=(defined('RL_LIBS') ? @RL_LIBS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'icons/svg-line-set/') : smarty_modifier_cat($_tmp, 'icons/svg-line-set/')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']['Menu_icon']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item']['Menu_icon']))), $this);?>

        <?php else: ?>
            <svg viewBox="0 0 24 24">
               <use xlink:href="#default-category-icon"></use>
            </svg>
        <?php endif; ?>
    </div>

    <div class="category-menu__category-name ml-1 flex-fill"><?php echo $this->_tpl_vars['item']['name']; ?>
</div>

    <?php if ($this->_tpl_vars['tag'] == 'div'): ?>
    <svg viewBox="0 0 7 12" class="category-menu__category-arrow ml-2 flex-shrink-0">
       <use xlink:href="#arrow-right-icon"></use>
    </svg>
    <?php endif; ?>
</<?php echo $this->_tpl_vars['tag']; ?>
>