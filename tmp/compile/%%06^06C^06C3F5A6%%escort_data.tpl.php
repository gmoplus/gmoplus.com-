<?php /* Smarty version 2.6.31, created on 2025-10-10 09:52:39
         compiled from /home/gmoplus/public_html/plugins/booking/smarty_blocks/escort_data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home/gmoplus/public_html/plugins/booking/smarty_blocks/escort_data.tpl', 12, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/booking/smarty_blocks/escort_data.tpl', 65, false),array('modifier', 'regex_replace', '/home/gmoplus/public_html/plugins/booking/smarty_blocks/escort_data.tpl', 94, false),)), $this); ?>
<!-- Booking availability/rates/duration info -->

<?php if (in_array ( $this->_tpl_vars['tpl_settings']['name'] , array ( 'general_simple_wide' , 'general_modern_wide' , 'auto_modern' ) )): ?>
    <?php $this->assign('bookingDivClass', 'col-md-12'); ?>
<?php else: ?>
    <?php $this->assign('bookingDivClass', 'col-md-6'); ?>
<?php endif; ?>

<div class="row">
    <?php $this->assign('availabilityData', $this->_tpl_vars['bookingAvailability']); ?>

    <?php if (count($this->_tpl_vars['availabilityData']) > 0): ?>
        <div class="<?php echo $this->_tpl_vars['bookingDivClass']; ?>
">
            <section class="side_block stick seller-short">
                <h3>
                    <?php if ($this->_tpl_vars['listing']['availability']['Fields']['availability']['name']): ?>
                        <?php echo $this->_tpl_vars['listing']['availability']['Fields']['availability']['name']; ?>

                    <?php else: ?>
                        <?php echo $this->_tpl_vars['lang']['booking_availability']; ?>

                    <?php endif; ?>
                </h3>
                <div class="clearfix">
                    <ul class="availability-chart<?php if ((defined('IS_ESCORT') ? @IS_ESCORT : null) !== true): ?> simple-hourly-mode<?php endif; ?>">
                    <?php $_from = $this->_tpl_vars['availabilityData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['availability_item']):
?>
                        <?php if ($this->_tpl_vars['availability_item']['from'] != '0' && $this->_tpl_vars['availability_item']['to'] != '0'): ?>
                            <li class="clearfix">
                                <div><?php echo $this->_tpl_vars['availability_item']['title']; ?>
</div>
                                <div><?php echo $this->_tpl_vars['availability_item']['from']; ?>
 - <?php echo $this->_tpl_vars['availability_item']['to']; ?>
</div>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>
            </section>
        </div>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['bookingRates']): ?>
        <?php $this->assign('ratesData', $this->_tpl_vars['bookingRates']); ?>
    <?php else: ?>
        <?php $this->assign('ratesData', $this->_tpl_vars['listing']['escort_rates']['Fields']['escort_rates']['value']); ?>
    <?php endif; ?>

    <?php if (count($this->_tpl_vars['ratesData']) > 0): ?>
        <div class="<?php echo $this->_tpl_vars['bookingDivClass']; ?>
">
            <section class="side_block stick seller-short">
                <h3>
                    <?php if ($this->_tpl_vars['listing']['escort_rates']['Fields']['escort_rates']['name']): ?>
                        <?php echo $this->_tpl_vars['listing']['escort_rates']['Fields']['escort_rates']['name']; ?>

                    <?php else: ?>
                        <?php echo $this->_tpl_vars['lang']['booking_rates']; ?>

                    <?php endif; ?>
                </h3>
                <div class="clearfix">
                    <ul class="availability-chart escort-rates-chart<?php if ((defined('IS_ESCORT') ? @IS_ESCORT : null) !== true): ?> simple-hourly-mode<?php endif; ?>">
                    <?php $_from = $this->_tpl_vars['ratesData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['escort_rates_item']):
?>
                        <li class="clearfix">
                            <?php if ($this->_tpl_vars['escort_rates_item']['subtitle']): ?>
                                <div><?php echo $this->_tpl_vars['escort_rates_item']['title']; ?>
</div>
                                <div><?php echo $this->_tpl_vars['escort_rates_item']['subtitle']; ?>
</div>
                            <?php else: ?>
                                <div><?php echo $this->_tpl_vars['escort_rates_item']['title']; ?>
 - <?php echo $this->_tpl_vars['escort_rates_item']['time']; ?>
 <?php echo $this->_tpl_vars['lang']['booking_rate_hour']; ?>
</div>
                                <div>
                                    <?php $this->assign('currencyName', $this->_tpl_vars['escort_rates_item']['currency']); ?>
                                    <?php $this->assign('currencyPhraseKey', ((is_array($_tmp='data_formats+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['escort_rates_item']['currency']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['escort_rates_item']['currency']))); ?>

                                    <?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['currencyPhraseKey']]): ?>
                                        <?php $this->assign('currencyName', $this->_tpl_vars['lang'][$this->_tpl_vars['currencyPhraseKey']]); ?>
                                    <?php endif; ?>

                                    <?php if ($this->_tpl_vars['config']['system_currency_position'] == 'before'): ?>
                                        <?php echo $this->_tpl_vars['currencyName']; ?>
 <?php echo $this->_tpl_vars['escort_rates_item']['price']; ?>

                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['escort_rates_item']['price']; ?>
 <?php echo $this->_tpl_vars['currencyName']; ?>

                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>
            </section>
        </div>
    <?php endif; ?>
</div>

<?php if (count($this->_tpl_vars['ratesData']) > 0): ?>
    <div id="escort_rates_obj" class="hide">
        <select name="escort_rates">
            <option value="-1"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>

            <?php $_from = $this->_tpl_vars['ratesData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rate_key'] => $this->_tpl_vars['rate']):
?>
                <?php if ($this->_tpl_vars['rate']['subtitle']): ?>
                    <?php $this->assign('ratePrice', ((is_array($_tmp=$this->_tpl_vars['rate']['subtitle'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/[^0-9.]+/', '') : smarty_modifier_regex_replace($_tmp, '/[^0-9.]+/', ''))); ?>
                    <?php $this->assign('rateTime', ((is_array($_tmp=$this->_tpl_vars['rate']['title'])) ? $this->_run_mod_handler('regex_replace', true, $_tmp, '/[^0-9.,]+/', '') : smarty_modifier_regex_replace($_tmp, '/[^0-9.,]+/', ''))); ?>
                <?php else: ?>
                    <?php $this->assign('ratePrice', $this->_tpl_vars['rate']['price']); ?>
                    <?php $this->assign('rateTime', $this->_tpl_vars['rate']['time']); ?>
                <?php endif; ?>

                <option <?php if ($this->_tpl_vars['edit_action'] && $this->_tpl_vars['rate_key'] == $this->_tpl_vars['bookingData']['checkin']): ?>selected="selected"<?php endif; ?>
                        value="<?php echo $this->_tpl_vars['rate_key']; ?>
"
                        data-price="<?php echo $this->_tpl_vars['ratePrice']; ?>
"
                        data-hours="<?php echo $this->_tpl_vars['rateTime']; ?>
"
                        data-type="<?php echo $this->_tpl_vars['rate']['type']; ?>
"
                >
                    <?php echo $this->_tpl_vars['rate']['title']; ?>

                </option>
            <?php endforeach; endif; unset($_from); ?>
        </select>
    </div>
<?php endif; ?>

<div id="escort_duration_obj" class="hide">
    <select name="escort_duration" <?php if (! $this->_tpl_vars['edit_action']): ?>class="disabled" disabled="disabled"<?php endif; ?>>
        <option value="-1"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>

        <?php unset($this->_sections['durations']);
$this->_sections['durations']['name'] = 'durations';
$this->_sections['durations']['start'] = (int)1;
$this->_sections['durations']['loop'] = is_array($_loop=13) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['durations']['show'] = true;
$this->_sections['durations']['max'] = $this->_sections['durations']['loop'];
$this->_sections['durations']['step'] = 1;
if ($this->_sections['durations']['start'] < 0)
    $this->_sections['durations']['start'] = max($this->_sections['durations']['step'] > 0 ? 0 : -1, $this->_sections['durations']['loop'] + $this->_sections['durations']['start']);
else
    $this->_sections['durations']['start'] = min($this->_sections['durations']['start'], $this->_sections['durations']['step'] > 0 ? $this->_sections['durations']['loop'] : $this->_sections['durations']['loop']-1);
if ($this->_sections['durations']['show']) {
    $this->_sections['durations']['total'] = min(ceil(($this->_sections['durations']['step'] > 0 ? $this->_sections['durations']['loop'] - $this->_sections['durations']['start'] : $this->_sections['durations']['start']+1)/abs($this->_sections['durations']['step'])), $this->_sections['durations']['max']);
    if ($this->_sections['durations']['total'] == 0)
        $this->_sections['durations']['show'] = false;
} else
    $this->_sections['durations']['total'] = 0;
if ($this->_sections['durations']['show']):

            for ($this->_sections['durations']['index'] = $this->_sections['durations']['start'], $this->_sections['durations']['iteration'] = 1;
                 $this->_sections['durations']['iteration'] <= $this->_sections['durations']['total'];
                 $this->_sections['durations']['index'] += $this->_sections['durations']['step'], $this->_sections['durations']['iteration']++):
$this->_sections['durations']['rownum'] = $this->_sections['durations']['iteration'];
$this->_sections['durations']['index_prev'] = $this->_sections['durations']['index'] - $this->_sections['durations']['step'];
$this->_sections['durations']['index_next'] = $this->_sections['durations']['index'] + $this->_sections['durations']['step'];
$this->_sections['durations']['first']      = ($this->_sections['durations']['iteration'] == 1);
$this->_sections['durations']['last']       = ($this->_sections['durations']['iteration'] == $this->_sections['durations']['total']);
?>
            <?php $this->assign('durationsIndex', $this->_sections['durations']['index']); ?>

            <?php unset($this->_sections['subdurations']);
$this->_sections['subdurations']['name'] = 'subdurations';
$this->_sections['subdurations']['start'] = (int)1;
$this->_sections['subdurations']['loop'] = is_array($_loop=3) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['subdurations']['show'] = true;
$this->_sections['subdurations']['max'] = $this->_sections['subdurations']['loop'];
$this->_sections['subdurations']['step'] = 1;
if ($this->_sections['subdurations']['start'] < 0)
    $this->_sections['subdurations']['start'] = max($this->_sections['subdurations']['step'] > 0 ? 0 : -1, $this->_sections['subdurations']['loop'] + $this->_sections['subdurations']['start']);
else
    $this->_sections['subdurations']['start'] = min($this->_sections['subdurations']['start'], $this->_sections['subdurations']['step'] > 0 ? $this->_sections['subdurations']['loop'] : $this->_sections['subdurations']['loop']-1);
if ($this->_sections['subdurations']['show']) {
    $this->_sections['subdurations']['total'] = min(ceil(($this->_sections['subdurations']['step'] > 0 ? $this->_sections['subdurations']['loop'] - $this->_sections['subdurations']['start'] : $this->_sections['subdurations']['start']+1)/abs($this->_sections['subdurations']['step'])), $this->_sections['subdurations']['max']);
    if ($this->_sections['subdurations']['total'] == 0)
        $this->_sections['subdurations']['show'] = false;
} else
    $this->_sections['subdurations']['total'] = 0;
if ($this->_sections['subdurations']['show']):

            for ($this->_sections['subdurations']['index'] = $this->_sections['subdurations']['start'], $this->_sections['subdurations']['iteration'] = 1;
                 $this->_sections['subdurations']['iteration'] <= $this->_sections['subdurations']['total'];
                 $this->_sections['subdurations']['index'] += $this->_sections['subdurations']['step'], $this->_sections['subdurations']['iteration']++):
$this->_sections['subdurations']['rownum'] = $this->_sections['subdurations']['iteration'];
$this->_sections['subdurations']['index_prev'] = $this->_sections['subdurations']['index'] - $this->_sections['subdurations']['step'];
$this->_sections['subdurations']['index_next'] = $this->_sections['subdurations']['index'] + $this->_sections['subdurations']['step'];
$this->_sections['subdurations']['first']      = ($this->_sections['subdurations']['iteration'] == 1);
$this->_sections['subdurations']['last']       = ($this->_sections['subdurations']['iteration'] == $this->_sections['subdurations']['total']);
?>
                <?php if ($this->_sections['subdurations']['index'] % 2 != 0): ?>
                    <?php $this->assign('subDurationsIndex', $this->_tpl_vars['durationsIndex']-0.5); ?>
                <?php else: ?>
                    <?php $this->assign('subDurationsIndex', $this->_tpl_vars['durationsIndex']); ?>
                <?php endif; ?>

                <?php $this->assign('durationPhraseKey', ((is_array($_tmp='booking_escort_duration_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['subDurationsIndex']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['subDurationsIndex']))); ?>

                <option <?php if ($this->_tpl_vars['edit_action'] && $this->_tpl_vars['subDurationsIndex'] == $this->_tpl_vars['bookingData']['end_date']): ?>selected="selected"<?php endif; ?>
                        value="<?php echo $this->_tpl_vars['subDurationsIndex']; ?>
"
                >
                    <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['durationPhraseKey']]; ?>

                </option>
            <?php endfor; endif; ?>
        <?php endfor; endif; ?>
    </select>
</div>

<!-- Booking availability/rates/duration info -->