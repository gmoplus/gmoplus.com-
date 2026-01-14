<?php /* Smarty version 2.6.31, created on 2025-04-14 18:38:28
         compiled from /home/gmoplus/public_html/templates/general_sunny/tpl/blocks/horizontal_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'key', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/horizontal_search.tpl', 5, false),array('modifier', 'preg_match', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/horizontal_search.tpl', 6, false),array('modifier', 'count', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/horizontal_search.tpl', 11, false),array('modifier', 'cat', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/horizontal_search.tpl', 22, false),array('function', 'fetch', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/horizontal_search.tpl', 22, false),array('function', 'pageUrl', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/horizontal_search.tpl', 45, false),array('function', 'phrase', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/horizontal_search.tpl', 53, false),)), $this); ?>
<!-- home page search box tpl -->

<?php $this->assign('is_form_arranged', false); ?>
<?php if (is_array ( $this->_tpl_vars['search_forms'] )): ?>
    <?php $this->assign('first_form_key', key($this->_tpl_vars['search_forms'])); ?>
    <?php if (((is_array($_tmp='/_tab[0-9]$/')) ? $this->_run_mod_handler('preg_match', true, $_tmp, $this->_tpl_vars['first_form_key']) : preg_match($_tmp, $this->_tpl_vars['first_form_key']))): ?>
        <?php $this->assign('is_form_arranged', true); ?>
    <?php endif; ?>
<?php endif; ?>

<div class="point1<?php if ($this->_tpl_vars['pageInfo']['Key'] == 'home'): ?> header-tabs<?php if (! $this->_tpl_vars['is_form_arranged'] && is_array ( $this->_tpl_vars['search_forms'] ) && count($this->_tpl_vars['search_forms']) > 1): ?> header-tabs__tabs-exists<?php endif; ?><?php endif; ?>">
<!-- tabs -->

<?php if (is_array ( $this->_tpl_vars['search_forms'] ) && count($this->_tpl_vars['search_forms']) > 1 && ! $this->_tpl_vars['is_form_arranged']): ?>
    <ul class="tabs tabs-hash <?php if (count($this->_tpl_vars['search_forms']) < 5): ?> tabs_count_<?php echo count($this->_tpl_vars['search_forms']); ?>
<?php endif; ?>">
        <?php $_from = $this->_tpl_vars['search_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['stabsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['stabsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sf_key'] => $this->_tpl_vars['search_form']):
        $this->_foreach['stabsF']['iteration']++;
?>
            <?php $this->assign('listing_type_color', $this->_tpl_vars['listing_types'][$this->_tpl_vars['search_form']['listing_type']]['Color']); ?>
            <li id="tab_<?php echo $this->_tpl_vars['sf_key']; ?>
" class="<?php if (($this->_foreach['stabsF']['iteration'] <= 1)): ?>active<?php endif; ?>">
                <a href="#<?php echo $this->_tpl_vars['sf_key']; ?>
" data-target="<?php echo $this->_tpl_vars['sf_key']; ?>
">
                    <?php if ($this->_tpl_vars['pageInfo']['Key'] == 'home' && $this->_tpl_vars['listing_types'][$this->_tpl_vars['search_form']['listing_type']]['Menu'] && $this->_tpl_vars['listing_types'][$this->_tpl_vars['search_form']['listing_type']]['Menu_icon']): ?>
                        <span class="tab-icon">
                            <?php echo smarty_function_fetch(array('file' => ((is_array($_tmp=((is_array($_tmp=(defined('RL_LIBS') ? @RL_LIBS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, 'icons/svg-line-set/') : smarty_modifier_cat($_tmp, 'icons/svg-line-set/')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['listing_types'][$this->_tpl_vars['search_form']['listing_type']]['Menu_icon']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['listing_types'][$this->_tpl_vars['search_form']['listing_type']]['Menu_icon']))), $this);?>

                        </span>
                    <?php endif; ?>
                    <?php echo $this->_tpl_vars['search_form']['name']; ?>

                </a>
            </li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
<?php endif; ?>
<!-- tabs end -->

<div class="horizontal-search">
    <div class="search-block-content">
        <?php $_from = $this->_tpl_vars['search_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sformsF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sformsF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sf_key'] => $this->_tpl_vars['search_form']):
        $this->_foreach['sformsF']['iteration']++;
?>
            <?php $this->assign('spage_key', $this->_tpl_vars['listing_types'][$this->_tpl_vars['search_form']['listing_type']]['Page_key']); ?>
            <?php $this->assign('listing_type', $this->_tpl_vars['listing_types'][$this->_tpl_vars['search_form']['listing_type']]); ?>
            <?php $this->assign('post_form_key', $this->_tpl_vars['sf_key']); ?>

            <div id="area_<?php echo $this->_tpl_vars['sf_key']; ?>
" class="search_tab_area<?php if (! ($this->_foreach['sformsF']['iteration'] <= 1)): ?> hide<?php endif; ?>">
                <form name="map-search-form"
                      class="d-flex flex-wrap"
                      accesskey="<?php echo $this->_tpl_vars['search_form']['listing_type']; ?>
"
                      method="<?php echo $this->_tpl_vars['listing_type']['Submit_method']; ?>
"
                      action="<?php echo $this->_plugins['function']['pageUrl'][0][0]->pageUrl(array('key' => $this->_tpl_vars['spage_key'],'add_url' => $this->_tpl_vars['search_results_url']), $this);?>
"><?php echo '<input type="hidden" name="action" value="search" /><input type="hidden" name="post_form_key" value="'; ?><?php echo $this->_tpl_vars['post_form_key']; ?><?php echo '" /><!-- tabs -->'; ?><?php if (count($this->_tpl_vars['search_forms']) > 1 && $this->_tpl_vars['is_form_arranged']): ?><?php echo '<div class="search-form-cell form-switcher"><div class="align-items-end"><span>'; ?><?php if ($this->_tpl_vars['search_form']['arrange_field']): ?><?php echo ''; ?><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => ((is_array($_tmp='listing_fields+name+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['search_form']['arrange_field']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['search_form']['arrange_field']))), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo $this->_tpl_vars['lang']['listing_type']; ?><?php echo ''; ?><?php endif; ?><?php echo '</span><div>'; ?><?php if (count($this->_tpl_vars['search_forms']) > 3): ?><?php echo '<select name="pills_'; ?><?php echo $this->_tpl_vars['sf_key']; ?><?php echo '">'; ?><?php $_from = $this->_tpl_vars['search_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pill_key'] => $this->_tpl_vars['search_pill']):
?><?php echo '<option value="'; ?><?php echo $this->_tpl_vars['pill_key']; ?><?php echo '"'; ?><?php if ($this->_tpl_vars['sf_key'] == $this->_tpl_vars['pill_key']): ?><?php echo ' selected="selected"'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['search_pill']['name']; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php else: ?><?php echo '<span class="pills" data-key="'; ?><?php echo $this->_tpl_vars['sf_key']; ?><?php echo '">'; ?><?php $_from = $this->_tpl_vars['search_forms']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pill_key'] => $this->_tpl_vars['search_pill']):
?><?php echo '<label data-key="'; ?><?php echo $this->_tpl_vars['pill_key']; ?><?php echo '" title="'; ?><?php echo $this->_tpl_vars['search_pill']['name']; ?><?php echo '"><input type="radio" value="'; ?><?php echo $this->_tpl_vars['pill_key']; ?><?php echo '" name="pills_'; ?><?php echo $this->_tpl_vars['sf_key']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['sf_key'] == $this->_tpl_vars['pill_key']): ?><?php echo 'checked="checked"'; ?><?php endif; ?><?php echo ' />'; ?><?php echo $this->_tpl_vars['search_pill']['name']; ?><?php echo '</label>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</span>'; ?><?php endif; ?><?php echo '</div></div></div>'; ?><?php endif; ?><?php echo '<!-- tabs end -->'; ?><?php $_from = $this->_tpl_vars['search_form']['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields_search_horizontal.tpl') : smarty_modifier_cat($_tmp, 'fields_search_horizontal.tpl')), 'smarty_include_vars' => array('fields' => $this->_tpl_vars['item']['Fields'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo '<div class="search-form-cell submit"><div><span></span><div><input type="submit" value="'; ?><?php echo $this->_tpl_vars['lang']['search']; ?><?php echo '" /></div></div></div>'; ?>
</form>
            </div>
        <?php endforeach; endif; unset($_from); ?>

        <?php if (is_array ( $this->_tpl_vars['search_forms'] ) && count($this->_tpl_vars['search_forms']) > 1 && $this->_tpl_vars['is_form_arranged']): ?>
        <script class="fl-js-dynamic">
        <?php echo '

        (function(){
            $(\'.form-switcher label\').click(function(e){
                e.stopPropagation();
                searchFormSwitcher($(this).data(\'key\'));
                return false;
            });

            $(\'.form-switcher select\').change(function(e){
                e.stopPropagation();
                searchFormSwitcher($(this).val());
                return false;
            });

            var searchFormSwitcher = function(key){
                $(\'.search-block-content > .search_tab_area\').addClass(\'hide\');
                $(\'#area_\' + key).removeClass(\'hide\');
            }
        })();

        '; ?>

        </script>
        <?php endif; ?>
    </div>
</div>
</div>

<!-- home page search box tpl end -->