<?php /* Smarty version 2.6.31, created on 2025-10-10 09:34:51
         compiled from /home/gmoplus/public_html/plugins/export_import/admin/import_interface.tpl */ ?>
<!-- import interface -->

<div class="x-hidden" id="statistic">
	<div class="x-window-header"><?php echo $this->_tpl_vars['lang']['eil_importing_caption']; ?>
</div>
	<div class="x-window-body" style="padding: 10px 15px;">
		<table class="importing">
		<tr>
			<td class="name">
				<?php echo $this->_tpl_vars['lang']['total_listings']; ?>
:
			</td>
			<td class="value">
				<label id="total"><?php echo $this->_tpl_vars['import_details']['0']['value']; ?>
</label>
			</td>
		</tr>
		</table>
		
		<div id="dom_area">
			<table class="importing">
			<tr>
				<td class="name">
					<?php echo $this->_tpl_vars['lang']['eil_total_listings']; ?>
:
				</td>
				<td class="value">
					<label id="importing">1-<?php if ($this->_tpl_vars['import_details']['1']['value'] > $this->_tpl_vars['import_details']['0']['value']): ?><?php echo $this->_tpl_vars['import_details']['0']['value']; ?>
<?php else: ?><?php echo $this->_tpl_vars['import_details']['1']['value']; ?>
<?php endif; ?></label>
				</td>
			</tr>
			</table>
		</div>
		
		<table class="sTable">
		<tr>
			<td>
				<div class="progress">
					<div id="processing"></div>
				</div>
			</td>
			<td class="counter">
				<div id="loading_percent">0%</div>
			</td>
		</tr>
		</table>
	</div>
</div>

<!-- import interface end -->