<?php /* Smarty version 2.6.31, created on 2025-05-30 21:07:42
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/admin/view/order_confirm.tpl */ ?>
<?php if ($this->_tpl_vars['config']['shc_escrow']): ?>
    <fieldset class="light">
        <legend id="legend_payment_details" class="up" onclick="fieldset_action('shc_escrow');"><?php echo $this->_tpl_vars['lang']['shc_escrow_item']; ?>
</legend>
        <table id="shc_escrow" class="list">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
:</td>
                <td class="value" id="escrow-status">
                    <?php if ($this->_tpl_vars['order_info']['Escrow_status'] == 'pending'): ?>
                        <div><?php echo $this->_tpl_vars['lang']['pending']; ?>
</div>
                        <input type="button" class="confirm-order" value="<?php echo $this->_tpl_vars['lang']['shc_order_confirm']; ?>
" />
                    <?php elseif ($this->_tpl_vars['order_info']['Escrow_status'] == 'confirmed'): ?>
                        <span><?php echo $this->_tpl_vars['lang']['shc_escrow_confirmed']; ?>
</span>
                    <?php elseif ($this->_tpl_vars['order_info']['Escrow_status'] == 'canceled'): ?>
                        <span><?php echo $this->_tpl_vars['lang']['shc_escrow_canceled']; ?>
</span>
                    <?php endif; ?>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['order_info']['Deal_ID']): ?>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['shc_deal_id']; ?>
:</td>
                <td class="value"><?php echo $this->_tpl_vars['order_info']['Deal_ID']; ?>
</td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['order_info']['Payout_ID']): ?>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['shc_payout_id']; ?>
:</td>
                <td class="value"><?php echo $this->_tpl_vars['order_info']['Payout_ID']; ?>
</td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['order_info']['Refund_ID']): ?>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['shc_refund_id']; ?>
:</td>
                <td class="value"><?php echo $this->_tpl_vars['order_info']['Refund_ID']; ?>
</td>
            </tr>
            <?php endif; ?>
        </table>
    </fieldset>
    <script>
        var shcOrderID = <?php echo $this->_tpl_vars['order_info']['ID']; ?>
;
        var buyerID = <?php echo $this->_tpl_vars['order_info']['Buyer_ID']; ?>
;
        <?php echo '
        $(document).ready(function() {
            $(\'.confirm-order\').click(function () {
                rlConfirm(lang[\'shc_do_you_want_confirm_order\'], \'confirmOrder\', Array(shcOrderID, buyerID), \'load\');
            });
        });
        '; ?>

    </script>
<?php endif; ?>