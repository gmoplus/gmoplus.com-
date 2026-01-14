<?php /* Smarty version 2.6.31, created on 2025-05-30 14:12:40
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/view/items_unavailable.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/shoppingCart/view/items_unavailable.tpl', 3, false),)), $this); ?>
<!-- my cart page / items unavailable list -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => 'unavailable_items','name' => $this->_tpl_vars['lang']['shc_unavailable_items'],'class' => 'unavailable')));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="list-table cart-items-table">
    <div class="header">
        <div class="center" style="width: 40px;">#</div>
        <div><?php echo $this->_tpl_vars['lang']['item']; ?>
</div>
        <div style="width: 40px;"></div>
    </div>

    <?php $_from = $this->_tpl_vars['shcItems']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['itemsUF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['itemsUF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['itemsUF']['iteration']++;
?>
        <?php if ($this->_tpl_vars['item']['isUnavailable']): ?>
        <div class="row">
            <div class="center iteration no-flex"><?php echo $this->_foreach['itemsUF']['iteration']; ?>
</div>
            <div data-caption="<?php echo $this->_tpl_vars['lang']['item']; ?>
" <?php if ($this->_tpl_vars['item']['Main_photo']): ?>class="two-inline left"<?php endif; ?>>
                <?php if ($this->_tpl_vars['item']['main_photo'] || $this->_tpl_vars['item']['photo_tmp']): ?>
                    <div class="image">
                        <a href="<?php echo $this->_tpl_vars['item']['listing_link']; ?>
" target="_blank">
                            <img alt="<?php echo $this->_tpl_vars['item']['Item']; ?>
" 
                                style="width: 70px;margin-<?php echo $this->_tpl_vars['text_dir_rev']; ?>
: 10px;" 
                                <?php if ($this->_tpl_vars['item']['Main_photo']): ?>
                                    src="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['item']['main_photo']; ?>
" 
                                <?php else: ?>
                                    src="data:image/png;base64, <?php echo $this->_tpl_vars['item']['photo_tmp']; ?>
"
                                <?php endif; ?>
                            />
                        </a>
                    </div>
                <?php endif; ?>
                <div style="padding: 0 10px;">
                    <a href="<?php echo $this->_tpl_vars['item']['listing_link']; ?>
" target="_blank"><?php echo $this->_tpl_vars['item']['Item']; ?>
</a>
                    <span class="unavailable-notice">
                        <?php if ($this->_tpl_vars['item']['Status'] == 'active' && $this->_tpl_vars['item']['Quantity'] <= 0): ?>
                            <?php echo $this->_tpl_vars['lang']['shc_not_available']; ?>

                        <?php elseif ($this->_tpl_vars['item']['Status'] == 'deleted'): ?>
                            <?php echo $this->_tpl_vars['lang']['shc_item_deleted']; ?>

                        <?php elseif ($this->_tpl_vars['item']['Dealer_ID'] == $this->_tpl_vars['account_info']['ID']): ?>
                            <?php echo $this->_tpl_vars['lang']['shc_owner_item']; ?>

                        <?php endif; ?>
                    </span>
                </div>  
            </div>
            <div class="action no-flex">
                <span title="<?php echo $this->_tpl_vars['lang']['delete']; ?>
" class="icon delete delete-item-from-cart" data-id="<?php echo $this->_tpl_vars['item']['ID']; ?>
" data-item-id="<?php echo $this->_tpl_vars['item']['Item_ID']; ?>
"></span>
            </div>
        </div>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- my cart page / items unavailable list end -->