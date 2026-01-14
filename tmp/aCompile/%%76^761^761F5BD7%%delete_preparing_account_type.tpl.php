<?php /* Smarty version 2.6.31, created on 2025-05-26 15:53:07
         compiled from blocks/delete_preparing_account_type.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'blocks/delete_preparing_account_type.tpl', 4, false),)), $this); ?>
<!-- account type deleting -->

<?php $this->assign('replace', ('{')."type".('}')); ?>
<div><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['pre_account_type_delete_notice'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['account_type']['name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['account_type']['name'])); ?>
</div>

<table class="list" style="margin: 0 0 15px 10px;">
<?php $_from = $this->_tpl_vars['delete_details']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['del_item']):
?>
<?php if ($this->_tpl_vars['del_item']['items']): ?>
<tr>
    <td class="name" style="width: 115px"><?php echo $this->_tpl_vars['del_item']['name']; ?>
:</td>
    <td class="value"><?php if ($this->_tpl_vars['del_item']['link']): ?><a target="_blank" href="<?php echo $this->_tpl_vars['del_item']['link']; ?>
"><?php endif; ?><b><?php echo $this->_tpl_vars['del_item']['items']; ?>
</b><?php if ($this->_tpl_vars['del_item']['link']): ?></a><?php endif; ?></td>
</tr>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</table>

<?php echo $this->_tpl_vars['lang']['choose_removal_method']; ?>

<div style="margin: 5px 10px">
    <div style="padding: 2px 0;"><label><input type="radio" value="delete" name="del_action" onclick="$('div#replace_content:visible').slideUp();$('#top_buttons').slideDown();$('#bottom_buttons').slideUp();" /> <?php if ($this->_tpl_vars['config']['trash']): ?><?php echo $this->_tpl_vars['lang']['full_account_drop']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['full_account_delete']; ?>
<?php endif; ?></label></div>
    <div style="padding: 2px 0;"><label><input type="radio" value="replace" name="del_action" /> <?php echo $this->_tpl_vars['lang']['replace_another_account_type']; ?>
</label></div>
    
    <div style="margin: 5px 0;">
        <div id="top_buttons">
            <input class="simple" type="button" value="<?php echo $this->_tpl_vars['lang']['go']; ?>
" onclick="delete_chooser($('input[name=del_action]:checked').val(), '<?php echo $this->_tpl_vars['account_type']['Key']; ?>
', '<?php echo $this->_tpl_vars['account_type']['name']; ?>
')" />
            <a class="cancel" href="javascript:void(0)" onclick="$('#delete_block').fadeOut()"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
        </div>
        
        <div id="replace_content" style="margin: 10px 0;" class="hide">
            <?php echo $this->_tpl_vars['lang']['account_type']; ?>
: 
            <select name="new_type">
                <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                <?php $_from = $this->_tpl_vars['available_account_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['available_account_type']):
?>
                    <?php if ($this->_tpl_vars['available_account_type']['Key'] != $this->_tpl_vars['account_type']['Key']): ?>
                        <option value="<?php echo $this->_tpl_vars['available_account_type']['Key']; ?>
"><?php echo $this->_tpl_vars['available_account_type']['name']; ?>
</option>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </select>
        </div>
        
        <div id="bottom_buttons" class="hide">
            <?php $this->assign('replace', ('{')."type".('}')); ?>
            
            <?php if ($this->_tpl_vars['config']['trash']): ?>
                <?php $this->assign('notice_phrase', ((is_array($_tmp=$this->_tpl_vars['lang']['notice_drop_empty_account_type'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['account_type']['name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['account_type']['name']))); ?>
            <?php else: ?>
                <?php $this->assign('notice_phrase', ((is_array($_tmp=$this->_tpl_vars['lang']['notice_delete_empty_account_type'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['account_type']['name']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['account_type']['name']))); ?>
            <?php endif; ?>
        
            <input class="simple" type="button" value="<?php echo $this->_tpl_vars['lang']['go']; ?>
" onclick="rlPrompt('<?php echo $this->_tpl_vars['notice_phrase']; ?>
', 'xajax_deleteAccountType', new Array('<?php echo $this->_tpl_vars['account_type']['Key']; ?>
', $('select[name=new_type]').val()));" />
            <a class="cancel" href="javascript:void(0)" onclick="$('#delete_block').fadeOut()"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
        </div>
    </div>
</div>

<!-- account type deleting end -->