<?php /* Smarty version 2.6.31, created on 2025-05-30 13:52:45
         compiled from /home/gmoplus/public_html/templates/general_sunny/controllers/listing_details/details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'rlHook', '/home/gmoplus/public_html/templates/general_sunny/controllers/listing_details/details.tpl', 6, false),array('function', 'staticMap', '/home/gmoplus/public_html/templates/general_sunny/controllers/listing_details/details.tpl', 53, false),array('modifier', 'cat', '/home/gmoplus/public_html/templates/general_sunny/controllers/listing_details/details.tpl', 39, false),)), $this); ?>
<!-- listing fields table -->

<div class="listing-fields">
<?php $_from = $this->_tpl_vars['listing']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
    <?php $this->assign('skipGroup', false); ?>
    <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplListingDetailsFieldsForeachTop'), $this);?>


    <?php if (( $this->_tpl_vars['noGroupBreak'] && ! $this->_tpl_vars['group']['Key'] ) || ( ! $this->_tpl_vars['noGroupBreak'] && $this->_tpl_vars['group']['Key'] && $this->_tpl_vars['group']['Key'] == $this->_tpl_vars['groupBreak'] ) || $this->_tpl_vars['skipGroup']): ?>
        <?php continue; ?>
    <?php endif; ?>

    <div class="<?php if ($this->_tpl_vars['group']['Key']): ?><?php echo $this->_tpl_vars['group']['Key']; ?>
<?php else: ?>no-group<?php endif; ?>">
        <?php if ($this->_tpl_vars['group']['Group_ID']): ?>
            <?php $this->assign('hide', false); ?>
            <?php $this->assign('group_id', false); ?>
            <?php $this->assign('group_name', false); ?>

            <?php if (! $this->_tpl_vars['group']['Display']): ?>
                <?php $this->assign('hide', true); ?>
            <?php endif; ?>

            <?php $this->assign('value_counter', '0'); ?>
            <?php $_from = $this->_tpl_vars['group']['Fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['groupsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['groupsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group_values']):
        $this->_foreach['groupsF']['iteration']++;
?>
                <?php if ($this->_tpl_vars['group_values']['value'] == '' || ! $this->_tpl_vars['group_values']['Details_page']): ?>
                    <?php $this->assign('value_counter', $this->_tpl_vars['value_counter']+1); ?>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>

            <?php if (! empty ( $this->_tpl_vars['group']['Fields'] ) && ( $this->_foreach['groupsF']['total'] != $this->_tpl_vars['value_counter'] )): ?>
                <?php if ($this->_tpl_vars['group']['Header']): ?>
                    <?php $this->assign('group_id', $this->_tpl_vars['group']['ID']); ?>
                    <?php $this->assign('group_name', $this->_tpl_vars['group']['name']); ?>
                    <?php $this->assign('fieldset_class', false); ?>
                <?php else: ?>
                    <?php $this->assign('group_id', false); ?>
                    <?php $this->assign('group_name', false); ?>
                    <?php $this->assign('fieldset_class', 'd-none'); ?>
                <?php endif; ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_header.tpl') : smarty_modifier_cat($_tmp, 'fieldset_header.tpl')), 'smarty_include_vars' => array('id' => $this->_tpl_vars['group_id'],'name' => $this->_tpl_vars['group_name'],'hide' => $this->_tpl_vars['hide'],'line' => $this->_tpl_vars['line'],'class' => $this->_tpl_vars['fieldset_class'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <?php if ($this->_tpl_vars['group']['Key'] == 'location' && $this->_tpl_vars['config']['map_module'] && $this->_tpl_vars['location']['direct']): ?>
                    <div class="row<?php if ($this->_tpl_vars['locationMode'] == 'column'): ?> flex-column<?php endif; ?>">
                        <div class="<?php if ($this->_tpl_vars['locationMode'] == 'column'): ?>col<?php else: ?>col-md-6<?php endif; ?> fields">
                            <?php $_from = $this->_tpl_vars['group']['Fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fListings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fListings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['item']):
        $this->_foreach['fListings']['iteration']++;
?>
                                <?php if (! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page']): ?>
                                    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                                <?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
                        </div>
                        <div class="<?php if ($this->_tpl_vars['locationMode'] == 'column'): ?>col<?php else: ?>col-md-6 mt-md-0<?php endif; ?> map mt-3">
                            <section title="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
" class="map-capture">
                                <img alt="<?php echo $this->_tpl_vars['lang']['expand_map']; ?>
"
                                     src="<?php echo $this->_plugins['function']['staticMap'][0][0]->staticMap(array('location' => $this->_tpl_vars['location']['direct'],'zoom' => $this->_tpl_vars['config']['map_default_zoom'],'width' => 480,'height' => 180), $this);?>
"
                                     srcset="<?php echo $this->_plugins['function']['staticMap'][0][0]->staticMap(array('location' => $this->_tpl_vars['location']['direct'],'zoom' => $this->_tpl_vars['config']['map_default_zoom'],'width' => 480,'height' => 180,'scale' => 2), $this);?>
 2x" />
                                <?php if (! $this->_tpl_vars['listing_type']['Photo'] || ! $this->_tpl_vars['photos']): ?><span class="media-enlarge"><span></span></span><?php endif; ?>
                            </section>
                        </div>
                    </div>

                    <?php if (! $this->_tpl_vars['listing_type']['Photo'] || ! $this->_tpl_vars['photos'] || $this->_tpl_vars['tpl_settings']['listing_details_simple_gallary']): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'listing_details_static_map.tpl') : smarty_modifier_cat($_tmp, 'listing_details_static_map.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php else: ?>
                        <script class="fl-js-dynamic">
                        <?php echo '

                        $(function(){
                            $(\'.map .map-capture img\').click(function(){
                                flynax.slideTo(\'.listing-details\');
                                $(\'#media .nav-buttons .nav-button.map\').trigger(\'click\');
                            });
                        });

                        '; ?>

                        </script>
                    <?php endif; ?>
                <?php else: ?>
                    <?php if ($this->_tpl_vars['group']['Columns']): ?>
                    <div class="row">
                    <?php endif; ?>
                    <?php $_from = $this->_tpl_vars['group']['Fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fListings'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fListings']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['item']):
        $this->_foreach['fListings']['iteration']++;
?>
                        <?php if (! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page']): ?>
                            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array('columnsView' => $this->_tpl_vars['group']['Columns'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                        <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?>
                    <?php if ($this->_tpl_vars['group']['Columns']): ?>
                    </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fieldset_footer.tpl') : smarty_modifier_cat($_tmp, 'fieldset_footer.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php endif; ?>
        <?php else: ?>
            <?php if ($this->_tpl_vars['group']['Fields']): ?>
                <?php $_from = $this->_tpl_vars['group']['Fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                    <?php if (! empty ( $this->_tpl_vars['item']['value'] ) && $this->_tpl_vars['item']['Details_page']): ?>
                        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field_out.tpl') : smarty_modifier_cat($_tmp, 'field_out.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php endforeach; endif; unset($_from); ?>
</div>

<!-- listing fields table end -->