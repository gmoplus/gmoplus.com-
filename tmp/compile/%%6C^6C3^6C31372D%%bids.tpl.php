<?php /* Smarty version 2.6.31, created on 2025-05-30 13:52:45
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/bids.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/bids.tpl', 2, false),array('modifier', 'number_format', '/home/gmoplus/public_html/plugins/shoppingCart/view/bids.tpl', 20, false),array('modifier', 'date_format', '/home/gmoplus/public_html/plugins/shoppingCart/view/bids.tpl', 23, false),)), $this); ?>
<?php if ($this->_tpl_vars['bids']): ?>
    <?php $this->assign('date_format_value', ((is_array($_tmp=((is_array($_tmp=(defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))) ? $this->_run_mod_handler('cat', true, $_tmp, "<br />") : smarty_modifier_cat($_tmp, "<br />")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['config']['shc_time_format']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['config']['shc_time_format']))); ?>

    <div class="content-padding">
        <div class="list-table">
            <div class="header">
                <div class="center" style="width: 40px;">#</div>
                <div><?php echo $this->_tpl_vars['lang']['shc_bidder']; ?>
</div>
                <div style="width: 120px;"><?php echo $this->_tpl_vars['lang']['shc_bid_amount']; ?>
</div>
                <div style="width: 150px;"><?php echo $this->_tpl_vars['lang']['shc_bid_time']; ?>
</div>
                <?php if ($this->_tpl_vars['isLogin']): ?><div style="width: 30px;"></div><?php endif; ?>
            </div>

            <?php $_from = $this->_tpl_vars['bids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bidF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bidF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['bidF']['iteration']++;
?>
                <div class="row" id="bid-<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                    <div class="center iteration no-flex"><?php echo $this->_foreach['bidF']['iteration']; ?>
</div>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['shc_bidder']; ?>
" class="nr"><?php if ($this->_tpl_vars['item']['Buyer_ID'] == 0): ?><?php echo $this->_tpl_vars['lang']['shc_auto_bid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['bidder']; ?>
<?php endif; ?></div>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['shc_bid_amount']; ?>
" class="shc_price"><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['Total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</div>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['shc_bid_time']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format_value']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format_value'])); ?>
</div>
                    <?php if ($this->_tpl_vars['isLogin']): ?>
                        <div class="center">
                            <?php if (( $this->_tpl_vars['account_info']['ID'] == $this->_tpl_vars['item']['Buyer_ID'] && $this->_tpl_vars['config']['shc_auction_cancel_bid_buyer'] ) || ( $this->_tpl_vars['account_info']['ID'] == $this->_tpl_vars['item']['Dealer_ID'] && $this->_tpl_vars['config']['shc_auction_cancel_bid_seller'] )): ?>
                                <a class="close-red cancel-bid" data-item="<?php echo $this->_tpl_vars['item']['ID']; ?>
" data-auction-id="<?php echo $this->_tpl_vars['listing_data']['ID']; ?>
"  href="javascript://;">
                                    <svg viewBox="0 0 18 18" class="icon grid-icon-fill">
                                        <use xlink:href="#close_icon"></use>
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    </div>
    <script class="fl-js-dynamic">
        <?php echo '
        $(document).ready(function() {
            $(\'a.cancel-bid\').each(function() {
                $(this).flModal({
                    caption: \'\',
                    content: \''; ?>
<?php echo $this->_tpl_vars['lang']['shc_do_you_want_cancel_bid']; ?>
<?php echo '\',
                    prompt: \'shoppingCart.cancelBid(\'+ $(this).attr(\'data-item\') + \', \'+ $(this).attr(\'data-auction-id\') + \')\',
                    width: \'auto\',
                    height: \'auto\'
                });
            });
        });
        '; ?>

    </script>
<?php else: ?>
    <div class="text-notice"><?php echo $this->_tpl_vars['lang']['shc_no_bids']; ?>
</div>
<?php endif; ?>