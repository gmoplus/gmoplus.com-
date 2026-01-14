<?php /* Smarty version 2.6.31, created on 2025-05-20 20:41:07
         compiled from /home/gmoplus/public_html/plugins/bankWireTransfer/requests.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/bankWireTransfer/requests.tpl', 3, false),array('modifier', 'date_format', '/home/gmoplus/public_html/plugins/bankWireTransfer/requests.tpl', 34, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins/bankWireTransfer/requests.tpl', 55, false),array('function', 'math', '/home/gmoplus/public_html/plugins/bankWireTransfer/requests.tpl', 21, false),array('function', 'str2money', '/home/gmoplus/public_html/plugins/bankWireTransfer/requests.tpl', 29, false),array('function', 'paging', '/home/gmoplus/public_html/plugins/bankWireTransfer/requests.tpl', 55, false),)), $this); ?>
<!-- bankWireTransfer plugin -->

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'bankWireTransfer/static/icons.svg') : smarty_modifier_cat($_tmp, 'bankWireTransfer/static/icons.svg')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<div class="highlight">
	<?php if (! empty ( $this->_tpl_vars['txn_info'] )): ?>
		<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'bankWireTransfer') : smarty_modifier_cat($_tmp, 'bankWireTransfer')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'request_details.tpl') : smarty_modifier_cat($_tmp, 'request_details.tpl')), 'smarty_include_vars' => array('order_info' => $this->_tpl_vars['txn_info'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif (! isset ( $_GET['item'] )): ?>
		<?php if ($this->_tpl_vars['requests']): ?>
            <div class="list-table">
                <div class="header">
                    <div class="center" style="width: 40px;">#</div>
                    <div><?php echo $this->_tpl_vars['lang']['item']; ?>
</div>
                    <div style="width: 90px;"><?php echo $this->_tpl_vars['lang']['total']; ?>
</div>
                    <div style="width: 120px;"><?php echo $this->_tpl_vars['lang']['txn_id']; ?>
</div>
                    <div style="width: 100px;"><?php echo $this->_tpl_vars['lang']['date']; ?>
</div>
                    <div style="width: 100px;"><?php echo $this->_tpl_vars['lang']['status']; ?>
</div>
                    <div style="width: 90px;"><?php echo $this->_tpl_vars['lang']['actions']; ?>
</div>
                </div>
                <?php $_from = $this->_tpl_vars['requests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['requestF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['requestF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['requestF']['iteration']++;
?>
                    <?php echo smarty_function_math(array('assign' => 'iteration','equation' => '(((current?current:1)-1)*per_page)+iter','iter' => $this->_foreach['requestF']['iteration'],'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['shc_orders_per_page']), $this);?>


                    <div class="row" id="item_<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                        <div class="center iteration no-flex"><?php echo $this->_tpl_vars['iteration']; ?>
</div>
                        <div data-caption="<?php echo $this->_tpl_vars['lang']['item']; ?>
"><?php echo $this->_tpl_vars['item']['Item_name']; ?>
</div>
                        <div data-caption="<?php echo $this->_tpl_vars['lang']['total']; ?>
">
                            <span class="price-cell shc_price"><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo $this->_plugins['function']['str2money'][0][0]->str2money(array('string' => $this->_tpl_vars['item']['Total']), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['config']['system_currency_position'] == 'after'): ?><?php echo '&nbsp;'; ?><?php echo $this->_tpl_vars['config']['system_currency']; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?>
</span>
                        </div>
                        <div data-caption="<?php echo $this->_tpl_vars['lang']['shc_order_key']; ?>
"><?php echo $this->_tpl_vars['item']['Txn_ID']; ?>
</div>
                        <div data-caption="<?php echo $this->_tpl_vars['lang']['date']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</div>
                        <div data-caption="<?php echo $this->_tpl_vars['lang']['status']; ?>
" id="txn_status_<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                            <span class="item_<?php echo $this->_tpl_vars['item']['pStatus']; ?>
"><?php echo $this->_tpl_vars['item']['Status']; ?>
</span>
                            <?php if (! empty ( $this->_tpl_vars['item']['Doc'] )): ?>
                            <a class="d-block" href="<?php echo (defined('RL_FILES_URL') ? @RL_FILES_URL : null); ?>
<?php echo $this->_tpl_vars['item']['Doc']; ?>
" target="_blank">
                                <svg width="18" height="18" viewBox="0 0 24 24" class="icon grid-icon-fill align-middle"><use xlink:href="#download"></use></svg>&nbsp;<?php echo $this->_tpl_vars['lang']['bwt_doc_file']; ?>

                            </a>
                            <?php endif; ?>
                        </div>
                        <div data-caption="<?php echo $this->_tpl_vars['lang']['actions']; ?>
" id="bwt_<?php echo $this->_tpl_vars['item']['ID']; ?>
">
                            <?php if ($this->_tpl_vars['item']['pStatus'] == 'unpaid'): ?>
                                <input type="button" value="<?php echo $this->_tpl_vars['lang']['bwt_activate']; ?>
" id="bwtpayment-<?php echo $this->_tpl_vars['item']['ID']; ?>
" class="accept-payment" />
                            <?php else: ?>
                                <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
<?php if ($this->_tpl_vars['config']['mod_rewrite']): ?><?php echo $this->_tpl_vars['pages']['bwt_requests']; ?>
.html?item=<?php echo $this->_tpl_vars['item']['ID']; ?>
<?php else: ?>?page=<?php echo $this->_tpl_vars['pages']['bwt_requests']; ?>
&amp;item=<?php echo $this->_tpl_vars['item']['ID']; ?>
<?php endif; ?>">
                                    <?php echo $this->_tpl_vars['lang']['bwt_request_details']; ?>

                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; endif; unset($_from); ?>
            </div>
			<?php echo $this->_plugins['function']['paging'][0][0]->paging(array('calc' => $this->_tpl_vars['pInfo']['calc'],'total' => count($this->_tpl_vars['requests']),'current' => $this->_tpl_vars['pInfo']['current'],'per_page' => $this->_tpl_vars['config']['listings_per_page']), $this);?>

		<?php else: ?>
			<div class="info"><?php echo $this->_tpl_vars['lang']['bwt_no_requests']; ?>
</div>
		<?php endif; ?>
	<?php endif; ?>
</div>

<script type="text/javascript">
<?php echo '

$(document).ready(function() {
	$(\'.accept-payment\').click(function() {
	    var item_id = $(this).attr(\'id\').split(\'-\')[1];
        $(this).val(lang[\'loading\']);
        $(this).attr(\'disabled\', true);
        $.getJSON(rlConfig[\'ajax_url\'], {mode: \'bwtCompleteTransaction\', item: item_id}, function(response) {
            if (response) {
                if (response.status == \'OK\') {
                    $(\'#bwt_\' + item_id).html(response.html);
                    $(\'#txn_status_\' + item_id).html(response.html_status);
                    printMessage(\'notice\', response.message_text);
                } else {
                    printMessage(\'error\', response.message_text);
                }
            }
        });
	});
});

'; ?>

</script>

<!-- end bankWireTransfer plugin -->