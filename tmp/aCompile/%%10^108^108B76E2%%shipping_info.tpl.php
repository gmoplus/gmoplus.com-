<?php /* Smarty version 2.6.31, created on 2025-05-30 21:07:42
         compiled from /home/gmoplus/public_html/plugins//shoppingCart/admin/view/shipping_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins//shoppingCart/admin/view/shipping_info.tpl', 7, false),)), $this); ?>
<?php if ($this->_tpl_vars['order_info']['fields']): ?>
    <fieldset class="light">
        <legend id="legend_search_settings" class="up" onclick="fieldset_action('search_settings');"><?php echo $this->_tpl_vars['lang']['shc_shipping_details']; ?>
</legend>
        <table class="list">
            <?php $_from = $this->_tpl_vars['order_info']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                <?php if (! empty ( $this->_tpl_vars['item']['value'] )): ?>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array('item' => $this->_tpl_vars['item'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </table>
        <?php if ($this->_tpl_vars['order_info']['Mail']): ?>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['mail']; ?>
:</td>
            <td class="value"><?php echo $this->_tpl_vars['order_info']['Mail']; ?>
</td>
        </tr>
        <?php endif; ?>
    </fieldset>
<?php endif; ?>