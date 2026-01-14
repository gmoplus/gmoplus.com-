<?php /* Smarty version 2.6.31, created on 2025-07-29 14:34:48
         compiled from /home/gmoplus/public_html/plugins/xmlFeeds/admin/xml_feeds.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/home/gmoplus/public_html/plugins/xmlFeeds/admin/xml_feeds.tpl', 52, false),array('modifier', 'cat', '/home/gmoplus/public_html/plugins/xmlFeeds/admin/xml_feeds.tpl', 70, false),array('modifier', 'in_array', '/home/gmoplus/public_html/plugins/xmlFeeds/admin/xml_feeds.tpl', 516, false),array('modifier', 'truncate', '/home/gmoplus/public_html/plugins/xmlFeeds/admin/xml_feeds.tpl', 590, false),array('modifier', 'date_format', '/home/gmoplus/public_html/plugins/xmlFeeds/admin/xml_feeds.tpl', 661, false),array('modifier', 'escape', '/home/gmoplus/public_html/plugins/xmlFeeds/admin/xml_feeds.tpl', 950, false),)), $this); ?>
<?php if ($_GET['action'] == 'add_feed' || $_GET['action'] == 'edit_feed'): ?>
    <script type="text/javascript" src="<?php echo (defined('RL_LIBS_URL') ? @RL_LIBS_URL : null); ?>
jquery/jquery.categoryDropdown.js"></script>
<?php endif; ?>

<!-- navigation bar -->
<div id="nav_bar">
    <?php if ($_GET['action'] == 'mapping'): ?>
        <a href="javascript:void(0)" onclick="show('add_mapping_item')" class="button_bar"><span class="left"></span><span class="center_add"><?php echo $this->_tpl_vars['lang']['xf_add_mapping_item']; ?>
</span><span class="right"></span></a>
        <?php if (! $_GET['field']): ?>
            <a href="javascript:void(0)" onclick="rlConfirm( '<?php echo $this->_tpl_vars['lang']['delete_confirm']; ?>
', 'xajax_clearMapping', Array('<?php echo $_GET['format']; ?>
') );" class="button_bar"><span class="left"></span><span class="center_remove"><?php echo $this->_tpl_vars['lang']['xf_clear_mapping']; ?>
</span><span class="right"></span></a>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ($_GET['mode'] == 'formats' && ( ! $_GET['action'] || $_GET['action'] == 'formats' )): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=add_format" class="button_bar"><span class="left"></span><span class="center_add"><?php echo $this->_tpl_vars['lang']['xf_add_format']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <?php if ($_GET['mode'] == 'feeds' || ( ! $_GET['action'] && ! $_GET['mode'] )): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=add_feed" class="button_bar"><span class="left"></span><span class="center_add"><?php echo $this->_tpl_vars['lang']['xf_add_feed']; ?>
</span><span class="right"></span></a>
        <a href="javascript:void(0)" onclick="show('filters', '#action_blocks div');" class="button_bar"><span class="left"></span><span class="center_search"><?php echo $this->_tpl_vars['lang']['filters']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <?php if ($_GET['action'] == 'edit_feed'): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=statistics&feed=<?php echo $_GET['feed']; ?>
" class="button_bar"><span class="left"></span><span class="center_import"><?php echo $this->_tpl_vars['lang']['xf_statistics']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <?php if ($_GET['action'] == 'statistics'): ?>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=mapping&format=<?php echo $this->_tpl_vars['format_info']['Key']; ?>
" target="_blank" class="button_bar"><span class="left"></span><span class="center"><?php echo $this->_tpl_vars['lang']['xf_build_mapping']; ?>
</span><span class="right"></span></a>
        <a href="javascript:void(0)" onclick="xajax_runFeed('<?php echo $_GET['feed']; ?>
', '<?php echo $_GET['account_id']; ?>
', $('#debug_local_field').val(), $('#debug_listing_id').val(), $('#debug_xml_ref').val() )" class="button_bar"><span class="left"></span><span class="center_import"><?php echo $this->_tpl_vars['lang']['xf_run_import']; ?>
</span><span class="right"></span></a>
        <a target="_blank" href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=listings&amp;feed=<?php echo $_GET['feed']; ?>
<?php if ($_GET['account_id']): ?>&amp;username=<?php echo $this->_tpl_vars['account_username']; ?>
<?php endif; ?>" class="button_bar"><span class="left"></span><span class="center_search"><?php echo $this->_tpl_vars['lang']['xf_view_listings']; ?>
</span><span class="right"></span></a>
        <a href="javascript:void(0)" onclick="xajax_clearStatistics('<?php echo $_GET['feed']; ?>
'<?php if ($_GET['account_id']): ?>, <?php echo $_GET['account_id']; ?>
 <?php endif; ?>)" class="button_bar"><span class="left"></span><span class="center_remove"><?php echo $this->_tpl_vars['lang']['xf_clear_statistics']; ?>
</span><span class="right"></span></a>
        <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=edit_feed&feed=<?php echo $_GET['feed']; ?>
" class="button_bar"><span class="left"></span><span class="center_edit"><?php echo $this->_tpl_vars['lang']['xf_edit_feed']; ?>
</span><span class="right"></span></a>
    <?php endif; ?>

    <?php if ($this->_tpl_vars['formats_mode']): ?>
    <?php else: ?>
        <?php if ($_GET['mode'] != 'feeds' && ( $_GET['mode'] || $_GET['action'] )): ?>
            <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=feeds" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['xf_manage_feeds']; ?>
</span><span class="right"></span></a>
        <?php endif; ?>
        <?php if ($_GET['mode'] != 'formats'): ?>
             <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
mode=formats" class="button_bar"><span class="left"></span><span class="center_list"><?php echo $this->_tpl_vars['lang']['xf_manage_formats']; ?>
</span><span class="right"></span></a>
         <?php endif; ?>
        <?php if ($_GET['action'] != 'export'): ?>
            <a href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=export" class="button_bar"><span class="left"></span><span class="center_export"><?php echo $this->_tpl_vars['lang']['xf_export']; ?>
</span><span class="right"></span></a>
        <?php endif; ?>
    <?php endif; ?>
</div>
<!-- navigation bar end -->

<?php if ($this->_tpl_vars['info'] && ! $this->_tpl_vars['errors']): ?>
<script>
    <?php if (count($this->_tpl_vars['info']) > 1): ?>
        var info_message = '<ul><?php $_from = $this->_tpl_vars['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mess']):
?><li><?php echo $this->_tpl_vars['mess']; ?>
</li><?php endforeach; endif; unset($_from); ?></ul>';
    <?php else: ?>
        var info_message = '<?php echo $this->_tpl_vars['info']['0']; ?>
';
    <?php endif; ?>

    <?php echo '
    $(document).ready(function(){
        printMessage(\'info\', info_message);
    });
    '; ?>

</script>
<?php endif; ?>

<?php if (( $_GET['action'] == 'edit_feed' && $_GET['feed'] ) || $_GET['action'] == 'add_feed'): ?>
    <?php $this->assign('sPost', $_POST); ?>

    <!-- add/edit -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=<?php if ($_GET['action'] == 'add_feed'): ?>add_feed<?php elseif ($_GET['action'] == 'edit_feed'): ?>edit_feed&amp;feed=<?php echo $_GET['feed']; ?>
<?php endif; ?>" method="post">
        <input type="hidden" name="submit" value="1" />
        <?php if ($_GET['action'] == 'edit_feed'): ?>
            <input type="hidden" name="fromPost" value="1" />
        <?php endif; ?>

        <table class="form">
        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['name']; ?>
</td>
            <td class="field">
                <input type="text" name="name" value="<?php echo $this->_tpl_vars['sPost']['name']; ?>
" style="width: 250px;" />
            </td>
        </tr>
        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['file_type']; ?>
</td>
            <td class="field">
                <select name="file_type">
                    <?php $_from = $this->_tpl_vars['file_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['file_type']):
?>
                    <option <?php if ($this->_tpl_vars['sPost']['file_type'] == $this->_tpl_vars['file_type']): ?>selected="selected" <?php endif; ?>value="<?php echo $this->_tpl_vars['file_type']; ?>
"><?php echo $this->_tpl_vars['file_type']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['xf_feed_url']; ?>
</td>
            <td class="field">
                <input name="url" type="text" value="<?php echo $this->_tpl_vars['sPost']['url']; ?>
" />
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['xf_read_method']; ?>
</td>
            <td class="field">
                <label><input <?php if ($this->_tpl_vars['sPost']['access_method'] == 'direct'): ?>checked="checked"<?php endif; ?> class="lang_add" type="radio" name="access_method" value="direct" /> <?php echo $this->_tpl_vars['lang']['xf_read_type_direct']; ?>
</label>
                <label><input <?php if ($this->_tpl_vars['sPost']['access_method'] == 'copy' || ! $this->_tpl_vars['sPost']['access_method']): ?>checked="checked"<?php endif; ?> class="lang_add" type="radio" name="access_method" value="copy" /> <?php echo $this->_tpl_vars['lang']['xf_read_type_copy']; ?>
</label>
                <label><input <?php if ($this->_tpl_vars['sPost']['access_method'] == 'stream'): ?>checked="checked"<?php endif; ?> class="lang_add" type="radio" name="access_method" value="stream" /> <?php echo $this->_tpl_vars['lang']['xf_read_type_stream_copy']; ?>
</label>

                <span class="field_description"><?php echo $this->_tpl_vars['lang']['xf_read_hint']; ?>
</span>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['xf_skip_imported']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['sPost']['skip_imported'] == '1'): ?>
                    <?php $this->assign('skip_imported_yes', 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['sPost']['skip_imported'] == '0'): ?>
                    <?php $this->assign('skip_imported_no', 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign('skip_imported_no', 'checked="checked"'); ?>
                <?php endif; ?>
                <label><input <?php echo $this->_tpl_vars['skip_imported_yes']; ?>
 type="radio" name="skip_imported" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
 </label>
                <label><input <?php echo $this->_tpl_vars['skip_imported_no']; ?>
 type="radio"  name="skip_imported" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
 </label>
            </td>
        </tr>
        </table>

        <div id="import_limit_cont" class="hide">
            <table class="form">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['xf_import_limit']; ?>
</td>
                <td class="field">
                    <input type="text" class="numeric" name="import_limit" value="<?php if ($this->_tpl_vars['sPost']['import_limit']): ?><?php echo $this->_tpl_vars['sPost']['import_limit']; ?>
<?php else: ?>0<?php endif; ?>" />
                    <span class="field_description"><?php echo $this->_tpl_vars['lang']['xf_import_limit_hint']; ?>
</span>
                </td>
            </tr>
            </table>
        </div>

        <div id="update_photos_cont" class="hide">
            <table class="form">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['xf_update_photos']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['update_photos'] == '1'): ?>
                        <?php $this->assign('update_photos_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['update_photos'] == '0'): ?>
                        <?php $this->assign('update_photos_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('update_photos_no', 'checked="checked"'); ?>
                    <?php endif; ?>
                    <label><input <?php echo $this->_tpl_vars['update_photos_yes']; ?>
 type="radio" name="update_photos" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
 </label>
                    <label><input <?php echo $this->_tpl_vars['update_photos_no']; ?>
 type="radio"  name="update_photos" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
 </label>
                </td>
            </tr>
            </table>
        </div>

        <div id="delayed_photos_cont" class="hide">
            <table class="form">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['xf_delayed_photos']; ?>
</td>
                <td class="field">
                    <?php if ($this->_tpl_vars['sPost']['delayed_photos'] == '1'): ?>
                        <?php $this->assign('delayed_photos_yes', 'checked="checked"'); ?>
                    <?php elseif ($this->_tpl_vars['sPost']['delayed_photos'] == '0'): ?>
                        <?php $this->assign('delayed_photos_no', 'checked="checked"'); ?>
                    <?php else: ?>
                        <?php $this->assign('delayed_photos_no', 'checked="checked"'); ?>
                    <?php endif; ?>
                    <label><input <?php echo $this->_tpl_vars['delayed_photos_yes']; ?>
 type="radio" name="delayed_photos" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
 </label>
                    <label><input <?php echo $this->_tpl_vars['delayed_photos_no']; ?>
 type="radio"  name="delayed_photos" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
 </label>
                    <span class="field_description"><?php echo $this->_tpl_vars['lang']['xf_delayed_photos_hint']; ?>
</span>
                </td>
            </tr>
            </table>
        </div>

        <div id="not_delayed_photos_cont" class="hide">
            <table class="form">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['xf_not_delayed_photos_number']; ?>
</td>
                <td class="field">
                    <input type="text" class="numeric" name="not_delayed_photos" value="<?php if ($this->_tpl_vars['sPost']['not_delayed_photos']): ?><?php echo $this->_tpl_vars['sPost']['not_delayed_photos']; ?>
<?php else: ?>0<?php endif; ?>" />
                    <span class="field_description"><?php echo $this->_tpl_vars['lang']['xf_not_delayed_photos_number_hint']; ?>
</span>
                </td>
            </tr>
            </table>
        </div>

        <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['xf_read_auth']; ?>
</td>
            <td class="field">
                <?php if ($this->_tpl_vars['sPost']['http_auth'] == '1'): ?>
                    <?php $this->assign('http_auth_yes', 'checked="checked"'); ?>
                <?php elseif ($this->_tpl_vars['sPost']['http_auth'] == '0'): ?>
                    <?php $this->assign('http_auth_no', 'checked="checked"'); ?>
                <?php else: ?>
                    <?php $this->assign('http_auth_no', 'checked="checked"'); ?>
                <?php endif; ?>
                <label><input <?php echo $this->_tpl_vars['http_auth_yes']; ?>
 type="radio" id="http_auth_yes" name="http_auth" value="1" /> <?php echo $this->_tpl_vars['lang']['yes']; ?>
 </label>
                <label><input <?php echo $this->_tpl_vars['http_auth_no']; ?>
 type="radio" id="http_auth_no" name="http_auth" value="0" /> <?php echo $this->_tpl_vars['lang']['no']; ?>
 </label>
            </td>
        </tr>
        </table>

        <div id="http_auth_details" class="hide">
            <table class="form">
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['xf_auth_details']; ?>
</td>
                <td class="field">
                    <label><input class="lang_add" type="text" name="http_auth_login" value="<?php echo $this->_tpl_vars['sPost']['http_auth_login']; ?>
" /> <?php echo $this->_tpl_vars['lang']['username']; ?>
</label>
                    <label><input class="lang_add" type="text" name="http_auth_pass" value="<?php echo $this->_tpl_vars['sPost']['http_auth_pass']; ?>
" /> <?php echo $this->_tpl_vars['lang']['password']; ?>
</label>
                </td>
            </tr>
            </table>
        </div>

        <table class="form">
        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['xf_format']; ?>
</td>
            <td class="field">
                <select name="format">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['formats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
                        <option value="<?php echo $this->_tpl_vars['format']['Key']; ?>
" <?php if ($this->_tpl_vars['sPost']['format'] == $this->_tpl_vars['format']['Key']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['format']['Name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>

                <?php if ($_GET['action'] == 'add_feed'): ?>
                    <label>
                        <input type="checkbox" name="create_format" <?php if ($_POST['create_format']): ?>checked="checked"<?php endif; ?> value="1" /><?php echo $this->_tpl_vars['lang']['xf_autocreate_format']; ?>

                    </label>
                <?php endif; ?>
            </td>
        </tr>
        </table>

        <?php if ($_GET['action'] == 'add_feed'): ?>
            <div id="format_xpath_cont" class="hide">
                <table class="form">
                <tr>
                    <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['xf_xpath']; ?>
</td>
                    <td class="field">
                        <input type="text" name="format_xpath" value="<?php echo $this->_tpl_vars['sPost']['format_xpath']; ?>
" style="width: 250px;" />
                        <span class="field_description"><a class="xpath-sample" href="javascript://"><?php echo $this->_tpl_vars['lang']['xf_example']; ?>
</a></span>
                    </td>
                </tr>
                </table>
            </div>
        <?php endif; ?>

        <table class="form">
        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['listing_package']; ?>
</td>
            <td class="field">
                <select name="plan_id" <?php if ($this->_tpl_vars['config']['membership_module'] && ! $this->_tpl_vars['config']['allow_listing_plans']): ?>disabled="disabled" class="disabled"<?php endif; ?>>
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php $_from = $this->_tpl_vars['plans']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plan']):
?>
                        <option value="<?php echo $this->_tpl_vars['plan']['ID']; ?>
" <?php if ($this->_tpl_vars['sPost']['plan_id'] == $this->_tpl_vars['plan']['ID']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['plan']['name']; ?>
</option>
                    <?php endforeach; endif; unset($_from); ?>
                </select>

                <?php if ($this->_tpl_vars['config']['membership_module'] && ! $this->_tpl_vars['config']['allow_listing_plans']): ?>
                    <span class="field_description">
                        <?php echo $this->_tpl_vars['lang']['xf_membership_no_default_plan_allowed_hint']; ?>

                    </span>
                <?php endif; ?>
            </td>
        </tr>
        <?php if (count($this->_tpl_vars['listing_types']) > 1): ?>
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['listing_type']; ?>
</td>
                <td class="field">
                    <select name="listing_type" id="Type">
                        <option value="0"><?php echo $this->_tpl_vars['lang']['all']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ltLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ltLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['listing_type']):
        $this->_foreach['ltLoop']['iteration']++;
?>
                            <option value="<?php echo $this->_tpl_vars['listing_type']['Key']; ?>
" <?php if ($this->_tpl_vars['sPost']['listing_type'] == $this->_tpl_vars['listing_type']['Key']): ?>selected="selected"<?php endif; ?> <?php if (($this->_foreach['ltLoop']['iteration'] <= 1)): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['listing_type']['name']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
        <?php else: ?>
            <?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ltLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ltLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['listing_type']):
        $this->_foreach['ltLoop']['iteration']++;
?>
                <input type="hidden" id="Type" value="<?php echo $this->_tpl_vars['listing_type']['Key']; ?>
" />
            <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['xf_default_category']; ?>
</td>
            <td class="field">
                <select id="Category_ID" name="default_category">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['any']; ?>
</option>
                </select>

                <span class="field_description">
                    <?php echo $this->_tpl_vars['lang']['xf_default_category_hint']; ?>

                </span>
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['xf_removed_ads_action']; ?>
</td>
            <td class="field">
                <select name="removed_ads_action">
                    <option <?php if (! $this->_tpl_vars['sPost']['removed_ads_action']): ?>selected="selected"<?php endif; ?> value=""><?php echo $this->_tpl_vars['lang']['xf_raa_no_action']; ?>
</option>
                    <option <?php if ($this->_tpl_vars['sPost']['removed_ads_action'] == 'remove'): ?>selected="selected"<?php endif; ?> value="remove"><?php echo $this->_tpl_vars['lang']['xf_raa_remove']; ?>
</option>
                    <option <?php if ($this->_tpl_vars['sPost']['removed_ads_action'] == 'expire'): ?>selected="selected"<?php endif; ?> value="expire"><?php echo $this->_tpl_vars['lang']['xf_raa_expire']; ?>
</option>
                </select>
            </td>
        </tr>

        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['xf_sys_status']; ?>
</td>
            <td class="field">
                <select name="listings_status">
                    <option <?php if ($this->_tpl_vars['sPost']['listings_status'] == 'active'): ?>selected="selected"<?php endif; ?> value="active"><?php echo $this->_tpl_vars['lang']['active']; ?>
</option>
                    <option <?php if ($this->_tpl_vars['sPost']['listings_status'] == 'approval'): ?>selected="selected"<?php endif; ?> value="approval"><?php echo $this->_tpl_vars['lang']['approval']; ?>
</option>
                </select>
            </td>
        </tr>

        <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['username']; ?>
</td>
            <td class="field">
                <input type="text" name="account_id" id="account_id" value="<?php $_from = $this->_tpl_vars['accounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['account']):
?><?php if ($this->_tpl_vars['sPost']['account_id'] == $this->_tpl_vars['account']['ID']): ?><?php echo $this->_tpl_vars['account']['Username']; ?>
<?php endif; ?><?php endforeach; endif; unset($_from); ?>" />

                <span class="field_description">
                    <?php echo $this->_tpl_vars['lang']['xf_username_hint']; ?>

                </span>

                <script type="text/javascript">
                var post_account_id = <?php if ($this->_tpl_vars['sPost']['account_id']): ?><?php echo $this->_tpl_vars['sPost']['account_id']; ?>
<?php else: ?>false<?php endif; ?>;
                <?php echo '
                    $(\'#account_id\').rlAutoComplete({add_id: true, id: post_account_id});
                '; ?>

                </script>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
            <td class="field">
                <select name="status">
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
                <input type="submit" value="<?php if ($_GET['action'] == 'edit_feed'): ?><?php echo $this->_tpl_vars['lang']['edit']; ?>
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

    <script type="text/javascript">
        var category_selected = '<?php echo $_POST['default_category']; ?>
';

        <?php echo '
        $(document).ready(function(){
            $(\'#Category_ID\').categoryDropdown({
                listingType: \'#Type\',
                default_selection: category_selected,
                phrases: { '; ?>

                    no_categories_available: "<?php echo $this->_tpl_vars['lang']['no_categories_available']; ?>
",
                    select: "<?php echo $this->_tpl_vars['lang']['select']; ?>
",
                    select_category: "<?php echo $this->_tpl_vars['lang']['select_category']; ?>
"
                <?php echo ' }
            });
        });
        '; ?>

    </script>

    <?php if ($_GET['action'] == 'add_feed'): ?>
        <script type="text/javascript">
            <?php echo '
            $(document).ready(function() {
                $(\'input[name=create_format]\').click(function() {
                    formatAutoCreateHandler();
                });
                formatAutoCreateHandler();
            });

            function formatAutoCreateHandler() {
                $(\'select[name="format"]\').removeClass(\'error\');
                if ($(\'input[name=create_format]\').is(\':checked\')) {
                    $(\'#format_xpath_cont\').slideDown();
                    $(\'select[name="format"]\').attr(\'disabled\', true).addClass(\'disabled\');
                } else {
                    $(\'#format_xpath_cont\').slideUp();
                    $(\'select[name="format"]\').attr(\'disabled\', false).removeClass(\'disabled\');
                }
            }
            '; ?>

        </script>
    <?php endif; ?>

    <script type="text/javascript">
        <?php echo '
            $(document).ready(function(){
                httpAuthHandler();
            });

            var httpAuthHandler = function() {
                if ($(\'input[name=http_auth]:checked\').val() == \'1\') {
                    $(\'#http_auth_details\').slideDown();
                } else {
                    $(\'#http_auth_details\').slideUp();
                }
            }
            $(\'input[name=http_auth]\').change(function() {
                httpAuthHandler();
            });
        '; ?>

    </script>

     <script type="text/javascript">
        <?php echo '
            $(document).ready(function(){
                importLimitHandler();
            });

            var importLimitHandler = function() {
                if ($(\'input[name=skip_imported]:checked\').val() == \'1\') {
                    $(\'input[name=update_photos][value=0]\').attr(\'checked\', \'checked\').click();
                    updatePhotosHandler();

                    $(\'#import_limit_cont\').slideDown();
                    $(\'#update_photos_cont\').slideUp();
                } else {
                    $(\'#import_limit_cont\').slideUp();
                    $(\'#update_photos_cont\').slideDown();
                }
            }
            $(\'input[name=skip_imported]\').change(function() {
                importLimitHandler();
            });
        '; ?>

    </script>

    <script type="text/javascript">
        <?php echo '
            $(document).ready(function(){
                delayedPhotosHandler();
            });

            var delayedPhotosHandler = function() {
                if ($(\'input[name=delayed_photos]:checked\').val() == \'1\') {
                    $(\'#not_delayed_photos_cont\').slideDown();
                } else {
                    $(\'#not_delayed_photos_cont\').slideUp();
                }
            }
            $(\'input[name=delayed_photos]\').change(function() {
                delayedPhotosHandler();
            });
        '; ?>

    </script>

    <script type="text/javascript">
        <?php echo '
            $(document).ready(function(){
                updatePhotosHandler();
            });

            var updatePhotosHandler = function() {
                if ($(\'input[name=update_photos]:checked\').val() == \'0\') {
                    $(\'#delayed_photos_cont\').slideDown();
                } else {
                    $(\'#delayed_photos_cont\').slideUp();

                    $(\'input[name=delayed_photos][value=0]\').attr(\'checked\', \'checked\').click();
                    delayedPhotosHandler();
                }
            }
            $(\'input[name=update_photos]\').change(function() {
                updatePhotosHandler();
            });
        '; ?>

    </script>

<?php elseif (( $_GET['action'] == 'edit_format' && $_GET['format'] ) || $_GET['action'] == 'add_format'): ?>

    <?php $this->assign('sPost', $_POST); ?>
    <!-- add/edit -->
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <form action="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=<?php if ($_GET['action'] == 'add_format'): ?>add_format<?php elseif ($_GET['action'] == 'edit_format'): ?>edit_format&amp;format=<?php echo $_GET['format']; ?>
<?php endif; ?>" method="post">
        <input type="hidden" name="submit" value="1" />
        <?php if ($_GET['action'] == 'edit_format'): ?>
            <input type="hidden" name="fromPost" value="1" />
        <?php endif; ?>

        <table class="form">
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['name']; ?>
</td>
                <td class="field">
                    <input type="text" name="name" value="<?php echo $this->_tpl_vars['sPost']['name']; ?>
" style="width: 250px;" />
                </td>
            </tr>
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['xf_xpath']; ?>
</td>
                <td class="field">
                    <input name="xpath" type="text" value="<?php echo $this->_tpl_vars['sPost']['xpath']; ?>
" />
                    <span class="field_description"><a class="xpath-sample" href="javascript://"><?php echo $this->_tpl_vars['lang']['xf_example']; ?>
</a></span>
                </td>
            </tr>
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['xf_format_for']; ?>
</td>
                <td class="field">
                    <label>
                        <input name="format_for[import]"
                               type="checkbox"
                               value="import"
                               <?php if ($_POST['format_for'] && ((is_array($_tmp='import')) ? $this->_run_mod_handler('in_array', true, $_tmp, $_POST['format_for']) : in_array($_tmp, $_POST['format_for']))): ?>checked="checked"<?php endif; ?>
                        /> <?php echo $this->_tpl_vars['lang']['xf_import_label']; ?>

                    </label>
                    <label>
                        <input name="format_for[export]"
                               type="checkbox"
                               value="export"
                               <?php if ($_POST['format_for'] && ((is_array($_tmp='export')) ? $this->_run_mod_handler('in_array', true, $_tmp, $_POST['format_for']) : in_array($_tmp, $_POST['format_for']))): ?>checked="checked"<?php endif; ?>
                        /> <?php echo $this->_tpl_vars['lang']['xf_export_label']; ?>

                    </label>
                </td>
            </tr>
            <tr>
                <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
                <td class="field">
                    <select name="status">
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
                    <input type="submit" value="<?php if ($_GET['action'] == 'edit_format'): ?><?php echo $this->_tpl_vars['lang']['edit']; ?>
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

<?php elseif ($_GET['action'] == 'statistics'): ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <table class="lTable" style="text-align:center">
        <tr class="header">
            <td>
                <div><?php echo $this->_tpl_vars['lang']['xf_format']; ?>
</div>
            </td>
            <td class="clear"></td>
            <td>
                <div><?php echo $this->_tpl_vars['lang']['listing_package']; ?>
</div>
            </td>
            <td class="clear"></td>
            <td>
                <div><?php echo $this->_tpl_vars['lang']['username']; ?>
</div>
            </td>
            <td class="clear"></td>
            <td>
                <div><?php echo $this->_tpl_vars['lang']['xf_default_category']; ?>
</div>
            </td>
            <td class="clear"></td>
            <td>
                <div><?php echo $this->_tpl_vars['lang']['xf_feed_url']; ?>
</div>
            </td>
        </tr>
        <tr class="body">
            <td class="list_td">
                <a target="_blank" href="<?php echo $this->_tpl_vars['rlBaseC']; ?>
action=edit_format&format=<?php echo $this->_tpl_vars['feed_info']['Format']; ?>
"><?php echo $this->_tpl_vars['feed_info']['Format_name']; ?>
</a>
            </td>
            <td class="clear" style="width: 3px;"></td>
            <td class="list_td">
                <a target="_blank" href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=listing_plans&action=edit&id=<?php echo $this->_tpl_vars['feed_info']['Plan_ID']; ?>
"><?php echo $this->_tpl_vars['feed_info']['Plan_name']; ?>
</a>
            </td>
            <td class="clear" style="width: 3px;"></td>
            <td class="list_td">
                <a target="_blank" href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=accounts&action=view&userid=<?php echo $this->_tpl_vars['feed_info']['Account_ID']; ?>
"><?php echo $this->_tpl_vars['feed_info']['Username']; ?>
</a>
            </td>
            <td class="clear" style="width: 3px;"></td>
            <td class="list_td">
                <a target="_blank" href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=browse&id=<?php echo $this->_tpl_vars['feed_info']['Default_category']; ?>
"><?php echo $this->_tpl_vars['feed_info']['Category_name']; ?>
</a>
            </td>
            <td class="clear" style="width: 3px;"></td>
            <td class="list_td">
                <a target="_blank" href="<?php echo $this->_tpl_vars['feed_info']['Url']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['feed_info']['Url'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 100) : smarty_modifier_truncate($_tmp, 100)); ?>
</a>
            </td>
        </tr>
    </table>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <?php if (isset ( $_GET['debug'] )): ?>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <label>Local field:
            <input type="text" value="" id="debug_local_field" />
        </label>
        <label>Listing ID:
            <input type="text" value="" id="debug_listing_id" />
        </label>
        <label>XML REF:
            <input type="text" value="" id="debug_xml_ref" />
        </label>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php endif; ?>

    <div id="manual_import_cont" class="hide">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            <div id="manual_import_dom"></div>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php if ($this->_tpl_vars['statistics']): ?>
        <table class="lTable" style="text-align:center" id="stats_table">
            <tr class="header">
                <td style="height: 24px;">
                    <div>
                        <?php echo $this->_tpl_vars['lang']['xf_stats_date']; ?>

                    </div>
                </td>
                <td class="clear" style="width: 3px;"></td>
                <td style="height: 24px;">
                    <div>
                        <?php echo $this->_tpl_vars['lang']['account']; ?>

                    </div>
                </td>
                <td class="clear" style="width: 3px;"></td>
                <td style="height: 24px;">
                    <div>
                        <?php echo $this->_tpl_vars['lang']['xf_stats_updated']; ?>

                    </div>
                </td>
                <td class="clear" style="width: 3px;"></td>
                <td style="height: 24px;">
                    <div>
                        <?php echo $this->_tpl_vars['lang']['xf_stats_inserted']; ?>

                    </div>
                </td>
                <td class="clear" style="width: 3px;"></td>
                <td style="height: 24px;">
                    <div>
                        <?php echo $this->_tpl_vars['lang']['xf_stats_deleted']; ?>

                    </div>
                </td>
            </tr>
            <tr>
            </tr>
            <?php $this->assign('date_format', ((is_array($_tmp=(defined('RL_DATE_FORMAT') ? @RL_DATE_FORMAT : null))) ? $this->_run_mod_handler('cat', true, $_tmp, ' %H:%M') : smarty_modifier_cat($_tmp, ' %H:%M'))); ?>
            <?php $_from = $this->_tpl_vars['statistics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['statsLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['statsLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['entry']):
        $this->_foreach['statsLoop']['iteration']++;
?>
                <?php if ($this->_foreach['statsLoop']['iteration']%2 == 0): ?>
                    <?php $this->assign('td_style', '_light'); ?>
                <?php else: ?>
                    <?php $this->assign('td_style', ''); ?>
                <?php endif; ?>
                <tr class="body">
                    <td class="list_td<?php echo $this->_tpl_vars['td_style']; ?>
">
                        <?php echo ((is_array($_tmp=$this->_tpl_vars['entry']['Date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['date_format']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['date_format'])); ?>

                    </td>
                    <td class="clear" style="width: 3px;"></td>

                    <td class="list_td<?php echo $this->_tpl_vars['td_style']; ?>
">
                        <a href="<?php echo $this->_tpl_vars['rlBase']; ?>
index.php?controller=accounts&action=view&userid=<?php echo $this->_tpl_vars['entry']['Account_ID']; ?>
"><?php echo $this->_tpl_vars['entry']['Username']; ?>
</a>
                    </td>
                    <td class="clear" style="width: 3px;"></td>

                    <td class="list_td<?php echo $this->_tpl_vars['td_style']; ?>
">
                        <?php echo $this->_tpl_vars['entry']['Listings_updated']; ?>

                    </td>
                    <td class="clear" style="width: 3px;"></td>

                    <td class="list_td<?php echo $this->_tpl_vars['td_style']; ?>
">
                        <?php echo $this->_tpl_vars['entry']['Listings_inserted']; ?>

                    </td>
                    <td class="clear" style="width: 3px;"></td>

                    <td class="list_td<?php echo $this->_tpl_vars['td_style']; ?>
">
                        <?php echo $this->_tpl_vars['entry']['Listings_deleted']; ?>

                    </td>
                    <td class="clear" style="width: 3px;"></td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    <?php else: ?>
        <div><?php echo $this->_tpl_vars['lang']['xf_no_stats']; ?>
</div>
    <?php endif; ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php elseif ($_GET['action'] == 'mapping' && $_GET['format']): ?>
    
    <!-- add new mapping item -->
    <div id="add_mapping_item" class="hide">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['add_item'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['xf_remote_field']; ?>
</td>
            <td class="field">
                <input id="mapping_item_remote" type="text" class="w250" />

                <?php echo $this->_tpl_vars['lang']['default']; ?>


                <input id="mapping_item_default" type="text" class="w250" />
            </td>
        </tr>

        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['xf_local_field']; ?>
</td>
            <td class="field">
                <select id="mapping_item_local" class="w250">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                    <?php if ($_GET['field']): ?>
                        <?php $_from = $this->_tpl_vars['local_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['local_value']):
?>
                            <option value="<?php echo $this->_tpl_vars['local_value']['Key']; ?>
"><?php echo $this->_tpl_vars['local_value']['name']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    <?php else: ?>
                        <optgroup label="<?php echo $this->_tpl_vars['lang']['xf_listingfields_label']; ?>
">
                        <?php $_from = $this->_tpl_vars['listing_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                            <option value="<?php echo $this->_tpl_vars['field']['Key']; ?>
" <?php if ($this->_tpl_vars['field']['Key'] == $this->_tpl_vars['xml_field']['fl']): ?>selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['field']['name']; ?>
 (<?php echo $this->_tpl_vars['field']['Type_name']; ?>
)</option>
                        <?php endforeach; endif; unset($_from); ?>
                        </optgroup>
                        <?php if ($this->_tpl_vars['system_fields']): ?>
                            <optgroup label="<?php echo $this->_tpl_vars['lang']['xf_sysfields_label']; ?>
">
                            <?php $_from = $this->_tpl_vars['system_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                                <option value="<?php echo $this->_tpl_vars['field']['Key']; ?>
" <?php if ($this->_tpl_vars['field']['Key'] == $this->_tpl_vars['xml_field']['fl']): ?>selected="selected"<?php endif; ?> ><?php echo $this->_tpl_vars['field']['name']; ?>
 (<?php echo $this->_tpl_vars['lang']['xf_sys_type']; ?>
)</option>
                            <?php endforeach; endif; unset($_from); ?>
                            </optgroup>
                        <?php endif; ?>
                    <?php endif; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['status']; ?>
</td>
            <td class="field">
                <select id="ni_status">
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
                <input type="button" name="item_submit" value="<?php echo $this->_tpl_vars['lang']['add']; ?>
" />
                <a onclick="$('#add_mapping_item').slideUp('normal')" href="javascript:void(0)" class="cancel"><?php echo $this->_tpl_vars['lang']['close']; ?>
</a>
            </td>
        </tr>
        </table>
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>

    <script type="text/javascript">
        <?php echo '
            $(document).ready(function(){
                $(\'#mapping_item_local\').change(function(){
                    if (!$(\'#mapping_item_remote\').val()) {
                        $(\'#mapping_item_remote\').val($(this).val());
                    }
                });
            });

            $(\'input[name=item_submit]\').click(function(){
                $(this).val(lang[\'loading\']);

                if ($(\'#mapping_item_local\').val() && ($(\'#mapping_item_remote\').val() || $(\'#mapping_item_default\').val())) {
                    xajax_addMappingItem($(\'#mapping_item_local\').val(), $(\'#mapping_item_remote\').val(), $(\'#mapping_item_default\').val());
                } else {
                    $(\'input[name=item_submit]\').val(lang[\'add\']);
                    printMessage("error", "Fill all fields");
                }
            });
        '; ?>

    </script>

    <?php if (! $_GET['field']): ?>
        <div id="grid"></div>
        <script type="text/javascript">//<![CDATA[
        lang['xf_unset'] = "<?php echo $this->_tpl_vars['lang']['xf_unset']; ?>
";

        <?php echo '
            var xmlMappingGrid;

            $(document).ready(function(){
                xmlMappingGrid = new gridObj({
                    key: \'xml_mapping\',
                    id: \'grid\',
                    ajaxUrl: rlPlugins + \'xmlFeeds/admin/xml_feeds.inc.php?q=ext_mapping&format='; ?>
<?php echo $_GET['format']; ?>
<?php echo '\',
                    defaultSortField: \'Data_remote\',
                    title: lang[\'ext_xml_formats_manager\'],
                    fields: [
                        {name: \'ID\', mapping: \'ID\', type: \'int\'},
                        {name: \'Data_remote\', mapping: \'Data_remote\', type: \'string\'},
                        {name: \'Data_local\', mapping: \'Data_local\', type: \'string\'},
                        {name: \'Local_field_name\', mapping: \'Local_field_name\', type: \'string\'},
                        {name: \'Format\', mapping: \'Format\', type: \'string\'},
                        {name: \'Format_name\', mapping: \'Format_name\', type: \'string\'},
                        {name: \'Example_value\', mapping: \'Example_value\',  type: \'string\'},
                        {name: \'Default\', mapping: \'Default\'},
                        {name: \'Status\', mapping: \'Status\'},
                        {name: \'Build_url\', mapping: \'Build_url\'}
                    ],
                    columns: [{
                            header: \''; ?>
<?php echo $this->_tpl_vars['lang']['xf_remote_field']; ?>
<?php echo '\',
                            dataIndex: \'Data_remote\',
                            width: 15
                        },{
                            header: \''; ?>
<?php echo $this->_tpl_vars['lang']['xf_local_field']; ?>
<?php echo '\',
                            dataIndex: \'Local_field_name\',
                            width: 11,
                            editor: new Ext.form.ComboBox({
                                store: [
                                    [\'unset\', \'-- \' + lang[\'xf_unset\'] + \' --\'],
                                '; ?>
<?php $_from = $this->_tpl_vars['listing_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                                    ['<?php echo $this->_tpl_vars['field']['Key']; ?>
', '<?php echo $this->_tpl_vars['field']['name']; ?>
  (<?php echo $this->_tpl_vars['field']['Type_name']; ?>
)'],
                                <?php endforeach; endif; unset($_from); ?>
                                <?php $_from = $this->_tpl_vars['system_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sysFieldsLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sysFieldsLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['field']):
        $this->_foreach['sysFieldsLoop']['iteration']++;
?>
                                    ['<?php echo $this->_tpl_vars['field']['Key']; ?>
', '<?php echo $this->_tpl_vars['field']['name']; ?>
 (<?php echo $this->_tpl_vars['lang']['xf_sys_type']; ?>
)']<?php if (! ($this->_foreach['sysFieldsLoop']['iteration'] == $this->_foreach['sysFieldsLoop']['total'])): ?>,<?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php echo '
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
                            header: \''; ?>
<?php echo $this->_tpl_vars['lang']['xf_map_example_value']; ?>
<?php echo '\',
                            dataIndex: \'Example_value\',
                            width: 11
                        },{
                            header: \''; ?>
<?php echo $this->_tpl_vars['lang']['xf_mapping_default']; ?>
<?php echo '\',
                            dataIndex: \'Default\',
                            width: 8,
                            editor: new Ext.form.TextArea({
                                allowBlank: false
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
                            width: 90,
                            fixed: true,
                            dataIndex: \'ID\',
                            sortable: false,
                            renderer: function(val, obj, row){
                                var out = "<center>";
                                var splitter = false;
                                var format_key = row.data.Format;
                                var item_key = row.data.Data_remote;

                                if (row.data.Build_url) {
                                    out += "<a href=\'"+rlUrlHome+"index.php?controller="+controller+"&amp;action=mapping&amp;format="+format_key+"&amp;";
                                    out += row.data.Build_url+"\'><img class=\'build\'ext:qtip=\'"+lang[\'ext_build\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";
                                }
                                out += "<img class=\'remove\' ext:qtip=\'"+lang[\'ext_delete\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\"'; ?>
<?php echo $this->_tpl_vars['lang']['drop_confirm']; ?>
<?php echo '\\", \\"xajax_deleteMappingItem\\", \\""+item_key+"\\", \\"section_load\\" )\' />";
                                out += "</center>";

                                return out;
                            }
                        }
                    ]
                });

                xmlMappingGrid.init();
                grid.push(xmlMappingGrid.grid);

                xmlMappingGrid.grid.addListener(\'afteredit\', function(editEvent) {
                    setTimeout(function(){ xmlMappingGrid.reload() }, 500);
                });
            });
            '; ?>

        //]]>
        </script>
    <?php else: ?>

        <!-- items mapping grid -->

        <div id="grid"></div>
        <script type="text/javascript">//<![CDATA[
        <?php echo '
            var xmlItemMappingGrid;

            $(document).ready(function(){
                xmlItemMappingGrid = new gridObj({
                    key: \'xml_mapping\',
                    id: \'grid\',
                    ajaxUrl: rlPlugins + \'xmlFeeds/admin/xml_feeds.inc.php?q=ext_item_mapping&format='; ?>
<?php echo $_GET['format']; ?>
&field=<?php echo $_GET['field']; ?>
 \
                    <?php if ($_GET['parent']): ?>&parent=<?php echo $_GET['parent']; ?>
<?php endif; ?><?php echo '\',
                    defaultSortField: \'Data_remote\',
                    title: lang[\'ext_xml_formats_manager\'],
                    fields: [
                        {name: \'ID\', mapping: \'ID\', type: \'int\'},
                        {name: \'Data_remote\', mapping: \'Data_remote\', type: \'string\'},
                        {name: \'Data_local\', mapping: \'Data_local\', type: \'string\'},
                        {name: \'Local_field_name\', mapping: \'Local_field_name\', type: \'string\'},
                        {name: \'Local_field_type\', mapping: \'Local_field_type\', type: \'string\'},
                        {name: \'Format\', mapping: \'Format\', type: \'string\'},
                        {name: \'Format_name\', mapping: \'Format_name\', type: \'string\'},
                        {name: \'Status\', mapping: \'Status\'},
                        {name: \'Build_url\', mapping: \'Build_url\', type: \'string\'}
                    ],
                    columns: [{
                            header: \''; ?>
<?php echo $this->_tpl_vars['lang']['xf_remote_data']; ?>
<?php echo '\',
                            dataIndex: \'Data_remote\',
                            id: \'rlExt_item_bold\',
                            width: 30
                        },{
                            header: \''; ?>
<?php echo $this->_tpl_vars['lang']['xf_local_data']; ?>
<?php echo '\',
                            dataIndex: "Data_local",
                            width: 30,
                            editor: new Ext.form.ComboBox({
                                store: [
                                '; ?>
<?php $_from = $this->_tpl_vars['listing_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field']):
?>
                                    ['<?php echo $this->_tpl_vars['field']['Key']; ?>
', '<?php echo $this->_tpl_vars['field']['name']; ?>
'],
                                <?php endforeach; endif; unset($_from); ?>
                                <?php $_from = $this->_tpl_vars['local_values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['sysFieldsLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['sysFieldsLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['value']):
        $this->_foreach['sysFieldsLoop']['iteration']++;
?>
                                    ['<?php echo $this->_tpl_vars['value']['Key']; ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['value']['name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'javascript') : smarty_modifier_escape($_tmp, 'javascript')); ?>
']<?php if (! ($this->_foreach['sysFieldsLoop']['iteration'] == $this->_foreach['sysFieldsLoop']['total'])): ?>,<?php endif; ?>
                                <?php endforeach; endif; unset($_from); ?><?php echo '
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
                            header: lang[\'ext_status\'],
                            dataIndex: \'Status\',
                            width: 10,
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
                            width: 90,
                            fixed: true,
                            dataIndex: \'ID\',
                            sortable: false,
                            renderer: function(val, obj, row){
                                var out = "<center>";
                                var splitter = false;
                                var format_key = row.data.Format;
                                var item_key = row.data.Data_remote;

                                // if (row.data.Build_url) {
                                //     out += "<a href=\'"+rlUrlHome+"index.php?controller="+controller+"&action=mapping&amp;format="+format_key+"&amp;";
                                //     out += row.data.Build_url+"\'><img class=\'build\'ext:qtip=\'"+lang[\'ext_build\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";
                                // }

                                '; ?>
<?php if ($_GET['field'] != 'sys_dealer_id' && $_GET['field'] != 'sys_lang_codes'): ?><?php echo '
                                if (!row.data.Data_local) {
                                    out += "<img class=\'export\' ext:qtip=\'"+lang[\'xf_copy_mapping_item\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\""+lang[\'xf_copy_mapping_item_confirm\']+"\\", \\"xajax_copyMappingItem\\", \\""+item_key+"\\", \\"section_load\\" )\' />";
                                }
                                '; ?>
<?php endif; ?><?php echo '

                                out += "<img class=\'remove\' ext:qtip=\'"+lang[\'ext_delete\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\""+lang[\'xf_ext_notice_delete_item\']+"\\", \\"xajax_deleteMappingItem\\", \\""+item_key+"\\", \\"section_load\\" )\' />";
                                out += "</center>";

                                return out;
                            }
                        }
                    ]
                });

                xmlItemMappingGrid.init();
                grid.push(xmlItemMappingGrid.grid);

                xmlItemMappingGrid.grid.addListener(\'afteredit\', function(editEvent) {
                    setTimeout(function(){ xmlItemMappingGrid.reload() }, 500);
                });
            });
            '; ?>

        //]]>
        </script>
    <?php endif; ?>
<?php elseif ($_GET['mode'] == 'formats'): ?>
    <div id="grid"></div>
    <script type="text/javascript">//<![CDATA[
    <?php echo '
        var xmlFormatsGrid;

        $(document).ready(function(){
            xmlFormatsGrid = new gridObj({
                key: \'xml_formats\',
                id: \'grid\',
                ajaxUrl: rlPlugins + \'xmlFeeds/admin/xml_feeds.inc.php?q=ext_formats\',
                defaultSortField: \'ID\',
                title: lang[\'ext_xml_formats_manager\'],
                fields: [
                    {name: \'ID\', mapping: \'ID\', type: \'int\'},
                    {name: \'Name\', mapping: \'Name\', type: \'string\'},
                    {name: \'Status\', mapping: \'Status\'},
                    {name: \'Format_for\', mapping: \'Format_for\'},
                    {name: \'Key\', mapping: \'Key\'}
                ],
                columns: [{
                        header: lang[\'ext_name\'],
                        dataIndex: \'Name\',
                        id: \'rlExt_item_bold\',
                        width: 50
                    },{
                        header: \''; ?>
<?php echo $this->_tpl_vars['lang']['xf_format_for']; ?>
<?php echo '\',
                        dataIndex: \'Format_for\',
                        width: 20
                    },{
                        header: lang[\'ext_status\'],
                        dataIndex: \'Status\',
                        width: 20,
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
                        width: 10,
                        fixed: false,
                        dataIndex: \'ID\',
                        sortable: false,
                        renderer: function(val, obj, row){
                            var out = "<center>";
                            var splitter = false;
                            var format_key = row.data.Key;

                            out += "<a href="+rlUrlHome+"index.php?controller="+controller+"&action=mapping&amp;format="+format_key+"><img class=\'build\' ext:qtip=\'"+lang[\'ext_build\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";

                            out += "<a href="+rlUrlHome+"index.php?controller="+controller+"&action=edit_format&amp;format="+format_key+"><img class=\'edit\' ext:qtip=\'"+lang[\'ext_edit\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";
                            out += "<img class=\'remove\' ext:qtip=\'"+lang[\'ext_delete\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\""+lang[\'ext_notice_delete_xml_format\']+"\\", \\"xajax_deleteFormat\\", \\""+format_key+"\\", \\"section_load\\" )\' />";
                            out += "</center>";

                            return out;
                        }
                    }
                ]
            });

            xmlFormatsGrid.init();
            grid.push(xmlFormatsGrid.grid);

        });
        '; ?>

    //]]>
    </script>
<?php elseif ($_GET['action'] == 'export'): ?>

    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <div id="build_url">
        <table class="form" >
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['xf_format']; ?>
</td>
                <td class="field">
                    <select name="format">
                    <option value="0"><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['formats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
                            <option value="<?php echo $this->_tpl_vars['format']['Key']; ?>
" <?php if ($this->_tpl_vars['sPost']['format'] == $this->_tpl_vars['format']['Key']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['format']['Name']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['xf_export_type']; ?>
</td>
            <td class="field">
                <label><input class="lang_add" type="radio" name="export_type" value="one" /> <?php echo $this->_tpl_vars['lang']['xf_etype_one']; ?>
</label>
                <label><input checked="checked" class="lang_add" type="radio" name="export_type" value="all" /> <?php echo $this->_tpl_vars['lang']['xf_etype_all']; ?>
</label>
            </td>
            </tr>
            <?php if (count($this->_tpl_vars['listing_types']) > 1): ?>
            <tr>
                <td class="name">
                    <?php echo $this->_tpl_vars['lang']['listing_type']; ?>

                </td>
                <td class="field">
                    <select name="listing_type" >
                        <option value="0"><?php echo $this->_tpl_vars['lang']['all']; ?>
</option>
                        <?php $_from = $this->_tpl_vars['listing_types']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['ltLoop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['ltLoop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['listing_type']):
        $this->_foreach['ltLoop']['iteration']++;
?>
                            <option value="<?php echo $this->_tpl_vars['listing_type']['Key']; ?>
" <?php if (($this->_foreach['ltLoop']['iteration'] <= 1)): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['listing_type']['name']; ?>
</option>
                        <?php endforeach; endif; unset($_from); ?>
                    </select>
                </td>
            </tr>
            <?php endif; ?>
        </table>

        <div id="user_settings">
            <table class="form">
            <tr>
                <td class="name"><span class="red">*</span><?php echo $this->_tpl_vars['lang']['username']; ?>
</td>
                <td class="field">
                    <input type="text" id="account_id" name="account_id" value="<?php $_from = $this->_tpl_vars['accounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['account']):
?><?php if ($this->_tpl_vars['sPost']['account_id'] == $this->_tpl_vars['account']['ID']): ?><?php echo $this->_tpl_vars['account']['Username']; ?>
<?php endif; ?><?php endforeach; endif; unset($_from); ?>" />

                    <script type="text/javascript">
                        var post_account_id = <?php if ($this->_tpl_vars['sPost']['account_id']): ?><?php echo $this->_tpl_vars['sPost']['account_id']; ?>
<?php else: ?>false<?php endif; ?>;
                        <?php echo '
                            $(\'#account_id\').rlAutoComplete({add_id: false});
                        '; ?>

                    </script>
                </td>
            </tr>
            </table>
        </div>

    <table class="form">
        <tr>
            <td class="name"><?php echo $this->_tpl_vars['lang']['xf_export_limit']; ?>
</td>
            <td class="field">
                <input type="text" class="numeric" value="" name="limit" />
            </td>
        </tr>
        <tr>
            <td class="name">
                <?php echo $this->_tpl_vars['lang']['xf_rewrite_rule']; ?>

            </td>
            <td class="field">
                <input type="hidden" id="actual_rewrite" value="<?php if ($this->_tpl_vars['rewrite']): ?><?php echo (defined('RL_URL_HOME') ? @RL_URL_HOME : null); ?>
<?php echo $this->_tpl_vars['rewrite']; ?>
<?php else: ?><?php echo (defined('RL_PLUGINS_URL') ? @RL_PLUGINS_URL : null); ?>
xmlFeeds/export.php?[format][params]<?php endif; ?>" />
                <input type="hidden" id="rewrited" value="<?php if ($this->_tpl_vars['rewrite']): ?>1<?php else: ?>0<?php endif; ?>" />

                <input value="<?php if ($this->_tpl_vars['rewrite']): ?><?php echo $this->_tpl_vars['rewrite']; ?>
<?php else: ?><?php echo $this->_tpl_vars['default_rewrite']; ?>
<?php endif; ?>" class="w250" name="rewrite" >
                <input style="padding:3px 14px 3px" id="apply_rule" type="button" value="<?php if ($this->_tpl_vars['rewrite']): ?><?php echo $this->_tpl_vars['lang']['xf_htrule_edit']; ?>
<?php else: ?><?php echo $this->_tpl_vars['lang']['xf_htrule_edit']; ?>
<?php endif; ?>" />
                <span class="field_description" class="hide" id="hint">
                    <?php echo $this->_tpl_vars['lang']['xf_rewrite_hint']; ?>

                </span>
            </td>
        </tr>
        <tr>
            <td class="name">
                <?php echo $this->_tpl_vars['lang']['xf_feed_url']; ?>

            </td>
            <td class="field">
                <textarea cols="5" rows="1" style="height:60px" readonly="true" id="out"></textarea>
            </td>
        </tr>
    </table>
    </div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

    <script type="text/javascript">
        <?php echo '
            $(document).ready(function(){
                $(\'input[name=export_type]\').change(function(){
                    handleEType();
                });
                handleEType();

                $(\'#apply_rule\').click(function(){
                    $(\'#apply_rule\').val(\''; ?>
<?php echo $this->_tpl_vars['lang']['loading']; ?>
<?php echo '\');
                    xajax_applyRule( $(\'input[name=rewrite]\').val() );
                });

                $(\'#build_url input,select\').change(function(){
                    if( $(this).attr(\'name\') != \'account_id\' )
                    {
                        buildUrl();
                    }
                });

                $(\'#account_id\').blur(function(){
                    setTimeout(function(){ buildUrl() },100);
                });

                $(\'#out\').click(function(){ $(this).select() });
            });

            var handleEType = function()
            {
                if( $(\'input[name=export_type]:checked\').val() == \'all\' )
                {
                    $(\'#user_settings\').slideUp();
                }else
                {
                    $(\'#user_settings\').slideDown();
                }
            };

            function buildUrl()
            {
                var actual_rewrite = $(\'#actual_rewrite\').val();
                var params = new Array();
                var params_string= \'\';
                var format = false;
                var rewrited = $(\'#rewrited\').val();

                $(\'#build_url input,select\').each(function(){
                    var name = $(this).attr(\'name\');
                    if( name == \'format\' )
                    {
                        format = $(this).val() != 0 && $(this).val() ? $(this).val() : \'\';
                        if( rewrited == 0)
                        {
                            format = \'format=\'+format;
                        }
                    }else if( name == \'account_id\' && $(this).val() && $(\'input[name=export_type]:checked\').val() == \'one\')
                    {
                        params[\'account_id\'] = $(this).val();
                    }
                    else if( $(this).val() && name && name != \'export_type\' && name != \'rewrite\' && name != \'account_id\')
                    {
                        params[ name ] = $(this).val();
                    }
                });

                if( format )
                {
                    var delim = \'&\';

                    if( actual_rewrite.indexOf(\'?\') < 0 )
                    {
                        delim = \'?\';
                    }

                    for( var i in params )
                    {
                        if( typeof(params[i]) != \'function\' )
                        {
                            params_string += delim + i + \'=\' + params[i];
                            delim = \'&\';
                        }
                    }
                    actual_rewrite = actual_rewrite.replace(\'[format]\', format);
                    actual_rewrite = actual_rewrite.replace(\'[params]\', params_string)

                    $(\'#out\').html(actual_rewrite);
                }
            }
        '; ?>

    </script>

<?php else: ?>

    <div id="action_blocks">
        <?php if (! isset ( $_GET['action'] )): ?>
            <!-- filters -->
            <div id="filters" class="hide">
                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_start.tpl') : smarty_modifier_cat($_tmp, 'm_block_start.tpl')), 'smarty_include_vars' => array('block_caption' => $this->_tpl_vars['lang']['filter_by'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

                <table>
                <tr>
                    <td valign="top">
                        <table class="form">
                        <tr>
                            <td class="name w130"><?php echo $this->_tpl_vars['lang']['username']; ?>
</td>
                            <td class="field">
                                <input class="filters" type="text" maxlength="255" id="Account" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="field nowrap">
                                <input type="button" class="button" value="<?php echo $this->_tpl_vars['lang']['filter']; ?>
" id="filter_button" />
                                <input type="button" class="button" value="<?php echo $this->_tpl_vars['lang']['reset']; ?>
" id="reset_filter_button" />
                                <a class="cancel" href="javascript:void(0)" onclick="show('filters')"><?php echo $this->_tpl_vars['lang']['cancel']; ?>
</a>
                            </td>
                        </tr>
                        </table>
                    </td>
                    <td style="width: 50px;"></td>
                    <td valign="top">
                        <table class="form">
                        <tr>
                            <td class="name w130"><?php echo $this->_tpl_vars['lang']['xf_format']; ?>
</td>
                            <td class="field">
                                <select class="filters w200" id="format">
                                    <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
                                    <?php $_from = $this->_tpl_vars['filter_formats']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['format']):
?>
                                        <option value="<?php echo $this->_tpl_vars['format']['Key']; ?>
"><?php echo $this->_tpl_vars['format']['Name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                        </tr>
                        </table>
                    </td>
                </tr>
                </table>

                <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=((is_array($_tmp='blocks')) ? $this->_run_mod_handler('cat', true, $_tmp, (defined('RL_DS') ? @RL_DS : null)) : smarty_modifier_cat($_tmp, (defined('RL_DS') ? @RL_DS : null))))) ? $this->_run_mod_handler('cat', true, $_tmp, 'm_block_end.tpl') : smarty_modifier_cat($_tmp, 'm_block_end.tpl')), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>

            <script type="text/javascript">
            <?php echo '
            var filters = new Array();
            var step = 0;

            $(document).ready(function(){

                if ( readCookie(\'xml_sc\') )
                {
                    $(\'#filters\').show();
                    var cookie_filters = readCookie(\'xml_sc\').split(\',\');

                    for (var i in cookie_filters)
                    {
                        if ( typeof(cookie_filters[i]) == \'string\' )
                        {
                            var item = cookie_filters[i].split(\'||\');
                            $(\'#\'+item[0]).selectOptions(item[1]);
                        }
                    }
                }

                $(\'#filter_button\').click(function(){
                    filters = new Array();
                    write_filters = new Array();

                    createCookie(\'xml_pn\', 0, 1);

                    $(\'.filters\').each(function(){
                        if ($(this).val() != 0) {
                            filters.push(new Array($(this).attr(\'id\'), $(this).val()));
                            write_filters.push($(this).attr(\'id\')+\'||\'+$(this).val());
                        }
                    });

                    // save search criteria
                    createCookie(\'xml_sc\', write_filters, 1);

                    // reload grid
                    xmlFeedsGrid.filters = filters;
                    xmlFeedsGrid.reload();
                });

                $(\'#reset_filter_button\').click(function(){
                    eraseCookie(\'xml_sc\');
                    xmlFeedsGrid.reset();

                    $("#filters select option[value=\'\']").attr(\'selected\', true);
                    $("#filters input[type=text]").val(\'\');
                    $("#Category_ID option").show();
                });

                /* autocomplete js */
                $(\'#Account\').rlAutoComplete();
            });
            '; ?>

            </script>
            <!-- filters end -->
        <?php endif; ?>
    </div>

    <div id="grid"></div>
    <script type="text/javascript">//<![CDATA[
    <?php echo '
        var xmlFeedsGrid;

        /* read cookies filters */
        var cookies_filters = false;

        if ( readCookie(\'xml_sc\') )
            cookies_filters = readCookie(\'xml_sc\').split(\',\');


        $(document).ready(function(){
            xmlFeedsGrid = new gridObj({
                key: \'xml_feeds\',
                id: \'grid\',
                ajaxUrl: rlPlugins + \'xmlFeeds/admin/xml_feeds.inc.php?q=ext_feeds\',
                defaultSortField: \'ID\',
                title: lang[\'ext_xml_feeds_manager\'],
                filters: cookies_filters,
                filtersPrefix: true,
                fields: [
                    {name: \'ID\', mapping: \'ID\', type: \'int\'},
                    {name: \'Name\', mapping: \'Name\', type: \'string\'},
                    {name: \'Status\', mapping: \'Status\'},
                    {name: \'Key\', mapping: \'Key\'},
                    {name: \'account\', mapping: \'account\'},
                    {name: \'Format\', mapping: \'Format\'}
                ],
                columns: [{
                        header: lang[\'ext_name\'],
                        dataIndex: \'Name\',
                        id: \'rlExt_item_bold\',
                        width: 20
                    },{
                        header: lang[\'ext_owner\'],
                        dataIndex: \'account\',
                        width: 20
                    },{
                        header: '; ?>
'<?php echo $this->_tpl_vars['lang']['xf_format']; ?>
'<?php echo ',
                        dataIndex: \'Format\',
                        width: 40
                    },{
                        header: lang[\'ext_status\'],
                        dataIndex: \'Status\',
                        width: 10,
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
                        width: 90,
                        fixed: true,
                        dataIndex: \'ID\',
                        sortable: false,
                        renderer: function(val, obj, row){
                            var out = "<center>";
                            var splitter = false;
                            var feed_key = row.data.Key;

                            out += "<a href="+rlUrlHome+"index.php?controller="+controller+"&action=statistics&amp;feed="+feed_key+"><img class=\'manage\' ext:qtip=\''; ?>
<?php echo $this->_tpl_vars['lang']['xf_statistics']; ?>
<?php echo '\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";
                            out += "<a href="+rlUrlHome+"index.php?controller="+controller+"&action=edit_feed&amp;feed="+feed_key+"><img class=\'edit\' ext:qtip=\'"+lang[\'ext_edit\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' /></a>";
                            out += "<img class=\'remove\' ext:qtip=\'"+lang[\'ext_delete\']+"\' src=\'"+rlUrlHome+"img/blank.gif\' onClick=\'rlConfirm( \\""+lang[\'ext_notice_delete_feed\']+"\\", \\"xajax_deleteFeed\\", \\""+feed_key+"\\", \\"section_load\\" )\' />";
                            out += "</center>";

                            return out;
                        }
                    }
                ]
            });

            xmlFeedsGrid.init();
            grid.push(xmlFeedsGrid.grid);
        });
        '; ?>

    //]]>
    </script>
<?php endif; ?>

<script>
lang['xf_example'] = '<?php echo $this->_tpl_vars['lang']['xf_example']; ?>
';
<?php echo '

$(\'.xpath-sample\').flModal({
    width: 940,
    height: 880,
    caption: lang[\'xf_example\'],
    content: \'<div style="height: 800px"><img style="width: 100%;height: 100%;object-fit: contain;" src="\' + rlPlugins + \'xmlFeeds/static/examples/path-to-field-data.png" /></div>\'
});

'; ?>

</script>