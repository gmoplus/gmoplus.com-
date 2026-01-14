<?php /* Smarty version 2.6.31, created on 2025-04-14 18:38:26
         compiled from /home/gmoplus/public_html/templates/general_sunny/components/contact-owner/_contact-owner.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/templates/general_sunny/components/contact-owner/_contact-owner.tpl', 6, false),array('function', 'pageUrl', '/home/gmoplus/public_html/templates/general_sunny/components/contact-owner/_contact-owner.tpl', 12, false),array('function', 'phrase', '/home/gmoplus/public_html/templates/general_sunny/components/contact-owner/_contact-owner.tpl', 90, false),)), $this); ?>
<!-- Contact Owner buttons handler -->

<div class="d-none hidden-contact-form">
    <div class="tmp-dom w-100">
        <?php if ($this->_tpl_vars['allow_send_message']): ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'contact_seller_form.tpl') : smarty_modifier_cat($_tmp, 'contact_seller_form.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php else: ?>
            <div class="restricted-content">
                <?php if ($this->_tpl_vars['isLogin']): ?>
                    <p><?php echo $this->_tpl_vars['lang']['contact_form_not_available']; ?>
</p>
                    <span>
                        <a class="button" title="<?php echo $this->_tpl_vars['lang']['registration']; ?>
" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'my_profile'), $this);?>
#membership"><?php echo $this->_tpl_vars['lang']['change_plan']; ?>
</a>
                    </span>
                <?php else: ?>
                    <p style="margin-bottom: 20px;"><?php echo $this->_tpl_vars['lang']['contact_owner_hint']; ?>
</p>
                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'login_modal.tpl') : smarty_modifier_cat($_tmp, 'login_modal.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php if ($this->_tpl_vars['allow_send_message']): ?>
<script>
<?php echo '

$(\'body\').on(\'submit\', \'form[name=contact_owner]\', function(){
    var $form = $(this);
    var $button = $form.find(\'input[type=submit]\');
    var listingID = $form.data(\'listing-id\');
    var accountID = $form.data(\'account-id\');
    var boxID = $form.data(\'box-id\');

    $button.val(lang[\'loading\']);

    if ($form.closest(\'.popup\').length) {
        $form.find(\'input,textarea\').focus(function(){
            $(this).removeClass(\'error\');
        });
    }

    var data = {
        mode:         \'contactOwner\',
        name:          $form.find(\'input[name=contact_name]\').val(),
        email:         $form.find(\'input[name=contact_email]\').val(),
        phone:         $form.find(\'input[name=contact_phone]\').val(),
        message:       $form.find(\'textarea[name=contact_message]\').val(),
        security_code: $form.find(\'input[name^=security_code]\').val(),
        listing_id:    listingID,
        account_id:    accountID,
        box_index:     boxID
    };
    flUtil.ajax(data, function(response, status){
        if (status == \'success\') {
            if (response.status == \'ok\') {
                $(\'#modal_block > div.inner > div.close\').trigger(\'click\');
                $form.closest(\'.popup\').find(\'.close\').trigger(\'click\');

                printMessage(\'notice\', response.message_text);

                $form.find(\'img[class^=contact_code_]\').trigger(\'click\');
                $form.find(\'input[type=reset]\').trigger(\'click\');
            } else {
                if ($form.closest(\'.popup\').length) {
                    if (response.message_text) {
                        $form.closest(\'.popup\').find(\'.close\').trigger(\'click\');
                        printMessage(\'error\', response.message_text);
                    } else {
                        $form.find(response.error_fields).addClass(\'error\');
                    }
                } else {
                    printMessage(\'error\', response.message_text, response.error_fields);
                }
            }

            $button.val($button.data(\'phrase\'));
        } else {
            printMessage(\'error\', lang[\'system_error\']);
        }
    });

    return false;
});

'; ?>

</script>
<?php endif; ?>

<script>
lang['contact_owner'] = "<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => 'contact_owner'), $this);?>
";

<?php echo '
var flContactOwnerHandler = function() {
    if (!$(\'.contact-owner\').length) {
        return;
    }

    flUtil.loadStyle(rlConfig[\'tpl_base\'] + \'components/popup/popup.css\');
    flUtil.loadScript(rlConfig[\'tpl_base\'] + \'components/popup/_popup.js\', function(){
        $(\'.contact-owner\').each(function(){
            // Prevent sending message to own account
            if ($(this).hasClass(\'price-contact-form\')
                && $(this).data(\'account-id\')
                && rlAccountInfo.ID == $(this).data(\'account-id\')
            ) {
                $(this).off(\'click\').on(\'click\', function(){
                    printMessage(\'error\', lang.deny_contact_with_own_account);
                });
                return;
            }

            $(this).off(\'click\').popup({
                width: 345,
                caption: lang[\'contact_owner\'],
                onShow: function($interface) {
                    $(\'.hidden-contact-form > .tmp-dom\').appendTo($interface.find(\'.body\'));
                    flynaxTpl.setupTextarea();

                    if (this.$element.hasClass(\'price-contact-form\')
                        && this.$element.data(\'listing-id\')
                        && this.$element.data(\'account-id\')
                    ) {
                        $interface.find(\'form[name="contact_owner"]\').data(\'listing-id\', this.$element.data(\'listing-id\'));
                        $interface.find(\'form[name="contact_owner"]\').data(\'account-id\', this.$element.data(\'account-id\'));
                        $interface.find(\'textarea[name="contact_message"]\').html(lang.price_contact_form_template);
                    }
                },
                onClose: function($interface) {
                    $interface.find(\'.body > *\').appendTo($(\'.hidden-contact-form\'));
                    this.destroy();
                }
            });
        });
    });
}

flContactOwnerHandler();

'; ?>

</script>

<!-- Contact Owner buttons handler end -->