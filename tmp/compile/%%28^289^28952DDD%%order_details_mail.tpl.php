<?php /* Smarty version 2.6.31, created on 2025-06-04 11:36:33
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/order_details_mail.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/order_details_mail.tpl', 21, false),array('function', 'pageUrl', '/home/gmoplus/public_html/plugins/shoppingCart/view/order_details_mail.tpl', 46, false),)), $this); ?>
<table cellpadding="0" cellspacing="0" style="width: 100%;">
    <tr>
        <td width="48%" align="left"  valign="top">
            <div><?php echo $this->_tpl_vars['lang']['shc_order_details']; ?>
</div>
            <div style="width: 100%; line-height: 3px; border-top: 1px solid silver;"></div><?php echo '<span>'; ?><?php echo $this->_tpl_vars['lang']['shc_order_key']; ?><?php echo ': '; ?><?php echo $this->_tpl_vars['order_info']['Order_key']; ?><?php echo '</span><br/ ><span>'; ?><?php echo $this->_tpl_vars['lang']['shc_dealer']; ?><?php echo ': '; ?><?php echo $this->_tpl_vars['order_info']['dFull_name']; ?><?php echo '</span><br/ ><span>'; ?><?php echo $this->_tpl_vars['lang']['date']; ?><?php echo ': '; ?><?php echo $this->_tpl_vars['order_info']['Date']; ?><?php echo '</span><br/ ><span>'; ?><?php echo $this->_tpl_vars['lang']['shc_payment_status']; ?><?php echo ': '; ?><?php if ($this->_tpl_vars['paymentType'] == 'cash' || $this->_tpl_vars['order_info']['Cash']): ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['shc_payment_cash']; ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['order_info']['Status']]; ?><?php echo ''; ?><?php endif; ?><?php echo '</span><br/ ><span>'; ?><?php echo $this->_tpl_vars['lang']['shc_shipping_status']; ?><?php echo ': '; ?><?php echo $this->_tpl_vars['order_info']['Shipping_status']; ?><?php echo '</span><br/ >'; ?><?php if (! $this->_tpl_vars['isDigital']): ?><?php echo '<span>'; ?><?php echo $this->_tpl_vars['lang']['shc_shipping_method']; ?><?php echo ': '; ?><?php echo $this->_tpl_vars['order_info']['Shipping_method']; ?><?php echo '</span><br/ >'; ?><?php endif; ?><?php echo ''; ?>
</td>
        <td width="4%"></td>
        <td width="48%" align="right" valign="top">
            <div><?php echo $this->_tpl_vars['lang']['shc_shipping_details']; ?>
</div>
            <div style="width: 100%; line-height: 3px; border-top: 1px solid silver;"></div><?php echo ''; ?><?php $_from = $this->_tpl_vars['order_info']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo ''; ?><?php if (! empty ( $this->_tpl_vars['item']['value'] )): ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?>
</td>
    </tr>
</table>
<div style="width: 100%; line-height: 5px; border-top: 1px solid silver;"></div>
<table width="100%" style="">
    <tr style="background-color: #f1f1f1;">
        <td width="10%" style="height: 25px; border: 1px solid silver;" align="center">&nbsp;</td>
        <td width="45%" style="height: 25px; border: 1px solid silver;" align="center"><?php echo $this->_tpl_vars['lang']['item']; ?>
</td>
        <td width="10%" style="height: 25px; border: 1px solid silver;" align="center"><?php echo $this->_tpl_vars['lang']['shc_quantity']; ?>
</td>
        <td width="15%" style="height: 25px; border: 1px solid silver;" align="center"><?php echo $this->_tpl_vars['lang']['price']; ?>
</td>
        <td width="20%" style="height: 25px; border: 1px solid silver;" align="center"><?php echo $this->_tpl_vars['lang']['total']; ?>
</td>
    </tr>
    <?php $_from = $this->_tpl_vars['order_info']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <tr>
        <td width="10%" style="border-bottom: 1px solid silver; border-left: 1px solid silver;">
            <?php if ($this->_tpl_vars['item']['main_photo']): ?>
                <img alt="<?php echo $this->_tpl_vars['item']['Item']; ?>
" width="70" style="width: 70px;margin-<?php echo $this->_tpl_vars['text_dir_rev']; ?>
: 10px;" src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['item']['main_photo']; ?>
" />
            <?php endif; ?>
        </td>
        <td width="45%" style="border-bottom: 1px solid silver; border-left: 1px solid silver;">
            <?php echo $this->_tpl_vars['item']['Item']; ?>

            <?php if ($this->_tpl_vars['item']['Digital'] && $this->_tpl_vars['showDigital']): ?>
            <div style="margin-top: 5px;"><a href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'shc_purchases','vars' => "'item='|".($this->_tpl_vars['item']).".ID"), $this);?>
"><?php echo $this->_tpl_vars['lang']['shc_download']; ?>
</a></div>
            <?php endif; ?>
        </td>
        <td width="10%" style="border-bottom: 1px solid silver; border-left: 1px solid silver;" align="center"><?php echo $this->_tpl_vars['item']['Quantity']; ?>
</td>
        <td width="15%" style="border-bottom: 1px solid silver; border-left: 1px solid silver;" align="center"><?php echo ''; ?><?php echo $this->_tpl_vars['item']['Price']; ?><?php echo ''; ?>

        </td>
        <td width="20%" style="border-bottom: 1px solid silver; border-left: 1px solid silver; border-right: 1px solid silver;" align="center"><?php echo ''; ?><?php echo $this->_tpl_vars['item']['total']; ?><?php echo ''; ?>
</td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    <?php if ($this->_tpl_vars['order_info']['Shipping_price']): ?>
    <tr>
        <td colspan="4" align="right" style="height: 25px; border-bottom: 1px solid silver; border-left: 1px solid silver;"><?php echo $this->_tpl_vars['lang']['shc_shipping_price']; ?>
&nbsp;&nbsp;</td>
        <td width="20%" align="center" style="height: 25px; border-bottom: 1px solid silver; border-left: 1px solid silver; border-right: 1px solid silver;"><?php echo ''; ?><?php echo $this->_tpl_vars['order_info']['Shipping_price']; ?><?php echo ''; ?>
</td>
    </tr>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['config']['shc_method'] == 'multi' && $this->_tpl_vars['config']['shc_commission_enable'] && $this->_tpl_vars['orderInfo']['Dealer_ID'] == $this->_tpl_vars['account_info']['ID']): ?>
        <tr>
            <td colspan="4" align="right" style="height: 25px; border-bottom: 1px solid silver; border-left: 1px solid silver;"><?php echo $this->_tpl_vars['lang']['shc_commission']; ?>
&nbsp;&nbsp;</td>
            <td width="20%" align="center" style="height: 25px; border-bottom: 1px solid silver; border-left: 1px solid silver; border-right: 1px solid silver;"><?php echo ''; ?><?php echo $this->_tpl_vars['order_info']['Commission']; ?><?php echo ''; ?>
</td>
        </tr>
    <?php endif; ?>
    <tr>
        <td colspan="4" align="right" style="height: 25px; border-bottom: 1px solid silver; border-left: 1px solid silver;"><?php echo $this->_tpl_vars['lang']['total']; ?>
&nbsp;&nbsp;</td>
        <td width="20%" align="center" style="height: 25px; border-bottom: 1px solid silver; border-left: 1px solid silver; border-right: 1px solid silver;"><?php echo ''; ?><?php echo $this->_tpl_vars['order_info']['Total']; ?><?php echo ''; ?>
</td>
    </tr>
</table>