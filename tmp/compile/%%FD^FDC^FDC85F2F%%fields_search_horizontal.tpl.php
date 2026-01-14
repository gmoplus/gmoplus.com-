<?php /* Smarty version 2.6.31, created on 2025-04-18 20:46:16
         compiled from /home/gmoplus/public_html/templates/general_sunny/tpl/blocks/fields_search_horizontal.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/fields_search_horizontal.tpl', 9, false),array('modifier', 'replace', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/fields_search_horizontal.tpl', 38, false),array('modifier', 'df', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/fields_search_horizontal.tpl', 40, false),array('modifier', 'count', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/fields_search_horizontal.tpl', 41, false),array('modifier', 'current', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/fields_search_horizontal.tpl', 42, false),array('function', 'phrase', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/fields_search_horizontal.tpl', 46, false),array('function', 'addCSS', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/fields_search_horizontal.tpl', 87, false),array('function', 'rlHook', '/home/gmoplus/public_html/templates/general_sunny/tpl/blocks/fields_search_horizontal.tpl', 194, false),)), $this); ?>
<!-- fields block (for search in horizontal box) -->

<?php if ($this->_tpl_vars['listing_type']['Submit_method'] == 'post'): ?>
    <?php $this->assign('fVal', $_POST); ?>
<?php else: ?>
    <?php $this->assign('fVal', $_GET); ?>
<?php endif; ?>

<?php $this->assign('sbd_file', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=(defined('RL_PLUGINS') ? @RL_PLUGINS : null))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'search_by_distance') : smarty_modifier_cat($_tmp, 'search_by_distance')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'field.tpl') : smarty_modifier_cat($_tmp, 'field.tpl'))); ?>
<?php $this->assign('multicat_listing_type', $this->_tpl_vars['search_form']['listing_type']); ?>
<?php $this->assign('levels_number', $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multicat_levels']); ?>

<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
    <?php $this->assign('fKey', $this->_tpl_vars['field']['Key']); ?>

    <?php $this->assign('cell_class', 'single-field'); ?>
    <?php if ($this->_tpl_vars['field']['Key'] == 'address' || $this->_tpl_vars['field']['Key'] == 'b_address'): ?>
        <?php $this->assign('cell_class', 'address'); ?>
    <?php elseif ($this->_tpl_vars['field']['Type'] == 'price' || $this->_tpl_vars['field']['Type'] == 'mixed'): ?>
        <?php $this->assign('cell_class', 'three-field'); ?>
    <?php elseif ($this->_tpl_vars['field']['Type'] == 'select' && $this->_tpl_vars['field']['Condition'] == 'years'): ?>
        <?php $this->assign('cell_class', 'two-fields'); ?>
    <?php elseif ($this->_tpl_vars['field']['Type'] == 'bool'): ?>
        <?php $this->assign('cell_class', 'couple-field'); ?>
    <?php elseif ($this->_tpl_vars['field']['Type'] == 'date'): ?>
        <?php $this->assign('cell_class', 'two-fields'); ?>
    <?php elseif ($this->_tpl_vars['field']['Type'] == 'number'): ?>
        <?php $this->assign('cell_class', 'numeric-field'); ?>
    <?php elseif ($this->_tpl_vars['field']['Type'] == 'checkbox' || $this->_tpl_vars['field']['Type'] == 'radio'): ?>
        <?php $this->assign('cell_class', 'checkbox-field'); ?>
    <?php endif; ?>

    <div class="search-form-cell <?php echo $this->_tpl_vars['cell_class']; ?>
 <?php if ($this->_tpl_vars['field']['Type'] != 'date'): ?><?php echo $this->_tpl_vars['field']['Type']; ?>
<?php endif; ?>">
        <div>
            <span>
                <?php if ($this->_tpl_vars['field']['Type'] == 'number'): ?>
                    <?php $this->assign('replace_field_key', ('{')."field_name".('}')); ?>
                    <?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['number_caption_min'])) ? $this->_run_mod_handler('replace', true, $_tmp, $this->_tpl_vars['replace_field_key'], $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pName']]) : smarty_modifier_replace($_tmp, $this->_tpl_vars['replace_field_key'], $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pName']])); ?>

                <?php elseif ($this->_tpl_vars['field']['Type'] == 'price'): ?>
                    <?php $this->assign('currency_source', ((is_array($_tmp='currency')) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp))); ?>
                    <?php $this->assign('currency_count', count($this->_tpl_vars['currency_source'])); ?>
                    <?php $this->assign('currency_first', current($this->_tpl_vars['currency_source'])); ?>

                    <?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pName']]; ?>
<?php endif; ?>
                    <?php if ($this->_tpl_vars['currency_source'] && $this->_tpl_vars['currency_count'] === 1): ?>
                        (<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => $this->_tpl_vars['currency_first']['pName']), $this);?>
)
                    <?php endif; ?>
                <?php elseif ($this->_tpl_vars['field']['Type'] == 'mixed'): ?>
                    <?php if (! empty ( $this->_tpl_vars['field']['Condition'] )): ?>
                        <?php $this->assign('df_source', ((is_array($_tmp=$this->_tpl_vars['field']['Condition'])) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp))); ?>
                    <?php else: ?>
                        <?php $this->assign('df_source', $this->_tpl_vars['field']['Values']); ?>
                    <?php endif; ?>
                    <?php $this->assign('df_count', count($this->_tpl_vars['df_source'])); ?>
                    <?php $this->assign('df_first', current($this->_tpl_vars['df_source'])); ?>

                    <?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pName']]; ?>
<?php endif; ?>
                    <?php if ($this->_tpl_vars['df_source'] && $this->_tpl_vars['df_count'] === 1): ?>
                        (<?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => $this->_tpl_vars['df_first']['pName']), $this);?>
)
                    <?php endif; ?>
                <?php else: ?>
                    <?php $this->assign('field_phrase_key', $this->_tpl_vars['field']['pName']); ?>
                    <?php if ($this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multi_categories'] > 0 && $this->_tpl_vars['field']['Key'] == 'Category_ID' && $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multicat_phrases']): ?>
                        <?php $this->assign('field_phrase_key', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='multilevel_category+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['multicat_listing_type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['multicat_listing_type'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '+') : smarty_modifier_cat($_tmp, '+')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null)) : smarty_modifier_cat($_tmp, (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, '+1') : smarty_modifier_cat($_tmp, '+1'))); ?>
                    <?php endif; ?>

                    <?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pName']]; ?>
<?php endif; ?>
                <?php endif; ?>
            </span>
            <div<?php if ($this->_tpl_vars['field']['Type'] == 'date'): ?> class="search-item <?php echo $this->_tpl_vars['cell_class']; ?>
"<?php endif; ?>>
        <?php if ($this->_tpl_vars['field']['Type'] == 'text'): ?>
            <?php if ($this->_tpl_vars['aHooks']['search_by_distance'] && $this->_tpl_vars['field']['Key'] == $this->_tpl_vars['config']['sbd_zip_field'] && is_file ( $this->_tpl_vars['sbd_file'] )): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['sbd_file'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php else: ?>
                <input type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" maxlength="<?php if ($this->_tpl_vars['field']['Values'] != ''): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>255<?php endif; ?>" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
"<?php endif; ?> />
                <?php if ($this->_tpl_vars['field']['Key'] == 'keyword_search'): ?>
                    <input value="2" type="hidden" name="f[keyword_search_type]" /><!-- any word in any order -->
                <?php endif; ?>
            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['field']['Type'] == 'number'): ?>
            <?php if ($this->_tpl_vars['aHooks']['search_by_distance'] && $this->_tpl_vars['field']['Key'] == $this->_tpl_vars['config']['sbd_zip_field'] && is_file ( $this->_tpl_vars['sbd_file'] )): ?>
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['sbd_file'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <?php else: ?>
                <input value="<?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?>
<?php endif; ?>" type="number" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]" min="1" maxlength="<?php if ($this->_tpl_vars['field']['Values']): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>18<?php endif; ?>" />
            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['field']['Type'] == 'date'): ?>
            <?php echo $this->_plugins['function']['addCSS'][0][0]->smartyAddCSS(array('file' => ((is_array($_tmp=$this->_tpl_vars['rlTplBase'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'css/jquery.ui.css') : smarty_modifier_cat($_tmp, 'css/jquery.ui.css'))), $this);?>


            <?php if ($this->_tpl_vars['field']['Default'] == 'multi'): ?>
                <input class="date"
                    type="text"
                    id="date_<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>_<?php echo $this->_tpl_vars['post_form_key']; ?>
"
                    name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]"
                    maxlength="10"
                    value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
"
                    autocomplete="off" />
                <div class="clear"></div>

                <script class="fl-js-dynamic">
                $(document).ready(function()<?php echo '{'; ?>

                    $('#date_<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>_<?php echo $this->_tpl_vars['post_form_key']; ?>
')
                        .datepicker(<?php echo '{
                            showOn     : \'focus\',
                            dateFormat : \'yy-mm-dd\',
                            changeMonth: true,
                            changeYear : true,
                            yearRange  : \'-100:+30\'
                        }'; ?>
)
                        .datepicker($.datepicker.regional['<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
']);
                <?php echo '}'; ?>
);
                </script>
            <?php elseif ($this->_tpl_vars['field']['Default'] == 'single'): ?>
                <input placeholder="<?php echo $this->_tpl_vars['lang']['from']; ?>
"
                    class="date"
                    type="text"
                    id="date_<?php echo $this->_tpl_vars['field']['Key']; ?>
_from<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>_<?php echo $this->_tpl_vars['post_form_key']; ?>
"
                    name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]"
                    maxlength="10"
                    value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?>
"
                    autocomplete="off" />

                <input placeholder="<?php echo $this->_tpl_vars['lang']['to']; ?>
"
                    class="date"
                    type="text"
                    id="date_<?php echo $this->_tpl_vars['field']['Key']; ?>
_to<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>_<?php echo $this->_tpl_vars['post_form_key']; ?>
"
                    name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]"
                    maxlength="10"
                    value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?>
"
                    autocomplete="off" />

                <script class="fl-js-dynamic">
                $(document).ready(function()<?php echo '{'; ?>

                    $('#date_<?php echo $this->_tpl_vars['field']['Key']; ?>
_from<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>_<?php echo $this->_tpl_vars['post_form_key']; ?>
')
                        .datepicker(<?php echo '{
                            showOn     : \'focus\',
                            dateFormat : \'yy-mm-dd\',
                            changeMonth: true,
                            changeYear : true,
                            yearRange  : \'-100:+30\'
                        }'; ?>
)
                        .datepicker($.datepicker.regional['<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
']);
                    $('#date_<?php echo $this->_tpl_vars['field']['Key']; ?>
_to<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>_<?php echo $this->_tpl_vars['post_form_key']; ?>
')
                        .datepicker(<?php echo '{
                            showOn     : \'focus\',
                            dateFormat : \'yy-mm-dd\',
                            changeMonth: true,
                            changeYear : true,
                            yearRange  : \'-100:+30\'
                        }'; ?>
)
                        .datepicker($.datepicker.regional['<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
']);
                <?php echo '}'; ?>
);
                </script>
            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['field']['Type'] == 'mixed'): ?>
            <input value="<?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?>
<?php endif; ?>" placeholder="<?php echo $this->_tpl_vars['lang']['from']; ?>
" class="numeric" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]" maxlength="15" />
            <input value="<?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?>
<?php endif; ?>" placeholder="<?php echo $this->_tpl_vars['lang']['to']; ?>
" class="numeric" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]" maxlength="15" />

            <?php if ($this->_tpl_vars['df_source'] && count($this->_tpl_vars['df_source']) > 1): ?>
                <select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][df]">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['unit']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['df_source']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['df_item']):
?>
                        <option value="<?php echo $this->_tpl_vars['df_item']['Key']; ?>
" <?php if ($this->_tpl_vars['df_item']['Key'] == $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['df']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['df_item']['pName']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['field']['Type'] == 'price'): ?>
            <input <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?>
"<?php endif; ?> placeholder="<?php echo $this->_tpl_vars['lang']['from']; ?>
" class="numeric" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]" maxlength="15" />
            <input <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?>
"<?php endif; ?> placeholder="<?php echo $this->_tpl_vars['lang']['to']; ?>
" class="numeric" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]" maxlength="15" />

            <?php if ($this->_tpl_vars['currency_source'] && $this->_tpl_vars['currency_count'] > 1): ?>
                <select title="<?php echo $this->_tpl_vars['lang']['currency']; ?>
" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][currency]">
                    <option value="0"><?php echo ((is_array($_tmp=$this->_tpl_vars['lang']['any'])) ? $this->_run_mod_handler('replace', true, $_tmp, '-', '') : smarty_modifier_replace($_tmp, '-', '')); ?>
</option>
                    <?php $_from = $this->_tpl_vars['currency_source']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currency_item']):
?>
                        <option value="<?php echo $this->_tpl_vars['currency_item']['Key']; ?>
" <?php if ($this->_tpl_vars['currency_item']['Key'] == $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['currency']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['currency_item']['pName']]; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['field']['Type'] == 'bool'): ?>
            <span class="pills d-flex">
                <label title="<?php echo $this->_tpl_vars['lang']['all']; ?>
" class="flex-fill">
                    <input type="radio" value="" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if (! $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>checked="checked"<?php endif; ?> />
                    <?php echo $this->_tpl_vars['lang']['all']; ?>

                </label>
                <label class="flex-fill">
                    <input type="radio" value="1" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == '1'): ?>checked="checked"<?php endif; ?> />
                    <?php echo $this->_tpl_vars['lang']['yes']; ?>

                </label>
                <label class="flex-fill">
                    <input type="radio" value="0" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == '0'): ?>checked="checked"<?php endif; ?>/>
                    <?php echo $this->_tpl_vars['lang']['no']; ?>

                </label>
            </span>
        <?php elseif ($this->_tpl_vars['field']['Type'] == 'select'): ?>
            <?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplSearchFieldSelect'), $this);?>


            <?php if ($this->_tpl_vars['field']['Condition'] == 'years'): ?>
                <select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['from']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?>
                        <?php if ($this->_tpl_vars['field']['Condition']): ?>
                            <?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
                        <?php endif; ?>
                        <option <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from'] == $this->_tpl_vars['key']): ?>selected="selected"<?php endif; ?><?php endif; ?> value="<?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo $this->_tpl_vars['option']['Key']; ?>
<?php else: ?><?php echo $this->_tpl_vars['key']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['option']['name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
                <select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['to']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?>
                        <?php if ($this->_tpl_vars['field']['Condition']): ?>
                            <?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
                        <?php endif; ?>
                        <option <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']): ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to'] == $this->_tpl_vars['key']): ?>selected="selected"<?php endif; ?><?php endif; ?> value="<?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo $this->_tpl_vars['option']['Key']; ?>
<?php else: ?><?php echo $this->_tpl_vars['key']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['option']['name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            <?php elseif ($this->_tpl_vars['field']['Key'] == 'Category_ID' && $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multi_categories']): ?>
                <input type="hidden"
                       data-listing-type="<?php echo $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Key']; ?>
"
                       name="f[Category_ID]"
                       value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
"/>

                <input type="hidden"
                       name="f[category_parent_ids]"
                       value="<?php echo $this->_tpl_vars['fVal']['category_parent_ids']; ?>
" />

                <select class="multicat<?php if ($this->_tpl_vars['field']['Autocomplete']): ?> select-autocomplete<?php endif; ?>" id="cascading-category-<?php echo $this->_tpl_vars['multicat_listing_type']; ?>
-<?php echo $this->_tpl_vars['post_form_key']; ?>
">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?>
                        <option <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['option']['ID']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['option']['ID']; ?>
"><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => $this->_tpl_vars['option']['pName']), $this);?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>

                <script class="fl-js-dynamic">
                    <?php echo '
                    flUtil.loadScript(rlConfig[\'tpl_base\'] + \'components/cascading-category/_cascading-category.js\', function(){
                        $(\'#cascading-category-'; ?>
<?php echo $this->_tpl_vars['multicat_listing_type']; ?>
-<?php echo $this->_tpl_vars['post_form_key']; ?>
<?php echo '\').cascadingCategory();
                    });
                    '; ?>

                </script>

                <?php unset($this->_sections['multicat']);
$this->_sections['multicat']['name'] = 'multicat';
$this->_sections['multicat']['start'] = (int)1;
$this->_sections['multicat']['loop'] = is_array($_loop=$this->_tpl_vars['levels_number']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['multicat']['step'] = ((int)1) == 0 ? 1 : (int)1;
$this->_sections['multicat']['show'] = true;
$this->_sections['multicat']['max'] = $this->_sections['multicat']['loop'];
if ($this->_sections['multicat']['start'] < 0)
    $this->_sections['multicat']['start'] = max($this->_sections['multicat']['step'] > 0 ? 0 : -1, $this->_sections['multicat']['loop'] + $this->_sections['multicat']['start']);
else
    $this->_sections['multicat']['start'] = min($this->_sections['multicat']['start'], $this->_sections['multicat']['step'] > 0 ? $this->_sections['multicat']['loop'] : $this->_sections['multicat']['loop']-1);
if ($this->_sections['multicat']['show']) {
    $this->_sections['multicat']['total'] = min(ceil(($this->_sections['multicat']['step'] > 0 ? $this->_sections['multicat']['loop'] - $this->_sections['multicat']['start'] : $this->_sections['multicat']['start']+1)/abs($this->_sections['multicat']['step'])), $this->_sections['multicat']['max']);
    if ($this->_sections['multicat']['total'] == 0)
        $this->_sections['multicat']['show'] = false;
} else
    $this->_sections['multicat']['total'] = 0;
if ($this->_sections['multicat']['show']):

            for ($this->_sections['multicat']['index'] = $this->_sections['multicat']['start'], $this->_sections['multicat']['iteration'] = 1;
                 $this->_sections['multicat']['iteration'] <= $this->_sections['multicat']['total'];
                 $this->_sections['multicat']['index'] += $this->_sections['multicat']['step'], $this->_sections['multicat']['iteration']++):
$this->_sections['multicat']['rownum'] = $this->_sections['multicat']['iteration'];
$this->_sections['multicat']['index_prev'] = $this->_sections['multicat']['index'] - $this->_sections['multicat']['step'];
$this->_sections['multicat']['index_next'] = $this->_sections['multicat']['index'] + $this->_sections['multicat']['step'];
$this->_sections['multicat']['first']      = ($this->_sections['multicat']['iteration'] == 1);
$this->_sections['multicat']['last']       = ($this->_sections['multicat']['iteration'] == $this->_sections['multicat']['total']);
?>

            </div>
        </div>
    </div>

    <div class="search-form-cell <?php echo $this->_tpl_vars['cell_class']; ?>
 <?php echo $this->_tpl_vars['field']['Type']; ?>
">
        <div>
            <span>
                <?php $this->assign('field_phrase_key', 'subcategory'); ?>
                <?php if ($this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multi_categories'] > 0 && $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multicat_phrases']): ?>
                    <?php $this->assign('field_phrase_key', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='multilevel_category+')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['multicat_listing_type']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['multicat_listing_type'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '+') : smarty_modifier_cat($_tmp, '+')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null)) : smarty_modifier_cat($_tmp, (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, '+') : smarty_modifier_cat($_tmp, '+')))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_sections['multicat']['index']+1) : smarty_modifier_cat($_tmp, $this->_sections['multicat']['index']+1))); ?>
                <?php endif; ?>

                <?php if ($this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]): ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field_phrase_key']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['subcategory']; ?>
<?php endif; ?>
            </span>
            <div>
                <select disabled="disabled" class="multicat disabled<?php if ($this->_tpl_vars['field']['Autocomplete']): ?> select-autocomplete<?php endif; ?>">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
                </select>
                <?php endfor; endif; ?>
            <?php else: ?>
                <select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]"<?php if ($this->_tpl_vars['field']['Autocomplete']): ?> class="select-autocomplete"<?php endif; ?>>
                    <option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?>
                        <?php if ($this->_tpl_vars['field']['Key'] == 'Category_ID'): ?>
                            <?php $this->assign('key', $this->_tpl_vars['option']['ID']); ?>
                        <?php elseif ($this->_tpl_vars['field']['Condition']): ?>
                            <?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
                        <?php endif; ?>
                        <option<?php if (isset ( $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] ) && $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?> selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['key']; ?>
"><?php echo $this->_plugins['function']['phrase'][0][0]->getPhrase(array('key' => $this->_tpl_vars['option']['pName']), $this);?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            <?php endif; ?>
        <?php elseif ($this->_tpl_vars['field']['Type'] == 'radio'): ?>
            <?php if ($this->_tpl_vars['field']['Values'] && count($this->_tpl_vars['field']['Values']) < 3): ?>
                <input type="hidden" value="0" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" />
                <span class="pills d-flex">
                    <label title="<?php echo $this->_tpl_vars['lang']['all']; ?>
" class="flex-fill">
                        <input type="radio" value="" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if (! $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>checked="checked"<?php endif; ?> />
                        <?php echo $this->_tpl_vars['lang']['all']; ?>

                    </label>
                    <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['radioF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['radioF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
        $this->_foreach['radioF']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['field']['Condition']): ?>
                            <?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
                        <?php endif; ?>

                        <label title="<?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>
" class="flex-fill">
                            <input type="radio" value="<?php echo $this->_tpl_vars['key']; ?>
" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?>checked="checked"<?php endif; ?><?php endif; ?> />
                            <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>

                        </label>
                    <?php endforeach; endif; unset($_from); ?>
                </span>
            <?php else: ?>
                <select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]">
                    <option value="" <?php if (! $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['all']; ?>
</option>

                    <?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['radioF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['radioF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
        $this->_foreach['radioF']['iteration']++;
?>
                        <?php if ($this->_tpl_vars['field']['Condition']): ?>
                            <?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
                        <?php endif; ?>
                        <option value="<?php echo $this->_tpl_vars['key']; ?>
" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?>selected="selected"<?php endif; ?><?php endif; ?>>
                            <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>

                        </option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            <?php endif; ?>
        <?php endif; ?>

            </div>
        </div>
    </div>
<?php endforeach; endif; unset($_from); ?>

<!-- fields block (for search in horizontal box) end -->