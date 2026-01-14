<?php /* Smarty version 2.6.31, created on 2025-05-30 13:52:45
         compiled from /home/gmoplus/public_html/plugins/PdfExport/PdfExport_icon.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'pageUrl', '/home/gmoplus/public_html/plugins/PdfExport/PdfExport_icon.tpl', 5, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/PdfExport/PdfExport_icon.tpl', 5, false),)), $this); ?>
<!-- PDF Export link -->

<?php if ($this->_tpl_vars['listing_data']['Status'] === 'active'): ?>
    <li>
        <a target="_blank" href="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => 'PdfExport','vars' => ((is_array($_tmp='listingID=')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing_data']['ID']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing_data']['ID']))), $this);?>
">
            <?php echo $this->_tpl_vars['lang']['title_pdf_export']; ?>


            <img style="vertical-align: top; margin-top: 1px;"
                src="<?php echo (defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null); ?>
PdfExport/static/icon.png"
                alt="<?php echo $this->_tpl_vars['lang']['title_pdf_export']; ?>
"
                title="<?php echo $this->_tpl_vars['lang']['title_pdf_export']; ?>
"/>
        </a>
    </li>
<?php endif; ?>

<!-- PDF Export link end -->