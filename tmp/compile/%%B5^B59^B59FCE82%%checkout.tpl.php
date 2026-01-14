<?php /* Smarty version 2.6.31, created on 2025-05-30 14:13:20
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/checkout.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'mapsAPI', '/home/gmoplus/public_html/plugins/shoppingCart/view/checkout.tpl', 4, false),array('function', 'gateways', '/home/gmoplus/public_html/plugins/shoppingCart/view/checkout.tpl', 82, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/checkout.tpl', 8, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins/shoppingCart/view/checkout.tpl', 51, false),array('modifier', 'regex_replace', '/home/gmoplus/public_html/plugins/shoppingCart/view/checkout.tpl', 54, false),)), $this); ?>
<!-- checkout step -->

<?php if (! $this->_tpl_vars['config']['shc_shipping_step']): ?>
    <?php echo $this->_plugins['function']['mapsAPI'][0][0]->mapsAPI(array(), $this);?>

<?php endif; ?>

<div id="checkout-step">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'shoppingCart/view/shipping_info.tpl') : smarty_modifier_cat($_tmp, 'shoppingCart/view/shipping_info.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if (! $this->_tpl_vars['config']['shc_shipping_step'] && $this->_tpl_vars['single_seller']): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('name' => $this->_tpl_vars['lang']['shc_pickup_address'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        <?php if ($this->_tpl_vars['cart']['items']['0']['pickup_details']['address']): ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-2">
                    <?php $_from = $this->_tpl_vars['cart']['items']['0']['pickup_details']['address']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['address']):
?>
                        <div class="table-cell">
                            <div class="name"><?php echo $this->_tpl_vars['address']['name']; ?>
</div>
                            <div class="value"><?php echo $this->_tpl_vars['address']['value']; ?>
</div>
                        </div>
                    <?php endforeach; endif; unset($_from); ?>
                    </div>
                </div>
                <?php if ($this->_tpl_vars['cart']['items']['0']['pickup_details']['coordinates'] && $this->_tpl_vars['cart']['items']['0']['pickup_details']['coordinates']['lat'] != '0' && $this->_tpl_vars['cart']['items']['0']['pickup_details']['coordinates']['lng'] != '0'): ?>
                <div class="col-md-6">
                    <div class="sch-map-interface w-100"></div>
                </div>

                <script class="fl-js-dynamic">
                <?php echo '

                $(function(){
                    flMap.init($(\'.sch-map-interface\'), {
                        control: \'topleft\',
                        zoom: 12,
                        addresses: [{
                            latLng: '; ?>
'<?php echo $this->_tpl_vars['cart']['items']['0']['pickup_details']['coordinates']['lat']; ?>
,<?php echo $this->_tpl_vars['cart']['items']['0']['pickup_details']['coordinates']['lng']; ?>
'<?php echo '
                        }]
                    });
                });

                '; ?>

                </script>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if (! $this->_tpl_vars['cart']['items']['0']['pickup_details']['address'] || ( $this->_tpl_vars['cart']['items']['0']['pickup_details']['address'] && count($this->_tpl_vars['cart']['items']['0']['pickup_details']['address']) <= 2 )): ?>
            <?php $this->assign('contact_link', ((is_array($_tmp=((is_array($_tmp='<a class="call-owner" data-listing-id="')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['cart']['items']['0']['ID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['cart']['items']['0']['ID'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '" href="javascript://">$1</a>') : smarty_modifier_cat($_tmp, '" href="javascript://">$1</a>'))); ?>
            <div class="text-notice mt-2"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['shc_pickup_no_address_hint'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/\[(.*)\]/', $this->_tpl_vars['contact_link']) : smarty_modifier_regex_replace($_tmp, '/\[(.*)\]/', $this->_tpl_vars['contact_link'])); ?>
</div>
        <?php endif; ?>

        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('name' => $this->_tpl_vars['lang']['shc_cart_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'shoppingCart/view/items.tpl') : smarty_modifier_cat($_tmp, 'shoppingCart/view/items.tpl')), 'smarty_include_vars' => array('shcItems' => $this->_tpl_vars['cart']['items'],'preview' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div class="d-flex">
        <div class="mb-4 mr-5 ml-auto shc-mobile-width-100">
            <div class="table-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
</div>
                <div class="value">
                    <span class="value shc_price shc-total-price" id="order-shipping-price"><?php echo $this->_tpl_vars['order_info']['Shipping_price']; ?>
</span>
                </div>
            </div>
            <div class="table-cell">
                <div class="name"><?php echo $this->_tpl_vars['lang']['total']; ?>
</div>
                <div class="value">
                    <span class="value shc_price shc-total-price" id="order-total"><?php echo $this->_tpl_vars['order_info']['Total']; ?>
</span>
                </div>
            </div>
        </div>
    </div>

    <!-- payment gateways -->
    <?php echo $this->_plugins['function']['gateways'][0][0]->gateways(array(), $this);?>

    <!-- payment gateways end -->

    <script class="fl-js-dynamic">
    <?php echo '
    $(function() {
        $(\'input[name="gateway"][value="cash"]\').click(function() {
            $(\'#custom-form\').html(\'\');
            $(\'#btn-checkout, #form-checkout input[type="submit"]\').off(\'click\');
        });

        // Show pickup details popup
        $(\'.show-pickup-details\').click(function(){
            var item_id = $(this).data(\'item-id\');

            if (!item_id || !pickup_data[item_id]) {
                return
            }

            var pd = pickup_data[item_id];
            var html = \'<div class="w-100">\';

            html += \'<div>\';
            for (var i in pd.address) {
                html += `<div class="table-cell small">
                    <div class="name">${pd.address[i].name}</div>
                    <div class="value">${pd.address[i].value}</div>
                </div>
                `;
            }
            html += \'</div>\';

            if (pd.coordinates) {
                html += \'<div class="mt-3 sch-map-interface w-100" style="height: 300px;"></div>\';
            }

            html += \'</div>\';

            (function(pd){
                $(\'body\').popup({
                    click: false,
                    width: 500,
                    caption: lang.shc_pickup_address,
                    content: html,
                    onShow: function($interface){
                        if (pd.coordinates) {
                            flMap.init($interface.find(\'.sch-map-interface\'), {
                                control: \'topleft\',
                                zoom: 12,
                                addresses: [{
                                    latLng: pd.coordinates.lat +\',\'+ pd.coordinates.lng
                                }]
                            });
                        }
                    }
                });
            })(pd);
        });
    })
    '; ?>

    </script>
</div>

<!-- checkout step end -->