<?php /* Smarty version 2.6.31, created on 2025-04-08 21:03:55
         compiled from /home/gmoplus/public_html/plugins/polls/admin/polls.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', '/home/gmoplus/public_html/plugins/polls/admin/polls.tpl', 15, false),array('modifier', 'count', '/home/gmoplus/public_html/plugins/polls/admin/polls.tpl', 28, false),)), $this); ?>
<!-- polls tpl -->

<!-- navigation bar -->
<div id="nav_bar">
    <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=add" class="button_bar"><span class="left"></span><span class="center_add"><?php echo $this->_tpl_vars['lang']['add']; ?>
</span><span class="right"></span></a>
    <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=<?php echo $_GET['controller']; ?>
" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['items_list']; ?>
</span><span class="right"></span></a>
</div>

<!-- navigation bar end -->

<?php if ($_GET['action'] == 'edit' || $_GET['action'] == 'add'): ?>
    <?php $this->assign('sPost', $_POST); ?>

    <!-- add new poll -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=<?php if ($_GET['action'] == 'add'): ?>add<?php elseif ($_GET['action'] == 'edit'): ?>edit&amp;poll=<?php echo $_GET['poll']; ?>
<?php endif; ?>" method="post">
    <input type="hidden" name="submit" value="1" />
    <?php if ($_GET['action'] == 'edit'): ?>
        <input type="hidden" name="fromPost" value="1" />
    <?php endif; ?>
    <script type="text/javascript">
        var step = 1;
    </script>
    <table class="form">
    <tr>
        <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['name']; ?>
</td>
        <td class="field">
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
                <input type="text" name="name[<?php echo $this->_tpl_vars['language']['Code']; ?>
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
    <tr>
        <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['vote_items']; ?>
</td>
        <td class="value">
            <table id="items" style="margin: 2px 0; width: auto;" class="form">
            <?php if ($this->_tpl_vars['sPost']['items']): ?>
                <?php $_from = $this->_tpl_vars['sPost']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['iForeach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['iForeach']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['itemKey'] => $this->_tpl_vars['item']):
        $this->_foreach['iForeach']['iteration']++;
?>
                <?php $this->assign('iteration', $this->_foreach['iForeach']['iteration']-1); ?>
                <tr id="item_<?php echo $this->_tpl_vars['itemKey']; ?>
">
                    <td class="field">
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
                            <?php $this->assign('lCode', $this->_tpl_vars['language']['Code']); ?>
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <div class="tab_area<?php if (! ($this->_foreach['langF']['iteration'] <= 1)): ?> hide<?php endif; ?> <?php echo $this->_tpl_vars['language']['Code']; ?>
">
                            <?php endif; ?>
                            <input type="text" name="items[<?php echo $this->_tpl_vars['itemKey']; ?>
][<?php echo $this->_tpl_vars['language']['Code']; ?>
]" value="<?php echo $this->_tpl_vars['item'][$this->_tpl_vars['lCode']]; ?>
" maxlength="350" />
                            <?php if (count($this->_tpl_vars['allLangs']) > 1): ?>
                                <span class="field_description_noicon"><?php echo $this->_tpl_vars['lang']['name']; ?>
 (<b><?php echo $this->_tpl_vars['language']['name']; ?>
</b>)</span>
                            </div>
                            <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?>
                    </td>
                    <td style="padding: 0 10px;">
                        <input type="hidden" id="color_<?php echo $this->_tpl_vars['itemKey']; ?>
" name="color[]" value="<?php if ($this->_tpl_vars['sPost']['color'][$this->_tpl_vars['iteration']]): ?><?php echo $this->_tpl_vars['sPost']['color'][$this->_tpl_vars['iteration']]; ?>
<?php else: ?>#89b0cb<?php endif; ?>" />
                        <div class="colorSelector" id="colorSelector_<?php echo $this->_tpl_vars['itemKey']; ?>
"><div style="background-color: <?php if ($this->_tpl_vars['sPost']['color'][$this->_tpl_vars['iteration']]): ?><?php echo $this->_tpl_vars['sPost']['color'][$this->_tpl_vars['iteration']]; ?>
<?php else: ?>#89b0cb<?php endif; ?>"></div></div>
                        <script type="text/javascript">
                        var bsh_color_<?php echo $this->_tpl_vars['itemKey']; ?>
 = '<?php if ($this->_tpl_vars['sPost']['color'][$this->_tpl_vars['iteration']]): ?><?php echo $this->_tpl_vars['sPost']['color'][$this->_tpl_vars['iteration']]; ?>
<?php else: ?>#89b0cb<?php endif; ?>';
                        <?php echo '
                        $(document).ready(function(){
                            $(\'#colorSelector_'; ?>
<?php echo $this->_tpl_vars['itemKey']; ?>
<?php echo '\').ColorPicker({
                                color: bsh_color_'; ?>
<?php echo $this->_tpl_vars['itemKey']; ?>
<?php echo ',
                                onShow: function (colpkr) {
                                    $(colpkr).fadeIn(500);
                                    return false;
                                },
                                onHide: function (colpkr) {
                                    $(colpkr).fadeOut(500);
                                    return false;
                                },
                                onChange: function (hsb, hex, rgb) {
                                    $(\'#colorSelector_'; ?>
<?php echo $this->_tpl_vars['itemKey']; ?>
<?php echo ' div\').css(\'backgroundColor\', \'#\' + hex);
                                    $(\'#colorSelector_'; ?>
<?php echo $this->_tpl_vars['itemKey']; ?>
<?php echo '\').prev().val(\'#\'+hex);
                                }
                            });
                        });
                        '; ?>

                        </script>
                    </td>
                    <td>
                        &nbsp;&nbsp;&nbsp;<a class="delete_item" onclick="$('#item_<?php echo $this->_tpl_vars['itemKey']; ?>
').remove('');" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['remove']; ?>
</a>
                        <script type="text/javascript">
                        step = <?php echo $this->_tpl_vars['itemKey']; ?>
 + 1;
                        </script>
                    </td>
                </tr>
                <?php endforeach; endif; unset($_from); ?>
            <?php endif; ?>
            </table>
            <div style="margin: 4px 8px; height: 20px;" class="add_item"><a onclick="item_build();" href="javascript:void(0)"><?php echo $this->_tpl_vars['lang']['add_item']; ?>
</a></div>
        </td>
    </tr>
    <tr>
        <td class="name"><?php echo $this->_tpl_vars['lang']['polls_use_create_in_own']; ?>
</td>
        <td class="field">
            <?php if ($this->_tpl_vars['sPost']['random'] == '1'): ?>
                <?php $this->assign('random_no', 'checked="checked"'); ?>
            <?php elseif ($this->_tpl_vars['sPost']['random'] == '0'): ?>
                <?php $this->assign('random_yes', 'checked="checked"'); ?>
            <?php else: ?>
                <?php $this->assign('random_no', 'checked="checked"'); ?>
            <?php endif; ?>
            <label><input <?php echo $this->_tpl_vars['random_yes']; ?>
 class="lang_add" type="radio" name="random" value="0" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
            <label><input <?php echo $this->_tpl_vars['random_no']; ?>
 class="lang_add" type="radio" name="random" value="1" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
        </td>
    </tr>
    </table>
    <div id="block_styles">
        <table class="form">
        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['block_side']; ?>
</td>
            <td class="field">
                <select name="side">
                    <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['l_block_sides']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sides_f'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sides_f']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['sKey'] => $this->_tpl_vars['block_side']):
        $this->_foreach['sides_f']['iteration']++;
?>
                    <option value="<?php echo $this->_tpl_vars['sKey']; ?>
" <?php if ($this->_tpl_vars['sKey'] == $this->_tpl_vars['sPost']['side']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['block_side']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['use_block_design']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['sPost']['tpl'] == '1'): ?>
                    <?php $this->assign('tpl_yes', 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['sPost']['tpl'] == '0'): ?>
                    <?php $this->assign('tpl_no', 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign('tpl_yes', 'checked="checked"'); ?>
                <?php endif; ?>
                <label><input <?php echo $this->_tpl_vars['tpl_yes']; ?>
 class="lang_add" type="radio" name="tpl" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
</label>
                <label><input <?php echo $this->_tpl_vars['tpl_no']; ?>
 class="lang_add" type="radio" name="tpl" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
</label>
            </td>
        </tr>
        </table>
    </div>
    <table class="form">
    <tr>
        <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
        <td class="value">
            <select name="status" class="login_input_select lang_add">
                <option value="active" <?php if ($this->_tpl_vars['sPost']['status'] == 'active'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['active']; ?>
</option>
                <option value="approval" <?php if ($this->_tpl_vars['sPost']['status'] == 'approval'): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['lang']['approval']; ?>
</option>
            </select>
        </td>
    </tr>
    <tr>
        <td></td>
        <td class="value">
            <input class="button lang_add" type="submit" value="<?php if ($_GET['action'] == 'edit'): ?><?php echo $this->_tpl_vars['lang']['edit']; ?>
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
    <!-- add new poll end -->

    <!-- javascripts -->
    <script type="text/javascript">
    var lang_name = '<?php echo $this->_tpl_vars['lang']['name']; ?>
';
    var lg = Array(
    <?php $_from = $this->_tpl_vars['allLangs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['lF'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['lF']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['languages']):
        $this->_foreach['lF']['iteration']++;
?>
        '<?php echo $this->_tpl_vars['languages']['Code']; ?>
|<?php echo $this->_tpl_vars['languages']['name']; ?>
'<?php if (! ($this->_foreach['lF']['iteration'] == $this->_foreach['lF']['total'])): ?>,<?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
    );

    <?php echo '
    $(document).ready(function(){
        if( $(\'input[name="random"]:checked\').val() == 1)
        {
            $(\'#block_styles\').slideUp(\'normal\');
        }
        else
        {
            $(\'#block_styles\').slideDown(\'normal\');
        }
        $(\'input[name="random"]\').change(function(){
            if( $(this).val() == 1)
            {
                $(\'#block_styles\').slideUp(\'normal\');
            }
            else
            {
                $(\'#block_styles\').slideDown(\'normal\');
            }
        })
    })
    function item_build()
    {
        var data = \'\';
        var item = \'\';
        data += \'<tr id="item_\'+step+\'"><td class="field">\';
        data += \'<ul class="tabs">\';
        for (var i = 0; i <= lg.length-1; i++)
        {
            item = lg[i].split(\'|\');
            data += \'<li lang="\'+item[0]+\'"\';

            if(i == 0)
            {
                data += \' class="active" \';
            }
            data += \'>\'+item[1]+\'</li>\';
        }
        data += \'</ul>\';
        for (var i = 0; i <= lg.length-1; i++)
        {
            item = lg[i].split(\'|\');
            if(lg.length > 1)
            {
                data += \'<div class="tab_area \'+item[0];
                if(i > 0)
                {
                    data += \' hide\';
                }
                data += \'">\';
            }
            data += \'<input type="text" name="items[\'+step+\'][\'+item[0]+\']" value="" maxlength="350" />\';
            if(lg.length > 1)
            {
                data += \'<span class="field_description_noicon">\'+lang_name+\' (<b>\'+item[1]+\'</b>)</span>\';
                data += \'</div>\';
            }
        }

        // remove button build
        data += \'<\\/td><td style="padding: 0 10px;"><input type="hidden" id="color_\'+step+\'" name="color[]" value="#89b0cb" /><div class="colorSelector" id="colorSelector_\'+step+\'"><div style="background-color: #89b0cb"></div></div><\\/td><td>&nbsp;&nbsp;&nbsp;<a class="delete_item" onclick="$(\\\'#item_\'+step+\'\\\').remove();"  href="javascript:void(0)">\'+lang[\'ext_remove\']+\'<\\/a><\\/td><\\/tr>\';
        $("#items").append(data);
        addColorPicker(step)
        step++;
        flynax.tabs(true);
        flynax.copyPhrase();
    }
    function addColorPicker(step)
    {
        $(\'#colorSelector_\'+step).ColorPicker({
            color: \'#89b0cb\',
            onShow: function (colpkr) {
                $(colpkr).fadeIn(500);
                return false;
            },
            onHide: function (colpkr) {
                $(colpkr).fadeOut(500);
                return false;
            },
            onChange: function (hsb, hex, rgb) {
                $(\'#colorSelector_\'+step+\' div\').css(\'backgroundColor\', \'#\' + hex);
                $(\'#colorSelector_\'+step).prev().val(\'#\'+hex);
            }
        });
    }
    '; ?>

    </script>
    <!-- javascripts end -->
<?php elseif ($_GET['action'] == 'results'): ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <div style="margin: 10px;" class="grey_line"><b><?php echo $this->_tpl_vars['poll_info']['name']; ?>
</b></div>
        <?php $_from = $this->_tpl_vars['poll_items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['poll_item']):
?>
        <div style="margin: 10px 15px 2px;" class="blue_11_normal"><?php echo $this->_tpl_vars['poll_item']['name']; ?>
 - <b><?php echo $this->_tpl_vars['poll_item']['Votes']; ?>
</b> <?php echo $this->_tpl_vars['lang']['votes']; ?>
</div>
        <div style="margin: 0 15px;width: <?php if ($this->_tpl_vars['poll_item']['width'] > 20): ?><?php echo $this->_tpl_vars['poll_item']['width']; ?>
<?php else: ?>20<?php endif; ?>px; background: <?php echo $this->_tpl_vars['poll_item']['Color']; ?>
; height: 12px; color: white;font-size: 9px;text-align: center;"><b><?php echo $this->_tpl_vars['poll_item']['percent']; ?>
%</b></div>
        <?php endforeach; endif; unset($_from); ?>
        <div style="margin: 10px 15px;"><?php echo $this->_tpl_vars['lang']['total_votes']; ?>
: <b><?php echo $this->_tpl_vars['total_votes']; ?>
</b></div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
    <!-- polls grid create -->
    <div id="grid"></div>
    <script type="text/javascript">
    var pollsGrid;

    <?php echo '
    $(document).ready(function(){
        pollsGrid = new gridObj({
            key: \'polls\',
            id: \'grid\',
            ajaxUrl: rlPlugins + \'polls/admin/polls.inc.php?q=ext\',
            defaultSortField: \'name\',
            title: lang[\'ext_polls_manager\'],
            fields: [
                {name: \'ID\', mapping: \'ID\'},
                {name: \'name\', mapping: \'name\'},
                {name: \'Random\', mapping: \'Random\'},
                {name: \'Status\', mapping: \'Status\'},
                {name: \'Date\', mapping: \'Date\', type: \'date\', dateFormat: \'Y-m-d H:i:s\'}
            ],
            columns: [
                {
                    header: lang[\'ext_title\'],
                    dataIndex: \'name\',
                    width: 60,
                    id: \'rlExt_item_bold\'
                },{
                    header: lang[\'ext_polls_use_create_in_own\'],
                    dataIndex: \'Random\',
                    width: 10
                },{
                    header: lang[\'ext_add_date\'],
                    dataIndex: \'Date\',
                    width: 13,
                    renderer: Ext.util.Format.dateRenderer(\'Y-m-d H:i:s\')
                },{
                    header: lang[\'ext_status\'],
                    dataIndex: \'Status\',
                    width: 10,
                    editor: new Ext.form.ComboBox({
                        store: [
                            [\'active\', lang[\'ext_active\']],
                            [\'approval\', lang[\'ext_approval\']]
                        ],
                        mode: \'local\',
                        typeAhead: true,
                        triggerAction: \'all\',
                        selectOnFocus: true
                    })
                },{
                    header: lang[\'ext_actions\'],
                    width: 110,
                    fixed: true,
                    dataIndex: \'ID\',
                    sortable: false,
                    renderer: function(id) {
                        let imgView = `<img class="view" ext:qtip="${lang.ext_results}" src="${rlUrlHome}img/blank.gif">`;
                        let imgEdit = `<img class="edit" ext:qtip="${lang.ext_edit}" src="${rlUrlHome}img/blank.gif">`;

                        return `<div style="text-align: center;">
                                    <a href="${rlUrlController}&action=results&poll=${id}">${imgView}</a>
                                    <a href="${rlUrlController}&action=edit&poll=${id}">${imgEdit}</a>
                                    <img class="remove"
                                        ext:qtip="${lang.ext_delete}"
                                        src="${rlUrlHome}img/blank.gif"
                                        onclick="rlConfirm(\'${lang.ext_notice_delete_poll}\', \'deletePoll\', \'${id}\')"
                                    >
                                </div>`;

                    }
                }]
        });
        pollsGrid.init();
        grid.push(pollsGrid.grid);
    });

    let deletePoll = function(id) {
        flynax.sendAjaxRequest(\'deletePoll\', {id: id}, function(response) {
            if (response && response.status === \'OK\') {
                pollsGrid.reload();
                printMessage(\'notice\', \''; ?>
<?php echo $this->_tpl_vars['lang']['item_deleted']; ?>
<?php echo '\');
            } else {
                printMessage(\'error\', lang.system_error);
            }
        });
    }
    '; ?>

    </script>
<?php endif; ?>
<!-- polls tpl end -->