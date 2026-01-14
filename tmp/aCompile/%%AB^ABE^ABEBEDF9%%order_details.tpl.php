<?php /* Smarty version 2.6.31, created on 2025-05-30 21:07:42
         compiled from /home/gmoplus/public_html/plugins//shoppingCart/admin/view//order_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins//shoppingCart/admin/view//order_details.tpl', 3, false),array('modifier', 'date_format', '/home/gmoplus/public_html/plugins//shoppingCart/admin/view//order_details.tpl', 22, false),array('modifier', 'number_format', '/home/gmoplus/public_html/plugins//shoppingCart/admin/view//order_details.tpl', 27, false),)), $this); ?>
<!-- Order Details -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 

    <fieldset class="light">
        <legend id="legend_search_settings" class="up" onclick="fieldset_action('search_settings');"><?php echo $this->_tpl_vars['lang']['shc_order_details']; ?>
</legend>
        <table class="list">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['shc_order_key']; ?>
:</td>
                <td class="value"><b><?php echo $this->_tpl_vars['order_info']['Order_key']; ?>
</b></td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['shc_buyer']; ?>
:</td>
                <td class="value"><a href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=accounts&amp;action=view&amp;userid=<?php echo $this->_tpl_vars['order_info']['Buyer_ID']; ?>
"><?php echo $this->_tpl_vars['order_info']['bFull_name']; ?>
</a></td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['shc_dealer']; ?>
:</td>
                <td class="value"><a href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=accounts&amp;action=view&amp;userid=<?php echo $this->_tpl_vars['order_info']['Dealer_ID']; ?>
"><?php echo $this->_tpl_vars['order_info']['dFull_name']; ?>
</a></td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['date']; ?>
:</td>
                <td class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['total']; ?>
:</td>
                <td class="value">
                    <b><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?> <span id="total"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['Total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
</span> <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></b>
                </td>
            </tr>
            <?php if ($this->_tpl_vars['config']['shc_method'] == 'multi' && $this->_tpl_vars['config']['shc_commission_enable']): ?>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['shc_commission']; ?>
:</td>
                <td class="value"><b><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?> <span id="total"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['Commission_total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
</span> <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></b></td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['order_info']['Cash']): ?>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['shc_payment_type']; ?>
:</td>
                <td class="value"><?php echo $this->_tpl_vars['lang']['shc_payment_cash']; ?>
</td>
            </tr>
            <?php endif; ?>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
:</td>
                <td class="value order-status">
                    <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['order_info']['Status']]; ?>

                    <?php if ($this->_tpl_vars['order_info']['Cash'] && $this->_tpl_vars['order_info']['Status'] == 'pending'): ?>
                        <a href="javascript://" class="button low make-paid"><?php echo $this->_tpl_vars['lang']['shc_make_paid']; ?>
</a>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
    </fieldset>

<?php if ($this->_tpl_vars['order_info']['Escrow_status'] == 'pending'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'shoppingCart/admin/view/order_confirm.tpl') : smarty_modifier_cat($_tmp, 'shoppingCart/admin/view/order_confirm.tpl')), 'smarty_include_vars' => array('order_info' => $this->_tpl_vars['order_info'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['pluginPath'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'shipping_info.tpl') : smarty_modifier_cat($_tmp, 'shipping_info.tpl')), 'smarty_include_vars' => array('order_info' => $this->_tpl_vars['order_info'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if ($this->_tpl_vars['order_info']['txn_info'] && ! $this->_tpl_vars['order_info']['Cash']): ?>
    <fieldset class="light">
        <legend id="legend_payment_details" class="up" onclick="fieldset_action('payment_details');"><?php echo $this->_tpl_vars['lang']['transaction_info']; ?>
</legend>
            <table class="list">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['txn_id']; ?>
:</td>
                <td class="value"><b><?php echo $this->_tpl_vars['order_info']['txn_info']['Txn_ID']; ?>
</b></td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['payment_gateway']; ?>
:</td>
                <td class="value"><b><?php echo $this->_tpl_vars['order_info']['txn_info']['Gateway']; ?>
</b></td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['date']; ?>
:</td>
                <td class="value"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['txn_info']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</b></td>
            </tr>
        </table>
    </fieldset>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['order_info']['items']): ?>
        <fieldset class="light">
            <legend id="legend_items" class="up" onclick="fieldset_action('items');"><?php echo $this->_tpl_vars['lang']['shc_order_items']; ?>
</legend>
            <div id="items_list">
                <table class="table">
                    <tr class="header"> 
                        <td colspan="3"><?php echo $this->_tpl_vars['lang']['item']; ?>
</td>
                        <td class="divider"></td>
                        <td align="center" width="100"><?php echo $this->_tpl_vars['lang']['price']; ?>
</td>
                        <td class="divider"></td>
                        <td align="center" width="100"><?php echo $this->_tpl_vars['lang']['shc_quantity']; ?>
</td>
                        <td class="divider"></td>
                        <td align="center" width="120"><?php echo $this->_tpl_vars['lang']['total']; ?>
</td>
                    </tr>
                    <?php $_from = $this->_tpl_vars['order_info']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['orderItemF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['orderItemF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['orderItemF']['iteration']++;
?>
                    <tr class="body" id="item_<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                        <td class="photo" valign="top" align="center" width="80">
                            <a href="<?php echo $this->_tpl_vars['item']['listing_link']; ?>
"  target="_blank"> 
                                <img alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" style="width: 70px;" src="data:image/png;base64, <?php echo $this->_tpl_vars['item']['Image']; ?>
" />
                            </a>
                        </td>
                        <td class="divider"></td>
                        <td class="text-overflow">
                            <a href="<?php echo $this->_tpl_vars['item']['listing_link']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['Item']; ?>
</a>
                            <?php if (( ! $this->_tpl_vars['item']['Digital'] && ! $this->_tpl_vars['item']['Digital_product'] ) || ! $this->_tpl_vars['config']['shc_digital_product']): ?>
                                <div class="value">
                                    <?php echo $this->_tpl_vars['lang']['shc_shipping_method']; ?>
: <?php if ($this->_tpl_vars['item']['shipping_item_options']['title']): ?><?php echo $this->_tpl_vars['item']['shipping_item_options']['title']; ?>
<?php else: ?><?php echo $this->_tpl_vars['item']['shipping_item_options']['service']; ?>
<?php endif; ?>
                                </div>
                                <div class="value">
                                    <?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
: <?php if ($this->_tpl_vars['item']['shipping_item_options']['total'] > 0): ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['shipping_item_options']['total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
<?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?><?php else: ?><?php echo $this->_tpl_vars['lang']['free']; ?>
<?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['item']['shipping_item_options']['tracking_number']): ?>
                                <div class="value"><?php echo $this->_tpl_vars['lang']['shc_tracking_number']; ?>
: <?php echo $this->_tpl_vars['item']['shipping_item_options']['tracking_number']; ?>
</div>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['order_info']['Dealer_ID'] == $this->_tpl_vars['account_info']['ID'] && ( $this->_tpl_vars['item']['shipping_item_options']['method'] == 'fedex' || $this->_tpl_vars['item']['shipping_item_options']['method'] == 'UPS' || $this->_tpl_vars['item']['shipping_item_options']['method'] == 'USPS' )): ?>
                                <a href="javascript:void(0);" data-item-id="<?php echo $this->_tpl_vars['item']['ID']; ?>
" class="button add-tracking-number"><?php echo $this->_tpl_vars['lang']['shc_add_tracking_number']; ?>
</a>
                            <?php endif; ?>
                            <?php if ($this->_tpl_vars['config']['shc_digital_product'] && $this->_tpl_vars['item']['Digital'] && $this->_tpl_vars['item']['Digital_product']): ?>
                                <div>
                                    <a href="javascript://" class="<?php if ($this->_tpl_vars['order_info']['Status'] == 'unpaid'): ?>download-unpaid<?php else: ?>download<?php endif; ?>" data-item="<?php echo $this->_tpl_vars['item']['ID']; ?>
"><?php echo $this->_tpl_vars['lang']['download']; ?>
</a>
                                </div>
                            <?php endif; ?>
                        </td>
                        <td class="divider"></td>
                        <td style="white-space: nowrap;" align="center"><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['Price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
 <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></td>
                        <td class="divider"></td>
                        <td align="center">
                            <?php echo $this->_tpl_vars['item']['Quantity']; ?>

                        </td>
                        <td class="divider"></td>
                        <td style="white-space: nowrap;" align="center"><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?> <span id="price_<?php echo $this->_tpl_vars['item']['ID']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
</span> <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></td>
                    </tr>
                    <?php endforeach; endif; unset($_from); ?>

                    <!-- Shipping -->
                    <tr>
                        <td style="text-align: right" colspan="8">
                            <b><?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
</b>
                        </td>   
                        <td style="text-align: center"> 
                            <div><b><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?> <?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['Shipping_price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
 <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></b></div>
                        </td>
                    </tr>

                    <!-- Total -->
                    <tr>
                        <td style="text-align: right" colspan="8">
                            <b><?php echo $this->_tpl_vars['lang']['total']; ?>
</b>
                        </td>   
                        <td style="text-align: center"> 
                            <div><b><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?> <span id="total"><?php echo ((is_array($_tmp=$this->_tpl_vars['order_info']['Total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
</span> <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></b></div>
                        </td>
                    </tr>
                </table>
            </div>
        </fieldset>
    <?php endif; ?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 

<script class="fl-js-dynamic">
    var shcOrderID = '<?php echo $this->_tpl_vars['order_info']['ID']; ?>
';
    var shcSellerID = '<?php echo $this->_tpl_vars['order_info']['Dealer_ID']; ?>
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
            rlConfirm(lang[\'shc_do_you_want_make_paid\'], "makePaid", "", "load");
        });
    });
    var makePaid = function() {
        flynax.sendAjaxRequest(\'shoppingCartMakePaid\', {orderID: shcOrderID, accountID: shcSellerID}, function(response){
            if (response.status == \'OK\') {
                $(\'.order-status\').html(response.status_value);
                printMessage(\'notice\', response.message);
            } else {
                printMessage(\'error\', response.message);
            }
        });
    }
'; ?>

</script>
<!-- end Order Details -->