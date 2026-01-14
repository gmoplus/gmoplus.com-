<?php /* Smarty version 2.6.31, created on 2025-10-10 09:28:21
         compiled from /home/gmoplus/public_html/plugins/export_import/admin/search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'explode', '/home/gmoplus/public_html/plugins/export_import/admin/search.tpl', 20, false),array('modifier', 'count_characters', '/home/gmoplus/public_html/plugins/export_import/admin/search.tpl', 30, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/export_import/admin/search.tpl', 39, false),array('modifier', 'df', '/home/gmoplus/public_html/plugins/export_import/admin/search.tpl', 104, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins/export_import/admin/search.tpl', 179, false),array('function', 'rlHook', '/home/gmoplus/public_html/plugins/export_import/admin/search.tpl', 127, false),)), $this); ?>
<!-- fields block ( for search ) -->

<?php $this->assign('fVal', $_POST['f']); ?>

<table class="form">
<?php $_from = $this->_tpl_vars['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
	<?php $this->assign('field', $this->_tpl_vars['field']['Fields']['0']); ?>
	<?php $this->assign('fKey', $this->_tpl_vars['field']['Key']); ?>
	
	<?php if ($this->_tpl_vars['field']['Key'] != 'Category_ID'): ?>
	<tr>
		<td class="name">
			<?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['field']['pName']]; ?>

		</td>
		<td class="field">

		<?php if ($this->_tpl_vars['field']['Type'] == 'text'): ?>
			<?php if ($this->_tpl_vars['plugins']['search_by_distance'] && $this->_tpl_vars['field']['Key'] == $this->_tpl_vars['config']['sbd_zip_field']): ?>
				<select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][distance]" class="w50">
					<?php $_from = ((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['config']['sbd_distance_items']) : explode($_tmp, $this->_tpl_vars['config']['sbd_distance_items'])); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['distance']):
?>
						<option <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['distance'] == $this->_tpl_vars['distance']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['distance']; ?>
"><?php echo $this->_tpl_vars['distance']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<?php if ($this->_tpl_vars['config']['sbd_default_units'] == 'miles'): ?>
					<?php echo $this->_tpl_vars['lang']['sbd_mi_short']; ?>

				<?php else: ?>
					<?php echo $this->_tpl_vars['lang']['sbd_km_short']; ?>

				<?php endif; ?>
				<?php echo $this->_tpl_vars['lang']['sbd_within']; ?>

				<input <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['zip']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['zip']; ?>
"<?php endif; ?> class="numeric w50" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][zip]" size="<?php if ($this->_tpl_vars['field']['Values']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['Values'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)); ?>
<?php else: ?>10<?php endif; ?>" maxlength="10" />
				<?php echo $this->_tpl_vars['lang']['sbd_zipcode']; ?>

			<?php else: ?>
				<input <?php if (! $this->_tpl_vars['wide_mode']): ?>class="w150"<?php elseif ($this->_tpl_vars['advanced']): ?>class="w240"<?php endif; ?> type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" maxlength="<?php if ($this->_tpl_vars['field']['Values'] != ''): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>255<?php endif; ?>" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
"<?php endif; ?> />
				<?php if ($this->_tpl_vars['field']['Key'] == 'keyword_search'): ?>
					<div class="keyword_search_opt">
						<div>
							<?php $this->assign('tmp', 3); ?>
							<?php unset($this->_sections['keyword_opts']);
$this->_sections['keyword_opts']['name'] = 'keyword_opts';
$this->_sections['keyword_opts']['loop'] = is_array($_loop=$this->_tpl_vars['tmp']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['keyword_opts']['max'] = (int)3;
$this->_sections['keyword_opts']['show'] = true;
if ($this->_sections['keyword_opts']['max'] < 0)
    $this->_sections['keyword_opts']['max'] = $this->_sections['keyword_opts']['loop'];
$this->_sections['keyword_opts']['step'] = 1;
$this->_sections['keyword_opts']['start'] = $this->_sections['keyword_opts']['step'] > 0 ? 0 : $this->_sections['keyword_opts']['loop']-1;
if ($this->_sections['keyword_opts']['show']) {
    $this->_sections['keyword_opts']['total'] = min(ceil(($this->_sections['keyword_opts']['step'] > 0 ? $this->_sections['keyword_opts']['loop'] - $this->_sections['keyword_opts']['start'] : $this->_sections['keyword_opts']['start']+1)/abs($this->_sections['keyword_opts']['step'])), $this->_sections['keyword_opts']['max']);
    if ($this->_sections['keyword_opts']['total'] == 0)
        $this->_sections['keyword_opts']['show'] = false;
} else
    $this->_sections['keyword_opts']['total'] = 0;
if ($this->_sections['keyword_opts']['show']):

            for ($this->_sections['keyword_opts']['index'] = $this->_sections['keyword_opts']['start'], $this->_sections['keyword_opts']['iteration'] = 1;
                 $this->_sections['keyword_opts']['iteration'] <= $this->_sections['keyword_opts']['total'];
                 $this->_sections['keyword_opts']['index'] += $this->_sections['keyword_opts']['step'], $this->_sections['keyword_opts']['iteration']++):
$this->_sections['keyword_opts']['rownum'] = $this->_sections['keyword_opts']['iteration'];
$this->_sections['keyword_opts']['index_prev'] = $this->_sections['keyword_opts']['index'] - $this->_sections['keyword_opts']['step'];
$this->_sections['keyword_opts']['index_next'] = $this->_sections['keyword_opts']['index'] + $this->_sections['keyword_opts']['step'];
$this->_sections['keyword_opts']['first']      = ($this->_sections['keyword_opts']['iteration'] == 1);
$this->_sections['keyword_opts']['last']       = ($this->_sections['keyword_opts']['iteration'] == $this->_sections['keyword_opts']['total']);
?>
								<label><input <?php if ($this->_tpl_vars['fVal']['keyword_search_type']): ?><?php if ($this->_sections['keyword_opts']['iteration'] == $this->_tpl_vars['fVal']['keyword_search_type']): ?>checked="checked"<?php endif; ?><?php else: ?><?php if ($this->_sections['keyword_opts']['iteration'] == 2): ?>checked="checked"<?php endif; ?><?php endif; ?> value="<?php echo $this->_sections['keyword_opts']['iteration']; ?>
" type="radio" name="f[keyword_search_type]" /> <?php $this->assign('ph', ((is_array($_tmp='keyword_search_opt')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_sections['keyword_opts']['iteration']) : smarty_modifier_cat($_tmp, $this->_sections['keyword_opts']['iteration']))); ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['ph']]; ?>
</label>
							<?php endfor; endif; ?>
						</div>
					</div>
					<div><a id="refine_keyword_opt" class="dotted" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['advanced_options']; ?>
</a></div>
					<script type="text/javascript">
					<?php echo '
					
					$(document).ready(function(){
						$(\'#refine_keyword_opt\').click(function(){
							$(this).parent().prev().slideToggle();
						});
					});
					
					'; ?>

					</script>
				<?php endif; ?>
			<?php endif; ?>
		<?php elseif ($this->_tpl_vars['field']['Type'] == 'number'): ?>
			<?php if ($this->_tpl_vars['plugins']['search_by_distance'] && $this->_tpl_vars['field']['Key'] == $this->_tpl_vars['config']['sbd_zip_field']): ?>
				<select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][distance]" class="w50">
					<?php $_from = ((is_array($_tmp=',')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['config']['sbd_distance_items']) : explode($_tmp, $this->_tpl_vars['config']['sbd_distance_items'])); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['distance']):
?>
						<option <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['distance'] == $this->_tpl_vars['distance']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['distance']; ?>
"><?php echo $this->_tpl_vars['distance']; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
				<?php if ($this->_tpl_vars['config']['sbd_default_units'] == 'miles'): ?>
					<?php echo $this->_tpl_vars['lang']['sbd_mi_short']; ?>

				<?php else: ?>
					<?php echo $this->_tpl_vars['lang']['sbd_km_short']; ?>

				<?php endif; ?>
				<?php echo $this->_tpl_vars['lang']['sbd_within']; ?>

				<input <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['zip']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['zip']; ?>
"<?php endif; ?> class="numeric w50" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][zip]" size="<?php if ($this->_tpl_vars['field']['Values']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['field']['Values'])) ? $this->_run_mod_handler('count_characters', true, $_tmp) : smarty_modifier_count_characters($_tmp)); ?>
<?php else: ?>10<?php endif; ?>" maxlength="10" />
				<?php echo $this->_tpl_vars['lang']['sbd_zipcode']; ?>

			<?php else: ?>
				<input placeholder="<?php echo $this->_tpl_vars['lang']['from']; ?>
" value="<?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?>
<?php endif; ?>" class="numeric w60 field_from" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]" maxlength="<?php if ($this->_tpl_vars['field']['Values']): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>18<?php endif; ?>" /><img alt="" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" class="between" /><input placeholder="<?php echo $this->_tpl_vars['lang']['to']; ?>
" value="<?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?>
<?php endif; ?>" class="numeric w60 field_to" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]" maxlength="<?php if ($this->_tpl_vars['field']['Values']): ?><?php echo $this->_tpl_vars['field']['Values']; ?>
<?php else: ?>18<?php endif; ?>" />
			<?php endif; ?>
		<?php elseif ($this->_tpl_vars['field']['Type'] == 'date'): ?>
			<?php if ($this->_tpl_vars['field']['Default'] == 'multi'): ?>
				<input class="date" type="text" id="date_<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" maxlength="10" value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
" />
				<div class="clear"></div>
				<script type="text/javascript">
				<?php echo '
				$(document).ready(function(){
					$(\'#date_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?><?php echo '\').datepicker({showOn: \'both\', buttonImage: \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\', buttonImageOnly: true, dateFormat: \'yy-mm-dd\'}).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);
				});
				'; ?>

				</script>
			<?php elseif ($this->_tpl_vars['field']['Default'] == 'single'): ?>
				<?php echo $this->_tpl_vars['postfix']; ?>

				<input class="date" type="text" id="date_<?php echo $this->_tpl_vars['field']['Key']; ?>
_from<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]" maxlength="10" value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?>
" /><img alt="" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" class="between" /><input class="date" type="text" id="date_<?php echo $this->_tpl_vars['field']['Key']; ?>
_to<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]" maxlength="10" value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?>
" />
				<script type="text/javascript">
				<?php echo '
				$(document).ready(function(){
					$(\'#date_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
_from<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?><?php echo '\').datepicker({showOn: \'both\', buttonImage: \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\', buttonImageOnly: true, dateFormat: \'yy-mm-dd\'}).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);
					$(\'#date_'; ?>
<?php echo $this->_tpl_vars['field']['Key']; ?>
_to<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?><?php echo '\').datepicker({showOn: \'both\', buttonImage: \''; ?>
<?php echo $this->_tpl_vars['rlTplBase']; ?>
<?php echo 'img/blank.gif\', buttonImageOnly: true, dateFormat: \'yy-mm-dd\'}).datepicker($.datepicker.regional[\''; ?>
<?php echo (defined('RL_LANG_CODE') ? @RL_LANG_CODE : null); ?>
<?php echo '\']);
				});
				'; ?>

				</script>
			<?php endif; ?>
		<?php elseif ($this->_tpl_vars['field']['Type'] == 'mixed'): ?>
			<input value="<?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['from']; ?>
<?php endif; ?>" class="numeric w60 field_from" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]" maxlength="15" /><img alt="" src="<?php echo $this->_tpl_vars['rlTplBase']; ?>
img/blank.gif" class="between" /><input value="<?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']): ?><?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['to']; ?>
<?php endif; ?>" class="numeric w60 field_to" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]" maxlength="15" />
			
			<?php echo $this->_tpl_vars['lang']['unit']; ?>
 <select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][df]" class="w80">
				<option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
				<?php if (! empty ( $this->_tpl_vars['field']['Condition'] )): ?>
					<?php $this->assign('df_source', ((is_array($_tmp=$this->_tpl_vars['field']['Condition'])) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp))); ?>
				<?php else: ?>
					<?php $this->assign('df_source', $this->_tpl_vars['field']['Values']); ?>
				<?php endif; ?>
				<?php $_from = $this->_tpl_vars['df_source']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['df_item']):
?>
					<option value="<?php echo $this->_tpl_vars['df_item']['Key']; ?>
" <?php if ($this->_tpl_vars['df_item']['Key'] == $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['df']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['df_item']['pName']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		<?php elseif ($this->_tpl_vars['field']['Type'] == 'price'): ?>
			<input <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['from']; ?>
"<?php endif; ?> class="numeric w60 field_from" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]" maxlength="15" />
			<?php echo $this->_tpl_vars['lang']['to']; ?>

			<input <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']): ?>value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['to']; ?>
"<?php endif; ?> class="numeric field_to w60" type="text" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]" maxlength="15" />
			
			<select title="<?php echo $this->_tpl_vars['lang']['currency']; ?>
" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][currency]" style="width: 70px;">
				<option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
				<?php $_from = ((is_array($_tmp='currency')) ? $this->_run_mod_handler('df', true, $_tmp) : smarty_modifier_df($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['currency_item']):
?>
					<option value="<?php echo $this->_tpl_vars['currency_item']['Key']; ?>
" <?php if ($this->_tpl_vars['currency_item']['Key'] == $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]['currency']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['currency_item']['pName']]; ?>
</option>
				<?php endforeach; endif; unset($_from); ?>
			</select>
		<?php elseif ($this->_tpl_vars['field']['Type'] == 'bool'): ?>
			<input id="<?php echo $this->_tpl_vars['field']['Key']; ?>
_1<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>" type="radio" value="on" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == 'on'): ?>checked="checked"<?php endif; ?> /> <label for="<?php echo $this->_tpl_vars['field']['Key']; ?>
_1<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
			<input id="<?php echo $this->_tpl_vars['field']['Key']; ?>
_0<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>" type="radio" value="off" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == 'off'): ?>checked="checked"<?php endif; ?>/> <label for="<?php echo $this->_tpl_vars['field']['Key']; ?>
_0<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
		<?php elseif ($this->_tpl_vars['field']['Type'] == 'select'): ?>
			<?php echo $this->_plugins['function']['rlHook'][0][0]->load(array('name' => 'tplSearchFieldSelect'), $this);?>

			<?php $this->assign('multicat_listing_type', $this->_tpl_vars['group']['Listing_type']); ?>
			<?php if ($this->_tpl_vars['field']['Condition'] == 'years'): ?>
				<select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][from]" class="w80">
					<option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
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
				<?php echo $this->_tpl_vars['lang']['to']; ?>

				<select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][to]" class="w80">
					<option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
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
				<?php $this->assign('levels_number', $this->_tpl_vars['listing_types'][$this->_tpl_vars['multicat_listing_type']]['Search_multicat_levels']); ?>			
	
				<input type="hidden" id="<?php echo $this->_tpl_vars['post_form_key']; ?>
_<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['multicat_listing_type']; ?>
_value" name="f[Category_ID]" value="<?php echo $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; ?>
"/>
				<select id="<?php echo $this->_tpl_vars['post_form_key']; ?>
_<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['multicat_listing_type']; ?>
_level0" <?php if ($this->_tpl_vars['levels_number'] == 2): ?>style="width:120px"<?php endif; ?> class="multicat">
					<option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
					<?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?>
						<option <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['option']['ID']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['option']['ID']; ?>
"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
	
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
					<select id="<?php echo $this->_tpl_vars['post_form_key']; ?>
_<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['multicat_listing_type']; ?>
_level<?php echo $this->_sections['multicat']['index']; ?>
" disabled="disabled" <?php if ($this->_tpl_vars['levels_number'] == 2): ?>style="width:120px"<?php endif; ?> class="multicat<?php if ($this->_sections['multicat']['last']): ?> last<?php endif; ?>">
						<option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
					</select>
				<?php endfor; endif; ?>
			<?php else: ?>
				<select name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]">
					<option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
					<?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
?>
						<?php if ($this->_tpl_vars['field']['Condition']): ?>
							<?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
						<?php endif; ?>
						<option <?php if ($this->_tpl_vars['field']['Key'] == 'Category_ID'): ?>style="padding-<?php echo $this->_tpl_vars['text_dir']; ?>
: <?php echo $this->_tpl_vars['option']['margin']; ?>
px;"<?php endif; ?> <?php if ($this->_tpl_vars['field']['Key'] == 'Category_ID' && $this->_tpl_vars['option']['Level'] == '0'): ?>class="highlight_option"<?php endif; ?> <?php if (isset ( $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] ) && $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?>selected="selected"<?php endif; ?> value="<?php if ($this->_tpl_vars['field']['Key'] == 'Category_ID'): ?><?php echo $this->_tpl_vars['option']['ID']; ?>
<?php else: ?><?php if ($this->_tpl_vars['field']['Condition']): ?><?php echo $this->_tpl_vars['option']['Key']; ?>
<?php else: ?><?php echo $this->_tpl_vars['key']; ?>
<?php endif; ?><?php endif; ?>"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>
</option>
					<?php endforeach; endif; unset($_from); ?>
				</select>
			<?php endif; ?>
		<?php elseif ($this->_tpl_vars['field']['Type'] == 'checkbox'): ?>
			<?php $this->assign('fDefault', $this->_tpl_vars['field']['Default']); ?>
			<input type="hidden" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][0]" value="0" />
			<table <?php if ($this->_tpl_vars['advanced'] && count($this->_tpl_vars['field']['Values']) > 2): ?>class="fixed" style="width: 300px;"<?php endif; ?>>
			<tr>
			<?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['checkboxF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['checkboxF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
        $this->_foreach['checkboxF']['iteration']++;
?>
				<?php if ($this->_tpl_vars['field']['Condition']): ?>
					<?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
				<?php endif; ?>
				<td valign="top">
					<input type="checkbox" id="<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['key']; ?>
<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>" value="<?php echo $this->_tpl_vars['key']; ?>
" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
][<?php echo $this->_tpl_vars['key']; ?>
]" <?php if (is_array ( $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] )): ?><?php $_from = $this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['chVals']):
?><?php if ($this->_tpl_vars['chVals'] == $this->_tpl_vars['key']): ?>checked="checked"<?php endif; ?><?php endforeach; endif; unset($_from); ?><?php endif; ?> /> <label for="<?php echo $this->_tpl_vars['field']['Key']; ?>
_<?php echo $this->_tpl_vars['key']; ?>
<?php if ($this->_tpl_vars['postfix']): ?>_<?php echo $this->_tpl_vars['postfix']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>
</label>
				</td>
				<?php if ($this->_foreach['checkboxF']['iteration']%3 == 0 && $this->_foreach['checkboxF']['total'] > $this->_foreach['checkboxF']['iteration']): ?>
				</tr>
				<tr>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			</tr>
			</table>
		<?php elseif ($this->_tpl_vars['field']['Type'] == 'radio'): ?>
			<input type="hidden" value="0" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" />
			<table <?php if ($this->_tpl_vars['advanced'] && count($this->_tpl_vars['field']['Values']) > 2): ?>class="fixed" style="width: 300px;"<?php endif; ?>>
			<tr>
				<?php $_from = $this->_tpl_vars['field']['Values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['radioF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['radioF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['option']):
        $this->_foreach['radioF']['iteration']++;
?>
					<?php if ($this->_tpl_vars['field']['Condition']): ?>
						<?php $this->assign('key', $this->_tpl_vars['option']['Key']); ?>
					<?php endif; ?>
					<td valign="top">
						<label><input type="radio" value="<?php echo $this->_tpl_vars['key']; ?>
" name="f[<?php echo $this->_tpl_vars['field']['Key']; ?>
]" <?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']]): ?><?php if ($this->_tpl_vars['fVal'][$this->_tpl_vars['fKey']] == $this->_tpl_vars['key']): ?>checked="checked"<?php endif; ?><?php endif; ?> /> <?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['option']['pName']]; ?>
</label>
					</td>
					<?php if ($this->_foreach['radioF']['iteration']%3 == 0 && ! ($this->_foreach['radioF']['iteration'] == $this->_foreach['radioF']['total'])): ?>
					</tr>
					<tr>
					<?php endif; ?>
				<?php endforeach; endif; unset($_from); ?>
			</tr>
			</table>
		<?php endif; ?>
		
		</td>
	</tr>
	<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>
</table>

<!-- fields block ( for search ) end -->