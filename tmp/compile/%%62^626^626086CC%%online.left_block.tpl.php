<?php /* Smarty version 2.6.31, created on 2025-05-30 13:43:21
         compiled from /home/gmoplus/public_html/plugins/online/online.left_block.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/home/gmoplus/public_html/plugins/online/online.left_block.tpl', 21, false),)), $this); ?>
<!-- who's online block -->

<div class="row">
    <div class="fieldset col-12<?php if ($this->_tpl_vars['block']['Side'] == 'middle' || $this->_tpl_vars['block']['Side'] == 'top' || $this->_tpl_vars['block']['Side'] == 'bottom'): ?> col-sm-6<?php elseif ($this->_tpl_vars['block']['Side'] == 'left'): ?> col-sm-6 col-lg-12<?php endif; ?>">
        <b><?php echo $this->_tpl_vars['lang']['online_statistics_text']; ?>
</b>
        <div class="body">
            <div <?php if ($this->_tpl_vars['block']['Side'] == 'middle' || $this->_tpl_vars['block']['Side'] == 'top' || $this->_tpl_vars['block']['Side'] == 'bottom'): ?>class="pb-sm-0"<?php endif; ?>>
                <div class="table-cell d-flex">
                    <div class="name mw-100 w-auto flex-fill"><?php echo $this->_tpl_vars['lang']['online_count_last_hour_text']; ?>
</div>
                    <div class="value text-center"><?php echo $this->_tpl_vars['onlineStatistics']['lastHour']; ?>
</div>
                </div>
                <div class="table-cell d-flex">
                    <div class="name mw-100 w-auto flex-fill"><?php echo $this->_tpl_vars['lang']['online_count_last_day_text']; ?>
</div>
                    <div class="value text-center"><?php echo $this->_tpl_vars['onlineStatistics']['lastDay']; ?>
</div>
                </div>
            </div>
        </div>
    </div>

    <div class="fieldset mb-0 col-12<?php if ($this->_tpl_vars['block']['Side'] == 'middle' || $this->_tpl_vars['block']['Side'] == 'top' || $this->_tpl_vars['block']['Side'] == 'bottom'): ?> col-sm-6<?php elseif ($this->_tpl_vars['block']['Side'] == 'left'): ?> col-sm-6 col-lg-12<?php endif; ?>">
        <b><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['online_count_all_text'])) ? $this->_run_mod_handler('replace', true, $_tmp, '[number]', $this->_tpl_vars['onlineStatistics']['total']) : smarty_modifier_replace($_tmp, '[number]', $this->_tpl_vars['onlineStatistics']['total'])); ?>
</b>
        <div class="body">
            <div class="pb-0">
                <div class="table-cell d-flex">
                    <div class="name mw-100 w-auto flex-fill"><?php echo $this->_tpl_vars['lang']['online_count_users_text']; ?>
</div>
                    <div class="value text-center"><?php echo $this->_tpl_vars['onlineStatistics']['users']; ?>
</div>
                </div>
                <div class="table-cell d-flex">
                    <div class="name mw-100 w-auto flex-fill"><?php echo $this->_tpl_vars['lang']['online_count_guests_text']; ?>
</div>
                    <div class="value text-center"><?php echo $this->_tpl_vars['onlineStatistics']['guests']; ?>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- who's online block end -->