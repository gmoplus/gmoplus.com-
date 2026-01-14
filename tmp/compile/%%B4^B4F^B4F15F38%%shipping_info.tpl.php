<?php /* Smarty version 2.6.31, created on 2025-05-30 14:13:20
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/shipping_info.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/shipping_info.tpl', 8, false),)), $this); ?>
<?php $this->assign('hide', true); ?>
<?php $_from = $this->_tpl_vars['order_info']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    <?php if (! empty ( $this->_tpl_vars['item']['value'] )): ?>
        <?php $this->assign('hide', false); ?>
    <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['order_info']['fields'] && ! $this->_tpl_vars['hide']): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'shc_shipping_location_details','name' => $this->_tpl_vars['lang']['shc_shipping_details'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div class="row">
            <div class="col-sm-12 col-xs-12 fields">
                <?php $_from = $this->_tpl_vars['order_info']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    <?php if (! empty ( $this->_tpl_vars['item']['value'] )): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
        <?php if ($this->_tpl_vars['order_info']['Mail']): ?>
        <div class="table-cell">
            <div class="name"><div><span><?php echo $this->_tpl_vars['lang']['mail']; ?>
</span></div></div>
            <div class="value"><?php echo $this->_tpl_vars['order_info']['Mail']; ?>
</div>
        </div>
        <?php endif; ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>