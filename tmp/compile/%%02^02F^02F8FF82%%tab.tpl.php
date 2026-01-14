<?php /* Smarty version 2.6.31, created on 2025-05-30 13:52:45
         compiled from /home/gmoplus/public_html/plugins/loanMortgageCalculator/tab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'addCSS', '/home/gmoplus/public_html/plugins/loanMortgageCalculator/tab.tpl', 73, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/loanMortgageCalculator/tab.tpl', 73, false),)), $this); ?>
<!-- loan mortgage tab content -->

<div id="area_loanMortgage" class="tab_area content-padding hide">
    <div class="row"><?php echo '<div class="col-lg-6"><div class="fieldset divider"><header>'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_loan_terms']; ?><?php echo '</header></div><div><div class="submit-cell"><div class="name" title="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_loan_amount']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_loan_amount']; ?><?php echo '</div><div class="field combo-field"><input type="text" name="lm_loan_amount" class="wauto numeric" size="6" id="lm_loan_amount" value="'; ?><?php echo $this->_tpl_vars['lm_amount']['0']; ?><?php echo '" />'; ?><?php if ($this->_tpl_vars['curConv_code'] && $this->_tpl_vars['lm_amount']['1'] && $this->_tpl_vars['lm_amount']['1'] != $this->_tpl_vars['curConv_code'] && $this->_tpl_vars['lm_amount']['1'] != $this->_tpl_vars['curConv_sign']): ?><?php echo '<span title="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_switch']; ?><?php echo '" id="lm_loan_cur_area" class="switcher"><span id="lm_loan_cur_orig" style="font-weight: bold;">'; ?><?php echo $this->_tpl_vars['lm_amount']['1']; ?><?php echo '</span>/<span id="lm_loan_cur_conv" class="lm_opacity">'; ?><?php echo $this->_tpl_vars['curConv_rates'][$this->_tpl_vars['curConv_code']]['Code']; ?><?php echo '</span></span>'; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lm_amount']['1']; ?><?php echo ''; ?><?php endif; ?><?php echo '</div></div><div class="submit-cell"><div class="name" title="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_loan_term']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_loan_term']; ?><?php echo '</div><div class="field combo-field"><input maxlength="3" type="text" class="wauto numeric" size="3" name="lm_loan_term" id="lm_loan_term" value="'; ?><?php if ($this->_tpl_vars['config']['loanMortgage_loan_term'] > 0): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['loanMortgage_loan_term']; ?><?php echo ''; ?><?php endif; ?><?php echo '" /><span title="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_switch']; ?><?php echo '" id="lm_loan_term_area" class="switcher"><span id="lm_loan_term_year" '; ?><?php if ($this->_tpl_vars['config']['loanMortgage_loan_term_mode'] == 'years'): ?><?php echo 'style="font-weight: bold;"'; ?><?php else: ?><?php echo 'class="lm_opacity"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_years']; ?><?php echo '</span>/<span id="lm_loan_term_month" '; ?><?php if ($this->_tpl_vars['config']['loanMortgage_loan_term_mode'] == 'months'): ?><?php echo 'style="font-weight: bold;"'; ?><?php else: ?><?php echo 'class="lm_opacity"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_months']; ?><?php echo '</span></span></div></div><div class="submit-cell"><div class="name" title="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_interest_rate']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_interest_rate']; ?><?php echo '</div><div class="field combo-field"><input type="text" maxlength="4" class="wauto numeric" size="4" name="lm_loan_rate" id="lm_loan_rate" value="'; ?><?php if ($this->_tpl_vars['config']['loanMortgage_loan_rate'] > 0): ?><?php echo ''; ?><?php echo $this->_tpl_vars['config']['loanMortgage_loan_rate']; ?><?php echo ''; ?><?php endif; ?><?php echo '" /> %</div></div><div class="submit-cell"><div class="name" title="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_first_pmt_date']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_first_pmt_date']; ?><?php echo '</div><div class="field two-fields"><select id="lm_loan_date_month"></select><select id="lm_loan_date_year"></select></div></div><div class="submit-cell buttons"><div class="name"></div><div class="field two-fields"><input onclick="loan_check();" title="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_calculate']; ?><?php echo '" type="button" id="lm_loan_calculate" value="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_calculate']; ?><?php echo '" /><span onclick="loan_clear();" title="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_reset']; ?><?php echo '" class="red margin">'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_reset']; ?><?php echo '</span></div></div></div></div><div class="col-lg-6"><div class="fieldset divider"><header>'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_payments']; ?><?php echo '</header></div><div id="lm_details_area" data-hint="'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_start_message']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_start_message']; ?><?php echo '</div><div class="hide mt-3 text-center" id="lm-print-cont"><a href="javascript://" id="lm_print_schedule">'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_print']; ?><?php echo ' <span class="text-lowercase">'; ?><?php echo $this->_tpl_vars['lang']['loanMortgage_amz_schedule']; ?><?php echo '</span></a></div></div>'; ?>
</div>
    
    <div id="lm_amortization" class="hide">
        <div class="fieldset divider"><header><?php echo $this->_tpl_vars['lang']['loanMortgage_amz_schedule']; ?>
</header></div>
        <div id="lm_amortization_area"></div>
    </div>
</div>

<?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=(defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'loanMortgageCalculator/static/style-tab.css') : smarty_modifier_cat($_tmp, 'loanMortgageCalculator/static/style-tab.css'))), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'loanMortgageCalculator/js_data.tpl') : smarty_modifier_cat($_tmp, 'loanMortgageCalculator/js_data.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script class="fl-js-dynamic">
<?php echo '

$(function(){
    $(\'#area_loanMortgage input.numeric\').numeric({negative: false});
});

'; ?>

</script>

<!-- loan mortgage tab content end -->