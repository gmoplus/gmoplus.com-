<?php /* Smarty version 2.6.31, created on 2025-04-09 08:13:13
         compiled from /home/gmoplus/public_html/plugins/smsActivation/accountTypeForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/smsActivation/accountTypeForm.tpl', 9, false),)), $this); ?>
<!-- smsActivation option -->

<tr>
    <td class="name"><?php echo $this->_tpl_vars['lang']['smsActivation_status']; ?>
</td>
    <td class="field">
        <?php $this->assign('smsActivation_checkbox_field', 'smsActivation_module'); ?>
        
        <?php if ($this->_tpl_vars['sPost'][$this->_tpl_vars['smsActivation_checkbox_field']] == '1'): ?>
            <?php $this->assign(((is_array($_tmp=$this->_tpl_vars['smsActivation_checkbox_field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_yes') : smarty_modifier_cat($_tmp, '_yes')), 'checked="checked"'); ?>
        <?php elseif ($this->_tpl_vars['sPost'][$this->_tpl_vars['smsActivation_checkbox_field']] == '0'): ?>
            <?php $this->assign(((is_array($_tmp=$this->_tpl_vars['smsActivation_checkbox_field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_no') : smarty_modifier_cat($_tmp, '_no')), 'checked="checked"'); ?>
        <?php else: ?>
            <?php $this->assign(((is_array($_tmp=$this->_tpl_vars['smsActivation_checkbox_field'])) ? $this->_run_mod_handler('cat', true, $_tmp, '_no') : smarty_modifier_cat($_tmp, '_no')), 'checked="checked"'); ?>
        <?php endif; ?>
        
        <table>
        <tr>
            <td>
                <input <?php echo $this->_tpl_vars['smsActivation_module_yes']; ?>
 type="radio" id="<?php echo $this->_tpl_vars['smsActivation_checkbox_field']; ?>
_yes" name="<?php echo $this->_tpl_vars['smsActivation_checkbox_field']; ?>
" value="1" /> <label for="<?php echo $this->_tpl_vars['smsActivation_checkbox_field']; ?>
_yes"><?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                <input <?php echo $this->_tpl_vars['smsActivation_module_no']; ?>
 type="radio" id="<?php echo $this->_tpl_vars['smsActivation_checkbox_field']; ?>
_no" name="<?php echo $this->_tpl_vars['smsActivation_checkbox_field']; ?>
" value="0" /> <label for="<?php echo $this->_tpl_vars['smsActivation_checkbox_field']; ?>
_no"><?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
            </td>
        </tr>
        </table>
    </td>
</tr>

<!-- smsActivation option end -->