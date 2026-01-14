<?php /* Smarty version 2.6.31, created on 2025-05-31 09:22:51
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/order_confirm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/order_confirm.tpl', 2, false),array('modifier', 'date_format', '/home/gmoplus/public_html/plugins/shoppingCart/view/order_confirm.tpl', 18, false),)), $this); ?>
<?php if ($this->_tpl_vars['config']['shc_escrow']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'shc_escrow','name' => $this->_tpl_vars['lang']['shc_escrow_item'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="row mb-2">
        <div class="col-12 escrow-container">
            <?php if ($this->_tpl_vars['orderInfo']['Escrow_status'] == 'pending'): ?>
                <a href="javascript://" class="button low confirm-order"><?php echo $this->_tpl_vars['lang']['shc_order_confirm']; ?>
</a>
                <span><?php echo $this->_tpl_vars['lang']['or']; ?>
</span>
                <a href="javascript://" class="button low cancel-order"><?php echo $this->_tpl_vars['lang']['shc_cancel_order']; ?>
</a>
            <?php elseif ($this->_tpl_vars['orderInfo']['Escrow_status'] == 'confirmed'): ?>
                <span><?php echo $this->_tpl_vars['lang']['shc_escrow_confirmed']; ?>
</span>
            <?php elseif ($this->_tpl_vars['orderInfo']['Escrow_status'] == 'canceled'): ?>
                <span><?php echo $this->_tpl_vars['lang']['shc_escrow_canceled']; ?>
</span>
            <?php endif; ?>
        </div>
    </div>
    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_escrow_expiration']; ?>
</span></div></div>
        <div class="value"><?php echo ((is_array($_tmp=$this->_tpl_vars['orderInfo']['Escrow_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</div>
    </div>
    <div class="table-cell">
        <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['shc_deal_id']; ?>
</span></div></div>
        <div class="value"><?php echo $this->_tpl_vars['orderInfo']['Deal_ID']; ?>
</div>
    </div>
    <div id="cancel_order_form" class="hide">
        <div id="cancel_reason" class="submit-cell w-100">
            <label><?php echo $this->_tpl_vars['lang']['shc_cancel_reason']; ?>
</label>
            <div class="field single-field">
                <textarea rows="3" id="cancel_reason_field"></textarea>
            </div>
        </div>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<script class="fl-js-dynamic">
    <?php echo '
    let shcEscrowOrderID = \''; ?>
<?php echo $this->_tpl_vars['orderInfo']['ID']; ?>
<?php echo '\';
    $(document).ready(function(){
        $(\'.confirm-order\').click(function() {
            $(\'.confirm-order\').flModal({
                caption: \'\',
                content: \''; ?>
<?php echo $this->_tpl_vars['lang']['shc_do_you_want_confirm_order']; ?>
<?php echo '\',
                prompt: \'escrowConfirmOrder()\',
                width: \'auto\',
                height: \'auto\',
                click: false
            });
        });


        $(\'.cancel-order\').click(function() {
            var el = \'#cancel_order_form\';

            flUtil.loadScript([
                rlConfig[\'tpl_base\'] + \'components/popup/_popup.js\',
            ], function(){
                $(\'.escrow-container\').popup({
                    click: false,
                    scroll: true,
                    closeOnOutsideClick: false,
                    content: $(el).html(),
                    caption: \''; ?>
<?php echo $this->_tpl_vars['lang']['shc_do_you_want_cancel_order']; ?>
<?php echo '\',
                    navigation: {
                        okButton: {
                            text: \''; ?>
<?php echo $this->_tpl_vars['lang']['shc_ok']; ?>
<?php echo '\',
                            onClick: function(popup){
                                let reason = popup.$interface.find(\'#cancel_reason_field\').val();
                                escrowCancelOrder(reason);
                                popup.close();
                            }
                        },
                        cancelButton: {
                            text: lang[\'cancel\'],
                            class: \'cancel\'
                        }
                    }
                });
            });
        });
    });

    let escrowConfirmOrder = function() {
        let data = {
            mode: \'shoppingCartConfirmOrder\',
            item: shcEscrowOrderID
        };
        flUtil.ajax(data, function(response) {
            if (response.status === \'OK\') {
                buildResponseField(response.text);
                printMessage(\'notice\', response.message);
            } else {
                printMessage(\'error\', response.message);
            }
        });
    }

    let escrowCancelOrder = function(reason) {
        let data = {
            mode: \'shoppingCartCancelOrder\',
            item: shcEscrowOrderID,
            reason: reason
        };
        flUtil.ajax(data, function(response) {
            if (response.status === \'OK\') {
                buildResponseField(response.text);
                printMessage(\'notice\', response.message);
            } else {
                printMessage(\'error\', response.message);
            }
        });
    }

    let buildResponseField = function(status) {
        let elEC = $(\'.escrow-container\');
        elEC.addClass(\'table-cell\');
        elEC.html(\'\');
        elEC.prepend($(\'<div class="value" />\').html(status));
        elEC.prepend($(\'<div class="name" />\').html(\''; ?>
<?php echo $this->_tpl_vars['lang']['status']; ?>
<?php echo '\'));
    }
    '; ?>

</script>
<?php endif; ?>