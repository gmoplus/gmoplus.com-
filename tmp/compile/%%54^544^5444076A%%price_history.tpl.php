<?php /* Smarty version 2.6.31, created on 2025-06-01 15:18:44
         compiled from /home/gmoplus/public_html/plugins/priceHistory/price_history.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strpos', '/home/gmoplus/public_html/plugins/priceHistory/price_history.tpl', 2, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins/priceHistory/price_history.tpl', 6, false),array('modifier', 'date_format', '/home/gmoplus/public_html/plugins/priceHistory/price_history.tpl', 24, false),array('modifier', 'round', '/home/gmoplus/public_html/plugins/priceHistory/price_history.tpl', 53, false),)), $this); ?>
<a href="javascript:void(0);" id="line_color" class="hide"></a>
<ul class="tabs<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_settings']['name'])) ? $this->_run_mod_handler('strpos', true, $_tmp, 'auto_main') : strpos($_tmp, 'auto_main')) === 0): ?> auto_main_tpl<?php endif; ?>">
    <li class="active" id="tab_price_history_table" >
        <a href="#price_history_table" data-target="price_history_table"><?php echo $this->_tpl_vars['lang']['ph_table']; ?>
</a>
    </li>
    <?php if (count($this->_tpl_vars['price_history']) > 1): ?>
        <li id="tab_price_history_chart">
            <a href="#price_history_chart" data-target="price_history_chart"><?php echo $this->_tpl_vars['lang']['ph_chart']; ?>
</a>
        </li>
    <?php endif; ?>
</ul>

<!-- Price history table -->
<div id="area_price_history_table">
    <div class="list-table">
        <div class="header">
            <div class="first"><?php echo $this->_tpl_vars['lang']['date']; ?>
</div>
            <div><?php echo $this->_tpl_vars['lang']['ph_event']; ?>
</div>
            <div><?php echo $this->_tpl_vars['lang']['price']; ?>
</div>
            <?php if ($this->_tpl_vars['config']['ph_sqft_enable']): ?><div><?php echo $this->_tpl_vars['lang']['ph_sqft']; ?>
</div><?php endif; ?>
        </div>
        <?php $_from = $this->_tpl_vars['price_history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
            <div class="row">
                 <div class="first"><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null)) : smarty_modifier_date_format($_tmp, (defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))); ?>
</div>
                 <div><?php echo $this->_tpl_vars['item']['Event']; ?>
</div>
                 <div>
                        <?php echo $this->_tpl_vars['item']['Price_value']; ?>

                        <?php if ($this->_tpl_vars['item']['price_diff']): ?>
                            <span class='price-diff <?php echo $this->_tpl_vars['item']['price_diff_class']; ?>
'><?php echo $this->_tpl_vars['item']['precent_diff']; ?>
 %</span>
                        <?php endif; ?>
                 </div>
                 <?php if ($this->_tpl_vars['config']['ph_sqft_enable']): ?>
                    <div><?php echo $this->_tpl_vars['item']['square_feet_price']; ?>
</div>
                 <?php endif; ?>
            </div>
         <?php endforeach; endif; unset($_from); ?>
    </div>
</div>
<!-- Price history table end -->

<!-- Price history chart -->
<div id="area_price_history_chart" class="hide">
    <div id="chart"></div>
</div>
<!-- Price history chart end -->

<script class="fl-js-dynamic">
    var date_range = [], values_array  = [];
    lang.sys_currency = '<?php echo $this->_tpl_vars['price_history'][0]['Currency']; ?>
';
    lang.system_currency_position = '<?php echo $this->_tpl_vars['config']['system_currency_position']; ?>
';
    <?php $_from = $this->_tpl_vars['price_history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ph_element'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ph_element']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['ph_element']['iteration']++;
?>
        date_range.push(new Date('<?php echo $this->_tpl_vars['item']['Date']; ?>
'));
        values_array.push(<?php if ($this->_tpl_vars['item']['tmp_price']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['tmp_price'])) ? $this->_run_mod_handler('round', true, $_tmp) : round($_tmp)); ?>
<?php else: ?><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['Price'])) ? $this->_run_mod_handler('round', true, $_tmp) : round($_tmp)); ?>
<?php endif; ?>);
    <?php endforeach; endif; unset($_from); ?>

    <?php echo '
      $(function () {
        var price_history = new priceHistoryClass(date_range, values_array);
        price_history.tabsHandler();
      });
    '; ?>

</script>