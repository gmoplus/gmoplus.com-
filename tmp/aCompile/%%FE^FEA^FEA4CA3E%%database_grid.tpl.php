<?php /* Smarty version 2.6.31, created on 2025-05-30 20:41:33
         compiled from blocks/database_grid.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'blocks/database_grid.tpl', 3, false),array('modifier', 'strlen', 'blocks/database_grid.tpl', 23, false),)), $this); ?>
<!-- database results grid -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['query_results'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<table class="lTable">
    <tr class="header">
        <?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fieldsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fieldsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['fieldsF']['iteration']++;
?>
        <td style="height: 24px;">
            <div><?php echo $this->_tpl_vars['field']; ?>
</div>
        </td>
        <?php if (! ($this->_foreach['fieldsF']['iteration'] == $this->_foreach['fieldsF']['total'])): ?><td class="clear" style="width: 3px;"></td><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </tr>
    <tr>
        <td colspan="3" class="height3"></td>
    </tr>
    
    <?php $this->assign('zIndex', 50000); ?>
    <?php $_from = $this->_tpl_vars['out']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['bodyF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bodyF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['row']):
        $this->_foreach['bodyF']['iteration']++;
?>
    <tr class="body">
        <?php $this->assign('zIndex', $this->_tpl_vars['zIndex']-1); ?>
        <?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['columnF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['columnF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['column']):
        $this->_foreach['columnF']['iteration']++;
?>
        <td class="<?php if ($this->_foreach['bodyF']['iteration']%2 != 0): ?>list_td<?php else: ?>list_td_light<?php endif; ?>"<?php if (((is_array($_tmp=$this->_tpl_vars['column'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) > 25): ?> valign="top"<?php endif; ?>>
            <div <?php if (((is_array($_tmp=$this->_tpl_vars['column'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) > 25): ?>onclick="<?php echo '$(this).css(\'overflow\', \'scroll\').animate({width: 500, height: 200})'; ?>
" onmouseout="<?php echo '$(this).css(\'overflow\', \'hidden\').animate({width: 150, height: 18})'; ?>
"<?php endif; ?> style="<?php if (((is_array($_tmp=$this->_tpl_vars['column'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp)) > 25): ?>background: #eef4de;border: 1px #d2e798 solid;padding: 3px 5px;width: 150px; height: 18px;position: absolute; overflow: hidden;z-index: <?php echo $this->_tpl_vars['zIndex']; ?>
;<?php endif; ?>"><?php echo $this->_tpl_vars['column']; ?>
</div>
        </td>
        <?php if (! ($this->_foreach['columnF']['iteration'] == $this->_foreach['columnF']['total'])): ?><td></td><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- database results grid end -->