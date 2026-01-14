<?php /* Smarty version 2.6.31, created on 2025-05-30 21:06:14
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/cash.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addCSS', '/home/gmoplus/public_html/plugins/shoppingCart/view/cash.tpl', 1, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/cash.tpl', 1, false),)), $this); ?>
<?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=(defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'shoppingCart/static/cash.css') : smarty_modifier_cat($_tmp, 'shoppingCart/static/cash.css'))), $this);?>


<div class="d-flex justify-content-center pt-3 pb-3 cash-or"><span class="ml-3 mr-3">or</span></div>
<div class="d-flex justify-content-center mb-5">
    <label><input type="radio" name="gateway" value="cash" /><?php echo $this->_tpl_vars['lang']['shc_payment_cash']; ?>
</label>
</div>