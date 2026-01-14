<?php /* Smarty version 2.6.31, created on 2025-10-10 12:28:28
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/shipping.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/shipping.tpl', 6, false),array('modifier', 'replace', '/home/gmoplus/public_html/plugins/shoppingCart/view/shipping.tpl', 42, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins/shoppingCart/view/shipping.tpl', 50, false),array('modifier', 'df', '/home/gmoplus/public_html/plugins/shoppingCart/view/shipping.tpl', 67, false),array('modifier', 'lower', '/home/gmoplus/public_html/plugins/shoppingCart/view/shipping.tpl', 132, false),array('modifier', 'number_format', '/home/gmoplus/public_html/plugins/shoppingCart/view/shipping.tpl', 184, false),array('function', 'str2money', '/home/gmoplus/public_html/plugins/shoppingCart/view/shipping.tpl', 33, false),array('function', 'rlHook', '/home/gmoplus/public_html/plugins/shoppingCart/view/shipping.tpl', 175, false),)), $this); ?>
<!-- shipping info  -->

<div id="shipping_fields">
    <?php if ($this->_tpl_vars['shcShippingfields']): ?>
        <?php $this->assign('mf_form_prefix', 'f'); ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'shc_shipping_location_details','name' => $this->_tpl_vars['lang']['shc_shipping_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field.tpl') : smarty_modifier_cat($_tmp, 'field.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['shcShippingfields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'shc_cart_details','name' => $this->_tpl_vars['lang']['shc_cart_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="submit-cell clearfix">
        <div class="name"></div>
        <div class="field">
            <div class="list-table cart-items-table">
                <?php $_from = $this->_tpl_vars['cart']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['itemsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['itemsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['itemsF']['iteration']++;
?>
                <?php if (! $this->_tpl_vars['item']['shc_available']): ?><?php continue; ?><?php endif; ?>

                <input type="hidden" name="items[<?php echo $this->_tpl_vars['item']['ID']; ?>
][id]" value="<?php echo $this->_tpl_vars['item']['Item_ID']; ?>
">
                <div class="row no-gutters pl-0" id="item_<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                    <div data-caption="<?php echo $this->_tpl_vars['lang']['item']; ?>
" class="d-flex flex-column flex-md-row <?php if (($this->_foreach['itemsF']['iteration'] <= 1)): ?>pt-0<?php else: ?>pt-3<?php endif; ?> pb-3">
                        <a href="<?php echo $this->_tpl_vars['item']['listing_link']; ?>
" target="_blank" class="mr-2">
                            <img alt="<?php echo $this->_tpl_vars['item']['title']; ?>
" class="shc-item-picture" src="<?php if (empty ( $this->_tpl_vars['item']['main_photo'] )): ?><?php echo $this->_tpl_vars['rlTplBase']; ?>
img/no-picture.jpg<?php else: ?><?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
files/<?php echo $this->_tpl_vars['item']['main_photo']; ?>
<?php endif; ?>" />
                        </a>

                        <div class="mt-2 mt-md-0">
                            <a href="<?php echo $this->_tpl_vars['item']['listing_link']; ?>
" target="_blank">
                                <?php echo $this->_tpl_vars['item']['Item']; ?>
 <?php echo '(<span class="shc_price" id="price_'; ?><?php echo $this->_tpl_vars['item']['ID']; ?><?php echo '">'; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['item']['total']), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo '</span>)'; ?>

                            </a>
                            <?php if (! $this->_tpl_vars['item']['Digital']): ?>
                                <div class="mt-1">
                                    <?php if ($this->_tpl_vars['item']['Quantity_changed']): ?>
                                        <?php $this->assign('quantity_phrase', ('{')."quantity".('}')); ?>
                                        <div class="mb-1 red"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['shc_quantity_changed_hint'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['quantity_phrase'], $this->_tpl_vars['item']['Quantity']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['quantity_phrase'], $this->_tpl_vars['item']['Quantity'])); ?>
</div>
                                    <?php endif; ?>

                                    <?php if ($this->_tpl_vars['item']['Free_shipping'] || $this->_tpl_vars['item']['Shipping_price_type'] == 'free'): ?>
                                        <div class="mb-1">
                                            <?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
: <?php echo $this->_tpl_vars['lang']['free']; ?>

                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <?php if (is_array ( $this->_tpl_vars['item']['Shipping_method_fixed'] ) && count($this->_tpl_vars['item']['Shipping_method_fixed']) > 1): ?>
                                                <span class="mr-2 mb-1"><?php echo $this->_tpl_vars['lang']['shc_shipping_method']; ?>
:</span>
                                                <span>
                                                <?php $_from = $this->_tpl_vars['item']['Shipping_method_fixed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['shippingMethodF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['shippingMethodF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['shippingMethod']):
        $this->_foreach['shippingMethodF']['iteration']++;
?>
                                                    <?php $this->assign('shippingMethodVal', ((is_array($_tmp='shc_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['shippingMethod']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['shippingMethod']))); ?>
                                                        <span class="custom-input mr-2">
                                                        <label><input <?php if ($_POST['items'][$this->_tpl_vars['item']['ID']]['shipping_method_fixed'] == $this->_tpl_vars['shippingMethod'] || ($this->_foreach['shippingMethodF']['iteration'] <= 1)): ?>checked="checked"<?php endif; ?> type="radio" name="items[<?php echo $this->_tpl_vars['item']['ID']; ?>
][shipping_method_fixed]" value="<?php echo $this->_tpl_vars['shippingMethod']; ?>
" /><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['shippingMethodVal']]; ?>
</label>
                                                    </span>
                                                <?php endforeach; endif; unset($_from); ?>
                                                </span>
                                            <?php else: ?>
                                                <?php $this->assign('shippingMethodVal', ((is_array($_tmp='shc_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']['Shipping_method_fixed']['0']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item']['Shipping_method_fixed']['0']))); ?>
                                                <?php echo $this->_tpl_vars['lang']['shc_shipping_method']; ?>
: <?php if (! empty ( $this->_tpl_vars['lang'][$this->_tpl_vars['shippingMethodVal']] )): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['shippingMethodVal']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['shc_pickup']; ?>
<?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php elseif ($this->_tpl_vars['item']['Shipping_price_type'] == 'fixed'): ?>
                                        <?php if (((is_array($_tmp=$this->_tpl_vars['item']['Shipping_fixed_prices'])) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp)) > 0 && $this->_tpl_vars['config']['shc_shipping_price_fixed'] == 'multi'): ?>
                                            <?php $this->assign('currency', ((is_array($_tmp='currency')) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp))); ?>
                                            <div data-item="<?php echo $this->_tpl_vars['item']['ID']; ?>
" class="table-cell shipping-fixed-price-<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                                                <div class="name"><?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
 <span class="red">*</span></div>
                                                <div class="field single-field">
                                                    <select id="item-fixed-price-<?php echo $this->_tpl_vars['item']['ID']; ?>
" name="items[<?php echo $this->_tpl_vars['item']['ID']; ?>
][fixed_price]" class="item-fixed-price" data-item="<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                                                        <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                                                        <?php $_from = $this->_tpl_vars['item']['Shipping_fixed_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['fixed_price']):
?>
                                                            <option value="<?php echo $this->_tpl_vars['key']; ?>
" data-fixed-price="<?php echo $this->_tpl_vars['fixed_price']['price']; ?>
" <?php if ($_POST['items'][$this->_tpl_vars['item']['ID']]['fixed_index'] == $this->_tpl_vars['key']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['currency']['0']['name']; ?>
<?php echo $this->_tpl_vars['fixed_price']['price']; ?>
 - <?php echo $this->_tpl_vars['fixed_price']['name']; ?>
</option>
                                                        <?php endforeach; endif; unset($_from); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        <?php else: ?>
                                            <div data-item="<?php echo $this->_tpl_vars['item']['ID']; ?>
" class="shipping-fixed-price-<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                                                <?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
:
                                                <span class="shc_price" title="<?php echo $this->_tpl_vars['lang']['shc_shipping_price_type_fixed']; ?>
">
                                                    <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
                                                    <?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['item']['Shipping_price']), $this);?>

                                                    <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?> <?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
                                                </span>
                                            </div>
                                        <?php endif; ?>

                                        <div class="d-flex flex-wrap">
                                            <?php if (count($this->_tpl_vars['item']['Shipping_method_fixed']) > 1): ?>
                                                <span class="mr-2 mb-1"><?php echo $this->_tpl_vars['lang']['shc_shipping_method']; ?>
:</span>
                                                <span>
                                                <?php $_from = $this->_tpl_vars['item']['Shipping_method_fixed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['shippingMethodF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['shippingMethodF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['shippingMethod']):
        $this->_foreach['shippingMethodF']['iteration']++;
?>
                                                    <?php $this->assign('shippingMethodVal', ((is_array($_tmp='shc_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['shippingMethod']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['shippingMethod']))); ?>
                                                    <span class="custom-input mr-2">
                                                        <label><input <?php if ($_POST['items'][$this->_tpl_vars['item']['ID']]['shipping_method_fixed'] == $this->_tpl_vars['shippingMethod'] || ($this->_foreach['shippingMethodF']['iteration'] <= 1)): ?>checked="checked"<?php endif; ?> type="radio" name="items[<?php echo $this->_tpl_vars['item']['ID']; ?>
][shipping_method_fixed]" class="shipping-method-fixed" value="<?php echo $this->_tpl_vars['shippingMethod']; ?>
" data-item="<?php echo $this->_tpl_vars['item']['ID']; ?>
" /><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['shippingMethodVal']]; ?>
</label>
                                                    </span>
                                                <?php endforeach; endif; unset($_from); ?>
                                                </span>
                                            <?php else: ?>
                                                <?php $this->assign('shippingMethodVal', ((is_array($_tmp='shc_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']['Shipping_method_fixed']['0']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item']['Shipping_method_fixed']['0']))); ?>
                                                <?php echo $this->_tpl_vars['lang']['shc_shipping_method']; ?>
: <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['shippingMethodVal']]; ?>

                                            <?php endif; ?>
                                        </div>

                                        <?php if ($this->_tpl_vars['item']['Shipping_discount_at'] && $this->_tpl_vars['item']['Quantity'] >= $this->_tpl_vars['item']['Shipping_discount_at']): ?>
                                            <div>
                                                <?php echo $this->_tpl_vars['lang']['shc_shipping_discount']; ?>
: <?php echo $this->_tpl_vars['item']['Shipping_discount']; ?>
%
                                            </div>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <div class="submit-cell">
                                            <div class="name"><?php echo $this->_tpl_vars['lang']['shc_shipping_method']; ?>
 <span class="red">*</span></div>
                                            <div class="field single-field">
                                                <select id="item-shipping-method-<?php echo $this->_tpl_vars['item']['ID']; ?>
" name="items[<?php echo $this->_tpl_vars['item']['ID']; ?>
][method]" class="item-shipping-methods" data-item="<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                                                    <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                                                    <?php $_from = $this->_tpl_vars['shipping_methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['method']):
?>
                                                        <?php if ($this->_tpl_vars['item']['shipping'][$this->_tpl_vars['method']['Key']]['enable']): ?>
                                                            <option value="<?php echo $this->_tpl_vars['method']['Key']; ?>
" data-fixed-price="<?php echo $this->_tpl_vars['item']['shipping'][$this->_tpl_vars['method']['Key']]['price']; ?>
" <?php if ($_POST['items'][$this->_tpl_vars['item']['ID']]['method'] == $this->_tpl_vars['method']['Key']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['method']['name']; ?>
</option>
                                                        <?php endif; ?>
                                                    <?php endforeach; endif; unset($_from); ?>
                                                </select>
                                            </div>
                                        </div>
                                        <?php $_from = $this->_tpl_vars['shipping_methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['method']):
?>
                                            <?php if ($this->_tpl_vars['item']['shipping'][$this->_tpl_vars['method']['Key']]['enable']): ?>
                                                <div id="shipping-method-<?php echo $this->_tpl_vars['item']['ID']; ?>
-<?php echo $this->_tpl_vars['method']['Key']; ?>
" class="hide">
                                                    <?php if ($this->_tpl_vars['item']['shipping'][$this->_tpl_vars['method']['Key']]['price']): ?>
                                                        <?php echo $this->_tpl_vars['lang']['shc_fixed_shipping_price']; ?>
:&nbsp;<span id="shipipng-price-fixed-<?php echo $this->_tpl_vars['item']['ID']; ?>
"><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?><?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['item']['shipping'][$this->_tpl_vars['method']['Key']]['price']), $this);?>
 <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?> <?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></span>
                                                    <?php else: ?>
                                                        <?php $this->assign('methodKey', ((is_array($_tmp=$this->_tpl_vars['method']['Key'])) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp))); ?>
                                                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'shoppingCart/shipping/') : smarty_modifier_cat($_tmp, 'shoppingCart/shipping/')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['methodKey']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['methodKey'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '/view/cart_step.tpl') : smarty_modifier_cat($_tmp, '/view/cart_step.tpl')), 'smarty_include_vars' => array('item_id' => $this->_tpl_vars['item']['ID'],'item_data' => $this->_tpl_vars['item']['shipping'],'services' => $this->_tpl_vars['item']['services'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
    </div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="mt-3 shc-mobile-inline-cell">
        <div class="table-cell">
            <div class="name"><?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
</div>
            <div class="value inline-fields">
                <span class="value shc_price shc-total-price" id="order-shipping-price"><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['cart']['shipping_price']), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</span>
            </div>
        </div>

        <div class="table-cell">
            <div class="name"><?php echo $this->_tpl_vars['lang']['total']; ?>
</div>
            <div class="value inline-fields">
                <span class="value shc_price shc-total-price" id="order-total"><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['cart']['total']), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo ' '; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</span>
            </div>
        </div>
    </div>

    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'shoppingCartShippingField'), $this);?>

</div>
<!-- end shipping info -->

<script class="fl-js-dynamic">
    flynax.qtip();
    var shcItems = new Array();
    lang['notice_field_empty'] = '<?php echo $this->_tpl_vars['lang']['notice_field_empty']; ?>
';
    var shcCountry = $('select[name="f[country]"] option:selected').val();
    var shippingPrice = parseFloat(<?php echo ((is_array($_tmp=$this->_tpl_vars['cart']['shipping_price'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
);
    var shcShippingMethods = [<?php $_from = $this->_tpl_vars['shipping_methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['FshippingMethods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['FshippingMethods']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['method']):
        $this->_foreach['FshippingMethods']['iteration']++;
?>'<?php echo $this->_tpl_vars['method']['Key']; ?>
'<?php if (! ($this->_foreach['FshippingMethods']['iteration'] == $this->_foreach['FshippingMethods']['total'])): ?>,<?php endif; ?><?php endforeach; endif; unset($_from); ?>];
    var order_total = 0;

    <?php $_from = $this->_tpl_vars['cart']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        shcItems[<?php echo $this->_tpl_vars['item']['ID']; ?>
] = new Array();
        shcItems[<?php echo $this->_tpl_vars['item']['ID']; ?>
]['ID'] = <?php echo $this->_tpl_vars['item']['ID']; ?>
;
        shcItems[<?php echo $this->_tpl_vars['item']['ID']; ?>
]['Price'] = <?php echo $this->_tpl_vars['item']['Price']; ?>
;
        shcItems[<?php echo $this->_tpl_vars['item']['ID']; ?>
]['Quantity'] = <?php echo $this->_tpl_vars['item']['Quantity']; ?>
;
        shcItems[<?php echo $this->_tpl_vars['item']['ID']; ?>
]['Shipping_discount'] = <?php echo $this->_tpl_vars['item']['Shipping_discount']; ?>
;
        shcItems[<?php echo $this->_tpl_vars['item']['ID']; ?>
]['Shipping_discount_at'] = <?php echo $this->_tpl_vars['item']['Shipping_discount_at']; ?>
;
    <?php endforeach; endif; unset($_from); ?>

    <?php echo '
    $(document).ready(function(){
        var total_price_data = shoppingCart.getPrice($(\'#order-total\'));
        order_total = total_price_data ? total_price_data[\'price\'] : 0;

        shoppingCart.calculateShippingPrice();  
        $(\'select.item-fixed-price\').change(function() {
            shoppingCart.calculateShippingPrice();
        });

        $(\'select.item-shipping-methods\').each(function() {
            if ($(this).val() != \'\') {
                shoppingCart.handleShippingSettings($(this).val(), $(this).attr(\'data-item\'));  
            }
        });
        $(\'select.item-shipping-methods\').change(function() {
            $(\'select.service-\' + $(this).val()).empty();
            $(\'input.service-single-\' + $(this).val()).val(\'\');
            shoppingCart.handleShippingSettings($(this).val(), $(this).attr(\'data-item\'));
            shoppingCart.calculateShippingPrice();
            handleUSPSOrigin($(\'select[name="f[location_level1]"] option:selected\').val());
        });
        $(\'select[name="f[location_level1]"]\').change(function() {
            handleUSPSOrigin($(this).val());
        });

        if (shcCountry) {
            handleUSPSOrigin(shcCountry);
        }

        // get quote
        $(\'.calculate-rate\').click(function() {
            let shcErrors = [];
            let errorFields = [];
            var checkFields = [\'location_level1\', \'location_level2\', \'location_level3\', \'zip\', \'address\'];

            for(var i = 0; i < checkFields.length; i++) {
                var pattern = new RegExp(/location_level/, \'gi\');
                if (checkFields[i].match(pattern)) {
                    var fEl = $(\'select[name="f[\'+checkFields[i]+\']"]\');
                    if (!fEl.length) {
                        var fEl = $(\'input[name="f[\'+checkFields[i]+\']"]\');
                    }
                } else {
                    var fEl = $(\'input[name="f[\'+checkFields[i]+\']"]\');
                }
                if (!fEl.val()) {
                    errorFields.push(\'f[\'+checkFields[i]+\']\');
                    shcErrors.push(lang[\'notice_field_empty\'].replace(\'{field}\', fEl.parent().prev(\'div.name\').html()));
                }
            }

            if (shcErrors.length > 0) {
                printMessage(\'error\', shcErrors, errorFields) 
                return;
            }

            let elBtn = $(this);
            var currentMethod = elBtn.attr(\'method\');
            var itemID = elBtn.attr(\'item\');

            var tmpName = elBtn.html();
            elBtn.text(lang[\'loading\']);
            $(\'select.service-\' + currentMethod).closest(\'div.submit-cell\').addClass(\'hide\');

            var data = {
                mode: \'shoppingCartGetQuote\',
                item: itemID,
                method: currentMethod,
                form: $.param($(\'#shipping-form\').serializeArray()) 
            };
            flUtil.ajax(data, function(response) {
                if (response.status == \'OK\') {
                    $(\'select.service-\' + currentMethod).empty();
                    $(\'input.service-single-\' + currentMethod).val(\'\');
                    if (response.multi) {
                        for (var i in response.quote) {
                            var selected = \'\';
                            var _i = response.quote[i];
                            if (i == 0) {
                                selected = \'selected="selected"\';
                            }
                            $(\'select.service-\' + currentMethod).append(\'<option value="\'+ _i.service +\'" data-fixed-price="\'+ _i.total +\'" \'+selected+\'>\'+ _i.service +\' - \'+ _i.total +\'</option>\');
                        }
                        $(\'select.service-\' + currentMethod).closest(\'div.submit-cell\').removeClass(\'hide\');
                    } else {
                        $(\'input.service-single-\' + currentMethod).val(response.quote.total);
                    }
                    elBtn.text(tmpName);
                    shoppingCart.calculateShippingPrice();
                } else {
                    printMessage(\'error\', response.quote.error);
                }
                elBtn.text(tmpName);
            });
        });

        $(\'.shipping-method-fixed\').click(function() {
            shoppingCart.calculateShippingPrice();

            var itemID = $(this).data(\'item\');
            if ($(this).is(\':checked\') && $(this).val() == \'courier\') {
                $(\'.shipping-fixed-price-\' + itemID).removeClass(\'hide\');
            } else {
                $(\'.shipping-fixed-price-\' + itemID).addClass(\'hide\');
            }
        });

        $(\'.shipping-method-fixed\').each(function() {
            var itemID = $(this).data(\'item\');
            if ($(this).is(\':checked\')) {
                if ($(this).val() == \'courier\') {
                    $(\'.shipping-fixed-price-\' + itemID).removeClass(\'hide\');
                } else {
                    $(\'.shipping-fixed-price-\' + itemID).addClass(\'hide\');
                }
            }
        });
    });
    
    var handleUSPSOrigin = function(country) {
        var pattern = new RegExp(\'/united_states/\', \'gm\');
        $(\'.shc-usps-domestic-services\').each(function() {
            if (country.match(pattern) || country == \'US\') {
                $(this).removeClass(\'hide\');
            } else {
                $(this).addClass(\'hide\');
            }
        });
        $(\'.shc-usps-international-services\').each(function() {
            if (country.match(pattern) || country == \'US\') {
                $(this).addClass(\'hide\');
            } else {
                $(this).removeClass(\'hide\');
            }
        });
    }
    '; ?>

</script>