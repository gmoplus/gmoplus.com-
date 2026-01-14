<?php /* Smarty version 2.6.31, created on 2025-04-16 18:43:51
         compiled from /home/gmoplus/public_html/plugins/fieldBoundBoxes/listings_by_field.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/fieldBoundBoxes/listings_by_field.tpl', 10, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins/fieldBoundBoxes/listings_by_field.tpl', 13, false),array('modifier', 'regex_replace', '/home/gmoplus/public_html/plugins/fieldBoundBoxes/listings_by_field.tpl', 28, false),array('function', 'paging', '/home/gmoplus/public_html/plugins/fieldBoundBoxes/listings_by_field.tpl', 13, false),)), $this); ?>
<!-- field bound boxes, listing_by_field.tpl -->

<?php if (! empty ( $this->_tpl_vars['listings'] )): ?>
    <?php if (! empty ( $this->_tpl_vars['description'] )): ?>
        <p class="category-description">
            <?php echo $this->_tpl_vars['description']; ?>

        </p>
    <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid_navbar.tpl') : smarty_modifier_cat($_tmp, 'grid_navbar.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'grid.tpl') : smarty_modifier_cat($_tmp, 'grid.tpl')), 'smarty_include_vars' => array('hl' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
    <?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['listings']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page'],'method' => $this->_tpl_vars['listing_type']['Submit_method'],'url' => $this->_tpl_vars['item_path']), $this);?>

        
<?php elseif ($this->_tpl_vars['fbb_options']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldBoundBoxes/field-bound_box.tpl') : smarty_modifier_cat($_tmp, 'fieldBoundBoxes/field-bound_box.tpl')), 'smarty_include_vars' => array('pageMode' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <div class="info">
        <?php if ($this->_tpl_vars['listing_type']['Admin_only']): ?>
            <?php echo $this->_tpl_vars['lang']['no_listings_found_deny_posting']; ?>

        <?php else: ?>
            <?php $this->assign('link', ((is_array($_tmp=((is_array($_tmp='<a href="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['add_listing_link']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['add_listing_link'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '">$1</a>') : smarty_modifier_cat($_tmp, '">$1</a>'))); ?>
            <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['no_listings_found'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.+)\]/', $this->_tpl_vars['link']) : smarty_modifier_regex_replace($_tmp, '/\[(.+)\]/', $this->_tpl_vars['link'])); ?>

        <?php endif; ?>
    </div>
<?php endif; ?>

<!-- field bound boxes, listing_by_field.tpl end -->