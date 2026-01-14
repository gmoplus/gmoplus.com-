<?php /* Smarty version 2.6.31, created on 2025-05-30 21:08:36
         compiled from /home/gmoplus/public_html/plugins/shoppingCart/admin/view/field_form.tpl */ ?>
<!-- shopping cart option -->

<tr id="shc_google_autocomplete_field" <?php if (! $this->_tpl_vars['sPost']['map']): ?>class="hide"<?php endif; ?>>
    <td class="name"><?php echo $this->_tpl_vars['lang']['shc_google_autocomplete_field']; ?>
</td>
    <td class="field">
        <select name="shc_google_autocomplete">
            <option value=""><?php echo $this->_tpl_vars['lang']['select']; ?>
</option>
            <?php $_from = $this->_tpl_vars['shc_google_autocomplete']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                <option <?php if ($this->_tpl_vars['sPost']['google_autocomplete'] == $this->_tpl_vars['item']['key']): ?>selected="selected"<?php endif; ?> value="<?php echo $this->_tpl_vars['item']['key']; ?>
"><?php echo $this->_tpl_vars['item']['name']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
        </select>

        <span class="field_description"><?php echo $this->_tpl_vars['lang']['shc_google_autocomplete_field_notice']; ?>
</span>
    </td>
</tr>

<script class="fl-js-dynamic">
<?php echo '
    $(document).ready(function() {
        $(\'input[name="map"]\').click(function() {
            if ($(this).is(":checked")) {
                $(\'#shc_google_autocomplete_field\').removeClass(\'hide\');
            } else {
                $(\'#shc_google_autocomplete_field\').addClass(\'hide\');
            }
        });    
    });
'; ?>

</script>

<!-- shopping cart option end -->