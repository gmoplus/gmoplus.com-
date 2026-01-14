<?php /* Smarty version 2.6.31, created on 2025-05-30 13:52:45
         compiled from /home/gmoplus/public_html/plugins/street_view/tab.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', '/home/gmoplus/public_html/plugins/street_view/tab.tpl', 5, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/street_view/tab.tpl', 7, false),)), $this); ?>
<!-- street view tab content -->

<div id="area_streetView" class="tab_area hide">
    <?php $this->assign('replace', ('{')."address".('}')); ?>
    <?php $this->assign('no_loc_phrase', ((is_array($_tmp=$this->_tpl_vars['lang']['street_view_no_location'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['location']['search']) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace'], $this->_tpl_vars['location']['search']))); ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'street_view/config.js.tpl') : smarty_modifier_cat($_tmp, 'street_view/config.js.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <script class="fl-js-dynamic">
    var stree_view_point = "<?php echo $this->_tpl_vars['location']['direct']; ?>
";
    <?php echo '

    $(function(){
        var street_view_map = false;

        $(\'.tabs li\').click(function(){
            if (!street_view_map && $(this).attr(\'id\') == \'tab_streetView\') {
                streetViewInit(stree_view_point);
                street_view_map = true;
            }
        });

        if (!street_view_map && flynax.getHash() == \'streetView_tab\') {
            streetViewInit(stree_view_point);
            street_view_map = true;
        }
    });
    '; ?>

    </script>

    <div id="street_view" style="height: 65vh;"></div>
    <div id="no_street_view" class="hide info"><?php echo $this->_tpl_vars['no_loc_phrase']; ?>
</div>
</div>

<!-- street view tab content end -->