<?php /* Smarty version 2.6.31, created on 2025-10-10 10:05:12
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/items.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'str2money', '/home/gmoplus/public_html/plugins/shoppingCart/view/items.tpl', 36, false),array('function', 'math', '/home/gmoplus/public_html/plugins/shoppingCart/view/items.tpl', 103, false),array('modifier', 'json_encode', '/home/gmoplus/public_html/plugins/shoppingCart/view/items.tpl', 74, false),)), $this); ?>
<!-- my cart page / items list -->

<div class="list-table cart-items-table">
    <div class="header">
        <div class="text-center" style="width: 40px;">#</div>
        <div><?php echo $this->_tpl_vars['lang']['item']; ?>
</div>
        <div style="width: 90px;"><?php echo $this->_tpl_vars['lang']['price']; ?>
</div>
        <div style="width: 100px;"><?php echo $this->_tpl_vars['lang']['shc_quantity']; ?>
</div>
        <div style="width: 106px;"><?php echo $this->_tpl_vars['lang']['total']; ?>
</div>
        <?php if (! $this->_tpl_vars['preview']): ?><div style="width: 40px;"></div><?php endif; ?>
    </div>

    <?php $this->assign('item_index', 1); ?>
    <?php $_from = $this->_tpl_vars['shcItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['itemsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['itemsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['itemsF']['iteration']++;
?>
        <?php if (! $this->_tpl_vars['item']['shc_available']): ?><?php continue; ?><?php endif; ?>

        <div id="cart-item-<?php echo $this->_tpl_vars['item']['ID']; ?>
" class="row">
            <div class="iteration no-flex text-center"><?php echo $this->_tpl_vars['item_index']; ?>
</div>
            <div data-caption="<?php echo $this->_tpl_vars['lang']['item']; ?>
" class="d-flex flex-column flex-md-row">
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

                <div class="mt-2 mt-md-0">
                    <a href="<?php echo $this->_tpl_vars['item']['listing_link']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['Item']; ?>
</a>
                    <?php if ($this->_tpl_vars['item']['shipping_item_options'] && ( $this->_tpl_vars['cur_step'] != 'cart' || $this->_tpl_vars['cur_step'] == '' ) && ! $this->_tpl_vars['item']['Digital']): ?>
                        <?php if (isset ( $this->_tpl_vars['item']['shipping_item_options']['0'] )): ?>
                            <div>
                                <div class="name"><?php echo $this->_tpl_vars['lang']['shc_shipping_method_select']; ?>
:</div>
                                <?php $_from = $this->_tpl_vars['item']['shipping_item_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?>
                                    <?php if (! empty ( $this->_tpl_vars['option']['total'] )): ?>
                                        <div class="field"><label><input type="radio" <?php if ($this->_tpl_vars['option']['selected']): ?>checked="checked"<?php endif; ?> accesskey="<?php echo $this->_tpl_vars['option']['total']; ?>
" name="items[<?php echo $this->_tpl_vars['item']['ID']; ?>
][service]" value="<?php echo $this->_tpl_vars['key']; ?>
" /> <?php echo $this->_tpl_vars['option']['title']; ?>
 - <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?><?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['option']['total']), $this);?>
 <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></label></div>
                                    <?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?>
                            </div>
                        <?php else: ?>
                            <div>
                                <?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
:
                                <span class="shc_price">
                                    <?php if ($this->_tpl_vars['item']['shipping_item_options']['total']): ?>
                                        <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
                                        <?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['item']['shipping_item_options']['total']), $this);?>

                                        <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?>
                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['lang']['free']; ?>

                                    <?php endif; ?>
                                </span>
                            </div>

                            <div>
                                <?php echo $this->_tpl_vars['lang']['shc_shipping_method']; ?>
:
                                <span>
                                    <?php if ($this->_tpl_vars['config']['shc_shipping_step']): ?>
                                        <?php if ($this->_tpl_vars['item']['shipping_item_options']['service']): ?>
                                            <?php echo $this->_tpl_vars['item']['shipping_item_options']['service']; ?>

                                        <?php elseif ($this->_tpl_vars['item']['shipping_item_options']['title']): ?>
                                            <?php echo $this->_tpl_vars['item']['shipping_item_options']['title']; ?>

                                        <?php endif; ?>
                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['lang']['shc_pickup']; ?>


                                        <?php if (! $this->_tpl_vars['single_seller']): ?>
                                            / <span class="link show-pickup-details" data-item-id="<?php echo $this->_tpl_vars['item']['ID']; ?>
"><?php echo $this->_tpl_vars['lang']['view_details']; ?>
</a>
                                            <script>
                                            <?php echo '
                                            if (typeof pickup_data == \'undefined\') {
                                                var pickup_data = [];
                                            }
                                            '; ?>

                                            pickup_data['<?php echo $this->_tpl_vars['item']['ID']; ?>
'] = JSON.parse('<?php echo json_encode($this->_tpl_vars['item']['pickup_details']); ?>
');
                                            </script>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </span>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>  
            </div>
            <div data-caption="<?php echo $this->_tpl_vars['lang']['price']; ?>
" class="nr item-price">
                <span class="shc_price"><?php echo $this->_tpl_vars['item']['price_original']; ?>
</span>
            </div>
            <div data-caption="<?php echo $this->_tpl_vars['lang']['shc_quantity']; ?>
" class="align-content-sm-center align-content-left text-left text-sm-center">
                <?php if ($this->_tpl_vars['item']['Digital'] && $this->_tpl_vars['item']['Quantity_unlim']): ?>
                    <span><?php echo $this->_tpl_vars['lang']['not_available']; ?>
</span>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['preview']): ?>
                        <?php echo $this->_tpl_vars['item']['Quantity']; ?>

                    <?php else: ?>
                        <span class="nav decrease" title="<?php echo $this->_tpl_vars['lang']['shc_decrease']; ?>
">-</span>
                        <input accesskey="<?php echo $this->_tpl_vars['item']['Price']; ?>
" 
                            type="text" 
                            class="numeric quantity text-center" 
                            name="quantity[<?php echo $this->_tpl_vars['item']['ID']; ?>
]" 
                            id="quantity_<?php echo $this->_tpl_vars['item']['ID']; ?>
" 
                            value="<?php echo $this->_tpl_vars['item']['Quantity']; ?>
" 
                            data-dealer="<?php echo $this->_tpl_vars['item']['Dealer_ID']; ?>
"
                            data-prev-quantity="<?php echo $this->_tpl_vars['item']['Quantity']; ?>
" 
                            data-available-quantity="<?php echo smarty_function_math(array('equation' => '(total-current)+1','total' => $this->_tpl_vars['item']['shc_quantity'],'current' => $this->_tpl_vars['item']['Quantity']), $this);?>
" 
                            maxlength="3" 
                        />
                        <span class="nav increase" title="<?php echo $this->_tpl_vars['lang']['shc_increase']; ?>
">+</span>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div data-caption="<?php echo $this->_tpl_vars['lang']['total']; ?>
" class="nr item-total">
                <span id="price_<?php echo $this->_tpl_vars['item']['ID']; ?>
" class="shc_price"><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['item']['total']), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</span>
            </div>
            <?php if (! $this->_tpl_vars['preview']): ?>
                <div class="action no-flex">
                    <span title="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" class="icon delete delete-item-from-cart remove" data-id="<?php echo $this->_tpl_vars['item']['ID']; ?>
" data-item-id="<?php echo $this->_tpl_vars['item']['Item_ID']; ?>
"></span>
                </div>
            <?php endif; ?>
        </div>

        <?php $this->assign('item_index', $this->_tpl_vars['item_index']+1); ?>
    <?php endforeach; endif; unset($_from); ?>
</div>
<?php if (! $this->_tpl_vars['preview']): ?>
    <input type="hidden" name="form" value="submit" />
    <input type="hidden" name="dealer" value="<?php echo $this->_tpl_vars['item']['Dealer_ID']; ?>
" />

    <div class="ralign">
        <!-- total -->
        <div class="shc_value pt-3 pb-4">
            <span class="price-cell"><?php echo $this->_tpl_vars['lang']['total']; ?>
:</span>
            <span id="total_<?php echo $this->_tpl_vars['shcDealer']; ?>
" class="value shc_price"><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['shcTotal']), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</span>
        </div>
        <!-- total end -->
    </div>
    <div class="text-right">
        <input type="submit" value="<?php echo $this->_tpl_vars['lang']['next_step']; ?>
" />
    </div>
<?php endif; ?>

<!-- my cart page / items list end -->