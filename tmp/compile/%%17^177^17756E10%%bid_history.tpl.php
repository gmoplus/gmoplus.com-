<?php /* Smarty version 2.6.31, created on 2025-05-30 13:52:45
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/bid_history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/bid_history.tpl', 12, false),)), $this); ?>
<!-- shoppingCart plugin -->

<div id="area_shoppingCart" class="tab_area hide">
    <?php if ($this->_tpl_vars['listing_data']['shc']['time_left_value'] > 0 && $this->_tpl_vars['listing_data']['shc_auction_status'] != 'closed'): ?>
        <div class="bid-history-header mb-3">
            <span class="date"><?php echo $this->_tpl_vars['lang']['shc_bidders']; ?>
:</span> <span id="bh_bidders"><?php echo $this->_tpl_vars['listing_data']['shc']['bidders']; ?>
</span>
            <span class="date ml-2"><?php echo $this->_tpl_vars['lang']['shc_bids']; ?>
:</span> <span id="bh_total_bids"><?php echo $this->_tpl_vars['listing_data']['shc']['total_bids']; ?>
</span>
        </div>
    <?php endif; ?>

    <div id="bid-history-list">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'shoppingCart/view/bids.tpl') : smarty_modifier_cat($_tmp, 'shoppingCart/view/bids.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
</div>

<!-- end shoppingCart plugin -->