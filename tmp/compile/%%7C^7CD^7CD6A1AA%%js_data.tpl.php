<?php /* Smarty version 2.6.31, created on 2025-05-30 13:52:45
         compiled from /home/gmoplus/public_html/plugins/loanMortgageCalculator/js_data.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pageUrl', '/home/gmoplus/public_html/plugins/loanMortgageCalculator/js_data.tpl', 5, false),array('function', 'addJS', '/home/gmoplus/public_html/plugins/loanMortgageCalculator/js_data.tpl', 36, false),array('modifier', 'lower', '/home/gmoplus/public_html/plugins/loanMortgageCalculator/js_data.tpl', 11, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/loanMortgageCalculator/js_data.tpl', 36, false),)), $this); ?>
<script>
var lm_configs = new Array();
lm_configs['mode'] = false;
lm_configs['in_box'] = <?php if ($this->_tpl_vars['mode'] == 'box'): ?>true<?php else: ?>false<?php endif; ?>;
lm_configs['print_page_url'] = "<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'loanMortgage_print'), $this);?>
";
lm_configs['listing_id'] = <?php if ($this->_tpl_vars['listing_data']['ID']): ?><?php echo $this->_tpl_vars['listing_data']['ID']; ?>
<?php else: ?>false<?php endif; ?>;
lm_configs['show_cents'] = <?php echo $this->_tpl_vars['config']['show_cents']; ?>
;
lm_configs['price_delimiter'] = "<?php echo $this->_tpl_vars['config']['price_delimiter']; ?>
";
lm_configs['cents_separator'] = "<?php echo $this->_tpl_vars['config']['price_separator']; ?>
";
lm_configs['currency'] = '<?php echo $this->_tpl_vars['lm_amount']['1']; ?>
';
lm_configs['lang_code'] = '<?php if ((defined('RL_LANG_CODE') ? @RL_LANG_CODE : null) == 'en'): ?>en-GB<?php else: ?><?php echo ((is_array($_tmp=(defined('RL_LANG_CODE') ? @RL_LANG_CODE : null))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
<?php endif; ?>';
lm_configs['loan_term_mode'] = '<?php if ($this->_tpl_vars['config']['loanMortgage_loan_term_mode'] == 'years'): ?>year<?php else: ?>month<?php endif; ?>';
lm_configs['loan_currency_mode'] = 'original';
lm_configs['loan_orig_amount'] = <?php if ($this->_tpl_vars['lm_amount']['0']): ?><?php echo $this->_tpl_vars['lm_amount']['0']; ?>
<?php else: ?>0<?php endif; ?>;
lm_configs['loan_orig_currency'] = '<?php echo $this->_tpl_vars['lm_amount']['1']; ?>
';

var lm_phrases = new Array();
lm_phrases['loan_amount'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_loan_amount']; ?>
';
lm_phrases['num_payments'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_num_payments']; ?>
';
lm_phrases['monthly_payment'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_monthly_payment']; ?>
';
lm_phrases['total_paid'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_total_paid']; ?>
';
lm_phrases['total_interest'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_total_interest']; ?>
';
lm_phrases['payoff_date'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_payoff_date']; ?>
';
lm_phrases['pmt_date'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_pmt_date']; ?>
';
lm_phrases['amount'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_amount']; ?>
';
lm_phrases['interest'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_interest']; ?>
';
lm_phrases['principal'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_principal']; ?>
';
lm_phrases['balance'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_balance']; ?>
';
lm_phrases['error_amount'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_error_amount']; ?>
';
lm_phrases['error_term'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_error_term']; ?>
';
lm_phrases['error_rate'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_error_rate']; ?>
';
lm_phrases['amz_schedule'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_amz_schedule']; ?>
';
lm_phrases['reset'] = '<?php echo $this->_tpl_vars['lang']['loanMortgage_reset']; ?>
';
</script>

<?php echo $this->_plugins['function']['addJS'][0][0]->smartyAddJS(array('file' => ((is_array($_tmp=(defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'loanMortgageCalculator/static/loan_calc.js') : smarty_modifier_cat($_tmp, 'loanMortgageCalculator/static/loan_calc.js'))), $this);?>


<script class="fl-js-dynamic">
<?php echo '
$(document).ready(function(){
    $(\'.lm_opacity\').animate({opacity: 0.4});
    $(\'#lm_loan_amount\').val(lm_configs[\'loan_orig_amount\']);
    
    // Months/years switcher
    $(\'#lm_loan_term_area\').click(function(){
        if ( lm_configs[\'loan_term_mode\'] == \'year\' ) {
            /* switch to month */
            $(\'#lm_loan_term_year\').css(\'font-weight\', \'normal\').animate({opacity: 0.4});
            $(\'#lm_loan_term_month\').css(\'font-weight\', \'bold\').animate({opacity: 1});
            
            lm_configs[\'loan_term_mode\'] = \'month\';
        }
        else {
            /* switch to year */
            $(\'#lm_loan_term_month\').css(\'font-weight\', \'normal\').animate({opacity: 0.4});
            $(\'#lm_loan_term_year\').css(\'font-weight\', \'bold\').animate({opacity: 1});
            
            lm_configs[\'loan_term_mode\'] = \'year\';
        }
        
        if ( lm_configs[\'mode\'] ) {
            loan_check();
        }
    });
    
    // Currency switcher
    $(\'#lm_loan_cur_area\').click(function(){
        if (lm_configs[\'loan_currency_mode\'] == \'original\') {
            // Switch to month
            $(\'#lm_loan_cur_orig\').css(\'font-weight\', \'normal\').animate({opacity: 0.4});
            $(\'#lm_loan_cur_conv\').css(\'font-weight\', \'bold\').animate({opacity: 1});
            
            var price = $(\'#lm_loan_amount\').val() / currencyConverter.inRange(lm_configs[\'currency\']) * currencyConverter.rates[currencyConverter.config[\'currency\']][0];
            price = currencyConverter.encodePrice(price, true, true);
            $(\'#lm_loan_amount\').val(price);
            
            lm_configs[\'loan_currency_mode\'] = \'converted\';
        } else {
            /* switch to year */
            $(\'#lm_loan_cur_conv\').css(\'font-weight\', \'normal\').animate({opacity: 0.4});
            $(\'#lm_loan_cur_orig\').css(\'font-weight\', \'bold\').animate({opacity: 1});
            
            $(\'#lm_loan_amount\').val(lm_configs[\'loan_orig_amount\']);
            lm_configs[\'currency\'] = lm_configs[\'loan_orig_currency\'];
            
            lm_configs[\'loan_currency_mode\'] = \'original\';
        }
        
        if (lm_configs[\'mode\']) {
            loan_check();
        }
    });
    
    loan_build_payment_date();

    var print = function(){
        if (loan_check(true)) {
            var url = lm_configs[\'print_page_url\'];

            var loanamt = $(\'#lm_loan_amount\').val();
            var term = $(\'#lm_loan_term\').val();
            var rate = $(\'#lm_loan_rate\').val();
            var month = $(\'#lm_loan_date_month option:selected\').text();
            var year = $(\'#lm_loan_date_year option:selected\').text();

            url += rlConfig[\'mod_rewrite\'] ? \'?\' : \'&\';
            url += \'id=\'+lm_configs[\'listing_id\']+\'&\';
            url += \'amount=\'+loanamt+\'&\';
            url += \'currency=\'+lm_configs[\'currency\']+\'&\';
            url += \'term=\'+term+\'&\';
            url += \'term_mode=\'+lm_configs[\'loan_term_mode\']+\'&\';
            url += \'rate=\'+rate+\'&\';
            url += \'mode=\'+lm_configs[\'loan_currency_mode\']+\'&\';
            url += \'date_month=\'+month+\'&\';
            url += \'date_month_number=\'+$(\'#lm_loan_date_month\').val()+\'&\';
            url += \'date_year=\'+year;

            window.open(url, \'_blank\');
        }
        
        return false;
    }
    
    $(\'#lm_print_schedule\').on(\'click\', function(){
        print();
    });
});
'; ?>

</script>