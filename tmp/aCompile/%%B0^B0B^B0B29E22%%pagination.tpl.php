<?php /* Smarty version 2.6.31, created on 2025-10-10 09:28:33
         compiled from /home/gmoplus/public_html/plugins/export_import/admin/pagination.tpl */ ?>
<!-- Export/Import pagination -->

<ul class="grid-pagination" data-type="<?php echo $this->_tpl_vars['type']; ?>
">
    <li>
        <input id="goto-first" type="button" value="&laquo;" />
    </li>
    <li>
        <input id="goto-previous" type="button" value="&lsaquo;" />
    </li>
    <li class="go-to-page">
        <span><?php echo $this->_tpl_vars['lang']['eil_page']; ?>
</span>
        <input class="numeric" id="goto-page" type="text" />
        <span><?php echo $this->_tpl_vars['lang']['of']; ?>
 <?php echo $this->_tpl_vars['grid']['total_pages']; ?>
</span>
    </li>
    <li>
        <input id="goto-next" type="button" value="&rsaquo;" />
    </li>
    <li>
        <input id="goto-last" type="button" value="&raquo;" />
    </li>
</ul>

<!-- Export/Import pagination end -->