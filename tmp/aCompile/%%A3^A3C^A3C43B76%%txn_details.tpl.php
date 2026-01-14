<?php /* Smarty version 2.6.31, created on 2025-11-08 12:21:37
         compiled from /home/gmoplus/public_html/plugins/bankWireTransfer/txn_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/bankWireTransfer/txn_details.tpl', 3, false),array('modifier', 'number_format', '/home/gmoplus/public_html/plugins/bankWireTransfer/txn_details.tpl', 18, false),)), $this); ?>
<!-- Listing Information -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <fieldset class="light">
        <legend id="legend_bwt_details" class="up" onclick="fieldset_action('bwt_details');"><?php echo $this->_tpl_vars['lang']['bwt_order_information']; ?>
</legend>
        <table class="form">
            <tr>
                <td class="name" width="180"><?php echo $this->_tpl_vars['lang']['txn_id']; ?>
</td>
                <td class="value"><?php echo $this->_tpl_vars['txn_info']['Txn_ID']; ?>
</td>
            </tr>
            <tr>
                <td class="name" width="180"><?php echo $this->_tpl_vars['lang']['item']; ?>
</td>
                <td class="value"><?php echo $this->_tpl_vars['txn_info']['Item_name']; ?>
</td>
            </tr>
            <?php if (! empty ( $this->_tpl_vars['txn_info']['Total'] )): ?>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['total']; ?>
</td>
                <td class="value"><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['txn_info']['Total'])) ? $this->_run_mod_handler('number_format', true, $_tmp, 2, '.', ',') : number_format($_tmp, 2, '.', ',')); ?>
<?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo $this->_tpl_vars['config']['system_currency']; ?>
<?php endif; ?></td>
            </tr>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['txn_info']['dealer']): ?>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['shc_dealer']; ?>
</td>
                <td class="value"><?php echo $this->_tpl_vars['txn_info']['dealer']['Full_name']; ?>
</td>
            </tr>
            <?php endif; ?>
            <tr>
                <td class="name" width="180"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                <td class="value"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['txn_info']['Status']]; ?>
</td>
            </tr>
        </table>
    </fieldset>
    <?php if ($this->_tpl_vars['payment_details']): ?>
    <fieldset class="light">
        <legend id="legend_bwt_payment_details" class="up" onclick="fieldset_action('bwt_payment_details');"><?php echo $this->_tpl_vars['lang']['bwt_payment_details']; ?>
</legend>
        <table class="form">
            <tr>
                <td class="value"><?php echo $this->_tpl_vars['payment_details']['content']; ?>
</td>
            </tr>
        </table>
    </fieldset>
    <?php endif; ?>
    <table class="form">
        <tr>
            <td class="value" align="center"><input type="button" onclick="popupTxnInfo.close();" value="<?php echo $this->_tpl_vars['lang']['close']; ?>
" /></td>
        </tr>
    </table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?> 