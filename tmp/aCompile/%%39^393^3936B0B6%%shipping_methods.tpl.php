<?php /* Smarty version 2.6.31, created on 2025-05-30 21:03:43
         compiled from /home/gmoplus/public_html/plugins//shoppingCart/admin/view/shipping_methods.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins//shoppingCart/admin/view/shipping_methods.tpl', 6, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins//shoppingCart/admin/view/shipping_methods.tpl', 20, false),)), $this); ?>
<!-- payment gateways tpl -->

<?php if ($_GET['action']): ?>
	<?php $this->assign('sPost', $_POST); ?>
	
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
module=shipping_methods&action=edit&item=<?php echo $_GET['item']; ?>
" method="post">
		<input type="hidden" name="submit" value="1" />

		<?php if ($_GET['action'] == 'edit'): ?>
			<input type="hidden" name="fromPost" value="1" />
		<?php endif; ?>
		
		<table class="form">
			<tr>
				<td class="name">
					<span class="red">*</span><?php echo $this->_tpl_vars['lang']['name']; ?>

				</td>
				<td>
					<?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
						<ul class="tabs">
							<?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
							<li lang="<?php echo $this->_tpl_vars['language']['Code']; ?>
" <?php if (($this->_foreach['langF']['iteration'] <= 1)): ?>class="active"<?php endif; ?>><?php echo $this->_tpl_vars['language']['name']; ?>
</li>
							<?php endforeach; endif; unset($_from); ?>
						</ul>
					<?php endif; ?>
					
					<?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['langF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['langF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['language']):
        $this->_foreach['langF']['iteration']++;
?>
						<?php if (count($this->_tpl_vars['allLangs']) > 1): ?><div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
"><?php endif; ?>
						<input type="text" name="f[name][<?php echo $this->_tpl_vars['language']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['sPost']['name'][$this->_tpl_vars['language']['Code']]; ?>
" maxlength="350" />
						<?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
								<span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['name']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
							</div>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</td>
			</tr>
		
			<?php $_from = $this->_tpl_vars['methodSettings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sItem']):
?>
				<?php if ($this->_tpl_vars['sItem']['type'] == 'text' || $this->_tpl_vars['sItem']['type'] == 'textarea' || $this->_tpl_vars['sItem']['type'] == 'bool' || $this->_tpl_vars['sItem']['type'] == 'select' || $this->_tpl_vars['sItem']['type'] == 'radio'): ?>
				<tr>
					<?php $this->assign('shippingOptionName', ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='shc_')) ? $this->_run_mod_handler('cat', true, $_tmp, $_GET['item']) : smarty_modifier_cat($_tmp, $_GET['item'])))) ? $this->_run_mod_handler('cat', true, $_tmp, "+name+") : smarty_modifier_cat($_tmp, "+name+")))) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['sItem']['key']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['sItem']['key']))); ?>
					<td class="name"><?php if ($this->_tpl_vars['sItem']['name']): ?><?php echo $this->_tpl_vars['sItem']['name']; ?>
<?php elseif ($this->_tpl_vars['sItem']['key'] == 'password'): ?><?php echo $this->_tpl_vars['lang']['password']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang'][$this->_tpl_vars['shippingOptionName']]; ?>
<?php endif; ?></td>
					<td class="field">
						<div class="inner_margin">
							<?php if ($this->_tpl_vars['sItem']['type'] == 'text'): ?>
								<input name="f[settings][<?php echo $this->_tpl_vars['sItem']['key']; ?>
]" class="<?php if ($this->_tpl_vars['sItem']['type'] == 'int'): ?>numeric<?php endif; ?>" type="text" value="<?php if ($this->_tpl_vars['sPost']['f']['settings'][$this->_tpl_vars['sItem']['key']]): ?><?php echo $this->_tpl_vars['sPost']['f']['settings'][$this->_tpl_vars['sItem']['key']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['sItem']['value']; ?>
<?php endif; ?>" maxlength="255" />
							<?php elseif ($this->_tpl_vars['sItem']['type'] == 'bool'): ?>
								<label><input type="radio" <?php if ($this->_tpl_vars['sItem']['value'] == 1): ?>checked="checked"<?php endif; ?> name="f[settings][<?php echo $this->_tpl_vars['sItem']['key']; ?>
]" value="1" /> <?php echo $this->_tpl_vars['lang']['enabled']; ?>
</label>
								<label><input type="radio" <?php if ($this->_tpl_vars['sItem']['value'] == 0): ?>checked="checked"<?php endif; ?> name="f[settings][<?php echo $this->_tpl_vars['sItem']['key']; ?>
]" value="0" /> <?php echo $this->_tpl_vars['lang']['disabled']; ?>
</label>
							<?php elseif ($this->_tpl_vars['sItem']['type'] == 'textarea'): ?>
								<textarea cols="5" rows="5" name="f[settings][<?php echo $this->_tpl_vars['sItem']['key']; ?>
]"><?php if ($this->_tpl_vars['sPost']['f']['settings'][$this->_tpl_vars['sItem']['key']]): ?><?php echo $this->_tpl_vars['sPost']['f']['settings'][$this->_tpl_vars['sItem']['key']]; ?>
<?php else: ?><?php echo $this->_tpl_vars['sItem']['value']; ?>
<?php endif; ?></textarea>
							<?php elseif ($this->_tpl_vars['sItem']['type'] == 'select'): ?>
								<select style="width: 204px;" name="f[settings][<?php echo $this->_tpl_vars['sItem']['key']; ?>
]" <?php if (count($this->_tpl_vars['sItem']['items']) < 2): ?> class="disabled" disabled="disabled"<?php endif; ?>>
									<?php if (count($this->_tpl_vars['sItem']['items']) > 1): ?>
										<option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
									<?php endif; ?>
									<?php $_from = $this->_tpl_vars['sItem']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sForeach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sForeach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sKey'] => $this->_tpl_vars['sValue']):
        $this->_foreach['sForeach']['iteration']++;
?>
										<option value="<?php if (is_array ( $this->_tpl_vars['sValue'] )): ?><?php echo $this->_tpl_vars['sValue']['ID']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sKey']; ?>
<?php endif; ?>" <?php if (is_array ( $this->_tpl_vars['sValue'] )): ?><?php if ($this->_tpl_vars['sItem']['value'] == $this->_tpl_vars['sValue']['ID'] || $this->_tpl_vars['sPost']['f']['settings'][$this->_tpl_vars['sItem']['key']] == $this->_tpl_vars['sValue']['ID']): ?>selected="selected"<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['sKey'] == $this->_tpl_vars['sItem']['value']): ?>selected="selected"<?php endif; ?><?php endif; ?>><?php if (is_array ( $this->_tpl_vars['sValue'] )): ?><?php echo $this->_tpl_vars['sValue']['name']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sValue']; ?>
<?php endif; ?></option>
									<?php endforeach; endif; unset($_from); ?>
								</select>
							<?php elseif ($this->_tpl_vars['sItem']['type'] == 'radio'): ?>
								<?php $_from = $this->_tpl_vars['sItem']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rForeach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rForeach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['rKey'] => $this->_tpl_vars['rValue']):
        $this->_foreach['rForeach']['iteration']++;
?>
									<input id="radio_<?php echo $this->_tpl_vars['sItem']['key']; ?>
_<?php echo $this->_tpl_vars['rKey']; ?>
" <?php if ($this->_tpl_vars['rKey'] == $this->_tpl_vars['sItem']['value']): ?>checked="checked"<?php endif; ?> type="radio" value="<?php echo $this->_tpl_vars['rKey']; ?>
" name="f[settings][<?php echo $this->_tpl_vars['sItem']['key']; ?>
][value]" /><label for="radio_<?php echo $this->_tpl_vars['sItem']['key']; ?>
_<?php echo $this->_tpl_vars['rKey']; ?>
">&nbsp;<?php echo $this->_tpl_vars['rValue']; ?>
&nbsp;&nbsp;</label>
								<?php endforeach; endif; unset($_from); ?>
							<?php else: ?>
								<?php echo $this->_tpl_vars['sItem']['value']; ?>

							<?php endif; ?>
						</div>
					</td>
				</tr>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
	        <tr>
	            <td class="name"><?php echo $this->_tpl_vars['lang']['shc_test_mode']; ?>
</td>
	            <td class="field">
	                <?php if ($this->_tpl_vars['sPost']['test_mode'] == '1'): ?>
	                    <?php $this->assign('test_mode_yes', 'checked="checked"'); ?>
	                <?php elseif ($this->_tpl_vars['sPost']['test_mode'] == '0'): ?>
	                    <?php $this->assign('test_mode_no', 'checked="checked"'); ?>
	                <?php else: ?>
	                    <?php $this->assign('test_mode_no', 'checked="checked"'); ?>
	                <?php endif; ?>
	                <label><input <?php echo $this->_tpl_vars['test_mode_yes']; ?>
 class="lang_add" type="radio" name="f[test_mode]" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
	                <label><input <?php echo $this->_tpl_vars['test_mode_no']; ?>
 class="lang_add" type="radio" name="f[test_mode]" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
	            </td>
	        </tr>
			<tr>
				<td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
				<td class="field">
					<select name="f[status]">
						<option value="active" <?php if ($this->_tpl_vars['sPost']['status'] == 'active'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['active']; ?>
</option>
						<option value="approval" <?php if ($this->_tpl_vars['sPost']['status'] == 'approval'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['approval']; ?>
</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td class="field">
					<input type="submit" value="<?php if ($_GET['action'] == 'edit'): ?><?php echo $this->_tpl_vars['lang']['save']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['add']; ?>
<?php endif; ?>" />
				</td>
			</tr>
		</table>
	</form>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<!-- shipping methods grid -->
	<div id="grid"></div>
	<script type="text/javascript">
	var shippingMethodsGrid;

	<?php echo '
	$(document).ready(function(){		
		shippingMethodsGrid = new gridObj({
			key: \'shipping_methods\',
			id: \'grid\',
            ajaxUrl: rlPlugins + \'shoppingCart/admin/shopping_cart.inc.php?q=ext_shipping_methods\',
			defaultSortField: \'name\',
			remoteSortable: true,
			checkbox: false,
			actions: [
				[lang[\'ext_delete\'], \'delete\']
			],
			title: lang[\'ext_shipping_methods_manager\'],

			fields: [
				{name: \'ID\', mapping: \'ID\', type: \'int\'},
				{name: \'name\', mapping: \'name\'},
				{name: \'Key\', mapping: \'Key\'},
				{name: \'Status\', mapping: \'Status\', type: \'string\'},
				{name: \'Type\', mapping: \'Type\'}
			],
			columns: [
				{
					header: lang[\'ext_id\'],
					dataIndex: \'ID\',
					width: 3,
					id: \'rlExt_black_bold\'
				},{
					header: lang[\'ext_name\'],
					dataIndex: \'name\',
					width: 20,
					id: \'rlExt_item_bold\'
				},{
					header: lang[\'ext_type\'],
					dataIndex: \'Type\',
					width: 15
				},{
					header: lang[\'ext_status\'],
					dataIndex: \'Status\',
					width: 100,
					fixed: true,
					editor: new Ext.form.ComboBox({
						store: [
							[\'active\', lang[\'ext_active\']],
							[\'approval\', lang[\'ext_approval\']]
						],
						displayField: \'value\',
						valueField: \'key\',
						typeAhead: true,
						mode: \'local\',
						triggerAction: \'all\',
						selectOnFocus:true
					}),
					renderer: function(val){
						return \'<span ext:qtip="\'+lang[\'ext_click_to_edit\']+\'">\'+val+\'</span>\';
					}
				},{
					header: lang[\'ext_actions\'],
					width: 50,
					fixed: true,
					dataIndex: \'Key\',
					sortable: false,
					renderer: function(data) {
                        var out = "<img class=\'edit\' ext:qtip=\'" + lang[\'ext_edit\'] + "\' src=\'";
                        out += rlUrlHome + "img/blank.gif\' onClick=\'location.href=\\"";
                        out += rlUrlHome + "index.php?controller=" + controller + "&module=shipping_methods&action=edit&item=";
                        out += data + "\\"\' />";

                        return out;
					}
				}
			]
		});
		
		shippingMethodsGrid.init();
		grid.push(shippingMethodsGrid.grid);
		
	});
	'; ?>

	</script>
	<!-- shipping methods grid end -->
<?php endif; ?>

<!-- payment gateways tpl end -->