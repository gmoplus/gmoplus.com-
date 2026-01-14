<?php /* Smarty version 2.6.31, created on 2025-10-10 21:30:49
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/order_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/order_details.tpl', 3, false),array('modifier', 'date_format', '/home/gmoplus/public_html/plugins/shoppingCart/view/order_details.tpl', 55, false),array('modifier', 'number_format', '/home/gmoplus/public_html/plugins/shoppingCart/view/order_details.tpl', 168, false),array('function', 'pageUrl', '/home/gmoplus/public_html/plugins/shoppingCart/view/order_details.tpl', 85, false),)), $this); ?>
<!-- Order Details -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'shc_order_details','name' => $this->_tpl_vars['lang']['shc_order_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_order_key']; ?>
</span></div></div>
        <div class="value"><?php echo $this->_tpl_vars['orderInfo']['Order_key']; ?>
</div>
    </div>

    <?php if ($this->_tpl_vars['account_info']['ID'] == $this->_tpl_vars['orderInfo']['Dealer_ID']): ?>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_buyer']; ?>
</span></div></div>
            <div class="value">
                <?php if ($this->_tpl_vars['orderInfo']['bOwn_address']): ?>
                    <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php echo $this->_tpl_vars['orderInfo']['bOwn_address']; ?>
/"><?php echo $this->_tpl_vars['orderInfo']['bFull_name']; ?>
</a>
                <?php else: ?>
                    <span><?php echo $this->_tpl_vars['orderInfo']['bFull_name']; ?>
</span>
                <?php endif; ?>
            </div>
        </div>
    <?php else: ?>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_dealer']; ?>
</span></div></div>
            <div class="value">
                <?php if ($this->_tpl_vars['orderInfo']['dOwn_address']): ?>
                    <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php echo $this->_tpl_vars['orderInfo']['dOwn_address']; ?>
/"><?php echo $this->_tpl_vars['orderInfo']['dFull_name']; ?>
</a>
                <?php else: ?>
                    <span><?php echo $this->_tpl_vars['orderInfo']['dFull_name']; ?>
</span>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['orderInfo']['Buyer_ID'] == $this->_tpl_vars['account_info']['ID'] && $this->_tpl_vars['orderInfo']['Tracking_number']): ?>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_tracking_number']; ?>
</span></div></div>
            <div class="value">
                <span><?php echo $this->_tpl_vars['orderInfo']['Tracking_number']; ?>
</span>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['orderInfo']['Dealer_ID'] == $this->_tpl_vars['account_info']['ID']): ?>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_tracking_number']; ?>
</span></div></div>
            <div class="value tracking-number">
                <?php if ($this->_tpl_vars['orderInfo']['Tracking_number']): ?>
                    <span><?php echo $this->_tpl_vars['orderInfo']['Tracking_number']; ?>
</span>
                <?php else: ?>
                    <a href="javascript:void(0);" data-item-id="<?php echo $this->_tpl_vars['orderInfo']['ID']; ?>
" class="button low add-tracking-number"><?php echo $this->_tpl_vars['lang']['shc_add_tracking_number']; ?>
</a>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['date']; ?>
</span></div></div>
        <div class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['orderInfo']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</div>
    </div>
    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['total']; ?>
</span></div></div>
        <div class="value">
            <span class="price-cell shc_price"><?php echo $this->_tpl_vars['orderInfo']['Total']; ?>
</span>
        </div>
    </div>
    <?php if ($this->_tpl_vars['config']['shc_method'] == 'multi' && $this->_tpl_vars['config']['shc_commission_enable'] && $this->_tpl_vars['orderInfo']['Dealer_ID'] == $this->_tpl_vars['account_info']['ID']): ?>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_commission']; ?>
</span></div></div>
            <div class="value">
                <span class="price-cell shc_price"><?php echo $this->_tpl_vars['orderInfo']['Commission']; ?>
</span>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['orderInfo']['Cash']): ?>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_payment_type']; ?>
</span></div></div>
            <div class="value"><span><?php echo $this->_tpl_vars['lang']['shc_payment_cash']; ?>
</span></div>
        </div>
    <?php endif; ?>
    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['status']; ?>
</span></div></div>
        <div class="value">
            <span class="payment-status item_<?php echo $this->_tpl_vars['orderInfo']['Status']; ?>
"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['orderInfo']['Status']]; ?>
</span>
            <?php if ($this->_tpl_vars['orderInfo']['Dealer_ID'] == $this->_tpl_vars['account_info']['ID'] && $this->_tpl_vars['orderInfo']['Cash'] && $this->_tpl_vars['orderInfo']['Status'] == 'pending'): ?>
            <a href="javascript://" class="button low make-paid"><?php echo $this->_tpl_vars['lang']['shc_make_paid']; ?>
</a>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['orderInfo']['Status'] == 'unpaid' && ! $this->_tpl_vars['orderInfo']['Cash']): ?>
                <a href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('page' => 'shc_purchases','add_url' => 'step=checkout'), $this);?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?>?<?php else: ?>&<?php endif; ?>item=<?php echo $this->_tpl_vars['orderInfo']['ID']; ?>
">
                    <?php echo $this->_tpl_vars['lang']['checkout']; ?>

                </a>
            <?php endif; ?>
        </div>
    </div>
    <?php if (! empty ( $this->_tpl_vars['orderInfo']['Txn_ID'] )): ?>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['txn_id']; ?>
</span></div></div>
            <div class="value"><?php echo $this->_tpl_vars['orderInfo']['Txn_ID']; ?>
</div>
        </div>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['gateway']; ?>
</span></div></div>
            <div class="value"><?php echo $this->_tpl_vars['orderInfo']['Gateway']; ?>
</div>
        </div>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['date']; ?>
</span></div></div>
            <div class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['orderInfo']['Pay_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</div>
        </div>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['orderInfo']['Comment']): ?>
    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_comment']; ?>
</span></div></div>
        <div class="value"><i><?php echo $this->_tpl_vars['orderInfo']['Comment']; ?>
</i></div>
    </div>
    <?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['orderInfo']['Escrow_status'] == 'pending' && $this->_tpl_vars['orderInfo']['Buyer_ID'] == $this->_tpl_vars['account_info']['ID']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'shoppingCart/view/order_confirm.tpl') : smarty_modifier_cat($_tmp, 'shoppingCart/view/order_confirm.tpl')), 'smarty_include_vars' => array('order_info' => $this->_tpl_vars['orderInfo'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'shoppingCart/view/order_escrow.tpl') : smarty_modifier_cat($_tmp, 'shoppingCart/view/order_escrow.tpl')), 'smarty_include_vars' => array('orderInfo' => $this->_tpl_vars['orderInfo'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'shoppingCart/view/shipping_info.tpl') : smarty_modifier_cat($_tmp, 'shoppingCart/view/shipping_info.tpl')), 'smarty_include_vars' => array('order_info' => $this->_tpl_vars['orderInfo'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php if ($this->_tpl_vars['orderInfo']['cart']['items']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'shc_items','name' => $this->_tpl_vars['lang']['shc_order_items'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="list-table row-align-middle">
        <div class="header">
            <div class="center" style="width: 40px;">#</div>
            <div><?php echo $this->_tpl_vars['lang']['item']; ?>
</div>
            <?php if ($this->_tpl_vars['config']['shc_digital_product']): ?>
                <div style="width: 90px;"></div>
            <?php endif; ?>
            <div class="center" style="width: 100px;"><?php echo $this->_tpl_vars['lang']['price']; ?>
</div>
            <div class="center" style="width: 110px;"><?php echo $this->_tpl_vars['lang']['shc_quantity']; ?>
</div>
            <div class="center" style="width: 110px;"><?php echo $this->_tpl_vars['lang']['total']; ?>
</div>
        </div>

        <?php $_from = $this->_tpl_vars['orderInfo']['cart']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['orderItemF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['orderItemF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['orderItemF']['iteration']++;
?>
            <?php if (! $this->_tpl_vars['item']['shc_available']): ?><?php continue; ?><?php endif; ?>

            <div class="row">
                <div class="center iteration no-flex text-center"><?php echo $this->_foreach['orderItemF']['iteration']; ?>
</div>
                <div data-caption="<?php echo $this->_tpl_vars['lang']['item']; ?>
" class="d-flex">
                    <?php if ($this->_tpl_vars['item']['main_photo']): ?>
                        <div class="image mr-2">
                            <a href="<?php echo $this->_tpl_vars['item']['listing_link']; ?>
" target="_blank">
                                <img alt="<?php echo $this->_tpl_vars['item']['Item']; ?>
" class="shc-item-picture" src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['item']['main_photo']; ?>
" />
                            </a>
                        </div>
                    <?php endif; ?>
                    <div>
                        <a href="<?php echo $this->_tpl_vars['item']['listing_link']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['Item']; ?>
</a>
                        <?php if (! $this->_tpl_vars['item']['Digital'] && ! $this->_tpl_vars['item']['Digital_product']): ?>
                        <div>
                            <?php echo $this->_tpl_vars['lang']['shc_shipping_method']; ?>
:
                            <span class="font-weight-bold">
                                <?php if ($this->_tpl_vars['item']['shipping_item_options']['title']): ?>
                                    <?php echo $this->_tpl_vars['item']['shipping_item_options']['title']; ?>

                                <?php else: ?>
                                    <?php echo $this->_tpl_vars['item']['shipping_item_options']['service']; ?>

                                <?php endif; ?>
                            </span>
                        </div>

                        <div>
                            <?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
:
                            <span class="shc_price">
                                <?php if ($this->_tpl_vars['item']['shipping_item_options']['total'] > 0): ?>
                                    <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
                                    <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['shipping_item_options']['total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>

                                    <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
                                <?php else: ?>
                                    <?php echo $this->_tpl_vars['lang']['free']; ?>

                                <?php endif; ?>
                            </span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php if ($this->_tpl_vars['config']['shc_digital_product']): ?>
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['shc_download']; ?>
">
                        <?php if ($this->_tpl_vars['item']['Digital'] && $this->_tpl_vars['item']['Digital_product']): ?>
                            <a href="javascript://" class="<?php if ($this->_tpl_vars['orderInfo']['Status'] == 'unpaid'): ?>download-unpaid<?php else: ?>download<?php endif; ?>" data-item="<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                                <svg width="24" height="24" viewBox="0 0 24 24" class="icon <?php if ($this->_tpl_vars['orderInfo']['Status'] == 'unpaid'): ?>download<?php else: ?>grid<?php endif; ?>-icon-fill align-middle"><use xlink:href="#download_product"></use></svg>
                            </a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div data-caption="<?php echo $this->_tpl_vars['lang']['price']; ?>
" class="center">
                    <span class="price-cell shc_price"><?php echo $this->_tpl_vars['item']['Price']; ?>
</span>
                </div>
                <div data-caption="<?php echo $this->_tpl_vars['lang']['shc_quantity']; ?>
" class="text-left text-sm-center"><span class="font-weight-bold"><?php echo $this->_tpl_vars['item']['Quantity']; ?>
</span></div>
                <div data-caption="<?php echo $this->_tpl_vars['lang']['total']; ?>
" class="center">
                    <span class="price-cell shc_price"><?php echo $this->_tpl_vars['item']['total']; ?>
</span>
                </div>
            </div>
        <?php endforeach; endif; unset($_from); ?>
    </div>

    <div class="d-flex total-info">
        <div class="mb-4 mr-5 ml-auto">
            <div class="table-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
</div>
                <div class="value"><span class="value shc_price"><?php echo $this->_tpl_vars['orderInfo']['Shipping_price']; ?>
</span></div>
            </div>
            <div class="table-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['total']; ?>
</div>
                <div class="value"><span class="value shc_price" id="total_<?php echo $this->_tpl_vars['shcDealer']; ?>
"><?php echo $this->_tpl_vars['orderInfo']['Total']; ?>
</span></div>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<script class="fl-js-dynamic">
    var shcOrderID = '<?php echo $this->_tpl_vars['orderInfo']['ID']; ?>
';
    <?php echo '
    $(document).ready(function(){
        $(\'.download\').click(function() {
            shoppingCart.download($(this).data(\'item\'));
        });
        $(\'.download-unpaid\').click(function () {
            printMessage(\'error\', \''; ?>
<?php echo $this->_tpl_vars['lang']['shc_order_not_paid']; ?>
<?php echo '\');
        });
        $(\'.make-paid\').click(function() {
            $(\'.make-paid\').flModal({
                caption: \'\',
                content: \''; ?>
<?php echo $this->_tpl_vars['lang']['shc_do_you_want_make_paid']; ?>
<?php echo '\',
                prompt: \'makePaid()\',
                width: \'auto\',
                height: \'auto\',
                click: false
            });
        });
    });

    var makePaid = function() {
        var data = {
            mode: \'shoppingCartMakePaid\',
            item: shcOrderID
        };
        flUtil.ajax(data, function(response) {
            if (response.status == \'OK\') {
                $(\'.make-paid\').remove();
                $(\'.payment-status\').removeClass(\'item_pending\').addClass(\'item_paid\');
                $(\'.payment-status\').text(response.status_value);
                printMessage(\'notice\', response.message);
            } else {
                printMessage(\'error\', response.message);
            }
        });
    }
'; ?>

</script>

<!-- end Order Details -->