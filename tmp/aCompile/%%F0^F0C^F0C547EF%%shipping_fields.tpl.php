<?php /* Smarty version 2.6.31, created on 2025-05-30 21:08:28
         compiled from /home/gmoplus/public_html/plugins//shoppingCart/admin/view/shipping_fields.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins//shoppingCart/admin/view/shipping_fields.tpl', 2, false),)), $this); ?>
<?php if ($_GET['action']): ?>
    <?php $this->assign('rlBaseC', ((is_array($_tmp=$this->_tpl_vars['rlBaseC'])) ? $this->_run_mod_handler('cat', true, $_tmp, 'module=shipping_fields&amp;') : smarty_modifier_cat($_tmp, 'module=shipping_fields&amp;'))); ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'fields') : smarty_modifier_cat($_tmp, 'fields')))) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'add_edit_form.tpl') : smarty_modifier_cat($_tmp, 'add_edit_form.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <div id="grid"></div>
    <script type="text/javascript">
    var shippingFieldsGrid;
    
    <?php echo '
    $(document).ready(function(){
        
        shippingFieldsGrid = new gridObj({
            key: \'shippingFields\',
            id: \'grid\',
            ajaxUrl: rlPlugins + \'shoppingCart/admin/shopping_cart.inc.php?q=ext_shipping_fields\',
            defaultSortField: \'name\',
            title: lang[\'ext_shipping_fields_manager\'],
            remoteSortable: true,
            fields: [
                {name: \'name\', mapping: \'name\', type: \'string\'},
                {name: \'Type\', mapping: \'Type\'},
                {name: \'Required\', mapping: \'Required\'},
                {name: \'Map\', mapping: \'Map\'},
                {name: \'Status\', mapping: \'Status\'},
                {name: \'Key\', mapping: \'Key\'},
                {name: \'Readonly\', mapping: \'Readonly\'}
            ],
            columns: [
                {
                    header: lang[\'ext_name\'],
                    dataIndex: \'name\',
                    width: 60,
                    id: \'rlExt_item_bold\'
                },{
                    id: \'rlExt_item\',
                    header: lang[\'ext_type\'],
                    dataIndex: \'Type\',
                    fixed: true,
                    width: 150,
                },{
                    header: lang[\'ext_required_field\'],
                    dataIndex: \'Required\',
                    fixed: true,
                    width: 110,
                    editor: new Ext.form.ComboBox({
                        store: [
                            [\'1\', lang[\'ext_yes\']],
                            [\'0\', lang[\'ext_no\']]
                        ],
                        displayField: \'value\',
                        valueField: \'key\',
                        emptyText: lang[\'ext_not_available\'],
                        typeAhead: true,
                        mode: \'local\',
                        triggerAction: \'all\',
                        selectOnFocus:true
                    }),
                    renderer: function(val){
                        return \'<span ext:qtip="\'+lang[\'ext_click_to_edit\']+\'">\'+val+\'</span>\';
                    }
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
                    })
                },{
                    header: lang[\'ext_actions\'],
                    width: 70,
                    fixed: true,
                    dataIndex: \'Key\',
                    sortable: false,
                    renderer: function(data, obj, row) {
                        var out = "<center>";
                        out += "<img class=\'edit\' ext:qtip=\'" + lang[\'ext_edit\'] + "\' src=\'";
                        out += rlUrlHome + "img/blank.gif\' onClick=\'location.href=\\"";
                        out += rlUrlHome + "index.php?controller=" + controller + "&module=shipping_fields&action=edit&field=";
                        out += data + "\\"\' />";

                        if (row.data.Readonly != 1) {
                            out += "<img class=\'remove\' ext:qtip=\'" +  lang[\'ext_delete\'] + "\' src=\'";
                            out += rlUrlHome + "img/blank.gif\' onClick=\'rlConfirm( \\"";
                            out += lang[\'ext_notice_delete\'] + "\\", \\"shoppingCart.deleteShippingField\\", \\"";
                            out += data + "\\" )\' class=\'delete\' />";
                        }
                        out += "</center>";
                        
                        return out;
                    }
                }
            ]
        });
        
        shippingFieldsGrid.init();
        grid.push(shippingFieldsGrid.grid);
        
    });
    '; ?>

    </script>
<?php endif; ?>